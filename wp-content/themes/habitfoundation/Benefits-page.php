<?php
/* Template Name: benefits page */get_header();?>
<section class="relative w-full md:h-[200px] flex items-center max-md:py-4">
  <?php $bg = get_field('benefits_banner_image'); ?>
  <?php if ($bg): ?>
    <div class="absolute inset-0">
      <img src="<?php echo esc_url($bg['url']); ?>" alt="benefits Banner" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-[#01142a8c] bg-opacity-70"></div>
    </div>
  <?php endif; ?>
  <div class="relative z-10 max-w-7xl mx-auto px-4 w-full">
    <h2 class="text-white text-2xl sm:text-3xl  md:text-5xl font-bold lg:mb-4 mb-2 text-center justify-center">
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

<section class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6 animate-bg-zoom bg-[url(<?php echo get_template_directory_uri(); ?>/assets/img/elevate4.webp)] bg-cover bg-center">
  <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
    <div class="w-full flex flex-col">
        <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
          <?php the_field('benefits_sec_badge'); ?>
        </span>
        <h2 class="lg:w-9/12 w-full lg:text-3xl md:text-2xl text-xl mx-auto !leading-normal text-center font-semibold text-[#2a1313] lg:mb-10 mb-4">
          <?php the_field('benefits_sec_heading'); ?>
        </h2>
    </div>
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

<section class="w-full bg-white relative lg:py-16 md:py-8 py-6 animate-bg-zoom bg-[url(<?php echo get_template_directory_uri(); ?>/assets/img/elevate4.webp)] bg-cover bg-center">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="w-full flex flex-col">
            <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
              <?php the_field('benefit_badge_2'); ?>
            </span>
            <h2
                class="w-full lg:text-2xl md:text-xl text-lg mx-auto !leading-normal text-center font-semibold mx-auto text-[#2a1313] lg:mb-6 mb-4">
                <?php the_field('benefit_title_2'); ?>
            </h2>
        </div>
      <div class="w-full flex flex-col items-start mx-auto group lg:mt-6 mt-3 lg:gap-6 gap-4">
            <div class="w-full overflow-x-auto">
                <ul class="flex flex-nowrap justify-center gap-3 w-max min-w-full py-2 px-2 lg:px-0">
                    <li class="group/benefit">
                        <label for="benefit1"
                            class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-7 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit1:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <span class="lg:size-6 size-4 *:!size-full inline-block me-3">
                                  <svg class="!text-[#545454] group-has-[#benefit1:checked]:!text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M19 12h3L12 3 2 12h3v3H3v2h2v3h2v-3h4v3h2v-3h4v3h2v-3h2v-2h-2v-3zM7 15v-4.81l4-3.6V15H7zm6 0V6.59l4 3.6V15h-4z"></path></svg>
                                </span>
                                <div class="flex flex-col">
                                <div
                                    class="text-[#343434] group-has-[#benefit1:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('benefit_top_heading_1'); ?>
                                </div>
                                <!-- <p class="group-has-[#benefit1:checked]:!text-white text-[#838080] text-[13px] !leading-6 font-normal lg:w-4/5">Spaces that bring bold ideas and missions to life.</p> -->
                                </div>
                            </div>
                        </label>
                    </li>

                    <li class="group/benefit">
                        <label for="benefit2"
                            class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-7 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit2:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <span class="lg:size-6 size-4 *:!size-full inline-block me-3">
                                    <svg class="!text-[#545454] group-has-[#benefit2:checked]:!text-white"
                                        stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                        stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                        <path d="M8 14h.01"></path>
                                        <path d="M12 14h.01"></path>
                                        <path d="M16 14h.01"></path>
                                        <path d="M8 18h.01"></path>
                                        <path d="M12 18h.01"></path>
                                        <path d="M16 18h.01"></path>
                                    </svg>
                                </span>
                                <div class="flex flex-col">
                                <div
                                    class="text-[#343434] group-has-[#benefit2:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('benefit_top_heading_2'); ?>
                                </div>
                                <!-- <p class="group-has-[#benefit2:checked]:!text-white text-[#838080] text-[13px] !leading-6 font-normal lg:w-4/5">Guiding every step with expert mentorship and insight.</p> -->
                                </div>
                            </div>
                        </label>
                    </li>

                    <li class="group/benefit">
                        <label for="benefit3"
                            class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-7 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit3:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <span class="lg:size-6 size-4 *:!size-full inline-block me-3">
                                    <svg class="!text-[#545454] group-has-[#benefit3:checked]:!text-white"
                                        stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.2 3.2.8-1.3-4.5-2.7V7z">
                                        </path>
                                    </svg>
                                </span>
                                <div class="flex flex-col">
                                <div
                                    class="text-[#343434] group-has-[#benefit3:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('benefit_top_heading_3'); ?>
                                </div>
                                <!-- <p class="group-has-[#benefit2:checked]:!text-white text-[#838080] text-[13px] !leading-6 font-normal lg:w-4/5">Access capital to turn bold ideas into reality.</p> -->
                                </div>
                            </div>

                        </label>
                    </li>

                    <li class="group/benefit">
                        <label for="benefit4"
                            class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-7 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit4:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <span class="lg:size-6 size-4 *:!size-full inline-block me-3">
                                    <svg class="!text-[#545454] group-has-[#benefit4:checked]:!text-white" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                </span>
                                <div class="flex flex-col">
                                <div
                                    class="text-[#343434] group-has-[#benefit4:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('benefit_top_heading_4'); ?>
                                </div>
                                <!-- <p class="group-has-[#benefit4:checked]:!text-white text-[#838080] text-[13px] !leading-6 font-normal lg:w-4/5">Essential tools and services for impactful progress.</p> -->
                                </div>
                            </div>

                        </label>
                    </li>

                    <li class="group/benefit">
                        <label for="benefit5"
                            class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-7 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit5:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <span class="lg:size-6 size-4 *:!size-full inline-block me-3">
                                    <svg class="!text-[#545454] group-has-[#benefit5:checked]:!text-white" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M11 20h-6a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7"></path><path d="M15 19l2 2l4 -4"></path><path d="M9 17h2.5"></path></svg>
                                </span>
                                <div class="flex flex-col">
                                <div
                                    class="text-[#343434] group-has-[#benefit5:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('benefit_top_heading_5'); ?>
                                </div>
                                <!-- <p class="group-has-[#benefit5:checked]:!text-white text-[#838080] text-[13px] !leading-6 font-normal lg:w-4/5">Empowering coders to build, innovate, and scale solutions.</p> -->
                                </div>
                            </div>

                        </label>
                    </li>

                </ul>
            </div>
            <div class="content-sec w-full flex flex-col justify-center">
                <div class="block">
                    <input type="radio" name="benefit" id="benefit1" class="hidden peer" checked="">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        <div class="w-full benefit-tabs">
                            <div class="w-full mt-5">
                                <div class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('benefit_title_1'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('benefit_description_1'); ?>
                                        </p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3 grid-cols-1 gap-2">
                                        <?php $img1 = get_field('benefit_image_1'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[376px] lg:h-[250px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
                                                style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                            </div>
                                            <!-- Foreground image -->
                                            <img 
                                                src="<?php echo esc_url($img1['url']); ?>" 
                                                alt="<?php the_field('benefit_title_1'); ?>" 
                                                title="<?php the_field('benefit_title_1'); ?>" 
                                                width="373" 
                                                height="240"
                                                class="relative z-10 w-full aspect-[361/240] h-auto rounded-md shadow object-contain object-top"
                                            >
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_2'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_1'); ?>"
                                                title="<?php the_field('benefit_title_1'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_3'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_1'); ?>"
                                                title="<?php the_field('benefit_title_1'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <!-- <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('benefit_sub_heading_1'); ?></span> -->
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('event_title_2'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('event_description_2'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3 grid-cols-1 gap-2">
                                        <?php $img1 = get_field('event_image_4'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[376px] lg:h-[240px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
                                                style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                            </div>
                                            <!-- Foreground image -->
                                            <img 
                                                src="<?php echo esc_url($img1['url']); ?>" 
                                                alt="<?php the_field('event_title_2'); ?>" 
                                                title="<?php the_field('event_title_2'); ?>" 
                                                width="373" 
                                                height="240"
                                                class="relative z-10 w-full aspect-[361/240] h-auto rounded-md shadow object-contain object-top"
                                            >
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_5'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_2'); ?>"
                                                title="<?php the_field('event_title_2'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_6'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_2'); ?>"
                                                title="<?php the_field('event_title_2'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <!-- <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_1'); ?></span> -->
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('event_title_3'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('event_description_3'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_8'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[376px] lg:h-[250px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
                                                style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                            </div>
                                            <!-- Foreground image -->
                                            <img 
                                                src="<?php echo esc_url($img1['url']); ?>" 
                                                alt="<?php the_field('event_title_3'); ?>" 
                                                title="<?php the_field('event_title_3'); ?>" 
                                                width="373" 
                                                height="240"
                                                class="relative z-10 w-full aspect-[361/240] h-auto rounded-md shadow object-contain object-top"
                                            >
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_9'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_3'); ?>"
                                                title="<?php the_field('event_title_3'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_10'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_3'); ?>"
                                                title="<?php the_field('event_title_3'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <!-- <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_1'); ?></span> -->
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('event_title_4'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('event_description_4'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_11'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_4'); ?>"
                                                title="<?php the_field('event_title_4'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md inset-0 backdrop-blur-md bg-[#000000]">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('event_image_12'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_4'); ?>"
                                                title="<?php the_field('event_title_4'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_13'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_4'); ?>"
                                                title="<?php the_field('event_title_4'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <!-- <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_1'); ?></span> -->
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('event_title_5'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('event_description_5'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_14'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_5'); ?>"
                                                title="<?php the_field('event_title_5'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md inset-0 backdrop-blur-md bg-[#000000]">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('event_image_15'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_5'); ?>"
                                                title="<?php the_field('event_title_5'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_16'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_5'); ?>"
                                                title="<?php the_field('event_title_5'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('event_title_6'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('event_description_6'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_17'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_6'); ?>"
                                                title="<?php the_field('event_title_6'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md inset-0 backdrop-blur-md bg-[#000000]">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_18'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_6'); ?>"
                                                title="<?php the_field('event_title_6'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_19'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_6'); ?>"
                                                title="<?php the_field('event_title_6'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second tab  -->
                <div class="block">
                    <input type="radio" name="benefit" id="benefit2" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        <div class="w-full benefit-tabs2">
                            <!-- tab content -->
                            <div class="w-full mt-5" id="orientation-tab">
                                <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('benefit_sub_heading_2'); ?></span>
                                        <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('benefit_title_7'); ?></h4>
                                        <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('benefit_description_7'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
                                        <?php $img1 = get_field('benefit_image_20'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[284px] lg:h-[190px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
                                                style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                            </div>
                                            <!-- Foreground image -->
                                            <img 
                                                src="<?php echo esc_url($img1['url']); ?>" 
                                                alt="<?php the_field('benefit_title_7'); ?>" 
                                                title="<?php the_field('benefit_title_7'); ?>" 
                                                width="284" 
                                                height="188"
                                                class="relative z-10 w-full aspect-[284/188] h-auto rounded-md shadow object-contain object-top"
                                            >
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('benefit_image_21'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_7'); ?>"
                                                title="<?php the_field('benefit_title_7'); ?>" width="284" height="188"
                                                class="w-full rounded-md shadow aspect-[284/188] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('benefit_image_22'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_7'); ?>"
                                                title="<?php the_field('benefit_title_7'); ?>" width="284" height="188"
                                                class="w-full rounded-md shadow aspect-[284/188] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_23'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_7'); ?>"
                                                title="<?php the_field('benefit_title_7'); ?>" width="284" height="188"
                                                class="w-full rounded-md shadow aspect-[284/188] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- third tab -->
                <div class="block">
                    <input type="radio" name="benefit" id="benefit3" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap">
                            <div class="w-full flex flex-wrap">
                            <button
                                class="design-tab-btn text-base lg:text-lg font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]"
                                data-tab="design-tab">Vesic Hackathon</button>
                            </div>
                            
                    </div>
                </div>
                <div class="block">
                    <input type="radio" name="benefit" id="benefit4" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap">
                        <div class="w-full flex flex-wrap">
                            <button
                                class="design-tab-btn text-base lg:text-lg font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]"
                                data-tab="design-tab">BASIC</button>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <input type="radio" name="benefit" id="benefit5" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap">
                        <div
                                class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                <div class="flex flex-col gap-y-1 my-4">
                                    <span
                                        class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('benefit_sub_heading_3'); ?></span>
                                    <h4
                                        class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                        <?php the_field('benefit_title_8'); ?></h4>
                                    <p
                                        class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                        <?php the_field('benefit_description_8'); ?></p>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
                                        <?php $img1 = get_field('benefit_image_24'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[284px] lg:h-[190px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
                                                style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                            </div>
                                            <!-- Foreground image -->
                                            <img 
                                                src="<?php echo esc_url($img1['url']); ?>" 
                                                alt="<?php the_field('benefit_title_8'); ?>" 
                                                title="<?php the_field('benefit_title_8'); ?>" 
                                                width="284" 
                                                height="240"
                                                class="relative z-10 w-full aspect-[284/188] h-auto rounded-md shadow object-contain object-top"
                                            >
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('benefit_image_25'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_8'); ?>"
                                                title="<?php the_field('benefit_title_8'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('benefit_image_26'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_8'); ?>"
                                                title="<?php the_field('benefit_title_8'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('benefit_image_27'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_8'); ?>"
                                                title="<?php the_field('benefit_title_8'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="block">
                    <input type="radio" name="benefit" id="benefit6" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap">
                        <div class="w-full flex flex-wrap">
                            <button
                            class="design-tab-btn text-base lg:text-lg font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]"
                            data-tab="design-tab">Vescop</button>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
</section>

<?php get_footer();?>
