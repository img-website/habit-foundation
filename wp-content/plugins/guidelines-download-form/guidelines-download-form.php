<?php
/*
Plugin Name: Guidelines Download Form
Description: Provides a shortcode to show a form that sends an email and triggers a PDF download on submit.
Version: 1.0
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue frontend script
function gdf_enqueue_scripts() {
    wp_enqueue_script('gdf-script', plugin_dir_url(__FILE__) . 'gdf-script.js', array('jquery'), '1.0', true);
    wp_localize_script('gdf-script', 'gdf_vars', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'gdf_enqueue_scripts');

// Shortcode to output the form
function gdf_form_shortcode($atts) {
    $atts = shortcode_atts(array(
        'pdf' => '',
    ), $atts, 'guidelines_form');

    ob_start();
    ?>
    <form class="gdf-form" method="post">
        <input type="hidden" name="pdf" value="<?php echo esc_attr($atts['pdf']); ?>" />
        <div>
            <label>Name</label>
            <input type="text" name="gdf_name" required />
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="gdf_email" required />
        </div>
        <button type="submit">Submit</button>
        <div class="gdf-message"></div>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('guidelines_form', 'gdf_form_shortcode');

// Handle AJAX submission
function gdf_handle_form() {
    $name  = isset($_POST['gdf_name']) ? sanitize_text_field($_POST['gdf_name']) : '';
    $email = isset($_POST['gdf_email']) ? sanitize_email($_POST['gdf_email']) : '';
    $pdf   = isset($_POST['pdf']) ? esc_url_raw($_POST['pdf']) : '';

    if (empty($name) || empty($email) || empty($pdf)) {
        wp_send_json_error('Missing field');
    }

    // Send email to site admin
    $admin_email = get_option('admin_email');
    $subject = 'Guidelines form submission';
    $message = "Name: $name\nEmail: $email";
    wp_mail($admin_email, $subject, $message);

    wp_send_json_success(array('pdf' => $pdf));
}
add_action('wp_ajax_gdf_submit_form', 'gdf_handle_form');
add_action('wp_ajax_nopriv_gdf_submit_form', 'gdf_handle_form');
?>
