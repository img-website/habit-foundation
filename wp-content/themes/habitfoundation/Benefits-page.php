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

<section class="w-full bg-white relative lg:py-16 md:py-8 py-6 animate-bg-zoom bg-[url(<?php echo get_template_directory_uri(); ?>/assets/img/elevate4.webp)] bg-cover bg-center">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="w-full flex flex-col">
            <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
              <?php the_field('benefits_badge'); ?>
            </span>
            <h2
                class="w-full lg:text-2xl md:text-xl text-lg mx-auto !leading-normal text-center font-semibold mx-auto text-[#2a1313] lg:mb-6 mb-4">
                <?php the_field('benefits_title'); ?>
            </h2>
        </div>
        <div class="w-full flex flex-col mx-auto group mt-6 lg:gap-6 gap-4">
            <ul class="flex flex-wrap justify-center gap-3">
                <li class="group/benefit">
                    <label for="benefit1" class="cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-7 py-3 px-5 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50] group-has-[#benefit1:checked]:!bg-[#bf4b50]">
                      <div class="flex items-center lg:gap-2 gap-1">
                        <span class="size-5 *:!size-full inline-block">
                                <svg class="!text-[#bf4b50] group-has-[#benefit1:checked]:!text-white"
                                    stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                    stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                    <path d="m9 16 2 2 4-4"></path>
                                </svg>
                        </span>
                        <div class="text-[#bf4b50] group-has-[#benefit1:checked]:!text-white font-semibold tracking-[0.5px] lg:text-base xs:text-[13px] sm:text-sm">
                          <?php the_field('benefit_top_heading_1'); ?>
                        </div>
                      </div>
                    </label>
                </li>

                <li class="group/benefit">
                    <label for="benefit3"
                        class="cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-7 py-3 px-5 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50]  group-has-[#benefit3:checked]:!bg-[#bf4b50]">
                        <div class="flex items-center lg:gap-2 gap-1">
                            <span class="size-5 *:!size-full inline-block ">
                                <svg class="!text-[#bf4b50] group-has-[#benefit3:checked]:!text-white"
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
                            <div
                                class="text-[#bf4b50] group-has-[#benefit3:checked]:!text-white font-semibold tracking-[0.5px] lg:text-base xs:text-[13px] sm:text-sm">
                                <?php the_field('benefit_top_heading_2'); ?>
                            </div>
                        </div>
                    </label>
                </li>
                <li class="group/benefit">
                    <label for="benefit3"
                        class="cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-7 py-3 px-5 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50]  group-has-[#benefit3:checked]:!bg-[#bf4b50]">
                        <div class="flex items-center lg:gap-2 gap-1">
                            <span class="size-5 *:!size-full inline-block ">
                                <svg class="!text-[#bf4b50] group-has-[#benefit3:checked]:!text-white"
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
                            <div
                                class="text-[#bf4b50] group-has-[#benefit3:checked]:!text-white font-semibold tracking-[0.5px] lg:text-base xs:text-[13px] sm:text-sm">
                                <?php the_field('benefit_top_heading_3'); ?>
                            </div>
                        </div>
                    </label>
                </li>
            </ul>
            <div class="content-sec w-full">
                <div class="block">
                    <input type="radio" name="benefit" id="benefit1" class="hidden peer" checked="">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                      <div class="w-full benefit-tabs">
                            <div class="w-full mt-5">
                            <div class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                    <span
                                        class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('benefit_sub_heading_4'); ?></span>
                                    <h4
                                        class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                        <?php the_field('benefit_title_1'); ?></h4>
                                    <p
                                        class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                    <?php the_field('benefit_description_1'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
                                        <?php $img1 = get_field('benefit_image_1'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[383px] lg:h-[324px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
                                                style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                            </div>
                                            <!-- Foreground image -->
                                            <img 
                                                src="<?php echo esc_url($img1['url']); ?>" 
                                                alt="<?php the_field('benefit_title_1'); ?>" 
                                                title="<?php the_field('benefit_title_1'); ?>" 
                                                width="284" 
                                                height="188"
                                                class="relative z-10 w-full aspect-[284/240] h-auto rounded-md shadow object-contain object-top"
                                            >
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('benefit_image_2'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_1'); ?>"
                                                title="<?php the_field('benefit_title_1'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_3'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
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
                                        <span
                                            class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('benefit_sub_heading_4'); ?></span>
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('benefit_title_2'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('benefit_description_2'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
                                        <?php $img1 = get_field('benefit_image_4'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[383px] lg:h-[324px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
                                                style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                            </div>
                                            <!-- Foreground image -->
                                            <img 
                                                src="<?php echo esc_url($img1['url']); ?>" 
                                                alt="<?php the_field('benefit_title_2'); ?>" 
                                                title="<?php the_field('benefit_title_2'); ?>" 
                                                width="284" 
                                                height="188"
                                                class="relative z-10 w-full aspect-[284/240] h-auto rounded-md shadow object-contain object-top"
                                            >
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_5'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_2'); ?>"
                                                title="<?php the_field('benefit_title_2'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_6'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_2'); ?>"
                                                title="<?php the_field('benefit_title_2'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                            </div>
                            <div
                                    class="w-full h-full flex lg:flex-row bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="lg:w-4/5 w-full h-full flex items-center">
                                        <div class="flex flex-col gap-y-1 my-4">
                                            <span
                                                class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('benefit_sub_heading_4'); ?></span>
                                            <h4
                                                class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                                <?php the_field('benefit_title_11'); ?></h4>
                                            <p
                                                class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                <?php the_field('benefit_description_11'); ?></p>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/5 w-full h-full flex items-end">
                                        <?php $img1 = get_field('benefit_image_34'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_11'); ?>"
                                                title="<?php the_field('benefit_title_11'); ?>" width="473" height="440"
                                                class="w-full rounded-md shadow aspect-[361/440] h-auto object-contain object-top rounded-md">
                                        </div>
                                    </div>
                            </div>
                            <div
                                class="w-full h-full flex lg:flex-row bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="lg:w-4/5 w-full h-full flex items-center">
                                        <div class="flex flex-col gap-y-1 my-4">
                                            <span
                                                class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('benefit_sub_heading_4'); ?></span>
                                            <h4
                                                class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                                <?php the_field('benefit_title_12'); ?></h4>
                                            <p
                                                class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                <?php the_field('benefit_description_12'); ?></p>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/5 w-full h-full flex items-end">
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_35'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_12'); ?>"
                                                title="<?php the_field('benefit_title_12'); ?>" width="473" height="440"
                                                class="w-full rounded-md shadow aspect-[361/440] h-auto object-contain object-top rounded-md">
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
                                        <span
                                            class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('benefit_sub_heading_5'); ?></span>
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('benefit_title_13'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('benefit_description_13'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
                                        <?php $img1 = get_field('benefit_image_36'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[284px] lg:h-[190px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
                                                style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                            </div>
                                            <!-- Foreground image -->
                                            <img 
                                                src="<?php echo esc_url($img1['url']); ?>" 
                                                alt="<?php the_field('benefit_title_13'); ?>" 
                                                title="<?php the_field('benefit_title_13'); ?>" 
                                                width="284" 
                                                height="188"
                                                class="relative z-10 w-full aspect-[284/188] h-auto rounded-md shadow object-contain object-top"
                                            >
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_37'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_13'); ?>"
                                                title="<?php the_field('benefit_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('benefit_image_38'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_13'); ?>"
                                                title="<?php the_field('benefit_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_39'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_13'); ?>"
                                                title="<?php the_field('benefit_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- third tab  -->
                <div class="block">
                    <input type="radio" name="benefit" id="benefit3" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        <div class="w-full benefit-tabs2">
                            <!-- tab content -->
                            <div class="w-full mt-5" id="orientation-tab">
                                <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <span
                                            class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('benefit_sub_heading_5'); ?></span>
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('benefit_title_13'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('benefit_description_13'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
                                        <?php $img1 = get_field('benefit_image_36'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[284px] lg:h-[190px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
                                                style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                            </div>
                                            <!-- Foreground image -->
                                            <img 
                                                src="<?php echo esc_url($img1['url']); ?>" 
                                                alt="<?php the_field('benefit_title_13'); ?>" 
                                                title="<?php the_field('benefit_title_13'); ?>" 
                                                width="284" 
                                                height="188"
                                                class="relative z-10 w-full aspect-[284/188] h-auto rounded-md shadow object-contain object-top"
                                            >
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_37'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_13'); ?>"
                                                title="<?php the_field('benefit_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('benefit_image_38'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_13'); ?>"
                                                title="<?php the_field('benefit_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('benefit_image_39'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('benefit_title_13'); ?>"
                                                title="<?php the_field('benefit_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
