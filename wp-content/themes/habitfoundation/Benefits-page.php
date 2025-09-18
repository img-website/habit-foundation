<?php
/* Template Name: benefits page */ get_header(); ?>

<section class="relative w-full md:h-[200px] flex items-center max-md:py-4">
    <?php $bg = get_field('benefits_banner_image'); ?>
    <?php if ($bg): ?>
        <div class="absolute inset-0">
            <img src="<?php echo esc_url($bg['url']); ?>" alt="benefits Banner" class="w-full h-full object-cover" loading="eager" fetchpriority="high"/>
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
            <a href="https://project.imgglobal.in/habit-foundation/benefits/">
            <span class="text-sm font-medium inline-block text-[#bf4b50] lg:text-base font-medium tracking-[0.8px]"><?php the_field('breadcrumb_label_benefits'); ?></span>
            </a>
        </div>
    </div>
</section>

<section class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <!-- <div class="w-full flex flex-col">
            <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
                <?php the_field('benefits_sec_badge'); ?>
            </span>
            <h2 class="lg:w-9/12 w-full lg:text-3xl md:text-2xl text-xl mx-auto !leading-normal text-center font-semibold text-[#2a1313]">
                <?php the_field('benefits_sec_heading'); ?>
            </h2>
        </div> -->
        <div class="w-full flex flex-col items-start mx-auto group lg:gap-6 gap-4">
            <div class="w-full overflow-x-auto">
                <ul class="flex flex-nowrap justify-center gap-3 w-max min-w-full py-2 px-2 lg:px-0">
                    <li class="group/benefit">
                        <label for="benefit1"
                            class="cursor-pointer inline-flex items-center justify-between lg:py-4 lg:px-[2.5rem] sm:py-3 sm:px-5 py-2 px-2 text-white rounded-2xl w-full duration-300 transition-all bg-white ring-1 ring-[#dddddd] group-has-[#benefit1:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <span class="lg:size-6 size-4 *:!size-full inline-block me-3">
                                    <svg class="!text-[#545454] group-has-[#benefit1:checked]:!text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M19 12h3L12 3 2 12h3v3H3v2h2v3h2v-3h4v3h2v-3h4v3h2v-3h2v-2h-2v-3zM7 15v-4.81l4-3.6V15H7zm6 0V6.59l4 3.6V15h-4z"></path>
                                    </svg>
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
                                    <svg class="!text-[#545454] group-has-[#benefit4:checked]:!text-white" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
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
                                    <svg class="!text-[#545454] group-has-[#benefit5:checked]:!text-white" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 20h-6a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7"></path>
                                        <path d="M15 19l2 2l4 -4"></path>
                                        <path d="M9 17h2.5"></path>
                                    </svg>
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
                        <h2 class="lg:text-3xl md:text-2xl text-xl tracking-[-0.02em] w-full lg:text-3xl md:text-2xl text-xl mx-auto !leading-normal text-center font-semibold text-[#2a1313] text-balance first:*:font-normal
                            last:*:font-bold lg:pb-8 pb-4 text-center mx-auto">
                            <span class="font-normal">HABIT</span><span class="font-bold"> Infrastructure</span>
                        </h2>
                        <div class="hero-section w-full swiper benefitSwiper h-full rounded-3xl swiper-initialized relative z-0 swiper-horizontal swiper-backface-hidden px-4">
                            <div class="swiper-wrapper relative flex items-stretch z-10">
                                <div class="swiper-slide relative flex flex-col justify-between bg-white rounded-3xl h-auto xl:p-4 md:p-3 py-2 px-2 gap-y-3 z-10">
                                    <div class="flex flex-col items-center">
                                        <div class="flex lg:flex-row flex-col items-center justify-center lg:gap-3 gap-1">
                                                <?php $img1 = get_field('incubation_infra_17_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_18_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_19_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                        </div>
                                        <div class="w-full mx-auto rounded-2xl pt-4 px-4 bg-white">
                                            <!-- Floor Title -->
                                            <div class="mb-4">
                                                <p class="text-lg font-semibold text-[#bc4349]">Ground Floor</p>
                                                <div class="w-16 h-1 bg-[#bc4349] rounded mt-1"></div>
                                            </div>

                                            <!-- Area Pills -->
                                            <!-- <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-3">
                                                <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                Reception
                                                </div>

                                                <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                Waiting
                                                </div>

                                                <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                Display Area with Lounge
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide relative flex flex-col justify-between bg-white rounded-3xl h-auto xl:p-4 md:p-3 py-2 px-2 gap-y-3">
                                    <div class="flex flex-col items-center">
                                            <div class="flex lg:flex-row flex-col items-center justify-center lg:gap-3 gap-1">
                                                <?php $img1 = get_field('incubation_infra_2_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_3_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_4_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                            <div class="w-full mx-auto rounded-2xl pt-4 px-4 bg-white">
                                                <!-- Heading -->
                                                <div class="mb-4">
                                                    <p class="text-lg font-semibold text-[#bc4349]">First Floor</p>
                                                    <div class="w-16 h-1 bg-[#bc4349] rounded mt-1"></div>
                                                </div>

                                                <!-- Grid Layout -->
                                                <!-- <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-3">
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                    Lift Lobby
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                    Washrooms &amp; Pantry
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                    Staircase block
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                    Storeroom
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                    Robotic Arm Room
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                    Cnc Cutting Room
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                    3d Printer Room
                                                    </div>
                                                </div> -->
                                            </div>

                                    </div>
                                </div>
                                <div class="swiper-slide relative flex flex-col justify-between bg-white rounded-3xl h-auto xl:p-4 md:p-3 py-2 px-2 gap-y-3">
                                    <div class="flex flex-col items-center">
                                            <div class="flex lg:flex-row flex-col items-center justify-center lg:gap-3 gap-1">
                                                <?php $img1 = get_field('incubation_infra_5_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_6_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_7_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="w-full mx-auto rounded-2xl pt-4 px-4 bg-white">
                                                <div class="mb-4">
                                                    <p class="text-lg font-semibold text-[#bc4349]">Second Floor - Administration Area</p>
                                                    <div class="w-16 h-1 bg-[#bc4349] rounded mt-1"></div>
                                                </div>
                                                <!-- Grid Layout -->
                                                <!-- <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-3">
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Lift Lobby
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Washroom & Pantry
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Board Room 1
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Board Room 2
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Trustee Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Manager Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Ceo Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Admin Staff Area
                                                    </div>
                                                </div> -->
                                            </div>
                                    </div>
                                </div>
                                <div class="swiper-slide relative flex flex-col justify-between bg-white rounded-3xl h-auto xl:p-4 md:p-3 py-2 px-2 gap-y-3">
                                        <div class="flex flex-col items-center">
                                            <div class="flex lg:flex-row flex-col items-center justify-center lg:gap-3 gap-1">
                                                <?php $img1 = get_field('incubation_infra_8_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_9_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_10_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="w-full mx-auto rounded-2xl pt-4 px-4 bg-white">
                                                <div class="mb-4">
                                                    <p class="text-lg font-semibold text-[#bc4349]">Third Floor - Co-Working Space</p>
                                                    <div class="w-16 h-1 bg-[#bc4349] rounded mt-1"></div>
                                                </div>
                                                <!-- <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-3">
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Lift Lobby
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Washroom & Pantry
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Passage
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Co-Working Space
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                </div>
                                <div class="swiper-slide relative flex flex-col justify-between bg-white rounded-3xl h-auto xl:p-4 md:p-3 py-2 px-2 gap-y-3">
                                        <div class="flex flex-col items-center">
                                            <div class="flex lg:flex-row flex-col items-center justify-center lg:gap-3 gap-1">
                                                <?php $img1 = get_field('incubation_infra_11_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_12_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_13_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="w-full mx-auto rounded-2xl pt-4 px-4 bg-white">
                                                <div class="mb-4">
                                                    <p class="text-lg font-semibold text-[#bc4349]">Fourth Floor - Co-Working Space & AR VR</p>
                                                    <div class="w-16 h-1 bg-[#bc4349] rounded mt-1"></div>
                                                </div>
                                                <!-- <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-3">
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Lift Lobby
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Washroom &amp; Pantry
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Board Room 2
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        CO-Working Space
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        AR VR Room
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Total Area (2098)
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                </div>
                                <div class="swiper-slide relative flex flex-col justify-between bg-white rounded-3xl h-auto xl:p-4 md:p-3 py-2 px-2 gap-y-3">
                                        <div class="flex flex-col items-center">
                                            <div class="flex lg:flex-row flex-col items-center justify-center lg:gap-3 gap-1">
                                                <?php $img1 = get_field('incubation_infra_14_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_15_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('incubation_infra_16_image'); ?>
                                                <?php if ($img1): ?>
                                                    <div class="w-full">
                                                        <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>" title="<?php echo esc_attr(get_field('incubation_infra_1_name')); ?>i" width="280" height="240" class="size-full w-full lg:aspect-[230/140] aspect-[260/148] border-[3px] border-gray-200 h-auto object-cover object-top rounded-2xl" loading="lazy" fetchpriority="low">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="w-full mx-auto rounded-2xl pt-4 px-4 bg-white">
                                                <div class="mb-4">
                                                    <p class="text-lg font-semibold text-[#bc4349]">Seventh Floor - Meeting Rooms</p>
                                                    <div class="w-16 h-1 bg-[#bc4349] rounded mt-1"></div>
                                                </div>
                                                
                                                <!-- <div class="grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-3">
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Lift Lobby
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Washroom &amp; Pantry
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Cabin
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Staff
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Seminar Room
                                                    </div>
                                                    <div class="flex items-center justify-center  text-center text-sm font-medium rounded-full border border-gray-300 text-gray-700 bg-gray-50 shadow-sm md:hover:bg-[#bc4349] md:hover:text-white md:hover:border-[#bc4349] transition-all duration-300 py-2 px-5">
                                                        Conference Hall
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 flex justify-between -px-6 !z-50">
                                    <div class="swiper-prev bg-gradient-to-b from-[#b93a40] to-[#c75e63] inline-flex items-center justify-center lg:w-10 lg:h-10 w-5 h-5 rounded-full shadow-lg cursor-pointer">
                                        <svg class="lg:w-5 lg:h-5 w-3 h-3 text-gray-100" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                        </svg>
                                    </div>
                                    <div class="swiper-next bg-gradient-to-b from-[#b93a40] to-[#c75e63] inline-flex items-center justify-center lg:w-10 lg:h-10 w-5 h-5 rounded-full shadow-lg cursor-pointer">
                                        <svg class="lg:w-5 lg:h-5 w-3 h-3 text-gray-100" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="w-full bg-[#f6f5f2] relative lg:py-20 py-8">
                            <div class="w-full flex flex-col justify-center items-center mx-auto">
                                <span class="bg-[#bf4b50] w-fit py-[5px] px-7 font-medium rounded-full text-white lg:text-3xl md:text-2xl text-xl flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
                                    <?php the_field('benefit_badge_2'); ?>
                                </span>
                                <h2 class="w-full lg:text-2xl md:text-xl text-lg mx-auto !leading-normal text-center font-semibold mx-auto text-[#2a1313] lg:mb-6 mb-4">
                                    <?php the_field('benefit_title_2'); ?>
                                </h2>
                            </div>
                            <div class="w-full event-tabs lg:px-4">
                                    <div class="w-full flex lg:flex-nowrap flex-wrap mx-auto justify-center overflow-x-auto gap-2 lg:gap-4">
                                        <button class="agile-tab-btn font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]" data-tab="tab1">Management</button>
                                        <button class="agile-tab-btn font-semibold px-4 py-3 text-gray-700" data-tab="tab2">Engineering</button>
                                        <button class="agile-tab-btn font-semibold px-4 py-3 text-gray-700" data-tab="tab3">Pharmacy</button>
                                        <button class="agile-tab-btn font-semibold px-4 py-3 text-gray-700" data-tab="tab4">Law</button>
                                    </div>
                                    <div class="agile-tab-content lg:mt-8 mt-4" id="tab1">
                                        <div class="w-full">
                                            <div class="block">
                                                <div class="w-full flex flex-col justify-center items-center gap-4">
                                                    <div class="grid grid-cols-1 md:grid-3 lg:grid-cols-3 items-start lg:gap-6 gap-4 h-auto w-full">
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                            <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">
                                                                <div class="w-full flex items-center">
                                                                    <?php $img1 = get_field('infra_top_image1'); ?>
                                                                    <?php if ($img1): ?>
                                                                        <div class="w-full flex justify-center">
                                                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                                                alt="<?php the_field('infra_title1'); ?>"
                                                                                title="<?php the_field('infra_title1'); ?>" width="357" height="230"
                                                                                class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <div class="flex flex-col gap-3">
                                                                    <div class="flex flex-col gap-3 md:gap-4">
                                                                        <!-- Title -->
                                                                        <div class="relative text-base md:text-lg font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                            <?php the_field('infra_title1'); ?>
                                                                        </div>

                                                                        <!-- Description -->
                                                                        <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                            <?php the_field('infra_description1'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                                    <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">

                                                                        <div class="flex items-center">
                                                                            <?php $img1 = get_field('infra_top_image2'); ?>
                                                                            <?php if ($img1): ?>
                                                                                <div class="w-full flex justify-center">
                                                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                                                        alt="<?php the_field('infra_title2'); ?>"
                                                                                        title="<?php the_field('infra_title2'); ?>" width="357" height="230"
                                                                                        class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                                </div>
                                                                            <?php endif; ?>
                                                                        </div>

                                                                        <div class="flex flex-col gap-3">
                                                                            <div class="flex flex-col gap-3 md:gap-4">
                                                                                <!-- Title -->
                                                                                <div class="relative text-base md:text-lg font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                                    <?php the_field('infra_title2'); ?>
                                                                                </div>

                                                                                <!-- Description -->
                                                                                <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                                    <?php the_field('infra_description2'); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                        </div>
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                                    <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">
                                                                        <div class="flex items-center">
                                                                            <?php $img1 = get_field('infra_top_image3'); ?>
                                                                            <?php if ($img1): ?>
                                                                                <div class="w-full flex justify-center">
                                                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                                                        alt="<?php the_field('infra_title3'); ?>"
                                                                                        title="<?php the_field('infra_title3'); ?>" width="357" height="230"
                                                                                        class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                                </div>
                                                                            <?php endif; ?>
                                                                        </div>

                                                                        <div class="flex flex-col gap-3">
                                                                            <div class="flex flex-col gap-3 md:gap-4">
                                                                                <!-- Title -->
                                                                                <div class="relative text-base md:text-lg font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                                    <?php the_field('infra_title3'); ?>
                                                                                </div>

                                                                                <!-- Description -->
                                                                                <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                                    <?php the_field('infra_description3'); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                                    <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl shadow-md gap-5 md:gap-5 w-full">

                                                                        <div class="flex items-center">
                                                                            <?php $img1 = get_field('infra_top_image4'); ?>
                                                                            <?php if ($img1): ?>
                                                                                <div class="w-full flex justify-center">
                                                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                                                        alt="<?php the_field('infra_title4'); ?>"
                                                                                        title="<?php the_field('infra_title4'); ?>" width="357" height="230"
                                                                                        class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                                </div>
                                                                            <?php endif; ?>
                                                                        </div>

                                                                        <div class="flex flex-col gap-3">
                                                                            <div class="flex flex-col gap-3 md:gap-4">
                                                                                <!-- Title -->
                                                                                <div class="relative text-base md:text-lg font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                                    <?php the_field('infra_title4'); ?>
                                                                                </div>

                                                                                <!-- Description -->
                                                                                <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                                    <?php the_field('infra_description4'); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                                <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">

                                                                        <div class="flex items-center">
                                                                            <?php $img1 = get_field('infra_top_image5'); ?>
                                                                            <?php if ($img1): ?>
                                                                                <div class="w-full flex justify-center">
                                                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                                                        alt="<?php the_field('infra_title5'); ?>"
                                                                                        title="<?php the_field('infra_title5'); ?>" width="357" height="230"
                                                                                        class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                                </div>
                                                                            <?php endif; ?>
                                                                        </div>

                                                                        <div class="flex flex-col gap-3">
                                                                            <div class="flex flex-col gap-3 md:gap-4">
                                                                                <!-- Title -->
                                                                                <div class="relative text-base md:text-lg font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                                    <?php the_field('infra_title5'); ?>
                                                                                </div>

                                                                                <!-- Description -->
                                                                                <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                                    <?php the_field('infra_description5'); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agile-tab-content hidden text-center text-base font-medium lg:mt-8 mt-4" id="tab2">
                                        <div class="w-full">
                                            <div class="block">
                                                <div class="w-full flex flex-col justify-center items-center gap-4">
                                                    <div class="grid grid-cols-1 md:grid-3 lg:grid-cols-3 items-start lg:gap-6 gap-4 h-auto w-full">
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                            <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">
                                                                <div class="flex items-center">
                                                                    <?php $img1 = get_field('infra_top_image6'); ?>
                                                                    <?php if ($img1): ?>
                                                                        <div class="w-full flex justify-center">
                                                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                                                alt="<?php the_field('infra_title6'); ?>"
                                                                                title="<?php the_field('infra_title6'); ?>" width="357" height="230"
                                                                                class="w-full rounded-md shadow aspect-[357/230] bg-[#dbdad6] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>

                                                                <div class="flex flex-col gap-3">
                                                                    <div class="flex flex-col gap-3 md:gap-4">
                                                                        <!-- Title -->
                                                                        <div class="relative text-base md:text-lg text-start font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                            <?php the_field('infra_title6'); ?>
                                                                        </div>

                                                                        <!-- Description -->
                                                                        <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                            <?php the_field('infra_description6'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                            <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">
                                                                <div class="flex items-center">
                                                                    <?php $img1 = get_field('infra_top_image7'); ?>
                                                                    <?php if ($img1): ?>
                                                                        <div class="w-full flex justify-center">
                                                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                                                alt="<?php the_field('infra_title7'); ?>"
                                                                                title="<?php the_field('infra_title7'); ?>" width="357" height="230"
                                                                                class="w-full rounded-md shadow aspect-[357/230] bg-[#dbdad6] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>

                                                                <div class="flex flex-col gap-3">
                                                                    <div class="flex flex-col gap-3 md:gap-4">
                                                                        <!-- Title -->
                                                                        <div class="relative text-base md:text-lg text-start font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                                <?php the_field('infra_title7'); ?>
                                                                        </div>

                                                                        <!-- Description -->
                                                                        <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                            <?php the_field('infra_description7'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                            <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">
                                                                <div class="flex items-center">
                                                                    <?php $img1 = get_field('infra_top_image8'); ?>
                                                                    <?php if ($img1): ?>
                                                                        <div class="w-full flex justify-center">
                                                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                                                alt="<?php the_field('infra_title8'); ?>"
                                                                                title="<?php the_field('infra_title8'); ?>" width="357" height="230"
                                                                                class="w-full rounded-md shadow aspect-[357/230] bg-[#dbdad6] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>

                                                                <div class="flex flex-col gap-3">
                                                                    <div class="flex flex-col gap-3 md:gap-4">
                                                                        <!-- Title -->
                                                                        <div class="relative text-base md:text-lg text-start font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                                <?php the_field('infra_title8'); ?>
                                                                        </div>

                                                                        <!-- Description -->
                                                                        <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                            <?php the_field('infra_description8'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                            <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">
                                                                <div class="flex items-center">
                                                                    <?php $img1 = get_field('infra_top_image9'); ?>
                                                                    <?php if ($img1): ?>
                                                                        <div class="w-full flex justify-center">
                                                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                                                alt="<?php the_field('infra_title9'); ?>"
                                                                                title="<?php the_field('infra_title9'); ?>" width="357" height="230"
                                                                                class="w-full rounded-md shadow aspect-[357/230] bg-[#dbdad6] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>

                                                                <div class="flex flex-col gap-3">
                                                                    <div class="flex flex-col gap-3 md:gap-4">
                                                                        <!-- Title -->
                                                                        <div class="relative text-base md:text-lg text-start font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                            <?php the_field('infra_title9'); ?>
                                                                        </div>

                                                                        <!-- Description -->
                                                                        <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                            <?php the_field('infra_description9'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                            <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">
                                                                <div class="w-full flex items-center">
                                                                    <?php $img1 = get_field('infra_top_image10'); ?>
                                                                    <?php if ($img1): ?>
                                                                        <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title10'); ?>"
                                                                            title="<?php the_field('infra_title10'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] bg-[#dbdad6] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>

                                                                <div class="flex flex-col gap-3">
                                                                    <div class="flex flex-col gap-3 md:gap-4">
                                                                        <!-- Title -->
                                                                        <div class="relative text-base md:text-lg text-start font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                            <?php the_field('infra_title10'); ?>
                                                                        </div>

                                                                        <!-- Description -->
                                                                        <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                            <?php the_field('infra_description10'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                            <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">
                                                                <div class="w-full flex items-center">
                                                                    <?php $img1 = get_field('infra_top_image11'); ?>
                                                                    <?php if ($img1): ?>
                                                                        <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title11'); ?>"
                                                                            title="<?php the_field('infra_title11'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] bg-[#dbdad6] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <div class="flex flex-col gap-3">
                                                                    <div class="flex flex-col gap-3 md:gap-4">
                                                                        <!-- Title -->
                                                                        <div class="relative text-base md:text-lg text-start font-semibold transition-all duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                            <?php the_field('infra_title11'); ?>
                                                                        </div>

                                                                        <!-- Description -->
                                                                        <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                            <?php the_field('infra_description11'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agile-tab-content hidden text-center text-base font-medium mt-8" id="tab3"> 
                                        <div class="w-full">
                                            <div class="block">
                                                <div class="grid grid-cols-1 md:grid-3 lg:grid-cols-3 items-start lg:gap-6 gap-4 h-auto w-full">
                                                    <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                        <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">

                                                            <div class="flex items-center">
                                                                <?php $img1 = get_field('infra_top_image12'); ?>
                                                                <?php if ($img1): ?>
                                                                    <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title12'); ?>"
                                                                            title="<?php the_field('infra_title12'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex flex-col gap-3 md:gap-4">
                                                                    <!-- Title -->
                                                                    <div class="relative text-base md:text-lg font-semibold transition-all text-start duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                        <?php the_field('infra_title12'); ?>
                                                                    </div>

                                                                    <!-- Description -->
                                                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                        <?php the_field('infra_description12'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                        <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">

                                                            <div class="flex items-center">
                                                                <?php $img1 = get_field('infra_top_image13'); ?>
                                                                <?php if ($img1): ?>
                                                                    <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title13'); ?>"
                                                                            title="<?php the_field('infra_title13'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex flex-col gap-3 md:gap-4">
                                                                    <!-- Title -->
                                                                    <div class="relative text-base md:text-lg font-semibold transition-all text-start duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                        <?php the_field('infra_title13'); ?>
                                                                    </div>

                                                                    <!-- Description -->
                                                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                        <?php the_field('infra_description13'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                        <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">

                                                            <div class="flex items-center">
                                                                <?php $img1 = get_field('infra_top_image14'); ?>
                                                                <?php if ($img1): ?>
                                                                    <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title14'); ?>"
                                                                            title="<?php the_field('infra_title14'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex flex-col gap-3 md:gap-4">
                                                                    <!-- Title -->
                                                                    <div class="relative text-base md:text-lg font-semibold transition-all text-start duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                        <?php the_field('infra_title14'); ?>
                                                                    </div>

                                                                    <!-- Description -->
                                                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                        <?php the_field('infra_description14'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                        <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">
                                                            <div class="flex items-center">
                                                                <?php $img1 = get_field('infra_top_image15'); ?>
                                                                <?php if ($img1): ?>
                                                                    <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title15'); ?>"
                                                                            title="<?php the_field('infra_title15'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex flex-col gap-3 md:gap-4">
                                                                    <!-- Title -->
                                                                    <div class="relative text-base md:text-lg font-semibold transition-all text-start duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                        <?php the_field('infra_title15'); ?>
                                                                    </div>

                                                                    <!-- Description -->
                                                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                        <?php the_field('infra_description15'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                        <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">

                                                            <div class="flex items-center">
                                                                <?php $img1 = get_field('infra_top_image16'); ?>
                                                                <?php if ($img1): ?>
                                                                    <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title16'); ?>"
                                                                            title="<?php the_field('infra_title16'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex flex-col gap-3 md:gap-4">
                                                                    <!-- Title -->
                                                                    <div class="relative text-base md:text-lg font-semibold transition-all text-start duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                        <?php the_field('infra_title16'); ?>
                                                                    </div>

                                                                    <!-- Description -->
                                                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                        <?php the_field('infra_description16'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agile-tab-content hidden text-center text-base font-medium mt-8" id="tab4">
                                        <div class="w-full">
                                            <div class="block">
                                                <div class="grid grid-cols-1 md:grid-3 lg:grid-cols-3 items-start lg:gap-6 gap-4 h-auto w-full">
                                                    <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                        <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">

                                                            <div class="flex items-center">
                                                                <?php $img1 = get_field('infra_top_image17'); ?>
                                                                <?php if ($img1): ?>
                                                                    <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title17'); ?>"
                                                                            title="<?php the_field('infra_title17'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex flex-col gap-3 md:gap-4">
                                                                    <!-- Title -->
                                                                    <div class="relative text-base md:text-lg font-semibold transition-all text-start duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                        <?php the_field('infra_title17'); ?>
                                                                    </div>

                                                                    <!-- Description -->
                                                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                        <?php the_field('infra_description17'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                        <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">

                                                            <div class="flex items-center">
                                                                <?php $img1 = get_field('infra_top_image18'); ?>
                                                                <?php if ($img1): ?>
                                                                    <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title18'); ?>"
                                                                            title="<?php the_field('infra_title18'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex flex-col gap-3 md:gap-4">
                                                                    <!-- Title -->
                                                                    <div class="relative text-base md:text-lg font-semibold transition-all text-start duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                        <?php the_field('infra_title18'); ?>
                                                                    </div>

                                                                    <!-- Description -->
                                                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                        <?php the_field('infra_description18'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                        <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">

                                                            <div class="flex items-center">
                                                                <?php $img1 = get_field('infra_top_image19'); ?>
                                                                <?php if ($img1): ?>
                                                                    <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title19'); ?>"
                                                                            title="<?php the_field('infra_title19'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex flex-col gap-3 md:gap-4">
                                                                    <!-- Title -->
                                                                    <div class="relative text-base md:text-lg font-semibold transition-all text-start duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                        <?php the_field('infra_title19'); ?>
                                                                    </div>

                                                                    <!-- Description -->
                                                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                        <?php the_field('infra_description19'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                        <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">
                                                            <div class="flex items-center">
                                                                <?php $img1 = get_field('infra_top_image20'); ?>
                                                                <?php if ($img1): ?>
                                                                    <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title20'); ?>"
                                                                            title="<?php the_field('infra_title20'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex flex-col gap-3 md:gap-4">
                                                                    <!-- Title -->
                                                                    <div class="relative text-base md:text-lg font-semibold transition-all text-start duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                        <?php the_field('infra_title20'); ?>
                                                                    </div>

                                                                    <!-- Description -->
                                                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                        <?php the_field('infra_description20'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- <div class="w-full flex flex-wrap relative items-start justify-center h-full grow bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] rounded-3xl lg:hover:shadow-[0_2px_5px_rgba(0,0,0,0.2)] duration-500 transition-all">
                                                        <div class="md:py-3 md:px-4 px-2 py-2 flex flex-col items-start rounded-3xl gap-3 md:gap-5 w-full">

                                                            <div class="flex items-center">
                                                                <?php $img1 = get_field('infra_top_image21'); ?>
                                                                <?php if ($img1): ?>
                                                                    <div class="w-full flex justify-center">
                                                                        <img src="<?php echo esc_url($img1['url']); ?>"
                                                                            alt="<?php the_field('infra_title21'); ?>"
                                                                            title="<?php the_field('infra_title21'); ?>" width="357" height="230"
                                                                            class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="flex flex-col gap-3">
                                                                <div class="flex flex-col gap-3 md:gap-4">
                                                                    <div class="relative text-base md:text-lg font-semibold transition-all text-start duration-500 before:absolute before:top-[28px] md:before:top-[30px] xl:before:top-[32px] before:left-0 md:before:left-0 before:w-[78px] before:h-1 before:bg-[linear-gradient(89deg,#bf4b50,#e9bfc1)] before:bg-no-repeat before:bg-origin-padding before:transition-ease">
                                                                        <?php the_field('infra_title21'); ?>
                                                                    </div>

                                                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow">
                                                                        <?php the_field('infra_description21'); ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div> -->
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mentorship tab section -->
                <div class="block">
                    <input type="radio" name="benefit" id="benefit2" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        <div class="w-full event-tabs lg:px-4">
                                    <div class="w-full flex flex-wrap mx-auto justify-center gap-2 lg:gap-4">
                                        <button class="agile-tab-btn font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]" data-tab="tab5">Alumni</button>
                                        <button class="agile-tab-btn font-semibold px-4 py-3 text-gray-700" data-tab="tab6">Industry Expert</button>
                                    </div>
                                    <div class="agile-tab-content mt-6" id="tab5">
                                        <div class="w-full">
                                            <div class="block">
                                                <div class="w-full flex flex-col justify-center items-center gap-4">
                                                    <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 py-4">
                                                        <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_1_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_1_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_1_name')); ?>" width="150" height="150"
                                                                        class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_1_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_1_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_1_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin1'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_1_category'); ?></p>
                                                            </div>
                                                        </div> -->
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_2_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_2_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_2_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_2_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_2_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_2_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin2'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_2_category'); ?></p> -->
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_3_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_3_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_3_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_3_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_3_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_3_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin3'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_4_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_4_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_4_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_4_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_4_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_4_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin4'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_5_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_5_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_5_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_5_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_5_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_5_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin5'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_5_category'); ?></p> -->
                                                            </div>
                                                        </div>
                                                        <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_6_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_6_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_6_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_6_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_6_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_5_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin6'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_6_category'); ?></p>
                                                            </div>
                                                        </div> -->
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_7_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_7_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_7_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_7_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_7_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_7_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin7'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_8_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_8_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_8_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_8_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_8_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_8_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin8'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_9_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_9_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_9_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_9_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_9_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_9_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin9'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_9_category'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_10_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_10_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_10_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_10_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_10_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_10_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin10'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_11_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_11_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_11_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_11_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_11_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_11_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin11'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_12_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_12_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_12_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_12_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_12_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_12_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin12'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_12_category'); ?></p>
                                                            </div>
                                                        </div> -->
                                                        
                                                        <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_16_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_16_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_16_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_16_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_16_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_16_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin16'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_16_category'); ?></p>
                                                            </div>
                                                        </div> -->

                                                        <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_20_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_20_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_20_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_20_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_20_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_20_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin20'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_20_category'); ?></p>
                                                            </div>
                                                        </div> -->
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_21_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_21_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_21_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_21_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_21_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_21_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin21'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_21_category'); ?></p> -->
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_22_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_22_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_22_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_22_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_22_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_22_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin22'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.228v5.904H22v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_22_category'); ?></p> -->
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_23_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_23_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_23_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_23_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_23_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_23_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin23'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_23_category'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_24_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_24_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_24_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_24_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_24_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_24_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin24'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_25_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_25_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_25_name')); ?>" width="150" height="150"
                                                                        class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_25_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_25_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_25_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin25'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_26_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_26_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_26_name')); ?>" width="150" height="150"
                                                                        class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_26_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_26_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_26_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin26'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_27_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_27_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_27_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_27_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_27_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_27_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin27'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_27_category'); ?></p> -->
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_28_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_28_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_28_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_28_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_28_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_28_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin28'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_28_category'); ?></p> -->
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_29_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_29_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_29_name')); ?>" width="150" height="150"                                    
                                                                        class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_29_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_29_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_29_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin29'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_29_category'); ?></p> -->
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_30_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_30_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_30_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_30_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_30_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_30_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin30'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_30_category'); ?></p> -->
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_31_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_31_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_31_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_31_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_31_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_31_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin_31'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_32_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_32_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_32_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_32_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_32_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_32_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin_32'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_32_category'); ?>
                                                                </p> -->
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_33_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_33_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_33_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_33_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_33_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_33_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin33'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_34_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_34_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_34_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_34_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_34_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_34_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin34'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_35_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_35_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_35_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_35_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_35_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_35_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin35'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_35_category'); ?></p> -->
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_36_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_36_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_36_name')); ?>" width="150" height="150"
                                                           class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_36_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_36_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_36_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin36'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_37_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_37_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_37_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_37_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_37_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_37_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin37'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_38_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_38_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_38_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_38_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_38_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_38_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin38'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_13_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_13_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_13_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_13_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_13_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_13_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin13'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_13_category'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_14_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_14_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_14_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_14_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_14_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_14_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin14'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_14_category'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_15_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_15_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_15_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_15_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_15_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_15_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin15'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_15_category'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_17_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_17_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_17_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_17_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_17_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_17_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin17'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_17_category'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_18_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_18_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_18_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_18_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_18_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_18_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin18'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_18_category'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_19_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_19_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_19_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_19_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_19_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_19_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin19'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_19_category'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agile-tab-content hidden text-center text-base font-medium mt-6" id="tab6"> 
                                        <div class="w-full">
                                            <div class="block">
                                                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 py-4">
                                                    <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                            <?php $img2 = get_field('mentorship_team_39_image'); ?>
                                                            <?php if ($img2): ?>
                                                                <div class="py-2 px-2 w-full h-auto">
                                                                    <img src="<?php echo esc_url($img2['url']); ?>"
                                                                        alt="<?php echo esc_attr(get_field('mentorship_team_39_name')); ?>"
                                                                        title="<?php echo esc_attr(get_field('mentorship_team_39_name')); ?>" width="150" height="150"
                                                                    class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="flex flex-col gap-y-1 px-4 py-4">
                                                                <div class="flex items-start justify-between mb-0.5">
                                                                    <div class="flex flex-col">
                                                                        <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                            <?php the_field('mentorship_team_39_name'); ?></h4>
                                                                        <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_company_39_name'); ?></h5>
                                                                        <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                            <?php the_field('mentorship_39_designation'); ?></p>
                                                                    </div>
                                                                    <div class="flex flex-col">
                                                                        <a href="<?php the_field('mentorship_team_linkedin39'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1 ">
                                                                            <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                                <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                    <?php the_field('mentorship_39_category'); ?>
                                                                </p>
                                                            </div>
                                                    </div> -->
                                                    <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                        <?php $img40 = get_field('mentorship_team_40_image'); ?>
                                                        <?php if ($img40): ?>
                                                            <div class="py-2 px-2 w-full h-auto">
                                                                <img src="<?php echo esc_url($img40['url']); ?>"
                                                                    alt="<?php echo esc_attr(get_field('mentorship_team_40_name')); ?>"
                                                                    title="<?php echo esc_attr(get_field('mentorship_team_40_name')); ?>" width="150" height="150"
                                                                class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="flex flex-col gap-y-1 px-4 py-4">
                                                            <div class="flex items-start justify-between mb-0.5">
                                                                <div class="flex flex-col">
                                                                    <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                        <?php the_field('mentorship_team_40_name'); ?></h4>
                                                                    <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                        <?php the_field('mentorship_company_40_name'); ?></h5>
                                                                    <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                        <?php the_field('mentorship_40_designation'); ?></p>
                                                                </div>
                                                                <div class="flex flex-col">
                                                                    <a href="<?php the_field('mentorship_team_linkedin40'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1">
                                                                        <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                            <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                            <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                <?php the_field('mentorship_40_category'); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                        <?php $img40 = get_field('mentorship_team_41_image'); ?>
                                                        <?php if ($img40): ?>
                                                            <div class="py-2 px-2 w-full h-auto">
                                                                <img src="<?php echo esc_url($img40['url']); ?>"
                                                                    alt="<?php echo esc_attr(get_field('mentorship_team_41_name')); ?>"
                                                                    title="<?php echo esc_attr(get_field('mentorship_team_41_name')); ?>" width="150" height="150"
                                                                class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="flex flex-col gap-y-1 px-4 py-4">
                                                            <div class="flex items-start justify-between mb-0.5">
                                                                <div class="flex flex-col">
                                                                    <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                        <?php the_field('mentorship_team_41_name'); ?></h4>
                                                                    <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                        <?php the_field('mentorship_company_41_name'); ?></h5>
                                                                    <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                        <?php the_field('mentorship_41_designation'); ?></p>
                                                                </div>
                                                                <div class="flex flex-col">
                                                                    <a href="<?php the_field('mentorship_team_linkedin41'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1">
                                                                        <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                            <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                            <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                <?php the_field('mentorship_41_category'); ?>
                                                            </p>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                        <?php $img40 = get_field('mentorship_team_42_image'); ?>
                                                        <?php if ($img40): ?>
                                                            <div class="py-2 px-2 w-full h-auto">
                                                                <img src="<?php echo esc_url($img40['url']); ?>"
                                                                    alt="<?php echo esc_attr(get_field('mentorship_team_42_name')); ?>"
                                                                    title="<?php echo esc_attr(get_field('mentorship_team_42_name')); ?>" width="150" height="150"
                                                                class="aspect-[150/150] size-[170px] object-top object-cover rounded-full mx-auto" loading="lazy" fetchpriority="low">
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="flex flex-col gap-y-1 px-4 py-4">
                                                            <div class="flex items-start justify-between mb-0.5">
                                                                <div class="flex flex-col">
                                                                    <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                        <?php the_field('mentorship_team_42_name'); ?></h4>
                                                                    <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                        <?php the_field('mentorship_company_42_name'); ?></h5>
                                                                    <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                        <?php the_field('mentorship_42_designation'); ?></p>
                                                                </div>
                                                                <div class="flex flex-col">
                                                                    <a href="<?php the_field('mentorship_team_linkedin42'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1">
                                                                        <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                            <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                            <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                <?php the_field('mentorship_42_category'); ?>
                                                            </p>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                        <?php $img40 = get_field('mentorship_team_43_image'); ?>
                                                        <?php if ($img40): ?>
                                                            <div class="py-2 px-2 w-full h-auto">
                                                                <img src="<?php echo esc_url($img40['url']); ?>"
                                                                    alt="<?php echo esc_attr(get_field('mentorship_team_43_name')); ?>"
                                                                    title="<?php echo esc_attr(get_field('mentorship_team_43_name')); ?>" width="150" height="150"
                                                                aspect-[150/150] class="size-full object-top object-cover rounded-full">
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="flex flex-col gap-y-1 px-4 py-4">
                                                            <div class="flex items-start justify-between mb-0.5">
                                                                <div class="flex flex-col">
                                                                    <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                        <?php the_field('mentorship_team_43_name'); ?></h4>
                                                                    <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                        <?php the_field('mentorship_company_43_name'); ?></h5>
                                                                    <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                        <?php the_field('mentorship_43_designation'); ?></p>
                                                                </div>
                                                                <div class="flex flex-col">
                                                                    <a href="<?php the_field('mentorship_team_linkedin43'); ?>" class="!leading-8 border border-[#0077B5] flex items-center p-1">
                                                                        <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                            <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                            <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                <?php the_field('mentorship_43_category'); ?>
                                                            </p>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 md:hover:shadow-lg lg:mt-3">
                                                        <?php $img40 = get_field('mentorship_team_44_image'); ?>
                                                        <?php if ($img40): ?>
                                                            <div class="py-2 px-2 w-full h-auto">
                                                                <img src="<?php echo esc_url($img40['url']); ?>"
                                                                    alt="<?php echo esc_attr(get_field('mentorship_team_44_name')); ?>"
                                                                    title="<?php echo esc_attr(get_field('mentorship_team_44_name')); ?>" width="150" height="150"
                                                                aspect-[150/150] class="size-full object-top object-cover rounded-full">
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="flex flex-col gap-y-1 px-4 py-4">
                                                            <div class="flex items-start justify-between mb-0.5">
                                                                <div class="flex flex-col">
                                                                    <h4 class="font-semibold text-gray-900 text-start lg:text-base text-sm duration-300 pe-2">
                                                                        <?php the_field('mentorship_team_44_name'); ?></h4>
                                                                    <h5 class="font-medium text-gray-800 text-start text-[13px] duration-300 pe-2">
                                                                        <?php the_field('mentorship_company_44_name'); ?></h5>
                                                                    <p class="font-medium text-[#5e5e5e] text-start text-[13px] duration-300 pe-2">
                                                                        <?php the_field('mentorship_44_designation'); ?></p>
                                                                </div>
                                                                <div class="flex flex-col">
                                                                    <a href="<?php the_field('mentorship_team_linkedin44'); ?>" target="_blank" class="!leading-8 border border-[#0077B5] flex items-center p-1">
                                                                        <svg class="text-[#0077B5] size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                                                            <circle cx="4.983" cy="5.009" r="2.188"></circle>
                                                                            <path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <p class="w-full font-medium text-[#4c4949] lg:text-sm text-sm">
                                                                <?php the_field('mentorship_44_category'); ?>
                                                            </p>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- Venture Funding -->
                <div class="block">
                    <input type="radio" name="benefit" id="benefit3" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                    <div class="flex md:flex-nowrap lg:flex-nowrap flex-wrap justify-between items-center lg:gap-x-10 gap-6 px-4 relative">
                        
                        <div class="w-full flex flex-col mx-auto">
                            <div class="flex items-center">
                                <?php $img1 = get_field('venture_image'); ?>
                                    <?php if ($img1): ?>
                                        <div class="w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php echo esc_attr($img1['alt']); ?>"
                                                title="<?php echo esc_attr($img1['title']); ?>"
                                                width="357" height="230"
                                                class="w-full rounded-md shadow lg:h-[300px] aspect-[357/230] h-auto object-cover object-center" loading="lazy" fetchpriority="low">
                                        </div>
                                    <?php endif; ?>
                            </div>
                            <h2 class="lg:text-2xl md:text-xl text-lg !leading-normal text-center font-semibold text-[#2a1313]">
                                <!-- <?php the_field('about_heading1'); ?> --> 
                            </h2>
                            <p class="font-normal md:text-base text-sm text-justify text-[#4c4949] !leading-7 lg:my-6 my-4">
                                <?php the_field('venture_desc'); ?></p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="block">
                    <input type="radio" name="benefit" id="benefit4" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        <div class="flex flex-wrap gap-y-6 -mx-2.5 items-stretch">
                            <div class="md:w-1/4 sm:w-1/2 w-full px-2.5">
                                <div class="w-full flex flex-col relative rounded-lg p-4 gap-1 bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] h-full">
                                    <div class="flex items-center">
                                        <?php $img1 = get_field('service_image1'); ?>
                                        <?php if ($img1): ?>
                                            <div class="w-full flex justify-center">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('service_title1'); ?>"
                                                    title="<?php the_field('service_title1'); ?>" width="357" height="230"
                                                    class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <!-- <div class="size-16 absolute top-0 rounded-full bg-[#AF4242] shrink-0 flex flex-col items-center justify-center -translate-y-1/2">
                                        <svg class="md:size-7 size-6 text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="m16.24 11.51 1.57-1.57-3.75-3.75-1.57 1.57-4.14-4.13c-.78-.78-2.05-.78-2.83 0l-1.9 1.9c-.78.78-.78 2.05 0 2.83l4.13 4.13L3 17.25V21h3.75l4.76-4.76 4.13 4.13c.95.95 2.23.6 2.83 0l1.9-1.9c.78-.78.78-2.05 0-2.83l-4.13-4.13zm-7.06-.44L5.04 6.94l1.89-1.9L8.2 6.31 7.02 7.5l1.41 1.41 1.19-1.19 1.45 1.45-1.89 1.9zm7.88 7.89-4.13-4.13 1.9-1.9 1.45 1.45-1.19 1.19 1.41 1.41 1.19-1.19 1.27 1.27-1.9 1.9zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34c-.47-.47-1.12-.29-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path></svg>                  
                                    </div> -->
                                    <h3 class="relative text-base md:text-base font-semibold transition-all duration-500 text-balance pt-2"><?php the_field('service_title1'); ?></h3>
                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow"> <?php the_field('service_description1'); ?></div>
                                </div>
                            </div>
                            <div class="md:w-1/4 sm:w-1/2 w-full px-2.5">
                                <div class="w-full flex flex-col relative rounded-lg p-4 gap-1 bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] h-full">
                                    <div class="flex items-center">
                                        <?php $img1 = get_field('service_image2'); ?>
                                        <?php if ($img1): ?>
                                            <div class="w-full flex justify-center">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('service_title2'); ?>"
                                                    title="<?php the_field('service_title2'); ?>" width="357" height="230"
                                                    class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <!-- <div class="size-16 absolute top-0 rounded-full bg-[#AF4242] shrink-0 flex flex-col items-center justify-center -translate-y-1/2">
                                        <svg class="md:size-7 size-6 text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="m16.24 11.51 1.57-1.57-3.75-3.75-1.57 1.57-4.14-4.13c-.78-.78-2.05-.78-2.83 0l-1.9 1.9c-.78.78-.78 2.05 0 2.83l4.13 4.13L3 17.25V21h3.75l4.76-4.76 4.13 4.13c.95.95 2.23.6 2.83 0l1.9-1.9c.78-.78.78-2.05 0-2.83l-4.13-4.13zm-7.06-.44L5.04 6.94l1.89-1.9L8.2 6.31 7.02 7.5l1.41 1.41 1.19-1.19 1.45 1.45-1.89 1.9zm7.88 7.89-4.13-4.13 1.9-1.9 1.45 1.45-1.19 1.19 1.41 1.41 1.19-1.19 1.27 1.27-1.9 1.9zM20.71 7.04a.996.996 0 0 0 0-1.41l-2.34-2.34c-.47-.47-1.12-.29-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path></svg>                  
                                    </div> -->
                                    <h3 class="relative text-base md:text-base font-semibold transition-all duration-500 text-balance pt-2"><?php the_field('service_title2'); ?></h3>
                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow"> <?php the_field('service_description2'); ?></div>
                                </div>
                            </div>
                            <div class="md:w-1/4 sm:w-1/2 w-full px-2.5">
                                <div class="w-full flex flex-col relative rounded-lg p-4 gap-1 bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] h-full">
                                    <div class="flex items-center">
                                        <?php $img1 = get_field('service_image3'); ?>
                                        <?php if ($img1): ?>
                                            <div class="w-full flex justify-center">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('service_title3'); ?>"
                                                    title="<?php the_field('service_title3'); ?>" width="357" height="230"
                                                    class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="relative text-base md:text-base font-semibold transition-all duration-500 text-balance pt-2"><?php the_field('service_title3'); ?></h3>
                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow"> <?php the_field('service_description3'); ?></div>
                                </div>
                            </div>
                            <div class="md:w-1/4 sm:w-1/2 w-full px-2.5">
                                <div class="w-full flex flex-col relative rounded-lg p-4 gap-1 bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] h-full">
                                    <div class="flex items-center">
                                        <?php $img1 = get_field('service_image4'); ?>
                                        <?php if ($img1): ?>
                                            <div class="w-full flex justify-center">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('service_title4'); ?>"
                                                    title="<?php the_field('service_title4'); ?>" width="357" height="230"
                                                    class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="relative text-base md:text-base font-semibold transition-all duration-500 text-balance pt-2"><?php the_field('service_title4'); ?></h3>
                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow"> <?php the_field('service_description4'); ?></div>
                                </div>
                            </div>
                            <div class="md:w-1/4 sm:w-1/2 w-full px-2.5">
                                <div class="w-full flex flex-col relative rounded-lg p-4 gap-1 bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] h-full">
                                    <div class="flex items-center">
                                        <?php $img1 = get_field('service_image5'); ?>
                                        <?php if ($img1): ?>
                                            <div class="w-full flex justify-center">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('service_title5'); ?>"
                                                    title="<?php the_field('service_title5'); ?>" width="357" height="230"
                                                    class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="relative text-base md:text-base font-semibold transition-all duration-500 text-balance pt-2"><?php the_field('service_title5'); ?></h3>
                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow"> <?php the_field('service_description5'); ?></div>
                                </div>
                            </div>
                            <div class="md:w-1/4 sm:w-1/2 w-full px-2.5">
                                <div class="w-full flex flex-col relative rounded-lg p-4 gap-1 bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] h-full">
                                    <div class="flex items-center">
                                        <?php $img1 = get_field('service_image6'); ?>
                                        <?php if ($img1): ?>
                                            <div class="w-full flex justify-center">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('service_title6'); ?>"
                                                    title="<?php the_field('service_title6'); ?>" width="357" height="230"
                                                    class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="relative text-base md:text-base font-semibold transition-all duration-500 text-balance pt-2"><?php the_field('service_title6'); ?></h3>
                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow"> <?php the_field('service_description6'); ?></div>
                                </div>
                            </div>
                            <div class="md:w-1/4 sm:w-1/2 w-full px-2.5">
                                <div class="w-full flex flex-col relative rounded-lg p-4 gap-1 bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] h-full">
                                    <div class="flex items-center">
                                        <?php $img1 = get_field('service_image7'); ?>
                                        <?php if ($img1): ?>
                                            <div class="w-full flex justify-center">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('service_title7'); ?>"
                                                    title="<?php the_field('service_title7'); ?>" width="357" height="230"
                                                    class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="relative text-base md:text-base font-semibold transition-all duration-500 text-balance pt-2"><?php the_field('service_title7'); ?></h3>
                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow"> <?php the_field('service_description7'); ?></div>
                                </div>
                            </div>
                            <div class="md:w-1/4 sm:w-1/2 w-full px-2.5">
                                <div class="w-full flex flex-col relative rounded-lg p-4 gap-1 bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:lg:bg-gradient-to-b hover:lg:from-[#fda8ac] h-full">
                                    <div class="flex items-center">
                                        <?php $img1 = get_field('service_image8'); ?>
                                        <?php if ($img1): ?>
                                            <div class="w-full flex justify-center">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('service_title8'); ?>"
                                                    title="<?php the_field('service_title8'); ?>" width="357" height="230"
                                                    class="w-full rounded-md shadow aspect-[357/230] h-auto object-cover object-top rounded-md" loading="lazy" fetchpriority="low">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="relative text-base md:text-base font-semibold transition-all duration-500 text-balance pt-2"><?php the_field('service_title8'); ?></h3>
                                    <div class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 text-justify grow"> <?php the_field('service_description8'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <input type="radio" name="benefit" id="benefit5" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        <div class="w-full flex flex-col relative mx-auto rounded-lg p-5 gap-2.5 bg-gradient-to-b from-[#FFFFFF] to-[#ffebeb] hover:bg-gradient-to-b hover:from-[#fda8ac] hover:to-[#ffebeb] h-full">
                            <a href="https://project.imgglobal.in/habit-foundation/" class="relative cursor-pointer text-base md:text-lg font-semibold transition-all duration-500 text-balance">
                                Programmes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // event date listing date
    document.querySelectorAll('.event-tabs, .event-tabs2').forEach(tabGroup => {
        const tabButtons = tabGroup.querySelectorAll('.agile-tab-btn');
        const tabContents = tabGroup.querySelectorAll('.agile-tab-content');

        // Function to show a specific tab
        function showTab(btn) {
            const target = btn.getAttribute('data-tab');

            // Hide all content
            tabContents.forEach(content => content.classList.add('hidden'));

            // Remove active class from all buttons
            tabButtons.forEach(button => {
                button.classList.remove('border-b-2', 'border-[#bf4b50]', 'text-[#bf4b50]');
                button.classList.add('text-gray-700');
            });

            // Show target content
            document.getElementById(target).classList.remove('hidden');

            // Activate clicked tab
            btn.classList.add('border-b-2', 'border-[#bf4b50]', 'text-[#bf4b50]');
            btn.classList.remove('text-gray-700');
        }

        // Always open first tab by default
        if (tabButtons.length > 0) {
            showTab(tabButtons[0]);
        }

        // Add click event to each button
        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => showTab(btn));
        });
    });
</script>

<?php get_footer(); ?>