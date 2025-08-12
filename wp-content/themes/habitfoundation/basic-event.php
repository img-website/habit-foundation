<?php
/* Template Name: basic-event page */
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
            <?php the_field('basic_events_heading'); ?>
            <span class="text-[lime-500]"><?php the_field('events_highlight'); ?></span>
        </h2>
        <div class="flex items-center text-white text-sm font-medium space-x-2 justify-center">
            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="text-sm font-medium inline-block hover:underline lg:text-base font-medium tracking-[0.8px]">Home</a>
            <span class="font-medium inline-block text-[#bf4b50]">—</span>
            <a href="https://project.imgglobal.in/habit-foundation/basic-event/">
            <span
                class="text-sm font-medium inline-block text-[#bf4b50] lg:text-base font-medium tracking-[0.8px]"><?php the_field('label_basicevents'); ?></span>
            </a>
        </div>
    </div>
</section>

<section class="w-full bg-white relative lg:py-16 md:py-8 py-6 animate-bg-zoom bg-[url(<?php echo get_template_directory_uri(); ?>/assets/img/elevate4.webp)] bg-cover bg-center">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="w-full flex flex-col">
            <!-- <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
            <?php the_field('basic_events_badge'); ?>
            </span> -->
            <h2 class="w-full lg:text-2xl md:text-xl text-lg mx-auto !leading-normal text-center font-semibold mx-auto text-[#2a1313] lg:mb-6 mb-4">
                <?php the_field('basic_events_title'); ?>
            </h2>
        </div>
        <div class="w-full flex flex-col mx-auto group mt-6 lg:gap-6 gap-4">
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
                                <div
                                    class="text-[#bf4b50] group-has-[#event2:checked]:!text-white font-semibold tracking-[0.5px] lg:!text-base text-[13px] sm:!text-sm">
                                    <?php the_field('event_top_heading_2'); ?>
                                </div>
                            </div>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="content-sec w-full">
                <div class="block">
                    <input type="radio" name="event" id="event1" class="hidden peer" checked="">
                    <div class="hidden peer-checked:flex flex-wrap">
                        <div class="w-full event-tabs">
                            <div class="w-full flex flex-wrap mx-auto justify-center gap-2 lg:gap-4">
                                <button class="agile-tab-btn font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]" data-tab="tab1">2025</button>
                                <button class="agile-tab-btn font-semibold px-4 py-3 text-gray-700" data-tab="tab2">2024</button>
                            </div>
                            <div class="agile-tab-content mt-8" id="tab1">
                                <div class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <div class="flex items-start lg:flex-row flex-col gap-2 mb-2">
                                            <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]">
                                                <?php the_field('event_title_9'); ?></h4>
                                            <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
                                        </div>
                                        <p class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                        <?php the_field('event_description_9'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3 lg:gap-4 gap-2 h-full">
                                            <?php $img1 = get_field('event_image_28'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <div class="absolute inset-0 w-full lg:top-0 lg:left-0 max-w-full h-full rounded-md bg-cover bg-center filter blur-[2px] brightness-75 z-0"
                                                    style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                                </div>
                                                <!-- Foreground image -->
                                                <img 
                                                    src="<?php echo esc_url($img1['url']); ?>" 
                                                    alt="<?php the_field('event_title_9'); ?>" 
                                                    title="<?php the_field('event_title_9'); ?>" 
                                                    width="284" 
                                                    height="188"
                                                    class="relative z-10 w-full aspect-[284/240] h-auto rounded-md shadow object-contain object-top"
                                                >
                                            </div>
                                            <?php endif; ?>

                                            <?php $img1 = get_field('event_image_29'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_9'); ?>"
                                                    title="<?php the_field('event_title_9'); ?>" width="373" height="240"
                                                    class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                            </div>
                                            <?php endif; ?>
                                            <?php $img1 = get_field('event_image_30'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_9'); ?>"
                                                    title="<?php the_field('event_title_9'); ?>" width="373" height="240"
                                                    class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                </div>
                                <div
                                    class="w-full h-full flex lg:flex-row flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4 gap-4">
                                        <div class="lg:w-4/5 w-full h-full flex items-center">
                                            <div class="flex flex-col gap-y-1 my-4">
                                                <div class="flex items-start lg:flex-row flex-col gap-2 mb-2">
                                                    <h4
                                                        class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]">
                                                        <?php the_field('event_title_11'); ?></h4>
                                                        <span
                                                        class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_5'); ?></span>
                                                    </div>
                                                    <p
                                                        class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                        <?php the_field('event_description_11'); ?></p>
                                            </div>
                                        </div>
                                        <div class="lg:w-1/5 w-full h-full flex items-end">
                                            <?php $img1 = get_field('event_image_34'); ?>
                                            <?php if ($img1): ?>
                                            <div class="py-2 px-2 w-full">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_11'); ?>"
                                                    title="<?php the_field('event_title_11'); ?>" width="473" height="440"
                                                    class="w-full rounded-md shadow aspect-[361/440] h-auto object-contain object-top rounded-md">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="agile-tab-content mt-8" id="tab2">
                                <div
                                    class="w-full h-full flex lg:flex-row flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4 gap-4">
                                        <div class="lg:w-4/5 w-full h-full flex items-center">
                                            <div class="flex flex-col gap-y-1 my-4">
                                                <div class="flex items-start lg:flex-row flex-col gap-2 mb-2">
                                                <h4
                                                    class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]">
                                                    <?php the_field('event_title_12'); ?></h4>
                                                <span
                                                    class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_6'); ?></span>
                                                </div>    
                                                <p
                                                    class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                    <?php the_field('event_description_12'); ?></p>
                                            </div>
                                        </div>
                                        <div class="lg:w-1/5 w-full h-full flex items-end">
                                            <?php endif; ?>
                                            <?php $img1 = get_field('event_image_35'); ?>
                                            <?php if ($img1): ?>
                                            <div class="py-2 px-2 w-full">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_12'); ?>"
                                                    title="<?php the_field('event_title_12'); ?>" width="473" height="440"
                                                    class="w-full rounded-md shadow aspect-[361/440] h-auto object-contain object-top rounded-md">
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                </div>
                                <div class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                        <div class="flex flex-col gap-y-1 my-4">
                                            <div class="flex items-start lg:flex-row flex-col gap-2 mb-2">
                                            <h4
                                                class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]">
                                                <?php the_field('event_title_10'); ?></h4>
                                            <span
                                                class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_7'); ?></span>
                                            </div>
                                            <p class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                <?php the_field('event_description_10'); ?></p>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3 lg:gap-4 gap-2 h-full">
                                            <?php $img1 = get_field('event_image_31'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <div class="absolute inset-0 w-full lg:top-0 lg:left-0 max-w-full h-full rounded-md bg-cover bg-center filter blur-[2px] brightness-75 z-0"
                                                    style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                                </div>
                                                <!-- Foreground image -->
                                                <img 
                                                    src="<?php echo esc_url($img1['url']); ?>" 
                                                    alt="<?php the_field('event_title_10'); ?>" 
                                                    title="<?php the_field('event_title_10'); ?>" 
                                                    width="284" 
                                                    height="188"
                                                    class="relative z-10 w-full aspect-[284/240] h-auto rounded-md shadow object-contain object-top"
                                                >
                                            </div>
                                            <?php endif; ?>
                                            <?php $img1 = get_field('event_image_32'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_10'); ?>"
                                                    title="<?php the_field('event_title_10'); ?>" width="373" height="240"
                                                    class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                            </div>
                                            <?php endif; ?>
                                            <?php $img1 = get_field('event_image_33'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_10'); ?>"
                                                    title="<?php the_field('event_title_10'); ?>" width="373" height="240"
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
                    <input type="radio" name="event" id="event2" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap">
                        <div class="w-full event-tabs">
                            <div class="w-full flex flex-wrap mx-auto justify-center gap-2 lg:gap-4">
                                <button class="agile-tab-btn font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]" data-tab="tab3">2025</button>
                                <button class="agile-tab-btn font-semibold px-4 py-3 text-gray-700" data-tab="tab4">2024</button>
                            </div>
                            <!-- tab content -->
                            <div class="agile-tab-content mt-8" id="tab3">
                                <div class="w-full mt-5" id="orientation-tab">
                                    <div
                                        class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                        <div class="flex flex-col gap-y-1 my-4">
                                            <div class="flex items-start lg:flex-row flex-col gap-2 mb-2">
                                            <h4
                                                class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]">
                                                <?php the_field('event_title_13'); ?></h4>
                                            <span
                                                class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_8'); ?></span>
                                            </div>
                                            <p
                                                class="font-normal text-[#4c4949] w-full md:text-base text-sm text-justify !leading-7 grow">
                                                <?php the_field('event_description_13'); ?></p>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3 lg:gap-4 gap-2 h-full">
                                            <?php $img1 = get_field('event_image_36'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                                <div class="absolute inset-0 w-full lg:top-0 lg:left-0 max-w-full h-full rounded-md bg-cover bg-center filter blur-[2px] brightness-75 z-0"
                                                    style="background-image: url('<?php echo esc_url($img1['url']); ?>');">
                                                </div>
                                                <!-- Foreground image -->
                                                <img 
                                                    src="<?php echo esc_url($img1['url']); ?>" 
                                                    alt="<?php the_field('event_title_13'); ?>" 
                                                    title="<?php the_field('event_title_13'); ?>" 
                                                    width="284" 
                                                    height="188"
                                                    class="relative z-10 w-full aspect-[284/188] h-auto rounded-md shadow object-contain object-top"
                                                >
                                            </div>
                                            <?php endif; ?>
                                            <?php $img1 = get_field('event_image_37'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_13'); ?>"
                                                    title="<?php the_field('event_title_13'); ?>" width="373" height="240"
                                                    class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                            </div>
                                            <?php endif; ?>

                                            <?php $img1 = get_field('event_image_38'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_13'); ?>"
                                                    title="<?php the_field('event_title_13'); ?>" width="373" height="240"
                                                    class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                            </div>
                                            <?php endif; ?>
                                            <?php $img1 = get_field('event_image_39'); ?>
                                            <?php if ($img1): ?>
                                            <div class="relative w-full flex justify-center mb-2">
                                                <img src="<?php echo esc_url($img1['url']); ?>"
                                                    alt="<?php the_field('event_title_13'); ?>"
                                                    title="<?php the_field('event_title_13'); ?>" width="373" height="240"
                                                    class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agile-tab-content mt-9" id="tab4">
                                2025 Event Calendar Coming Soon
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>