<?php
/* Template Name: about page */
get_header();
?>
<section class="relative w-full h-[300px] md:h-[350px] flex items-center">
  <?php $bg = get_field('about_banner_image'); ?>
  <?php if ($bg): ?>
    <div class="absolute inset-0">
      <img src="<?php echo esc_url($bg['url']); ?>" alt="About Banner" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-[#01142a8c] bg-opacity-70"></div>
    </div>
  <?php endif; ?>

  <div class="relative z-10 max-w-7xl mx-auto px-4 w-full">
    <h2 class="text-white text-4xl md:text-5xl font-bold mb-4">
      <?php the_field('about_main_heading'); ?>
      <span class="text-[lime-500]"><?php the_field('about_highlight'); ?></span>
    </h2>

    <div class="flex items-center text-white text-sm font-medium space-x-2">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:underline">Home</a>
      <span class="font-medium inline-block text-[#bf4b50]">—</span>
      <span class="text-xs font-medium inline-block text-[#bf4b50] lg:text-sm font-medium "><?php the_field('breadcrumb_label'); ?></span>
    </div>
  </div>
</section>

<section class="w-full bg-white relative lg:pb-16 md:py-8 py-6">
  <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <?php for ($i = 1; $i <= 4; $i++): ?>
          <?php
            $image = get_field("person_{$i}_image");
            $name = get_field("person_{$i}_name");
            $position = get_field("person_{$i}_position");
            $organization = get_field("person_{$i}_organization");
          ?>
          <?php if ($image || $name || $position || $organization): ?>
            <div class="text-center">
              <?php if ($image): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($name); ?>" class="rounded-xl w-full h-auto object-cover mb-4" />
              <?php endif; ?>
              <?php if ($name): ?>
                <h3 class="font-semibold text-lg text-[#111827]"><?php echo esc_html($name); ?></h3>
              <?php endif; ?>
              <?php if ($position): ?>
                <p class="text-gray-500 font-semibold"><?php echo esc_html($position); ?></p>
              <?php endif; ?>
              <?php if ($organization): ?>
                <p class="text-gray-500 text-sm"><?php echo esc_html($organization); ?></p>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        <?php endfor; ?>
    </div>
  </div>
</section>


<?php get_footer();?>
