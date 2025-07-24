<?php
/* Template Name: contact page */get_header();?>
<section class="relative w-full md:h-[200px] flex items-center max-md:py-4">
  <?php $bg = get_field('contact_banner_image'); ?>
  <?php if ($bg): ?>
    <div class="absolute inset-0">
      <img src="<?php echo esc_url($bg['url']); ?>" alt="contact Banner" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-[#01142a8c] bg-opacity-70"></div>
    </div>
  <?php endif; ?>
  <div class="relative z-10 max-w-7xl mx-auto px-4 w-full">
    <h2 class="text-white text-4xl md:text-5xl font-bold mb-4 text-center justify-center">
      <?php the_field('contact_main_heading'); ?>
      <span class="text-[lime-500]"><?php the_field('contact_highlight'); ?></span>
    </h2>
    <div class="flex items-center text-white text-sm font-medium space-x-2 justify-center">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="text-sm font-medium inline-block hover:underline lg:text-base font-medium tracking-[0.8px]">Home</a>
      <span class="font-medium inline-block text-[#bf4b50]">—</span>
      <span class="text-sm font-medium inline-block text-[#bf4b50] lg:text-base font-medium tracking-[0.8px]"><?php the_field('breadcrumb_label_contact'); ?></span>
    </div>
  </div>
</section>

<section class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6">
    <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
      <div class="w-full flex flex-col">
          <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white text-sm lg:text-base font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
            <?php the_field('contact_sec_badge'); ?>
          </span>
          <h2 class="lg:text-3xl md:text-2xl text-xl !leading-normal text-center font-semibold text-[#2a1313] lg:mb-14 mb-8">
            <?php the_field('contact_sec_heading'); ?>
          </h2>
      </div>
      <div class="bg-white flex items-center justify-between rounded-xl lg:py-3 lg:px-3 py-2 px-2 gap-8">
        <div class="bg-[#bf4b50] lg:w-2/5 md:3/5 w-full flex flex-col py-4 px-3 rounded-xl">
          <div class="flex flex-col gap-2">
            <h4 class="lg:text-lg text-white font-semibold"><?php the_field('contact_info_title'); ?></h4>
            <p class="lg:text-base text-sm text-[#dbdbdb]"><?php the_field('contact_main_descritpion'); ?></p>
          </div>
          <div class="flex flex-col gap-1">
            <span class="inline-flex items-center gap-2">
              <svg class="size-5 text-white" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <a href="tel:<?php the_field('contact_num'); ?>" class="text-white text-base font-medium hover:underline">
                <?php the_field('contact_num'); ?>
              </a>
            </span> 
          </div>
        </div>
      </div>
    </div>
</section>

<?php get_footer();?>
