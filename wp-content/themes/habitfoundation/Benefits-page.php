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
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="w-full flex flex-col">
            <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
                <?php the_field('benefits_sec_badge'); ?>
            </span>
            <h2 class="lg:w-9/12 w-full lg:text-3xl md:text-2xl text-xl mx-auto !leading-normal text-center font-semibold text-[#2a1313]">
                <?php the_field('benefits_sec_heading'); ?>
            </h2>
        </div>
        <div class="w-full flex flex-col items-start mx-auto group lg:mt-6 mt-3 lg:gap-6 gap-4">
            <div class="w-full overflow-x-auto">
                    <ul class="flex flex-nowrap justify-center gap-3 w-max min-w-full py-2 px-2 lg:px-0">
                        <li class="group/benefit">
                            <label for="benefit1"
                                class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-[2.5rem] sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit1:checked]:!bg-[#bf4b50]">
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
                                class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-[2.5rem] sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit2:checked]:!bg-[#bf4b50]">
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
                                class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-[2.5rem] sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit3:checked]:!bg-[#bf4b50]">
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
                                class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-[2.5rem] sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit4:checked]:!bg-[#bf4b50]">
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
                                class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-[2.5rem] sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit5:checked]:!bg-[#bf4b50]">
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
                        <div class="hero-section w-full swiper benefitSwiper h-full rounded-3xl swiper-initialized swiper-horizontal swiper-backface-hidden"
                                    data-swiper="{
                                        slidesPerView: 1,
                                        spaceBetween: 0,
                                        speed: 3000,
                                        loop: true,
                                        keyboard: {enabled: true},
                                        pagination: {
                                            clickable: true,
                                            el: .swiper-pagination
                                        },
                                        navigation: {
                                            nextEl: .next,
                                            prevEl: .prev
                                        }
                                    }">
                                        <div class="swiper-wrapper relative">
                                            <div class="swiper-slide relative flex flex-col justify-between items-stretch bg-white rounded-3xl xl:p-6 md:p-3 py-2 px-2 gap-y-3">
                                                <div class="flex flex-col items-center gap-2">
                                                        <div class="flex items-center justify-center lg:py-8 py-6">
                                                        <?php $img1 = get_field('incubation_infra_2_image'); ?>
                                                        <?php if ($img1): ?>
                                                        <div class="py-2 px-2 w-full">
                                                            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full w-full aspect-[1120/579] h-auto object-cover object-top rounded-md">
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide relative flex flex-col justify-between items-stretch bg-white rounded-3xl xl:p-6 md:p-3 py-2 px-2 gap-y-3"> 
                                                <div class="flex flex-col items-center gap-2">
                                                    <div class="flex items-center justify-center lg:py-8 py-6">
                                                        <?php $img1 = get_field('incubation_infra_3_image'); ?>
                                                        <?php if ($img1): ?>
                                                        <div class="py-2 px-2 w-full">
                                                            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full w-full aspect-[1120/579] h-auto object-cover object-top rounded-md">
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide relative flex flex-col justify-between items-stretch bg-white rounded-3xl xl:p-6 md:p-3 py-2 px-2 gap-y-3">
                                                <div class="flex flex-col items-center gap-2">
                                                    <div class="flex items-center justify-center lg:py-8 py-6">
                                                        <?php $img1 = get_field('incubation_infra_4_image'); ?>
                                                        <?php if ($img1): ?>
                                                        <div class="py-2 px-2 w-full">
                                                            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full w-full aspect-[1120/579] h-auto object-cover object-top rounded-md">
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide relative flex flex-col justify-between items-stretch bg-white rounded-3xl xl:p-6 md:p-3 py-2 px-2 gap-y-3">
                                                <div class="flex flex-col items-center gap-2">
                                                    <div class="flex items-center justify-center">
                                                        <?php $img1 = get_field('incubation_infra_5_image'); ?>
                                                        <?php if ($img1): ?>
                                                        <div class="py-2 px-2 w-full">
                                                            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full w-full aspect-[1120/579] h-auto object-cover object-top rounded-md">
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide relative flex flex-col justify-between items-stretch bg-white rounded-3xl xl:p-6 md:p-3 py-2 px-2 gap-y-3">
                                                <div class="flex flex-col items-center gap-2">
                                                    <div class="flex items-center justify-center">
                                                        <?php $img1 = get_field('incubation_infra_6_image'); ?>
                                                        <?php if ($img1): ?>
                                                        <div class="py-2 px-2 w-full">
                                                            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full w-full aspect-[1120/579] h-auto object-cover object-top rounded-md">
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide relative flex flex-col justify-between items-stretch bg-white rounded-3xl xl:p-6 md:p-3 py-2 px-2 gap-y-3">
                                                <div class="flex flex-col items-center gap-2">
                                                    <div class="flex items-center justify-center">
                                                        <?php $img1 = get_field('incubation_infra_6_image'); ?>
                                                        <?php if ($img1): ?>
                                                        <div class="py-2 px-2 w-full">
                                                            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full w-full aspect-[1120/579] h-auto object-cover object-top rounded-md">
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide relative flex flex-col justify-between items-stretch bg-white rounded-3xl xl:p-6 md:p-3 py-2 px-2 gap-y-3">
                                                <div class="flex flex-col items-center gap-2">
                                                    <div class="flex items-center justify-center">
                                                        <?php $img1 = get_field('incubation_infra_6_image'); ?>
                                                        <?php if ($img1): ?>
                                                        <div class="py-2 px-2 w-full">
                                                            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="257" height="171" class="size-full w-full aspect-[1120/579] h-auto object-cover object-top rounded-md">
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="inline-flex items-center justify-between absolute inset-x-0 top-1/2 z-10">
                                            <div class="swiper-prev bg-gradient-to-b from-[#201f1f] to-[#767676] inline-flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-lg cursor-pointer ">
                                                <svg class="w-5 h-5 text-gray-100" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L8.414 11l4.293 4.293a1 1 0 01-1.414 1.414l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <div class="swiper-next bg-gradient-to-b from-[#201f1f] to-[#767676] inline-flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-lg cursor-pointer rotate-180">
                                                <svg class="w-5 h-5 text-gray-100" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L8.414 11l4.293 4.293a1 1 0 01-1.414 1.414l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                        </div>
                        <div class="w-full flex flex-col justify-center items-center gap-4 mx-auto mt-6">
                            <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
                            <?php the_field('benefit_badge_2'); ?>
                            </span>
                            <h2
                                class="w-full lg:text-2xl md:text-xl text-lg mx-auto !leading-normal text-center font-semibold mx-auto text-[#2a1313] lg:mb-6 mb-4">
                                <?php the_field('benefit_title_2'); ?>
                            </h2>
                        </div>
                        <div class="w-full flex flex-col justify-center items-center gap-4">
                            <h2 class="lg:text-3xl md:text-2xl text-xl tracking-[-0.04em] text-black text-balance first:*:font-normal
                                last:*:font-bold lg:pb-6 pb-3">
                                <span class="font-normal">Management </span><span class="font-bold"> Infrastructure</span>
                            </h2>
                            <div class="grid grid-cols-2 md:grid-3 lg:grid-cols-3 items-start lg:gap-6 gap-4 h-auto w-full">
                                <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                    <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-5 md:gap-10 w-full">

                                        <div class="flex items-center">
                                            <?php $img1 = get_field('infra_top_image1'); ?>
                                            <?php if ($img1): ?>
                                                <div class="w-full flex justify-center">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('infra_title1'); ?>"
                                                        title="<?php the_field('infra_title1'); ?>" width="357" height="230"
                                                        class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md ">
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-col gap-3 md:gap-4">
                                                <!-- Title -->
                                                <div class="relative text-lg md:text-xl font-semibold transition-all duration-500 before:absolute before:top-[15px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                    <?php the_field('infra_title1'); ?>
                                                </div>

                                                <!-- Description -->
                                                <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                    <?php the_field('infra_description1'); ?>
                                                </div>
                                            </div>

                                                <!-- Explore More Link -->
                                            <div>
                                            <a href="<?php the_field('explore_link'); ?>" class="inline-flex items-center gap-2 group">
                                                <div class="text-[16px] md:text-[18px] text-[#f48120] font-medium font-primary group-hover:text-black transition-all duration-300">
                                                <?php the_field('explore_text'); ?>
                                                </div>
                                                <div>
                                                <img src="<?php the_field('explore_icon'); ?>" alt="">
                                                </div>
                                            </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                    <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-5 md:gap-10 w-full">

                                        <div class="flex items-center">
                                            <?php $img1 = get_field('infra_top_image2'); ?>
                                            <?php if ($img1): ?>
                                                <div class="w-full flex justify-center">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('infra_title2'); ?>"
                                                        title="<?php the_field('infra_title2'); ?>" width="357" height="230"
                                                        class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md ">
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-col gap-3 md:gap-4">
                                                <!-- Title -->
                                                <div class="relative text-lg md:text-xl font-semibold transition-all duration-500 before:absolute before:top-[15px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                    <?php the_field('infra_title2'); ?>
                                                </div>

                                                <!-- Description -->
                                                <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                    <?php the_field('infra_description2'); ?>
                                                </div>
                                            </div>

                                                <!-- Explore More Link -->
                                            <div>
                                            <a href="<?php the_field('explore_link'); ?>" class="inline-flex items-center gap-2 group">
                                                <div class="text-[16px] md:text-[18px] text-[#f48120] font-medium font-primary group-hover:text-black transition-all duration-300">
                                                <?php the_field('explore_text'); ?>
                                                </div>
                                                <div>
                                                <img src="<?php the_field('explore_icon'); ?>" alt="">
                                                </div>
                                            </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                    <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl shadow-md gap-5 md:gap-10 w-full">

                                        <div class="flex items-center">
                                            <?php $img1 = get_field('infra_top_image3'); ?>
                                            <?php if ($img1): ?>
                                                <div class="w-full flex justify-center">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('infra_title3'); ?>"
                                                        title="<?php the_field('infra_title3'); ?>" width="357" height="230"
                                                        class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md ">
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-col gap-3 md:gap-4">
                                                <!-- Title -->
                                                <div class="relative text-lg md:text-xl font-semibold transition-all duration-500 before:absolute before:top-[15px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                    <?php the_field('infra_title3'); ?>
                                                </div>

                                                <!-- Description -->
                                                <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                    <?php the_field('infra_description3'); ?>
                                                </div>
                                            </div>

                                                <!-- Explore More Link -->
                                            <div>
                                            <a href="<?php the_field('explore_link'); ?>" class="inline-flex items-center gap-2 group">
                                                <div class="text-[16px] md:text-[18px] text-[#f48120] font-medium font-primary group-hover:text-black transition-all duration-300">
                                                <?php the_field('explore_text'); ?>
                                                </div>
                                                <div>
                                                <img src="<?php the_field('explore_icon'); ?>" alt="">
                                                </div>
                                            </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                    <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl shadow-md gap-5 md:gap-10 w-full">

                                        <div class="flex items-center">
                                            <?php $img1 = get_field('infra_top_image4'); ?>
                                            <?php if ($img1): ?>
                                                <div class="w-full flex justify-center">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('infra_title4'); ?>"
                                                        title="<?php the_field('infra_title4'); ?>" width="357" height="230"
                                                        class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md ">
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-col gap-3 md:gap-4">
                                                <!-- Title -->
                                                <div class="relative text-lg md:text-xl font-semibold transition-all duration-500 before:absolute before:top-[15px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                    <?php the_field('infra_title4'); ?>
                                                </div>

                                                <!-- Description -->
                                                <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                    <?php the_field('infra_description4'); ?>
                                                </div>
                                            </div>

                                                <!-- Explore More Link -->
                                            <div>
                                            <a href="<?php the_field('explore_link'); ?>" class="inline-flex items-center gap-2 group">
                                                <div class="text-[16px] md:text-[18px] text-[#f48120] font-medium font-primary group-hover:text-black transition-all duration-300">
                                                <?php the_field('explore_text'); ?>
                                                </div>
                                                <div>
                                                <img src="<?php the_field('explore_icon'); ?>" alt="">
                                                </div>
                                            </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                    <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-5 md:gap-10 w-full">

                                        <div class="flex items-center">
                                            <?php $img1 = get_field('infra_top_image5'); ?>
                                            <?php if ($img1): ?>
                                                <div class="w-full flex justify-center">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('infra_title5'); ?>"
                                                        title="<?php the_field('infra_title5'); ?>" width="357" height="230"
                                                        class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md ">
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="flex flex-col gap-3">
                                            <div class="flex flex-col gap-3 md:gap-4">
                                                <!-- Title -->
                                                <div class="relative text-lg md:text-xl font-semibold transition-all duration-500 before:absolute before:top-[15px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                    <?php the_field('infra_title5'); ?>
                                                </div>

                                                <!-- Description -->
                                                <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                    <?php the_field('infra_description5'); ?>
                                                </div>
                                            </div>

                                                <!-- Explore More Link -->
                                            <div>
                                                <a href="<?php the_field('explore_link'); ?>" class="inline-flex items-center gap-2 group">
                                                    <div class="text-[16px] md:text-[18px] text-[#f48120] font-medium font-primary group-hover:text-black transition-all duration-300">
                                                    <?php the_field('explore_text'); ?>
                                                    </div>
                                                    <div>
                                                    <img src="<?php the_field('explore_icon'); ?>" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-full flex flex-col justify-center items-center gap-4 lg:mt-12 mt-8">
                            <h2 class="max-md:text-2xl/tight max-xl:text-2xl/tight text-3xl/tight tracking-[-0.04em] text-black text-balance first:*:font-normal
                                last:*:font-bold">
                                <span class="font-normal">VESP </span><span class="font-bold"> Infrastructure</span>
                            </h2>
                                            

                            <div class="grid grid-cols-1 lg:grid-cols-1 flex-wrap items-start lg:gap-6 gap-4 h-auto w-full">
                                <div class="w-full flex flex-wrap relative items-center justify-center lg:py-6 lg:px-4 py-4 rounded-xl px-3 h-full grow">
                                        <div class="flex flex-col w-full">
                                            <div class="flex lg:flex-nowrap justify-between items-center gap-4 md:gap-6">
                                            <div class="lg:w-4/5 md:w-4/5 w-full flex flex-col items-center">
                                                <div class="flex flex-col gap-3">
                                                    <div class="flex flex-col gap-3 md:gap-4">
                                                        <!-- Title -->
                                                        <div class="relative text-lg md:text-xl font-semibold transition-all duration-500">
                                                            <?php the_field('infra_title6'); ?>
                                                        </div>

                                                        <!-- Description -->
                                                        <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                            <?php the_field('infra_description6'); ?>
                                                        </div>
                                                    </div>

                                                        <!-- Explore More Link -->
                                                    <div>
                                                    <a href="<?php the_field('explore_link'); ?>" class="inline-flex items-center gap-2 group">
                                                        <div class="text-[16px] md:text-[18px] text-[#f48120] font-medium font-primary group-hover:text-black transition-all duration-300">
                                                        <?php the_field('explore_text'); ?>
                                                        </div>
                                                        <div>
                                                        <img src="<?php the_field('explore_icon'); ?>" alt="">
                                                        </div>
                                                    </a>
                                                    </div>
                                                </div>                                
                                            </div>
                                            <div class="lg:w-2/5 md:w-2/5 w-full flex flex-col">
                                                <div class="flex items-center">
                                                    <?php $img1 = get_field('infra_top_image6'); ?>
                                                    <?php if ($img1): ?>
                                                        <div class="w-full flex justify-center">
                                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                                alt="<?php the_field('infra_title6'); ?>"
                                                                title="<?php the_field('infra_title6'); ?>" width="357" height="230"
                                                                class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md ">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            </div>    
                                        </div>
                                </div>
                                <div class="w-full flex flex-wrap relative items-center justify-center lg:py-6 lg:px-4 py-4 rounded-xl px-3 h-full grow">
                                    <div class="flex flex-col w-full">
                                        <div class="flex lg:flex-nowrap justify-between items-center gap-4 md:gap-6">
                                            <div class="lg:w-2/5 md:w-2/5 w-full flex flex-col">
                                                <div class="flex items-center">
                                                    <?php $img1 = get_field('infra_top_image7'); ?>
                                                    <?php if ($img1): ?>
                                                        <div class="w-full flex justify-center">
                                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                                alt="<?php the_field('infra_title7'); ?>"
                                                                title="<?php the_field('infra_title7'); ?>" width="357" height="230"
                                                                class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md ">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="lg:w-4/5 md:w-2/5 w-full flex flex-col items-center">
                                                <div class="flex flex-col gap-3">
                                                    <div class="flex flex-col gap-3 md:gap-4">
                                                        <!-- Title -->
                                                        <div class="relative text-lg md:text-xl font-semibold transition-all duration-500 before:absolute before:top-[15px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                            <?php the_field('infra_title7'); ?>
                                                        </div>

                                                        <!-- Description -->
                                                        <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                            <?php the_field('infra_description7'); ?>
                                                        </div>
                                                    </div>

                                                        <!-- Explore More Link -->
                                                    <div>
                                                    <a href="<?php the_field('explore_link'); ?>" class="inline-flex items-center gap-2 group">
                                                        <div class="text-[16px] md:text-[18px] text-[#f48120] font-medium font-primary group-hover:text-black transition-all duration-300">
                                                        <?php the_field('explore_text'); ?>
                                                        </div>
                                                        <div>
                                                        <img src="<?php the_field('explore_icon'); ?>" alt="">
                                                        </div>
                                                    </a>
                                                    </div>
                                                </div>                                
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                                <div class="w-full flex flex-wrap relative items-center justify-center lg:py-6 lg:px-4 py-4 rounded-xl px-3 h-full grow">
                                        <div class="flex flex-col w-full">
                                            <div class="flex lg:flex-nowrap justify-between items-center gap-4 md:gap-6">
                                            <div class="lg:w-4/5 md:w-4/5 w-full flex flex-col items-center">
                                                <div class="flex flex-col gap-3">
                                                    <div class="flex flex-col gap-3 md:gap-4">
                                                        <!-- Title -->
                                                        <div class="relative text-lg md:text-xl font-semibold transition-all duration-500">
                                                            <?php the_field('infra_title8'); ?>
                                                        </div>

                                                        <!-- Description -->
                                                        <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                            <?php the_field('infra_description8'); ?>
                                                        </div>
                                                    </div>

                                                        <!-- Explore More Link -->
                                                    <div>
                                                    <a href="<?php the_field('explore_link'); ?>" class="inline-flex items-center gap-2 group">
                                                        <div class="text-[16px] md:text-[18px] text-[#f48120] font-medium font-primary group-hover:text-black transition-all duration-300">
                                                        <?php the_field('explore_text'); ?>
                                                        </div>
                                                        <div>
                                                        <img src="<?php the_field('explore_icon'); ?>" alt="">
                                                        </div>
                                                    </a>
                                                    </div>
                                                </div>                                
                                            </div>
                                            <div class="lg:w-2/5 md:w-2/5 w-full flex flex-col">
                                                <div class="flex items-center">
                                                    <?php $img1 = get_field('infra_top_image8'); ?>
                                                    <?php if ($img1): ?>
                                                        <div class="w-full flex justify-center">
                                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                                alt="<?php the_field('infra_title8'); ?>"
                                                                title="<?php the_field('infra_title8'); ?>" width="357" height="230"
                                                                class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md ">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            </div>    
                                        </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="relative bg-slate-50 py-6 md:py-8 lg:py-16 select-nonee group/flip">
                            <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
                                <div class="mx-auto max-w-container gap-7 flex max-lg:flex-col group-[]/flip:flex-row-reverse group-[]/flip:max-lg:flex-col max-lg:gap-4 
                                        [*:first-child]:[:has(.content1-img)]:lg:block 
                                        [:first-child] [*:last-child]:[:has(.content1-img)]:max-w-3xl 
                                        [*:last-child]:[:has(.content1-img)]:lg:w-3xl">
                                    <div class="relative z-20 mx-auto lg:mx-0 lg:pr-4 md:py-6 md:md:py-8 h-auto md:sticky md:top-24 self-start shrink-1 grow-0 basis-auto w-full">
                                        <h2 class="
                                            max-md:text-2xl/tight max-xl:text-3xl/tight text-4xl/tight text-black text-balance first:*:font-normal
                                            last:*:font-bold mb-3">
                                            <span class="font-normal">Universal Testing </span><span class="font-bold"> Machine</span>
                                        </h2>
                                        <div class="relative text-lg md:text-xl font-semibold transition-all duration-500">
                                            Universal Testing Machine 
                                        </div>
                                        <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">A universal testing machine (UTM), also known as a universal tester, universal tensile machine, materials testing machine, materials test frame, is used to test the tensile strength (pulling) and compressive strength (pushing), flexural strength, bending, shear, hardness, and torsion testing, providing valuable data for designing and ensuring the quality of materials.</p>
                                        <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">Creating expressive design which eases screen communication with the user. Building websites to connect users of the site with your business and adjoining top rated ideas and technology. As one of the trusted website design company, we deliver highly conventional designs meeting growing needs of the market to fulfil client requirements.</p>
                                        <h3 class="w-full 2xl:text-3xl xl:text-2xl lg:text-xl text-lg font-semibold text-[#000000] md:pb-6 pb-4"></h3>
                                        
                                        <div class="mt-8 flex gap-4">
                                            <a href="https://www.habitfoundation.com/website-design/" class="inline-flex justify-center rounded-full text-sm font-semibold py-2 md:py-3 px-3 md:px-4 bg-slate-900 text-white hover:bg-slate-700">
                                                <span class="select-nonee">
                                                    Explore More <span aria-hidden="true" class="">→</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="block">
                    <input type="radio" name="benefit" id="benefit2" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                    <div
                    class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:mt-3">
                    <?php $img2 = get_field('mentorship_team_1_image'); ?>
                    <?php if ($img2): ?>
                    <div class="py-2 px-2 w-full h-auto">
                        <img src="<?php echo esc_url($img2['url']); ?>"
                            alt="<?php echo esc_attr(get_field('mentorship_team_1_name')); ?>"
                            title="<?php echo esc_attr(get_field('mentorship_team_1_name')); ?>" width="257" height="171"
                            class="aspect-[257/171] size-full object-top object-cover rounded-md">
                    </div>
                    <?php endif; ?>
                    <div class="flex items-center justify-between gap-y-1 px-4 py-4">
                        <div class="flex flex-col gap-y-1">
                            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]">
                                <?php the_field('mentorship_team_1_name'); ?></h4>
                            <h5 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]">
                                <?php the_field('mentorship_company_1_name'); ?></h5>
                            <p class="font-medium text-gray-800 lg:text-base text-sm pe-3">
                                <?php the_field('mentorship_1_designation'); ?></p>
                        </div>
                        <a href="<?php the_field('mentorship_team_linkedin1'); ?>" class="!leading-8 border border-[#0077B5] flex items-center p-2 -mt-1">
                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><circle cx="4.983" cy="5.009" r="2.188"></circle><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path></svg>
                        </a> 
                    </div>
                </div>
                    </div>
                </div>
                <div class="block">
                    <input type="radio" name="benefit" id="benefit3" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        ljkjkljklj
                    </div>
                </div>
                <div class="block">
                    <input type="radio" name="benefit" id="benefit4" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        ghkjgjkgkjhkjhkh
                    </div>
                </div>
                <div class="block">
                    <input type="radio" name="benefit" id="benefit5" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        ghkjgjkg
                    </div>
                </div>
                <div class="block">
                    <input type="radio" name="benefit" id="benefit6" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        ghkjgjkg
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer();?>
