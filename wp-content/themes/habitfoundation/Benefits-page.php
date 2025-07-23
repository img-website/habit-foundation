<?php
/* Template Name: benefits page */get_header();?>
<section class="relative w-full h-[250px] flex items-center">
  <?php $bg = get_field('benefits_banner_image'); ?>
  <?php if ($bg): ?>
    <div class="absolute inset-0">
      <img src="<?php echo esc_url($bg['url']); ?>" alt="benefits Banner" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-[#01142a8c] bg-opacity-70"></div>
    </div>
  <?php endif; ?>
  <div class="relative z-10 max-w-7xl mx-auto px-4 w-full">
    <h2 class="text-white text-4xl md:text-5xl font-bold mb-4 text-center justify-center">
      <?php the_field('benefits_main_heading'); ?>
      <span class="text-[lime-500]"><?php the_field('benefits_highlight'); ?></span>
    </h2>
    <div class="flex items-center text-white text-sm font-medium space-x-2 justify-center">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="text-sm font-medium inline-block hover:underline lg:text-base font-medium tracking-[0.8px]">Home</a>
      <span class="font-medium inline-block text-[#bf4b50]">—</span>
      <span class="text-sm font-medium inline-block text-[#bf4b50] lg:text-base font-medium tracking-[0.8px]"><?php the_field('breadcrumb_label_benefits'); ?></span>
    </div>
  </div>
</section>

<section class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6  animate-bg-zoom bg-[url(<?php echo get_template_directory_uri(); ?>/assets/img/elevate4.webp)] bg-cover bg-center">
  <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
    <div class="w-full flex flex-col">
        <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white text-sm lg:text-base font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
          <?php the_field('benefits_sec_badge'); ?>
        </span>
        <h2 class="lg:w-9/12 w-full lg:text-3xl md:text-2xl text-xl mx-auto !leading-normal text-center font-semibold text-[#2a1313] lg:mb-10 mb-4">
          <?php the_field('benefits_sec_heading'); ?>
        </h2>
    </div>
    <!-- <div class="w-full relative flex flex-row justify-center lg:gap-12 gap-8">
      <div class="flex items-start flex-col justify-center">
        <h2 class="lg:text-xl text-lg font-semibold text-start flex items-center">
          <span class="text-[#bf4b50] *:size-4 mr-2">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M17.47 250.9C88.82 328.1 158 397.6 224.5 485.5c72.3-143.8 146.3-288.1 268.4-444.37L460 26.06C356.9 135.4 276.8 238.9 207.2 361.9c-48.4-43.6-126.62-105.3-174.38-137z"></path></svg>
          </span> Habit infrastructure
        </h2>
      </div>
      <div class="flex items-start flex-col justify-center gap-3">
        <h2 class="lg:text-xl text-lg font-semibold text-start flex items-center"><span class="text-[#bf4b50] *:size-4 mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M12 2C12.55 6 16 9.45 20 10c-4 .55-7.45 4-8 8-.55-4-4-7.45-8-8 4-.55 7.45-4 8-8z"/></svg></span> Mentor / Industry Expert</h2>
      </div>
      <div class="flex items-start flex-col justify-center gap-3">
        <h2 class="lg:text-xl text-lg font-semibold text-start flex items-center"><span class="text-[#bf4b50] *:size-4 mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M12 2C12.55 6 16 9.45 20 10c-4 .55-7.45 4-8 8-.55-4-4-7.45-8-8 4-.55 7.45-4 8-8z"/></svg></span> Funding / Investors</h2>
      </div>
    </div> -->
      
      <div class="flex items-start flex-col justify-center">
        <h2 class="bg-[#e7e7e7] py-3 px-3 w-full lg:text-lg text-[#bf4b50] text-lg font-semibold text-start flex items-center">
          <span class="text-[#bf4b50] *:size-6 mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor">
            <path d="M12 2C12.55 6 16 9.45 20 10c-4 .55-7.45 4-8 8-.55-4-4-7.45-8-8 4-.55 7.45-4 8-8z"/>
          </svg>
          </span> Habit infrastructure
        </h2>
      </div>
    <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 lg:gap-6 gap-4 py-6">
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('incubation_infra_1_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <!-- <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('incubation_infra_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('incubation_infra_1_description'); ?></p>
          </div> -->
      </div>
        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('incubation_infra_2_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <!-- <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('incubation_infra_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('incubation_infra_1_description'); ?></p>
          </div> -->
      </div>
        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('incubation_infra_3_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <!-- <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('incubation_infra_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('incubation_infra_1_description'); ?></p>
          </div> -->
      </div>
        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('incubation_infra_4_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <!-- <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('incubation_infra_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('incubation_infra_1_description'); ?></p>
          </div> -->
      </div>
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('incubation_infra_5_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <!-- <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('incubation_infra_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('incubation_infra_1_description'); ?></p>
          </div> -->
      </div>
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('incubation_infra_6_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <!-- <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('incubation_infra_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('incubation_infra_1_description'); ?></p>
          </div> -->
      </div>
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('incubation_infra_7_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <!-- <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('incubation_infra_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('incubation_infra_1_description'); ?></p>
          </div> -->
      </div>
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('incubation_infra_8_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <!-- <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('incubation_infra_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('incubation_infra_1_description'); ?></p>
          </div> -->
      </div>
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('incubation_infra_9_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <!-- <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('incubation_infra_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('incubation_infra_1_description'); ?></p>
          </div> -->
      </div>
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('incubation_infra_10_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <!-- <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('incubation_infra_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('incubation_infra_1_description'); ?></p>
          </div> -->
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
