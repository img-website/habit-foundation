jQuery(function ($) {
  $(document).on('submit', '.gdf-form', function (e) {
    e.preventDefault();
    const $form = $(this);
    const data = $form.serialize();
    $form.find('.gdf-message').text('');

    $.post(gdf_vars.ajax_url, data + '&action=gdf_submit_form', function (res) {
      if (res.success) {
        $form.find('.gdf-message').text('Downloading...');
        if (typeof closeGdfPopup === 'function') {
          closeGdfPopup();
        }
        window.location.href = res.data.pdf;
        $form[0].reset();
      } else {
        $form.find('.gdf-message').text(res.data ? res.data : 'Error.');
      }
    });
  });
});
