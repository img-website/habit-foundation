<?php
/* Template Name: key-event page */
get_header();?>
<section class="relative w-full md:h-[200px] flex items-center max-md:py-4">
    <?php $bg = get_field('events_banner_image'); ?>
    <?php if ($bg): ?>
    <div class="absolute inset-0">
        <img src="<?php echo esc_url($bg['url']); ?>" alt="events Banner" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-[#01142a8c] bg-opacity-70"></div>
    </div>
    <?php endif; ?>
    <div class="relative z-10 max-w-7xl mx-auto px-4 w-full">
        <h2 class="text-white text-2xl sm:text-3xl  md:text-5xl font-bold lg:mb-4 mb-2 text-center justify-center">
            <?php the_field('key_events_heading'); ?>
            <span class="text-[lime-500]"><?php the_field('events_highlight'); ?></span>
        </h2>
        <div class="flex items-center text-white text-sm font-medium space-x-2 justify-center">
            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="text-sm font-medium inline-block hover:underline lg:text-base font-medium tracking-[0.8px]">Home</a>
            <span class="font-medium inline-block text-[#bf4b50]">—</span>
            <a href="https://project.imgglobal.in/habit-foundation/key-event/">
            <span
                class="text-sm font-medium inline-block text-[#bf4b50] lg:text-base font-medium tracking-[0.8px]"><?php the_field('breadcrumb_label_keyevents'); ?></span>
            </a>
        </div>
    </div>
</section>

<section
    class="w-full bg-white relative lg:py-16 md:py-8 py-6 animate-bg-zoom bg-[url(<?php echo get_template_directory_uri(); ?>/assets/img/elevate4.webp)] bg-cover bg-center">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="w-full flex flex-col">
            <!-- <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
            <?php the_field('key_event_badge'); ?>
            </span> -->
            <h2
                class="w-full lg:text-2xl md:text-xl text-lg mx-auto !leading-normal text-center font-semibold mx-auto text-[#2a1313] lg:mb-2 mb-3">
                <?php the_field('key_main_heading'); ?>
            </h2>
        </div>
        <div class="w-full flex flex-col mx-auto group lg:mt-6 mt-3 lg:gap-6 gap-4">
            <div class="w-full overflow-x-auto">
                <ul class="flex flex-nowrap justify-center gap-4 w-max min-w-full py-2 px-2 lg:px-0">
                    <li class="group/event">
                        <label for="event1"
                            class="cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-9 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50]  group-has-[#event1:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                
                                <div
                                    class="text-[#bf4b50] group-has-[#event1:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('event_top_heading_1'); ?>
                                </div>
                            </div>
                        </label>
                    </li>

                    <li class="group/event">
                        <label for="event2"
                            class="cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-9 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50]  group-has-[#event2:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <!-- <span class="lg:size-5 size-4 *:!size-full inline-block ">
                                    <svg class="!text-[#bf4b50] group-has-[#event2:checked]:!text-white"
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
                                </span> -->
                                <div
                                    class="text-[#bf4b50] group-has-[#event2:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('event_top_heading_2'); ?>
                                </div>
                            </div>
                        </label>
                    </li>
<!-- 
                    <li class="group/event">
                        <label for="event3"
                            class=" cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-9 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50]  group-has-[#event3:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <div
                                    class="text-[#bf4b50] group-has-[#event3:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('event_top_heading_3'); ?>
                                </div>
                            </div>

                        </label>
                    </li> -->

                    <li class="group/event">
                        <label for="event4"
                            class=" cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-9 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50]  group-has-[#event4:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <!-- <span class="lg:size-5 size-4 *:!size-full inline-block group-has-[#event4:checked]:!text-white">
                                    <svg class="!text-[#bf4b50] group-has-[#event4:checked]:!text-white" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                </span> -->
                                <div
                                    class="text-[#bf4b50] group-has-[#event4:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('event_top_heading_4'); ?>
                                </div>
                            </div>

                        </label>
                    </li>

                    <li class="group/event">
                        <label for="event5"
                            class=" cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-9 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50]  group-has-[#event5:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <!-- <span class="lg:size-5 size-4 *:!size-full inline-block group-has-[#event5:checked]:!text-white">
                                    <svg class="!text-[#bf4b50] group-has-[#event5:checked]:!text-white" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M11 20h-6a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7"></path><path d="M15 19l2 2l4 -4"></path><path d="M9 17h2.5"></path></svg>
                                </span> -->
                                <div
                                    class="text-[#bf4b50] group-has-[#event5:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('event_top_heading_5'); ?>
                                </div>
                            </div>

                        </label>
                    </li>

                    <!-- <li class="group/event">
                        <label for="event6"
                            class=" cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-9 sm:py-3 sm:px-5 py-2 px-2 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50]  group-has-[#event6:checked]:!bg-[#bf4b50]">
                            <div class="flex items-center lg:gap-2 gap-1">
                                <div
                                    class="text-[#bf4b50] group-has-[#event6:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('event_top_heading_6'); ?>
                                </div>
                            </div>
                        </label>
                    </li> -->
                </ul>
            </div>
            <div class="content-sec w-full">
                <div class="block">
                    <input type="radio" name="event" id="event1" class="hidden peer" checked="">
                    <div class="hidden peer-checked:flex flex-wrap">
                    <div class="w-full event-tabs group">
                            <div class="w-full flex flex-wrap mx-auto justify-center gap-2 lg:gap-4">
                                <button class="agile-tab-btn font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]" data-tab="tab1">2024</button>
                                <button class="agile-tab-btn font-semibold px-4 py-3 text-gray-700" data-tab="tab2">2025</button>
                            </div>
                            <div class="agile-tab-content mt-8" id="tab1">
                                <div class="w-full">
                                    <div class="block">
                                        <input type="radio" name="date" id="date1" class="hidden peer" checked="">
                                        <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                                        <div
                                            class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                            <div class="flex flex-col gap-y-1 my-4">
                                                <h4
                                                    class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                                    <?php the_field('event_title_1'); ?></h4>
                                                <p
                                                    class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                    <?php the_field('event_description_1'); ?>
                                                </p>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3 lg:gap-4 gap-2 h-full">
                                                <?php $img1 = get_field('event_image_1'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <div class="absolute inset-0 w-full lg:top-0 lg:left-0 max-w-full h-full rounded-md bg-cover bg-center filter blur-[2px] brightness-75 z-0"
                                                        style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                                    </div>
                                                    <!-- Foreground image -->
                                                    <img 
                                                        src="<?php echo esc_url($img1['url']); ?>" 
                                                        alt="<?php the_field('event_title_1'); ?>" 
                                                        title="<?php the_field('event_title_1'); ?>" 
                                                        width="373" 
                                                        height="240"
                                                        class="relative z-10 w-full aspect-[361/240] h-auto rounded-md shadow object-contain object-top"
                                                    >
                                                </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('event_image_2'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_1'); ?>"
                                                        title="<?php the_field('event_title_1'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                                </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('event_image_3'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_1'); ?>"
                                                        title="<?php the_field('event_title_1'); ?>" width="373" height="240"
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
                                                    <?php the_field('event_title_2'); ?></h4>
                                                <p
                                                    class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                    <?php the_field('event_description_2'); ?></p>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3 lg:gap-4 gap-2 h-full">
                                                <?php $img1 = get_field('event_image_4'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <div class="absolute inset-0 w-full lg:top-0 lg:left-0 max-w-full h-full rounded-md bg-cover bg-center filter blur-[2px] brightness-75 z-0"
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
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_2'); ?>"
                                                        title="<?php the_field('event_title_2'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                                </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('event_image_6'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
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
                                                    class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                    <?php the_field('event_description_3'); ?></p>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3 lg:gap-4 gap-2 h-full">
                                                <?php $img1 = get_field('event_image_8'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <div class="absolute inset-0 w-full lg:top-0 lg:left-0 max-w-full h-full rounded-md bg-cover bg-center filter blur-[2px] brightness-75 z-0"
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
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_3'); ?>"
                                                        title="<?php the_field('event_title_3'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                                </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('event_image_10'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
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
                                                    class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                    <?php the_field('event_description_4'); ?></p>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3 lg:gap-4 gap-2 h-full">
                                                <?php $img1 = get_field('event_image_11'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_4'); ?>"
                                                        title="<?php the_field('event_title_4'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md inset-0 backdrop-blur-md bg-[#000000]">
                                                </div>
                                                <?php endif; ?>

                                                <?php $img1 = get_field('event_image_12'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_4'); ?>"
                                                        title="<?php the_field('event_title_4'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                                </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('event_image_13'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
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
                                                    class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                    <?php the_field('event_description_5'); ?></p>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3 lg:gap-4 gap-2 h-full">
                                                <?php $img1 = get_field('event_image_14'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_5'); ?>"
                                                        title="<?php the_field('event_title_5'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md inset-0 backdrop-blur-md bg-[#000000]">
                                                </div>
                                                <?php endif; ?>

                                                <?php $img1 = get_field('event_image_15'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_5'); ?>"
                                                        title="<?php the_field('event_title_5'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                                </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('event_image_16'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
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
                                                    class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                    <?php the_field('event_description_6'); ?></p>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3 lg:gap-4 gap-2 h-full">
                                                <?php $img1 = get_field('event_image_17'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_6'); ?>"
                                                        title="<?php the_field('event_title_6'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md inset-0 backdrop-blur-md bg-[#000000]">
                                                </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('event_image_18'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_6'); ?>"
                                                        title="<?php the_field('event_title_6'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                                </div>
                                                <?php endif; ?>
                                                <?php $img1 = get_field('event_image_19'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
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

                                    <!-- <div class="block">
                                        <input type="radio" name="date" id="date2" class="hidden peer">
                                        <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="agile-tab-content hidden text-center mt-8" id="tab2">2025 Event Calendar Coming Soon</div>
                    </div>
                    </div>
                </div>
                    <!-- second tab  -->
                    <div class="block">
                        <input type="radio" name="event" id="event2" class="hidden peer">
                        <div class="hidden peer-checked:flex flex-wrap">
                        <div class="w-full event-tabs">
                            <div class="w-full flex flex-wrap mx-auto justify-center gap-2 lg:gap-4">
                                <button class="agile-tab-btn font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]" data-tab="tab3">2025</button>
                                <button class="agile-tab-btn font-semibold px-4 py-3 text-gray-700" data-tab="tab4">2026</button>
                            </div>
                            <div class="agile-tab-content" id="tab3">
                                <!-- tab content -->
                                <div class="w-full mt-5" id="orientation-tab">
                                    <div
                                        class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                        <div class="flex flex-col gap-y-1 my-4">
                                            <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_2'); ?></span>
                                            <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                                <?php the_field('event_title_7'); ?></h4>
                                            <p class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                <?php the_field('event_description_7'); ?></p>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3 grid-cols-1 lg:gap-4 gap-2 h-full">
                                            <?php $img1 = get_field('event_image_20'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <div class="absolute inset-0 w-full lg:top-0 lg:left-0 max-w-full h-full rounded-md bg-cover bg-center filter blur-[2px] brightness-75 z-0"
                                                    style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                                </div>
                                                <!-- Foreground image -->
                                                <img 
                                                    src="<?php echo esc_url($img1['url']); ?>" 
                                                    alt="<?php the_field('event_title_7'); ?>" 
                                                    title="<?php the_field('event_title_7'); ?>" 
                                                    width="284" 
                                                    height="188"
                                                    class="relative z-10 w-full aspect-[284/188] h-auto rounded-md shadow object-contain object-top"
                                                >
                                            </div>
                                            <?php endif; ?>

                                            <?php $img1 = get_field('event_image_21'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_7'); ?>"
                                                    title="<?php the_field('event_title_7'); ?>" width="284" height="188"
                                                    class="w-full rounded-md shadow aspect-[284/188] h-auto object-cover object-top rounded-md ">
                                            </div>
                                            <?php endif; ?>

                                            <?php $img1 = get_field('event_image_22'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_7'); ?>"
                                                    title="<?php the_field('event_title_7'); ?>" width="284" height="188"
                                                    class="w-full rounded-md shadow aspect-[284/188] h-auto object-cover object-top rounded-md ">
                                            </div>
                                            <?php endif; ?>
                                            <?php $img1 = get_field('event_image_23'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_7'); ?>"
                                                    title="<?php the_field('event_title_7'); ?>" width="284" height="188"
                                                    class="w-full rounded-md shadow aspect-[284/188] h-auto object-cover object-top rounded-md ">
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agile-tab-content hidden text-center mt-8" id="tab4">2026 Event Calendar Coming Soon</div>
                        </div>
                        </div>
                    </div>
                    <!-- third tab -->
                    <div class="block">
                        <input type="radio" name="event" id="event3" class="hidden peer">
                        <div class="hidden peer-checked:flex flex-wrap">
                                <div class="w-full flex flex-wrap">
                                <button
                                    class="design-tab-btn text-base lg:text-lg font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]"
                                    data-tab="design-tab">Vesit Hackathon</button>
                                </div>
                                
                        </div>
                    </div>
                    <div class="block">
                        <input type="radio" name="event" id="event4" class="hidden peer">
                        <div class="hidden peer-checked:flex flex-wrap">
                            <div class="w-full flex flex-wrap">
                                <button
                                    class="design-tab-btn text-base lg:text-lg font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]"
                                    data-tab="design-tab">Basic</button>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <input type="radio" name="event" id="event5" class="hidden peer">
                        <div class="hidden peer-checked:flex flex-wrap">
                        <div class="w-full event-tabs">
                            <div class="w-full flex flex-wrap mx-auto justify-center gap-2 lg:gap-4">
                                <button class="agile-tab-btn font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]" data-tab="tab5">2024</button>
                                <button class="agile-tab-btn font-semibold px-4 py-3 text-gray-700" data-tab="tab6">2025</button>
                            </div>
                            <div class="agile-tab-content mt-8" id="tab5">
                                <div class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                            <span
                                                class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_3'); ?></span>
                                            <h4
                                                class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                                <?php the_field('event_title_8'); ?></h4>
                                            <p
                                                class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                <?php the_field('event_description_8'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3 lg:gap-4 gap-2 h-full">
                                                <?php $img1 = get_field('event_image_24'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <div class="absolute inset-0 w-full lg:top-0 lg:left-0 max-w-full h-full rounded-md bg-cover bg-center filter blur-[2px] brightness-75 z-0"
                                                        style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                                    </div>
                                                    <!-- Foreground image -->
                                                    <img 
                                                        src="<?php echo esc_url($img1['url']); ?>" 
                                                        alt="<?php the_field('event_title_8'); ?>" 
                                                        title="<?php the_field('event_title_8'); ?>" 
                                                        width="284" 
                                                        height="240"
                                                        class="relative z-10 w-full aspect-[284/188] h-auto rounded-md shadow object-contain object-top"
                                                    >
                                                </div>
                                                <?php endif; ?>

                                                <?php $img1 = get_field('event_image_25'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_8'); ?>"
                                                        title="<?php the_field('event_title_8'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                                </div>
                                                <?php endif; ?>

                                                <?php $img1 = get_field('event_image_26'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_8'); ?>"
                                                        title="<?php the_field('event_title_8'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                                </div>
                                                <?php endif; ?>

                                                <?php $img1 = get_field('event_image_27'); ?>
                                                <?php if ($img1): ?>
                                                <div class="relative w-full flex justify-center mb-2">
                                                    <img src="<?php echo esc_url($img1['url']); ?>"
                                                        alt="<?php the_field('event_title_8'); ?>"
                                                        title="<?php the_field('event_title_8'); ?>" width="373" height="240"
                                                        class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                                </div>
                                                <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="agile-tab-content hidden text-center mt-8" id="tab6">2025 Event Calendar Coming Soon</div>
                        </div>
                        </div>
                    </div>
                    <div class="block">
                        
                        <input type="radio" name="event" id="event6" class="hidden peer">
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