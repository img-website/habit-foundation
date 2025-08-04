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
            <h2
                class="w-full lg:text-2xl md:text-xl text-lg mx-auto !leading-normal text-center font-semibold mx-auto text-[#2a1313] lg:mb-6 mb-4">
                <?php the_field('basic_events_title'); ?>
            </h2>
        </div>
        <div class="w-full flex flex-col mx-auto group mt-6 lg:gap-6 gap-4">
            <ul class="flex flex-wrap justify-center gap-3">
                <li class="group/event">
                    <label for="event1"
                        class="cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-7 py-3 px-5 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50]  group-has-[#event1:checked]:!bg-[#bf4b50]">
                        <div class="flex items-center lg:gap-2 gap-1">
                            <span class="size-5 *:!size-full inline-block">

                                <svg class="!text-[#bf4b50] group-has-[#event1:checked]:!text-white"
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
                            <div
                                class="text-[#bf4b50] group-has-[#event1:checked]:!text-white font-semibold tracking-[0.5px] lg:text-base xs:text-[13px] sm:text-sm">
                                <?php the_field('event_top_heading_1'); ?>
                            </div>
                        </div>
                    </label>
                </li>

                <li class="group/event">
                    <label for="event2"
                        class="cursor-pointer inline-flex items-center justify-between lg:py-[10px] lg:px-7 py-3 px-5 text-white rounded-full w-full duration-300 transition-all bg-white ring-1 ring-[#bf4b50]  group-has-[#event2:checked]:!bg-[#bf4b50]">
                        <div class="flex items-center lg:gap-2 gap-1">
                            <span class="size-5 *:!size-full inline-block ">
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
                            </span>
                            <div
                                class="text-[#bf4b50] group-has-[#event2:checked]:!text-white font-semibold tracking-[0.5px] lg:text-base xs:text-[13px] sm:text-sm">
                                <?php the_field('event_top_heading_2'); ?>
                            </div>
                        </div>
                    </label>
                </li>
            </ul>
            <div class="content-sec w-full">
                <div class="block">
                    <input type="radio" name="event" id="event1" class="hidden peer" checked="">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        <div class="w-full event-tabs">
                            <div class="w-full mt-5">
                            <div class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                <div class="flex flex-col gap-y-1 my-4">
                                    <span
                                        class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
                                    <h4
                                        class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                        <?php the_field('event_title_9'); ?></h4>
                                    <p
                                        class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                    <?php the_field('event_description_9'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_28'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[383px] lg:h-[324px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
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
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_9'); ?>"
                                                title="<?php the_field('event_title_9'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_30'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_9'); ?>"
                                                title="<?php the_field('event_title_9'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                            </div>
                            
                            <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <span
                                            class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('event_title_10'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('event_description_10'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_31'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[383px] lg:h-[324px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
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
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_10'); ?>"
                                                title="<?php the_field('event_title_10'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_33'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_10'); ?>"
                                                title="<?php the_field('event_title_10'); ?>" width="373" height="240"
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
                                                class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
                                            <h4
                                                class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                                <?php the_field('event_title_11'); ?></h4>
                                            <p
                                                class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
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
                            <div
                                class="w-full h-full flex lg:flex-row bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="lg:w-4/5 w-full h-full flex items-center">
                                        <div class="flex flex-col gap-y-1 my-4">
                                            <span
                                                class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
                                            <h4
                                                class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                                <?php the_field('event_title_12'); ?></h4>
                                            <p
                                                class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
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
                            
                        </div>
                        </div>
                    </div>
                </div>
                <!-- second tab  -->
                <div class="block">
                    <!-- <label for="event2" class="inline-flex md:hidden items-center justify-between p-4 mt-4 text-white rounded-2xl w-full hover:md:bg-black/10 duration-300 transition-all bg-theme4 group-has-[#event2:checked]:!bg-[#0876bd]">
                        <div class="flex items-center gap-4">
                            <span class="size-5 *:!size-full inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3409 20.5788H20.5468C20.7743 20.5788 20.9925 20.6692 21.1534 20.83C21.3142 20.9909 21.4046 21.2091 21.4046 21.4367C21.4046 21.6642 21.3142 21.8824 21.1534 22.0433C20.9925 22.2041 20.7743 22.2945 20.5468 22.2945H17.9732C17.7456 22.2945 17.5274 22.2041 17.3665 22.0433C17.2057 21.8824 17.1153 21.6642 17.1153 21.4367V18.8631C17.1153 18.6355 17.2057 18.4173 17.3665 18.2564C17.5274 18.0956 17.7456 18.0052 17.9732 18.0052C18.2007 18.0052 18.4189 18.0956 18.5798 18.2564C18.7406 18.4173 18.831 18.6355 18.831 18.8631V19.6523C20.3773 18.2608 21.4658 16.4334 21.953 14.411C22.4402 12.3887 22.3033 10.2661 21.5602 8.3231C20.8172 6.38008 19.5029 4.70775 17.7906 3.52647C16.0783 2.3452 14.0483 1.71039 11.9681 1.70571C11.1652 1.70544 10.365 1.79755 9.58321 1.98023C9.36994 2.01333 9.15202 1.96483 8.97292 1.84439C8.79382 1.72396 8.6667 1.54044 8.61691 1.33043C8.56711 1.12043 8.5983 0.899372 8.70426 0.711345C8.81022 0.523318 8.98316 0.382139 9.18859 0.315963C11.74 -0.281113 14.4166 -0.0274118 16.8104 1.03838C19.2041 2.10418 21.1836 3.92358 22.4471 6.21916C23.7105 8.51474 24.1886 11.1605 23.8083 13.7531C23.428 16.3457 22.2103 18.7427 20.3409 20.5788ZM14.3437 22.0199C13.5647 22.202 12.7674 22.2941 11.9674 22.2944C9.88713 22.2898 7.85711 21.655 6.1448 20.4737C4.4325 19.2924 3.11824 17.6201 2.37522 15.6771C1.63219 13.734 1.49525 11.6115 1.98244 9.58911C2.46964 7.56672 3.55811 5.73938 5.10443 4.34787V5.13711C5.10443 5.36463 5.19481 5.58283 5.35569 5.74371C5.51657 5.90459 5.73477 5.99497 5.96229 5.99497C6.18981 5.99497 6.40802 5.90459 6.5689 5.74371C6.72978 5.58283 6.82016 5.36463 6.82016 5.13711V2.5635C6.82016 2.33598 6.72978 2.11778 6.5689 1.9569C6.40802 1.79602 6.18981 1.70564 5.96229 1.70564H3.38869C3.16117 1.70564 2.94297 1.79602 2.78209 1.9569C2.62121 2.11778 2.53083 2.33598 2.53083 2.5635C2.53083 2.79102 2.62121 3.00923 2.78209 3.17011C2.94297 3.33099 3.16117 3.42137 3.38869 3.42137H3.59458C1.72513 5.25743 0.507425 7.6545 0.12716 10.2471C-0.253106 12.8396 0.22493 15.4854 1.48837 17.781C2.75182 20.0766 4.73134 21.896 7.1251 22.9618C9.51885 24.0276 12.1955 24.2813 14.7469 23.6842C14.9523 23.618 15.1252 23.4768 15.2312 23.2888C15.3371 23.1008 15.3683 22.8797 15.3185 22.6697C15.2687 22.4597 15.1416 22.2762 14.9625 22.1558C14.7834 22.0353 14.5655 21.9868 14.3522 22.0199H14.3437ZM16.0334 14.2903C16.2179 13.963 16.362 13.6144 16.4623 13.2523L17.4145 13.0893C17.5706 13.0665 17.7132 12.9879 17.8157 12.868C17.9182 12.7481 17.9738 12.5951 17.9722 12.4373V11.5795C17.9723 11.4212 17.9164 11.268 17.8143 11.1471C17.7122 11.0261 17.5706 10.9453 17.4145 10.9189L16.4623 10.7645C16.362 10.4024 16.2179 10.0538 16.0334 9.72648L16.591 8.93725C16.684 8.80965 16.7281 8.65297 16.7156 8.4956C16.703 8.33823 16.6344 8.19058 16.5224 8.07938L15.9047 7.46171C15.7935 7.34965 15.6458 7.28111 15.4885 7.26852C15.3311 7.25593 15.1744 7.30012 15.0468 7.39308L14.2576 7.9507C13.9303 7.76615 13.5817 7.62211 13.2196 7.52176L13.0566 6.56953C13.0376 6.41032 12.9606 6.26369 12.8403 6.15766C12.7201 6.05163 12.5649 5.99363 12.4046 5.99476H11.5467C11.389 5.9931 11.236 6.04869 11.1161 6.15122C10.9962 6.25376 10.9176 6.39628 10.8948 6.55237L10.7318 7.50461C10.3696 7.60496 10.0211 7.74899 9.69374 7.93354L8.90451 7.37593C8.77691 7.28296 8.62023 7.23878 8.46286 7.25137C8.30549 7.26396 8.15784 7.33249 8.04664 7.44456L7.42897 8.06222C7.31691 8.17342 7.24837 8.32108 7.23578 8.47845C7.22319 8.63581 7.26738 8.79249 7.36034 8.92009L7.91796 9.70933C7.73341 10.0367 7.58937 10.3852 7.48902 10.7473L6.53679 10.9018C6.38074 10.9281 6.23909 11.009 6.137 11.1299C6.03491 11.2508 5.97899 11.4041 5.97918 11.5623V12.4202C5.97752 12.5779 6.03311 12.7309 6.13564 12.8508C6.23818 12.9707 6.3807 13.0493 6.53679 13.0722L7.48902 13.2352C7.58937 13.5973 7.73341 13.9458 7.91796 14.2732L7.36034 15.0624C7.26738 15.19 7.22319 15.3467 7.23578 15.5041C7.24837 15.6614 7.31691 15.8091 7.42897 15.9203L8.04664 16.5379C8.15784 16.65 8.30549 16.7185 8.46286 16.7311C8.62023 16.7437 8.77691 16.6995 8.90451 16.6066L9.69374 16.049C10.0211 16.2335 10.3696 16.3775 10.7318 16.4779L10.8948 17.4301C10.9176 17.5862 10.9962 17.7287 11.1161 17.8313C11.236 17.9338 11.389 17.9894 11.5467 17.9877H12.4046C12.5623 17.9894 12.7153 17.9338 12.8352 17.8313C12.9551 17.7287 13.0338 17.5862 13.0566 17.4301L13.2196 16.4779C13.5817 16.3775 13.9303 16.2335 14.2576 16.049L15.0468 16.6066C15.1744 16.6995 15.3311 16.7437 15.4885 16.7311C15.6458 16.7185 15.7935 16.65 15.9047 16.5379L16.5224 15.9203C16.6344 15.8091 16.703 15.6614 16.7156 15.5041C16.7281 15.3467 16.684 15.19 16.591 15.0624L16.0334 14.2903ZM11.9671 13.7156C11.6278 13.7156 11.296 13.6149 11.0139 13.4264C10.7317 13.2379 10.5118 12.9699 10.382 12.6564C10.2521 12.3429 10.2181 11.9979 10.2843 11.6651C10.3505 11.3323 10.5139 11.0266 10.7539 10.7866C10.9938 10.5467 11.2995 10.3833 11.6324 10.3171C11.9652 10.2509 12.3102 10.2848 12.6237 10.4147C12.9372 10.5446 13.2051 10.7645 13.3937 11.0466C13.5822 11.3288 13.6828 11.6605 13.6828 11.9998C13.6828 12.4549 13.5021 12.8913 13.1803 13.213C12.8585 13.5348 12.4221 13.7156 11.9671 13.7156Z" fill="white"></path>
                                    </svg>
                            </span>
                            <div class="text-white lg:text-[16px] xs:text-[13px] sm:text-[13px] font-medium">
                            BASIC EVENT
                            </div>
                        </div>
                        <span class="md:size-8 size-5 *:size-full md:opacity-0 md:group-has-[#event2:checked]:opacity-100 max-md:rotate-90 group-has-[#event2:checked]:max-md:-rotate-90">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="m9 18 6-6-6-6"></path></svg>
                        </span>
                    </label> -->
                    <input type="radio" name="event" id="event2" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap *:w-auto">
                        <div class="w-full event-tabs2">
                            <!-- tab content -->
                            <div class="w-full mt-5" id="orientation-tab">
                                <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <span
                                            class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_5'); ?></span>
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('event_title_13'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('event_description_13'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_36'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[284px] lg:h-[190px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
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
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_13'); ?>"
                                                title="<?php the_field('event_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('event_image_38'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_13'); ?>"
                                                title="<?php the_field('event_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_39'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
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
                    </div>
                </div>
                <!-- third tab -->
                <div class="block">
                    <!-- <label for="event3" class="inline-flex md:hidden items-center justify-between p-4 mt-4 text-white rounded-2xl w-full hover:md:bg-black/10 duration-300 transition-all bg-theme4 group-has-[#event3:checked]:!bg-[#0876bd]">
                        <div class="flex items-center gap-4">
                            <span class="size-5 *:!size-full inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3409 20.5788H20.5468C20.7743 20.5788 20.9925 20.6692 21.1534 20.83C21.3142 20.9909 21.4046 21.2091 21.4046 21.4367C21.4046 21.6642 21.3142 21.8824 21.1534 22.0433C20.9925 22.2041 20.7743 22.2945 20.5468 22.2945H17.9732C17.7456 22.2945 17.5274 22.2041 17.3665 22.0433C17.2057 21.8824 17.1153 21.6642 17.1153 21.4367V18.8631C17.1153 18.6355 17.2057 18.4173 17.3665 18.2564C17.5274 18.0956 17.7456 18.0052 17.9732 18.0052C18.2007 18.0052 18.4189 18.0956 18.5798 18.2564C18.7406 18.4173 18.831 18.6355 18.831 18.8631V19.6523C20.3773 18.2608 21.4658 16.4334 21.953 14.411C22.4402 12.3887 22.3033 10.2661 21.5602 8.3231C20.8172 6.38008 19.5029 4.70775 17.7906 3.52647C16.0783 2.3452 14.0483 1.71039 11.9681 1.70571C11.1652 1.70544 10.365 1.79755 9.58321 1.98023C9.36994 2.01333 9.15202 1.96483 8.97292 1.84439C8.79382 1.72396 8.6667 1.54044 8.61691 1.33043C8.56711 1.12043 8.5983 0.899372 8.70426 0.711345C8.81022 0.523318 8.98316 0.382139 9.18859 0.315963C11.74 -0.281113 14.4166 -0.0274118 16.8104 1.03838C19.2041 2.10418 21.1836 3.92358 22.4471 6.21916C23.7105 8.51474 24.1886 11.1605 23.8083 13.7531C23.428 16.3457 22.2103 18.7427 20.3409 20.5788ZM14.3437 22.0199C13.5647 22.202 12.7674 22.2941 11.9674 22.2944C9.88713 22.2898 7.85711 21.655 6.1448 20.4737C4.4325 19.2924 3.11824 17.6201 2.37522 15.6771C1.63219 13.734 1.49525 11.6115 1.98244 9.58911C2.46964 7.56672 3.55811 5.73938 5.10443 4.34787V5.13711C5.10443 5.36463 5.19481 5.58283 5.35569 5.74371C5.51657 5.90459 5.73477 5.99497 5.96229 5.99497C6.18981 5.99497 6.40802 5.90459 6.5689 5.74371C6.72978 5.58283 6.82016 5.36463 6.82016 5.13711V2.5635C6.82016 2.33598 6.72978 2.11778 6.5689 1.9569C6.40802 1.79602 6.18981 1.70564 5.96229 1.70564H3.38869C3.16117 1.70564 2.94297 1.79602 2.78209 1.9569C2.62121 2.11778 2.53083 2.33598 2.53083 2.5635C2.53083 2.79102 2.62121 3.00923 2.78209 3.17011C2.94297 3.33099 3.16117 3.42137 3.38869 3.42137H3.59458C1.72513 5.25743 0.507425 7.6545 0.12716 10.2471C-0.253106 12.8396 0.22493 15.4854 1.48837 17.781C2.75182 20.0766 4.73134 21.896 7.1251 22.9618C9.51885 24.0276 12.1955 24.2813 14.7469 23.6842C14.9523 23.618 15.1252 23.4768 15.2312 23.2888C15.3371 23.1008 15.3683 22.8797 15.3185 22.6697C15.2687 22.4597 15.1416 22.2762 14.9625 22.1558C14.7834 22.0353 14.5655 21.9868 14.3522 22.0199H14.3437ZM16.0334 14.2903C16.2179 13.963 16.362 13.6144 16.4623 13.2523L17.4145 13.0893C17.5706 13.0665 17.7132 12.9879 17.8157 12.868C17.9182 12.7481 17.9738 12.5951 17.9722 12.4373V11.5795C17.9723 11.4212 17.9164 11.268 17.8143 11.1471C17.7122 11.0261 17.5706 10.9453 17.4145 10.9189L16.4623 10.7645C16.362 10.4024 16.2179 10.0538 16.0334 9.72648L16.591 8.93725C16.684 8.80965 16.7281 8.65297 16.7156 8.4956C16.703 8.33823 16.6344 8.19058 16.5224 8.07938L15.9047 7.46171C15.7935 7.34965 15.6458 7.28111 15.4885 7.26852C15.3311 7.25593 15.1744 7.30012 15.0468 7.39308L14.2576 7.9507C13.9303 7.76615 13.5817 7.62211 13.2196 7.52176L13.0566 6.56953C13.0376 6.41032 12.9606 6.26369 12.8403 6.15766C12.7201 6.05163 12.5649 5.99363 12.4046 5.99476H11.5467C11.389 5.9931 11.236 6.04869 11.1161 6.15122C10.9962 6.25376 10.9176 6.39628 10.8948 6.55237L10.7318 7.50461C10.3696 7.60496 10.0211 7.74899 9.69374 7.93354L8.90451 7.37593C8.77691 7.28296 8.62023 7.23878 8.46286 7.25137C8.30549 7.26396 8.15784 7.33249 8.04664 7.44456L7.42897 8.06222C7.31691 8.17342 7.24837 8.32108 7.23578 8.47845C7.22319 8.63581 7.26738 8.79249 7.36034 8.92009L7.91796 9.70933C7.73341 10.0367 7.58937 10.3852 7.48902 10.7473L6.53679 10.9018C6.38074 10.9281 6.23909 11.009 6.137 11.1299C6.03491 11.2508 5.97899 11.4041 5.97918 11.5623V12.4202C5.97752 12.5779 6.03311 12.7309 6.13564 12.8508C6.23818 12.9707 6.3807 13.0493 6.53679 13.0722L7.48902 13.2352C7.58937 13.5973 7.73341 13.9458 7.91796 14.2732L7.36034 15.0624C7.26738 15.19 7.22319 15.3467 7.23578 15.5041C7.24837 15.6614 7.31691 15.8091 7.42897 15.9203L8.04664 16.5379C8.15784 16.65 8.30549 16.7185 8.46286 16.7311C8.62023 16.7437 8.77691 16.6995 8.90451 16.6066L9.69374 16.049C10.0211 16.2335 10.3696 16.3775 10.7318 16.4779L10.8948 17.4301C10.9176 17.5862 10.9962 17.7287 11.1161 17.8313C11.236 17.9338 11.389 17.9894 11.5467 17.9877H12.4046C12.5623 17.9894 12.7153 17.9338 12.8352 17.8313C12.9551 17.7287 13.0338 17.5862 13.0566 17.4301L13.2196 16.4779C13.5817 16.3775 13.9303 16.2335 14.2576 16.049L15.0468 16.6066C15.1744 16.6995 15.3311 16.7437 15.4885 16.7311C15.6458 16.7185 15.7935 16.65 15.9047 16.5379L16.5224 15.9203C16.6344 15.8091 16.703 15.6614 16.7156 15.5041C16.7281 15.3467 16.684 15.19 16.591 15.0624L16.0334 14.2903ZM11.9671 13.7156C11.6278 13.7156 11.296 13.6149 11.0139 13.4264C10.7317 13.2379 10.5118 12.9699 10.382 12.6564C10.2521 12.3429 10.2181 11.9979 10.2843 11.6651C10.3505 11.3323 10.5139 11.0266 10.7539 10.7866C10.9938 10.5467 11.2995 10.3833 11.6324 10.3171C11.9652 10.2509 12.3102 10.2848 12.6237 10.4147C12.9372 10.5446 13.2051 10.7645 13.3937 11.0466C13.5822 11.3288 13.6828 11.6605 13.6828 11.9998C13.6828 12.4549 13.5021 12.8913 13.1803 13.213C12.8585 13.5348 12.4221 13.7156 11.9671 13.7156Z" fill="white"></path>
                                    </svg>
                            </span>
                            <div class="text-white lg:text-[16px] xs:text-[13px] sm:text-[13px] font-medium">
                            Upcoming Event
                            </div>
                        </div>
                        <span class="md:size-8 size-5 *:size-full md:opacity-0 md:group-has-[#event3:checked]:opacity-100 max-md:rotate-90 group-has-[#event3:checked]:max-md:-rotate-90">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="m9 18 6-6-6-6"></path></svg>
                        </span>
                    </label> -->
                    <input type="radio" name="event" id="event3" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap">
                            <div class="w-full flex flex-wrap">
                            <button
                                class="design-tab-btn text-base lg:text-lg font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]"
                                data-tab="design-tab">Vesic Hackathon</button>
                            </div>
                            <!-- <div class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                <div class="flex flex-col gap-y-1 my-4">
                                    <span
                                        class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
                                    <h4
                                        class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                        <?php the_field('event_title_9'); ?></h4>
                                    <p
                                        class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                    <?php the_field('event_description_9'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_28'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_9'); ?>"
                                                title="<?php the_field('event_title_9'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_29'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_9'); ?>"
                                                title="<?php the_field('event_title_9'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_30'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_9'); ?>"
                                                title="<?php the_field('event_title_9'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                            </div>
                            <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <span
                                            class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('event_title_10'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('event_description_10'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_31'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_10'); ?>"
                                                title="<?php the_field('event_title_10'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_32'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_10'); ?>"
                                                title="<?php the_field('event_title_10'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_33'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_10'); ?>"
                                                title="<?php the_field('event_title_10'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                            </div>
                            <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="lg:w-4/5 w-full h-full flex items-center">
                                        <div class="flex flex-col gap-y-1 my-4">
                                            <span
                                                class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
                                            <h4
                                                class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                                <?php the_field('event_title_13'); ?></h4>
                                            <p
                                                class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                                <?php the_field('event_description_11'); ?></p>
                                        </div>
                                    </div>
                                    <div class="lg:w-1/5 w-full h-full flex items-end">
                                        <?php $img1 = get_field('event_image_34'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_13'); ?>"
                                                title="<?php the_field('event_title_13'); ?>" width="473" height="440"
                                                class="w-full rounded-md shadow aspect-[361/440] h-auto object-contain object-top rounded-md">
                                        </div>
                                    </div>
                            </div>
                            <div
                                class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="lg:w-4/5 w-full h-full flex items-center">
                                        <div class="flex flex-col gap-y-1 my-4">
                                            <span
                                                class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
                                            <h4
                                                class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                                <?php the_field('event_title_12'); ?></h4>
                                            <p
                                                class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
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
                            <div
                                    class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                    <div class="flex flex-col gap-y-1 my-4">
                                        <span
                                            class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_5'); ?></span>
                                        <h4
                                            class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                            <?php the_field('event_title_13'); ?></h4>
                                        <p
                                            class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                            <?php the_field('event_description_13'); ?></p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_36'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_13'); ?>"
                                                title="<?php the_field('event_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('event_image_37'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_13'); ?>"
                                                title="<?php the_field('event_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('event_image_38'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_13'); ?>"
                                                title="<?php the_field('event_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                        <?php $img1 = get_field('event_image_39'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_13'); ?>"
                                                title="<?php the_field('event_title_13'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                    </div>
                            </div> -->
                    </div>
                </div>
                <div class="block">
                    <!-- <label for="event3" class="inline-flex md:hidden items-center justify-between p-4 mt-4 text-white rounded-2xl w-full hover:md:bg-black/10 duration-300 transition-all bg-theme4 group-has-[#event3:checked]:!bg-[#0876bd]">
                        <div class="flex items-center gap-4">
                            <span class="size-5 *:!size-full inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3409 20.5788H20.5468C20.7743 20.5788 20.9925 20.6692 21.1534 20.83C21.3142 20.9909 21.4046 21.2091 21.4046 21.4367C21.4046 21.6642 21.3142 21.8824 21.1534 22.0433C20.9925 22.2041 20.7743 22.2945 20.5468 22.2945H17.9732C17.7456 22.2945 17.5274 22.2041 17.3665 22.0433C17.2057 21.8824 17.1153 21.6642 17.1153 21.4367V18.8631C17.1153 18.6355 17.2057 18.4173 17.3665 18.2564C17.5274 18.0956 17.7456 18.0052 17.9732 18.0052C18.2007 18.0052 18.4189 18.0956 18.5798 18.2564C18.7406 18.4173 18.831 18.6355 18.831 18.8631V19.6523C20.3773 18.2608 21.4658 16.4334 21.953 14.411C22.4402 12.3887 22.3033 10.2661 21.5602 8.3231C20.8172 6.38008 19.5029 4.70775 17.7906 3.52647C16.0783 2.3452 14.0483 1.71039 11.9681 1.70571C11.1652 1.70544 10.365 1.79755 9.58321 1.98023C9.36994 2.01333 9.15202 1.96483 8.97292 1.84439C8.79382 1.72396 8.6667 1.54044 8.61691 1.33043C8.56711 1.12043 8.5983 0.899372 8.70426 0.711345C8.81022 0.523318 8.98316 0.382139 9.18859 0.315963C11.74 -0.281113 14.4166 -0.0274118 16.8104 1.03838C19.2041 2.10418 21.1836 3.92358 22.4471 6.21916C23.7105 8.51474 24.1886 11.1605 23.8083 13.7531C23.428 16.3457 22.2103 18.7427 20.3409 20.5788ZM14.3437 22.0199C13.5647 22.202 12.7674 22.2941 11.9674 22.2944C9.88713 22.2898 7.85711 21.655 6.1448 20.4737C4.4325 19.2924 3.11824 17.6201 2.37522 15.6771C1.63219 13.734 1.49525 11.6115 1.98244 9.58911C2.46964 7.56672 3.55811 5.73938 5.10443 4.34787V5.13711C5.10443 5.36463 5.19481 5.58283 5.35569 5.74371C5.51657 5.90459 5.73477 5.99497 5.96229 5.99497C6.18981 5.99497 6.40802 5.90459 6.5689 5.74371C6.72978 5.58283 6.82016 5.36463 6.82016 5.13711V2.5635C6.82016 2.33598 6.72978 2.11778 6.5689 1.9569C6.40802 1.79602 6.18981 1.70564 5.96229 1.70564H3.38869C3.16117 1.70564 2.94297 1.79602 2.78209 1.9569C2.62121 2.11778 2.53083 2.33598 2.53083 2.5635C2.53083 2.79102 2.62121 3.00923 2.78209 3.17011C2.94297 3.33099 3.16117 3.42137 3.38869 3.42137H3.59458C1.72513 5.25743 0.507425 7.6545 0.12716 10.2471C-0.253106 12.8396 0.22493 15.4854 1.48837 17.781C2.75182 20.0766 4.73134 21.896 7.1251 22.9618C9.51885 24.0276 12.1955 24.2813 14.7469 23.6842C14.9523 23.618 15.1252 23.4768 15.2312 23.2888C15.3371 23.1008 15.3683 22.8797 15.3185 22.6697C15.2687 22.4597 15.1416 22.2762 14.9625 22.1558C14.7834 22.0353 14.5655 21.9868 14.3522 22.0199H14.3437ZM16.0334 14.2903C16.2179 13.963 16.362 13.6144 16.4623 13.2523L17.4145 13.0893C17.5706 13.0665 17.7132 12.9879 17.8157 12.868C17.9182 12.7481 17.9738 12.5951 17.9722 12.4373V11.5795C17.9723 11.4212 17.9164 11.268 17.8143 11.1471C17.7122 11.0261 17.5706 10.9453 17.4145 10.9189L16.4623 10.7645C16.362 10.4024 16.2179 10.0538 16.0334 9.72648L16.591 8.93725C16.684 8.80965 16.7281 8.65297 16.7156 8.4956C16.703 8.33823 16.6344 8.19058 16.5224 8.07938L15.9047 7.46171C15.7935 7.34965 15.6458 7.28111 15.4885 7.26852C15.3311 7.25593 15.1744 7.30012 15.0468 7.39308L14.2576 7.9507C13.9303 7.76615 13.5817 7.62211 13.2196 7.52176L13.0566 6.56953C13.0376 6.41032 12.9606 6.26369 12.8403 6.15766C12.7201 6.05163 12.5649 5.99363 12.4046 5.99476H11.5467C11.389 5.9931 11.236 6.04869 11.1161 6.15122C10.9962 6.25376 10.9176 6.39628 10.8948 6.55237L10.7318 7.50461C10.3696 7.60496 10.0211 7.74899 9.69374 7.93354L8.90451 7.37593C8.77691 7.28296 8.62023 7.23878 8.46286 7.25137C8.30549 7.26396 8.15784 7.33249 8.04664 7.44456L7.42897 8.06222C7.31691 8.17342 7.24837 8.32108 7.23578 8.47845C7.22319 8.63581 7.26738 8.79249 7.36034 8.92009L7.91796 9.70933C7.73341 10.0367 7.58937 10.3852 7.48902 10.7473L6.53679 10.9018C6.38074 10.9281 6.23909 11.009 6.137 11.1299C6.03491 11.2508 5.97899 11.4041 5.97918 11.5623V12.4202C5.97752 12.5779 6.03311 12.7309 6.13564 12.8508C6.23818 12.9707 6.3807 13.0493 6.53679 13.0722L7.48902 13.2352C7.58937 13.5973 7.73341 13.9458 7.91796 14.2732L7.36034 15.0624C7.26738 15.19 7.22319 15.3467 7.23578 15.5041C7.24837 15.6614 7.31691 15.8091 7.42897 15.9203L8.04664 16.5379C8.15784 16.65 8.30549 16.7185 8.46286 16.7311C8.62023 16.7437 8.77691 16.6995 8.90451 16.6066L9.69374 16.049C10.0211 16.2335 10.3696 16.3775 10.7318 16.4779L10.8948 17.4301C10.9176 17.5862 10.9962 17.7287 11.1161 17.8313C11.236 17.9338 11.389 17.9894 11.5467 17.9877H12.4046C12.5623 17.9894 12.7153 17.9338 12.8352 17.8313C12.9551 17.7287 13.0338 17.5862 13.0566 17.4301L13.2196 16.4779C13.5817 16.3775 13.9303 16.2335 14.2576 16.049L15.0468 16.6066C15.1744 16.6995 15.3311 16.7437 15.4885 16.7311C15.6458 16.7185 15.7935 16.65 15.9047 16.5379L16.5224 15.9203C16.6344 15.8091 16.703 15.6614 16.7156 15.5041C16.7281 15.3467 16.684 15.19 16.591 15.0624L16.0334 14.2903ZM11.9671 13.7156C11.6278 13.7156 11.296 13.6149 11.0139 13.4264C10.7317 13.2379 10.5118 12.9699 10.382 12.6564C10.2521 12.3429 10.2181 11.9979 10.2843 11.6651C10.3505 11.3323 10.5139 11.0266 10.7539 10.7866C10.9938 10.5467 11.2995 10.3833 11.6324 10.3171C11.9652 10.2509 12.3102 10.2848 12.6237 10.4147C12.9372 10.5446 13.2051 10.7645 13.3937 11.0466C13.5822 11.3288 13.6828 11.6605 13.6828 11.9998C13.6828 12.4549 13.5021 12.8913 13.1803 13.213C12.8585 13.5348 12.4221 13.7156 11.9671 13.7156Z" fill="white"></path>
                                    </svg>
                            </span>
                            <div class="text-white lg:text-[16px] xs:text-[13px] sm:text-[13px] font-medium">
                            Upcoming Event
                            </div>
                        </div>
                        <span class="md:size-8 size-5 *:size-full md:opacity-0 md:group-has-[#event3:checked]:opacity-100 max-md:rotate-90 group-has-[#event3:checked]:max-md:-rotate-90">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="m9 18 6-6-6-6"></path></svg>
                        </span>
                    </label> -->
                    <input type="radio" name="event" id="event4" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap">
                        <div class="w-full flex flex-wrap">
                            <button
                                class="design-tab-btn text-base lg:text-lg font-semibold px-4 py-3 border-b-2 border-[#bf4b50] text-[#bf4b50]"
                                data-tab="design-tab">BASIC</button>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <!-- <label for="event3" class="inline-flex md:hidden items-center justify-between p-4 mt-4 text-white rounded-2xl w-full hover:md:bg-black/10 duration-300 transition-all bg-theme4 group-has-[#event3:checked]:!bg-[#0876bd]">
                        <div class="flex items-center gap-4">
                            <span class="size-5 *:!size-full inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3409 20.5788H20.5468C20.7743 20.5788 20.9925 20.6692 21.1534 20.83C21.3142 20.9909 21.4046 21.2091 21.4046 21.4367C21.4046 21.6642 21.3142 21.8824 21.1534 22.0433C20.9925 22.2041 20.7743 22.2945 20.5468 22.2945H17.9732C17.7456 22.2945 17.5274 22.2041 17.3665 22.0433C17.2057 21.8824 17.1153 21.6642 17.1153 21.4367V18.8631C17.1153 18.6355 17.2057 18.4173 17.3665 18.2564C17.5274 18.0956 17.7456 18.0052 17.9732 18.0052C18.2007 18.0052 18.4189 18.0956 18.5798 18.2564C18.7406 18.4173 18.831 18.6355 18.831 18.8631V19.6523C20.3773 18.2608 21.4658 16.4334 21.953 14.411C22.4402 12.3887 22.3033 10.2661 21.5602 8.3231C20.8172 6.38008 19.5029 4.70775 17.7906 3.52647C16.0783 2.3452 14.0483 1.71039 11.9681 1.70571C11.1652 1.70544 10.365 1.79755 9.58321 1.98023C9.36994 2.01333 9.15202 1.96483 8.97292 1.84439C8.79382 1.72396 8.6667 1.54044 8.61691 1.33043C8.56711 1.12043 8.5983 0.899372 8.70426 0.711345C8.81022 0.523318 8.98316 0.382139 9.18859 0.315963C11.74 -0.281113 14.4166 -0.0274118 16.8104 1.03838C19.2041 2.10418 21.1836 3.92358 22.4471 6.21916C23.7105 8.51474 24.1886 11.1605 23.8083 13.7531C23.428 16.3457 22.2103 18.7427 20.3409 20.5788ZM14.3437 22.0199C13.5647 22.202 12.7674 22.2941 11.9674 22.2944C9.88713 22.2898 7.85711 21.655 6.1448 20.4737C4.4325 19.2924 3.11824 17.6201 2.37522 15.6771C1.63219 13.734 1.49525 11.6115 1.98244 9.58911C2.46964 7.56672 3.55811 5.73938 5.10443 4.34787V5.13711C5.10443 5.36463 5.19481 5.58283 5.35569 5.74371C5.51657 5.90459 5.73477 5.99497 5.96229 5.99497C6.18981 5.99497 6.40802 5.90459 6.5689 5.74371C6.72978 5.58283 6.82016 5.36463 6.82016 5.13711V2.5635C6.82016 2.33598 6.72978 2.11778 6.5689 1.9569C6.40802 1.79602 6.18981 1.70564 5.96229 1.70564H3.38869C3.16117 1.70564 2.94297 1.79602 2.78209 1.9569C2.62121 2.11778 2.53083 2.33598 2.53083 2.5635C2.53083 2.79102 2.62121 3.00923 2.78209 3.17011C2.94297 3.33099 3.16117 3.42137 3.38869 3.42137H3.59458C1.72513 5.25743 0.507425 7.6545 0.12716 10.2471C-0.253106 12.8396 0.22493 15.4854 1.48837 17.781C2.75182 20.0766 4.73134 21.896 7.1251 22.9618C9.51885 24.0276 12.1955 24.2813 14.7469 23.6842C14.9523 23.618 15.1252 23.4768 15.2312 23.2888C15.3371 23.1008 15.3683 22.8797 15.3185 22.6697C15.2687 22.4597 15.1416 22.2762 14.9625 22.1558C14.7834 22.0353 14.5655 21.9868 14.3522 22.0199H14.3437ZM16.0334 14.2903C16.2179 13.963 16.362 13.6144 16.4623 13.2523L17.4145 13.0893C17.5706 13.0665 17.7132 12.9879 17.8157 12.868C17.9182 12.7481 17.9738 12.5951 17.9722 12.4373V11.5795C17.9723 11.4212 17.9164 11.268 17.8143 11.1471C17.7122 11.0261 17.5706 10.9453 17.4145 10.9189L16.4623 10.7645C16.362 10.4024 16.2179 10.0538 16.0334 9.72648L16.591 8.93725C16.684 8.80965 16.7281 8.65297 16.7156 8.4956C16.703 8.33823 16.6344 8.19058 16.5224 8.07938L15.9047 7.46171C15.7935 7.34965 15.6458 7.28111 15.4885 7.26852C15.3311 7.25593 15.1744 7.30012 15.0468 7.39308L14.2576 7.9507C13.9303 7.76615 13.5817 7.62211 13.2196 7.52176L13.0566 6.56953C13.0376 6.41032 12.9606 6.26369 12.8403 6.15766C12.7201 6.05163 12.5649 5.99363 12.4046 5.99476H11.5467C11.389 5.9931 11.236 6.04869 11.1161 6.15122C10.9962 6.25376 10.9176 6.39628 10.8948 6.55237L10.7318 7.50461C10.3696 7.60496 10.0211 7.74899 9.69374 7.93354L8.90451 7.37593C8.77691 7.28296 8.62023 7.23878 8.46286 7.25137C8.30549 7.26396 8.15784 7.33249 8.04664 7.44456L7.42897 8.06222C7.31691 8.17342 7.24837 8.32108 7.23578 8.47845C7.22319 8.63581 7.26738 8.79249 7.36034 8.92009L7.91796 9.70933C7.73341 10.0367 7.58937 10.3852 7.48902 10.7473L6.53679 10.9018C6.38074 10.9281 6.23909 11.009 6.137 11.1299C6.03491 11.2508 5.97899 11.4041 5.97918 11.5623V12.4202C5.97752 12.5779 6.03311 12.7309 6.13564 12.8508C6.23818 12.9707 6.3807 13.0493 6.53679 13.0722L7.48902 13.2352C7.58937 13.5973 7.73341 13.9458 7.91796 14.2732L7.36034 15.0624C7.26738 15.19 7.22319 15.3467 7.23578 15.5041C7.24837 15.6614 7.31691 15.8091 7.42897 15.9203L8.04664 16.5379C8.15784 16.65 8.30549 16.7185 8.46286 16.7311C8.62023 16.7437 8.77691 16.6995 8.90451 16.6066L9.69374 16.049C10.0211 16.2335 10.3696 16.3775 10.7318 16.4779L10.8948 17.4301C10.9176 17.5862 10.9962 17.7287 11.1161 17.8313C11.236 17.9338 11.389 17.9894 11.5467 17.9877H12.4046C12.5623 17.9894 12.7153 17.9338 12.8352 17.8313C12.9551 17.7287 13.0338 17.5862 13.0566 17.4301L13.2196 16.4779C13.5817 16.3775 13.9303 16.2335 14.2576 16.049L15.0468 16.6066C15.1744 16.6995 15.3311 16.7437 15.4885 16.7311C15.6458 16.7185 15.7935 16.65 15.9047 16.5379L16.5224 15.9203C16.6344 15.8091 16.703 15.6614 16.7156 15.5041C16.7281 15.3467 16.684 15.19 16.591 15.0624L16.0334 14.2903ZM11.9671 13.7156C11.6278 13.7156 11.296 13.6149 11.0139 13.4264C10.7317 13.2379 10.5118 12.9699 10.382 12.6564C10.2521 12.3429 10.2181 11.9979 10.2843 11.6651C10.3505 11.3323 10.5139 11.0266 10.7539 10.7866C10.9938 10.5467 11.2995 10.3833 11.6324 10.3171C11.9652 10.2509 12.3102 10.2848 12.6237 10.4147C12.9372 10.5446 13.2051 10.7645 13.3937 11.0466C13.5822 11.3288 13.6828 11.6605 13.6828 11.9998C13.6828 12.4549 13.5021 12.8913 13.1803 13.213C12.8585 13.5348 12.4221 13.7156 11.9671 13.7156Z" fill="white"></path>
                                    </svg>
                            </span>
                            <div class="text-white lg:text-[16px] xs:text-[13px] sm:text-[13px] font-medium">
                            Upcoming Event
                            </div>
                        </div>
                        <span class="md:size-8 size-5 *:size-full md:opacity-0 md:group-has-[#event3:checked]:opacity-100 max-md:rotate-90 group-has-[#event3:checked]:max-md:-rotate-90">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="m9 18 6-6-6-6"></path></svg>
                        </span>
                    </label> -->
                    <input type="radio" name="event" id="event5" class="hidden peer">
                    <div class="hidden peer-checked:flex flex-wrap">
                        <div
                                class="w-full h-full flex flex-col bg-white rounded-2xl border-t border-[#b5474c] border-t-4 shadow-[0px_8px_24px_rgba(149,_157,_165,_0.4)] backdrop-blur-3xl backdrop-saturate-[180%] duration-300 group lg:px-5 lg:py-6 px-4 py-4 mb-4">
                                <div class="flex flex-col gap-y-1 my-4">
                                    <span
                                        class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_3'); ?></span>
                                    <h4
                                        class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313] mb-2">
                                        <?php the_field('event_title_8'); ?></h4>
                                    <p
                                        class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow">
                                        <?php the_field('event_description_8'); ?></p>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
                                        <?php $img1 = get_field('event_image_24'); ?>
                                        <?php if ($img1): ?>
                                        <div class="relative lg:py-2 lg:px-2 w-full flex justify-center mb-2">
                                            <div class="absolute inset-0 w-full lg:top-[8px] lg:left-[8px] lg:max-w-[284px] lg:h-[190px] rounded-md bg-cover bg-center filter blur-xs brightness-75 z-0"
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
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_8'); ?>"
                                                title="<?php the_field('event_title_8'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('event_image_26'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_8'); ?>"
                                                title="<?php the_field('event_title_8'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
                                        </div>
                                        <?php endif; ?>

                                        <?php $img1 = get_field('event_image_27'); ?>
                                        <?php if ($img1): ?>
                                        <div class="py-2 px-2 w-full flex justify-center">
                                            <img src="<?php echo esc_url($img1['url']); ?>"
                                                alt="<?php the_field('event_title_8'); ?>"
                                                title="<?php the_field('event_title_8'); ?>" width="373" height="240"
                                                class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
                                        </div>
                                        <?php endif; ?>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="block">
                    <!-- <label for="event3" class="inline-flex md:hidden items-center justify-between p-4 mt-4 text-white rounded-2xl w-full hover:md:bg-black/10 duration-300 transition-all bg-theme4 group-has-[#event3:checked]:!bg-[#0876bd]">
                        <div class="flex items-center gap-4">
                            <span class="size-5 *:!size-full inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3409 20.5788H20.5468C20.7743 20.5788 20.9925 20.6692 21.1534 20.83C21.3142 20.9909 21.4046 21.2091 21.4046 21.4367C21.4046 21.6642 21.3142 21.8824 21.1534 22.0433C20.9925 22.2041 20.7743 22.2945 20.5468 22.2945H17.9732C17.7456 22.2945 17.5274 22.2041 17.3665 22.0433C17.2057 21.8824 17.1153 21.6642 17.1153 21.4367V18.8631C17.1153 18.6355 17.2057 18.4173 17.3665 18.2564C17.5274 18.0956 17.7456 18.0052 17.9732 18.0052C18.2007 18.0052 18.4189 18.0956 18.5798 18.2564C18.7406 18.4173 18.831 18.6355 18.831 18.8631V19.6523C20.3773 18.2608 21.4658 16.4334 21.953 14.411C22.4402 12.3887 22.3033 10.2661 21.5602 8.3231C20.8172 6.38008 19.5029 4.70775 17.7906 3.52647C16.0783 2.3452 14.0483 1.71039 11.9681 1.70571C11.1652 1.70544 10.365 1.79755 9.58321 1.98023C9.36994 2.01333 9.15202 1.96483 8.97292 1.84439C8.79382 1.72396 8.6667 1.54044 8.61691 1.33043C8.56711 1.12043 8.5983 0.899372 8.70426 0.711345C8.81022 0.523318 8.98316 0.382139 9.18859 0.315963C11.74 -0.281113 14.4166 -0.0274118 16.8104 1.03838C19.2041 2.10418 21.1836 3.92358 22.4471 6.21916C23.7105 8.51474 24.1886 11.1605 23.8083 13.7531C23.428 16.3457 22.2103 18.7427 20.3409 20.5788ZM14.3437 22.0199C13.5647 22.202 12.7674 22.2941 11.9674 22.2944C9.88713 22.2898 7.85711 21.655 6.1448 20.4737C4.4325 19.2924 3.11824 17.6201 2.37522 15.6771C1.63219 13.734 1.49525 11.6115 1.98244 9.58911C2.46964 7.56672 3.55811 5.73938 5.10443 4.34787V5.13711C5.10443 5.36463 5.19481 5.58283 5.35569 5.74371C5.51657 5.90459 5.73477 5.99497 5.96229 5.99497C6.18981 5.99497 6.40802 5.90459 6.5689 5.74371C6.72978 5.58283 6.82016 5.36463 6.82016 5.13711V2.5635C6.82016 2.33598 6.72978 2.11778 6.5689 1.9569C6.40802 1.79602 6.18981 1.70564 5.96229 1.70564H3.38869C3.16117 1.70564 2.94297 1.79602 2.78209 1.9569C2.62121 2.11778 2.53083 2.33598 2.53083 2.5635C2.53083 2.79102 2.62121 3.00923 2.78209 3.17011C2.94297 3.33099 3.16117 3.42137 3.38869 3.42137H3.59458C1.72513 5.25743 0.507425 7.6545 0.12716 10.2471C-0.253106 12.8396 0.22493 15.4854 1.48837 17.781C2.75182 20.0766 4.73134 21.896 7.1251 22.9618C9.51885 24.0276 12.1955 24.2813 14.7469 23.6842C14.9523 23.618 15.1252 23.4768 15.2312 23.2888C15.3371 23.1008 15.3683 22.8797 15.3185 22.6697C15.2687 22.4597 15.1416 22.2762 14.9625 22.1558C14.7834 22.0353 14.5655 21.9868 14.3522 22.0199H14.3437ZM16.0334 14.2903C16.2179 13.963 16.362 13.6144 16.4623 13.2523L17.4145 13.0893C17.5706 13.0665 17.7132 12.9879 17.8157 12.868C17.9182 12.7481 17.9738 12.5951 17.9722 12.4373V11.5795C17.9723 11.4212 17.9164 11.268 17.8143 11.1471C17.7122 11.0261 17.5706 10.9453 17.4145 10.9189L16.4623 10.7645C16.362 10.4024 16.2179 10.0538 16.0334 9.72648L16.591 8.93725C16.684 8.80965 16.7281 8.65297 16.7156 8.4956C16.703 8.33823 16.6344 8.19058 16.5224 8.07938L15.9047 7.46171C15.7935 7.34965 15.6458 7.28111 15.4885 7.26852C15.3311 7.25593 15.1744 7.30012 15.0468 7.39308L14.2576 7.9507C13.9303 7.76615 13.5817 7.62211 13.2196 7.52176L13.0566 6.56953C13.0376 6.41032 12.9606 6.26369 12.8403 6.15766C12.7201 6.05163 12.5649 5.99363 12.4046 5.99476H11.5467C11.389 5.9931 11.236 6.04869 11.1161 6.15122C10.9962 6.25376 10.9176 6.39628 10.8948 6.55237L10.7318 7.50461C10.3696 7.60496 10.0211 7.74899 9.69374 7.93354L8.90451 7.37593C8.77691 7.28296 8.62023 7.23878 8.46286 7.25137C8.30549 7.26396 8.15784 7.33249 8.04664 7.44456L7.42897 8.06222C7.31691 8.17342 7.24837 8.32108 7.23578 8.47845C7.22319 8.63581 7.26738 8.79249 7.36034 8.92009L7.91796 9.70933C7.73341 10.0367 7.58937 10.3852 7.48902 10.7473L6.53679 10.9018C6.38074 10.9281 6.23909 11.009 6.137 11.1299C6.03491 11.2508 5.97899 11.4041 5.97918 11.5623V12.4202C5.97752 12.5779 6.03311 12.7309 6.13564 12.8508C6.23818 12.9707 6.3807 13.0493 6.53679 13.0722L7.48902 13.2352C7.58937 13.5973 7.73341 13.9458 7.91796 14.2732L7.36034 15.0624C7.26738 15.19 7.22319 15.3467 7.23578 15.5041C7.24837 15.6614 7.31691 15.8091 7.42897 15.9203L8.04664 16.5379C8.15784 16.65 8.30549 16.7185 8.46286 16.7311C8.62023 16.7437 8.77691 16.6995 8.90451 16.6066L9.69374 16.049C10.0211 16.2335 10.3696 16.3775 10.7318 16.4779L10.8948 17.4301C10.9176 17.5862 10.9962 17.7287 11.1161 17.8313C11.236 17.9338 11.389 17.9894 11.5467 17.9877H12.4046C12.5623 17.9894 12.7153 17.9338 12.8352 17.8313C12.9551 17.7287 13.0338 17.5862 13.0566 17.4301L13.2196 16.4779C13.5817 16.3775 13.9303 16.2335 14.2576 16.049L15.0468 16.6066C15.1744 16.6995 15.3311 16.7437 15.4885 16.7311C15.6458 16.7185 15.7935 16.65 15.9047 16.5379L16.5224 15.9203C16.6344 15.8091 16.703 15.6614 16.7156 15.5041C16.7281 15.3467 16.684 15.19 16.591 15.0624L16.0334 14.2903ZM11.9671 13.7156C11.6278 13.7156 11.296 13.6149 11.0139 13.4264C10.7317 13.2379 10.5118 12.9699 10.382 12.6564C10.2521 12.3429 10.2181 11.9979 10.2843 11.6651C10.3505 11.3323 10.5139 11.0266 10.7539 10.7866C10.9938 10.5467 11.2995 10.3833 11.6324 10.3171C11.9652 10.2509 12.3102 10.2848 12.6237 10.4147C12.9372 10.5446 13.2051 10.7645 13.3937 11.0466C13.5822 11.3288 13.6828 11.6605 13.6828 11.9998C13.6828 12.4549 13.5021 12.8913 13.1803 13.213C12.8585 13.5348 12.4221 13.7156 11.9671 13.7156Z" fill="white"></path>
                                    </svg>
                            </span>
                            <div class="text-white lg:text-[16px] xs:text-[13px] sm:text-[13px] font-medium">
                            Upcoming Event
                            </div>
                        </div>
                        <span class="md:size-8 size-5 *:size-full md:opacity-0 md:group-has-[#event3:checked]:opacity-100 max-md:rotate-90 group-has-[#event3:checked]:max-md:-rotate-90">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="m9 18 6-6-6-6"></path></svg>
                        </span>
                    </label> -->
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
    </div>
</section>


<?php get_footer();?>