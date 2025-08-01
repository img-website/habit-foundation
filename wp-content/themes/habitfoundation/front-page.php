<?php /* Template Name: home page */ get_header(); ?>
<?php
  echo do_shortcode('[smartslider3 slider="2"]');
?>

<!-- <section class="w-full bg-white relative lg:pb-12 md:py-10 py-8">
  <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 flex items-center justify-center lg:-mt-28">
      <div class="rounded-xl shadow-md lg:py-8 lg:px-4 py-4 px-3 flex flex-col gap-y-2 items-center saturate-200 text-white bg-gradient-to-r from-[#000000E6] to-[#000000E6]">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon1.svg" alt="Idea Builder" title="Idea Builder" width="48" height="48" class="w-12 h-12 object-contain">
        <h3 class="text-lg text-[#dbdbdb] font-medium mb-2"><?php the_field('inspire_title'); ?></h3>
        <p class="text-sm/7 text-center text-[#dbdbdb]"><?php the_field('inspire_desc'); ?></p>
      </div>

      <div class="rounded-xl shadow-md lg:py-8 lg:px-4 py-4 px-3 flex flex-col gap-y-2 items-center saturate-200 text-white bg-gradient-to-r from-[#000000E6] to-[#000000E6]">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.svg" alt="Innovation Hub" title="Innovation Hub" width="48" height="48" class="w-12 h-12 object-contain">
        <h3 class="text-lg text-[#dbdbdb] font-medium mb-2"><?php the_field('build_title'); ?></h3>
        <p class="text-sm/7 text-[#dbdbdb] text-center"><?php the_field('build_desc'); ?></p>
      </div>

      <div class="rounded-xl shadow-md lg:py-8 lg:px-4 py-4 px-3 flex flex-col gap-y-2 items-center saturate-200 text-white bg-gradient-to-r from-[#000000E6] to-[#000000E6]">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon3.svg" alt="Growth Path" title="Growth Path" width="48" height="48" class="w-12 h-12 object-contain">
        <h3 class="text-lg text-[#dbdbdb] font-medium mb-2"><?php the_field('collab_title'); ?></h3>
        <p class="text-sm/7 text-[#dbdbdb] text-center"><?php the_field('collab_desc'); ?></p>
      </div>
    </div>
  </div>
</section> -->

<section class="w-full bg-white relative lg:py-16 md:py-10 py-8">
    <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
        <div
            class="flex md:flex-nowrap lg:flex-nowrap flex-wrap justify-between items-center lg:gap-x-10 gap-6 relative">
            <div class="lg:w-2/5 md:2/5 w-full lg:flex flex-col hidden">
                <?php $img = get_field('company_image'); ?>
                <?php if ($img): ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="Company" title="Company" width="477" height="414"
                    class="w-full rounded-md">
                <?php endif; ?>
            </div>

            <div class="lg:w-3/5 md:3/5 w-full flex flex-col">
                <span
                    class="font-medium flex items-center inline-block bg-[#bf4b50] py-[5px] px-7 rounded-full text-white rounded-full w-fit lg:text-3xl md:text-2xl text-xl mb-[15px] tracking-[1px] leading-[1.5] mb-6">
                    <?php the_field('company_badge'); ?>
                </span>
                <h2 class="lg:text-2xl md:text-xl text-lg !leading-normal font-semibold text-[#2a1313] mb-4">
                    <?php the_field('company_heading'); ?>
                </h2>
                <div class="lg:w-2/5 md:2/5 w-full flex flex-col lg:hidden mb-4">
                    <?php $img = get_field('company_image'); ?>
                    <?php if ($img): ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="Company" title="Company" width="477"
                        height="414" class="w-full rounded-md">
                    <?php endif; ?>
                </div>
                <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                    <?php the_field('company_mission'); ?></p>
                <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                    <?php the_field('company_mission2'); ?></p>

                <a href="<?php the_field('about_btn_link'); ?>"
                    class="w-fit inline-flex items-center shadow py-2 lg:ps-6 lg:pe-3 ps-4 pe-2 bg-[#121212] text-white rounded-full ring-2 ring-inset ring-[#121212] hover:ring-[#525252] hover:-translate-y-2 text-sm duration-500 transition-all hover:bg-gradient-to-r hover:from-[#000000] hover:to-[#545454]">
                    <?php the_field('about_btn_text'); ?>
                    <span class="bg-white rounded-full p-2 ms-3">
                        <svg class="w-3 h-3 text-black" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-white relative lg:py-16 md:py-10 py-8">
    <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
        <div
            class="flex md:flex-nowrap lg:flex-nowrap flex-wrap justify-between items-start lg:gap-x-10 gap-6 relative">
            <div class="lg:w-7/12 md:w-7/12 w-full md:flex flex-col">
                <span
                    class="font-medium flex items-center inline-block bg-[#bf4b50] py-[5px] px-7 rounded-full text-white rounded-full w-fit lg:text-3xl md:text-2xl text-xl mb-[15px] tracking-[1px] leading-[1.5] mb-6">
                    <?php the_field('mission_badge'); ?>
                </span>
                <h2 class="lg:text-2xl md:text-xl text-lg !leading-normal font-semibold text-[#2a1313] mb-4">
                    <?php the_field('mission_heading'); ?>
                </h2>
                <div class="lg:w-5/12 md:w-5/12 w-full flex flex-col md:hidden mb-4">
                    <?php $img = get_field('mission_image'); ?>
                    <?php if ($img): ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="Our Mission" title="Our Mission" width="477"
                        height="293" class="w-full rounded-md object-cover aspect-[497/296]">
                    <?php endif; ?>
                </div>
                <p class="font-normal md:text-base text-sm tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                    <?php the_field('mission_desc'); ?></p>
            </div>
            <div class="lg:w-5/12 md:w-5/12 w-full md:flex flex-col hidden">
                <?php $img = get_field('mission_image'); ?>
                <?php if ($img): ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="Our Mission" title="Our Mission" width="477"
                    height="293" class="w-full rounded-md object-cover aspect-[497/296]">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-white relative lg:pb-16 md:py-8 py-6">
    <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
        <div
            class="flex md:flex-nowrap lg:flex-nowrap flex-wrap justify-between items-start lg:gap-x-10 gap-6 relative">
            <div class="lg:w-5/12 md:w-5/12 w-full md:flex flex-col hidden">
                <?php $img = get_field('vision_image'); ?>
                <?php if ($img): ?>
                <img src="<?php echo esc_url($img['url']); ?>" alt="Our Vision" title="Our Vision" width="477"
                    height="293" class="w-full rounded-md object-cover aspect-[497/296]">
                <?php endif; ?>
            </div>
            <div class="lg:w-7/12 md:w-7/12 w-full flex flex-col">
                <span
                    class="font-medium flex items-center inline-block bg-[#bf4b50] py-[5px] px-7 rounded-full text-white rounded-full w-fit lg:text-3xl md:text-2xl text-xl mb-[15px] tracking-[1px] leading-[1.5] mb-6">
                    <?php the_field('vision_badge'); ?>
                </span>
                <h2 class="lg:text-2xl md:text-xl text-lg !leading-normal font-semibold text-[#2a1313] mb-4">
                    <?php the_field('vision_heading'); ?>
                </h2>
                <div class="lg:w-5/12 md:w-5/12 w-full flex flex-col md:hidden mb-4">
                    <?php $img = get_field('vision_image'); ?>
                    <?php if ($img): ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt="Our Vision" title="Our Vision" width="477"
                        height="293" class="w-full rounded-md object-cover aspect-[497/296]">
                    <?php endif; ?>
                </div>
                <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                    <?php the_field('vision_desc'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="w-full relative lg:py-16 md:py-10 py-8 bg-gray-100">
  <div class="max-w-7xl mx-auto px-4 lg:px-6">
    <span class="text-sm font-medium inline-block flex items-center justify-center text-[#bf4b50] text-center lg:text-base font-normal mb-[15px] tracking-[2.4px] leading-[1.5] mb-6">
      <?php the_field('poster_sec_badge'); ?>
    </span>
    <h2 class="lg:text-2xl md:text-xl text-lg !leading-normal text-center font-semibold text-[#2a1313] lg:mb-14 mb-8">
    <?php the_field('poster_sec_heading'); ?>   </h2>
    <div class="lg:w-full flex flex-wrap lg:flex-nowrap items-start">
      <div class="lg:w-1/3 w-full flex flex-col flex-wrap lg:flex-nowrap items-start lg:gap-x-10 gap-3 relative">
      <?php $event_img = get_field('event_image'); ?>
      <?php if ($event_img): ?>
        <div class="w-full lg:flex justify-center hidden">
            <img src="<?php echo esc_url($event_img['url']); ?>" alt="Event Image" title="Event Image" width="584" height="252" class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
        </div>
      <?php endif; ?>

      <?php if (get_field('event_heading')): ?>
        <h2 class="lg:text-2xl md:text-xl text-lg leading-snug text-[#2a1313] text-start font-semibold ">
          <?php the_field('event_heading'); ?>
        </h2>
      <?php endif; ?>
        <?php $event_img = get_field('event_image'); ?>
      <?php if ($event_img): ?>
        <div class="w-full flex justify-center lg:hidden">
            <img src="<?php echo esc_url($event_img['url']); ?>" alt="Event Image" title="Event Image" width="584" height="252" class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
        </div>
      <?php endif; ?>
      <?php if (get_field('event_desc')): ?>
        <p class="font-normal w-full md:text-sm text-xs text-[#606060] !leading-7 text-start lg:mb-4 mb-2">
          <?php the_field('event_desc'); ?>
        </p>
      <?php endif; ?>

        <a href="<?php the_field('event_btn_link'); ?>" class="w-fit inline-flex items-center shadow py-2 lg:ps-6 lg:pe-3 ps-4 pe-2 bg-[#121212] text-white rounded-full ring-2 ring-inset ring-[#121212] hover:ring-[#525252] hover:-translate-y-2 text-sm duration-500 transition-all hover:bg-gradient-to-r hover:from-[#000000] hover:to-[#545454]">
          <?php the_field('event_btn_text'); ?>
          <span class="bg-white rounded-full p-2 ms-3">
            <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd"/>
            </svg>
          </span>
        </a>
      </div>
    <div class="lg:w-1/3 w-full flex flex-col flex-wrap lg:flex-nowrap items-start lg:gap-x-10 gap-3 relative">
        <?php $orientation_image = get_field('orientation_image'); ?>
        <?php if ($orientation_image): ?>
          <div class=" w-full lg:h-[250px] h-[250px] lg:flex hidden justify-center">
            <img src="<?php echo esc_url($orientation_image['url']); ?>" alt="Orientaion Image" title="Orientaion Image" width="584" height="250" class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
          </div>
          <?php endif; ?>
          <?php if (get_field('orientation_heading')): ?>
        <h2 class="lg:text-2xl md:text-xl text-lg leading-snug text-[#2a1313] text-start font-semibold ">
          <?php the_field('orientation_heading'); ?>
        </h2>
      <?php endif; ?>
      <?php $orientation_image = get_field('orientation_image'); ?>
        <?php if ($orientation_image): ?>
          <div class=" w-full lg:h-[250px] h-[250px] flex justify-center lg:hidden">
            <img src="<?php echo esc_url($orientation_image['url']); ?>" alt="Orientaion Image" title="Orientaion Image" width="584" height="250" class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
          </div>
          <?php endif; ?>
        <p class="font-normal w-full md:text-sm text-xs text-[#606060] !leading-7 text-start lg:mb-6 mb-4">
          <?php the_field('orientation_desc'); ?>
        </p>
    
          <a href="<?php the_field('orientation_btn_link'); ?>" class="w-fit inline-flex items-center shadow py-2 lg:ps-6 lg:pe-3 ps-4 pe-2 bg-[#121212] text-white rounded-full ring-2 ring-inset ring-[#121212] hover:ring-[#525252] hover:-translate-y-2 text-sm duration-500 transition-all hover:bg-gradient-to-r hover:from-[#000000] hover:to-[#545454]">
            <?php the_field('orientation_btn_text'); ?>
            <span class="bg-white rounded-full p-2 ms-3">
              <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd"/>
              </svg>
            </span>
          </a>
      </div>
    </div>
    <div class="lg:w-1/3 w-full flex flex-col flex-wrap lg:flex-nowrap items-start lg:gap-x-10 gap-3 relative">
        <?php $orientation_image = get_field('orientation_image'); ?>
        <?php if ($orientation_image): ?>
          <div class=" w-full lg:h-[250px] h-[250px] lg:flex hidden justify-center">
            <img src="<?php echo esc_url($orientation_image['url']); ?>" alt="Orientaion Image" title="Orientaion Image" width="584" height="250" class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
          </div>
          <?php endif; ?>
          <?php if (get_field('orientation_heading')): ?>
        <h2 class="lg:text-2xl md:text-xl text-lg leading-snug text-[#2a1313] text-start font-semibold ">
          <?php the_field('orientation_heading'); ?>
        </h2>
      <?php endif; ?>
      <?php $orientation_image = get_field('orientation_image'); ?>
        <?php if ($orientation_image): ?>
          <div class=" w-full lg:h-[250px] h-[250px] flex justify-center lg:hidden">
            <img src="<?php echo esc_url($orientation_image['url']); ?>" alt="Orientaion Image" title="Orientaion Image" width="584" height="250" class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
          </div>
          <?php endif; ?>
        <p class="font-normal w-full md:text-sm text-xs text-[#606060] !leading-7 text-start lg:mb-6 mb-4">
          <?php the_field('orientation_desc'); ?>
        </p>
    
          <a href="<?php the_field('orientation_btn_link'); ?>" class="w-fit inline-flex items-center shadow py-2 lg:ps-6 lg:pe-3 ps-4 pe-2 bg-[#121212] text-white rounded-full ring-2 ring-inset ring-[#121212] hover:ring-[#525252] hover:-translate-y-2 text-sm duration-500 transition-all hover:bg-gradient-to-r hover:from-[#000000] hover:to-[#545454]">
            <?php the_field('orientation_btn_text'); ?>
            <span class="bg-white rounded-full p-2 ms-3">
              <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd"/>
              </svg>
            </span>
          </a>
      </div>
    </div>
  </div>
</section> -->

<section class="w-full relative lg:py-16 md:py-10 py-8 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="w-full flex flex-col">
            <span
                class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
                <?php the_field('poster_sec_badge'); ?>
            </span>

            <h2
                class="lg:text-2xl md:text-xl text-lg !leading-normal text-center font-semibold text-[#2a1313] lg:mb-14 mb-8">
                <?php the_field('poster_sec_heading'); ?>
            </h2>
        </div>

        <div class="w-full grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">

            <div
                class="swiper NewSwiper w-full bg-white border py-6 px-4 rounded-md shadow-md flex flex-col items-start gap-3">
                <div class="swiper-wrapper h-auto">
                    <div class="swiper-slide w-full justify-center">
                        <?php $event_img = get_field('event_image'); ?>
                        <?php if ($event_img): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($event_img['url']); ?>" alt="Event Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top" />
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="swiper-slide w-full justify-center">
                        <?php $event_img = get_field('event_image_1'); ?>
                        <?php if ($event_img): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($event_img['url']); ?>" alt="Event Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="swiper-slide w-full justify-center">
                        <?php $event_img = get_field('event_image_2'); ?>
                        <?php if ($event_img): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($event_img['url']); ?>" alt="Event Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="swiper-slide w-full justify-center">
                        <?php $event_img = get_field('event_image_3'); ?>
                        <?php if ($event_img): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($event_img['url']); ?>" alt="Event Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-slide w-full justify-center">
                        <?php $event_img = get_field('event_image_4'); ?>
                        <?php if ($event_img): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($event_img['url']); ?>" alt="Event Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-slide w-full justify-center">
                        <?php $event_img = get_field('event_image_5'); ?>
                        <?php if ($event_img): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($event_img['url']); ?>" alt="Event Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-slide w-full justify-center">
                        <?php $event_img = get_field('event_image_6'); ?>
                        <?php if ($event_img): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($event_img['url']); ?>" alt="Event Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="absolute lg:top-[6rem] md:top-[7rem] sm:top-[9.5rem] top-[5.5rem] -translate-y-1/2 left-[-14px] z-10">
                    <button class="swiper-button-prev-custom bg-white p-1 rounded-full ml-4">
                        <svg class="text-black size-4" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                            </path>
                        </svg> </button>
                </div>
                <div class="absolute lg:top-[6rem] md:top-[7rem] sm:top-[9.5rem] top-[5.5rem] -translate-y-1/2 right-[-14px] z-10">
                    <button class="swiper-button-next-custom bg-white p-1 rounded-full mr-4">
                        <svg class="text-black size-4" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z">
                            </path>
                        </svg>
                    </button>
                </div>

                <?php if (get_field('event_heading')): ?>
                <h2 class="lg:text-xl md:text-lg text-base font-semibold text-[#2a1313]">
                    <?php the_field('event_heading'); ?></h2>
                <?php endif; ?>

                <!-- <?php if ($event_img): ?>
                <div class="w-full flex justify-center lg:hidden">
                    <img src="<?php echo esc_url($event_img['url']); ?>" alt="Event Image" width="361" height="156"
                        class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                </div>
                <?php endif; ?> -->

                <?php if (get_field('event_desc')): ?>
                <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow ">
                    <?php the_field('event_desc'); ?></p>
                <?php endif; ?>

                <a href="<?php the_field('event_btn_link'); ?>"
                    class="w-fit inline-flex items-center shadow py-2 ps-4 pe-2 lg:ps-6 lg:pe-3 bg-[#121212] text-white rounded-full ring-2 ring-inset ring-[#121212] hover:ring-[#525252] hover:-translate-y-2 text-sm duration-500 transition-all hover:bg-gradient-to-r hover:from-[#000000] hover:to-[#545454]">
                    <?php the_field('event_btn_text'); ?>
                    <span class="bg-white rounded-full p-2 ms-3">
                        <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
            </div>

            <div
                class="swiper NewSwiper w-full bg-white border py-6 px-4 rounded-md shadow-md flex flex-col items-start gap-3">

                <div class="swiper-wrapper h-auto">
                    <div class="swiper-slide w-full justify-center">
                        <?php $orientation_image = get_field('orientation_image'); ?>
                        <?php if ($orientation_image): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($orientation_image['url']); ?>" alt="Orientation Image"
                                width="361" height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-slide w-full justify-center">
                        <?php $orientation_image_2 = get_field('orientation_image_2'); ?>
                        <?php if ($orientation_image_2): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($orientation_image_2['url']); ?>" alt="Orientation Image"
                                width="361" height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="swiper-slide w-full justify-center">
                        <?php $orientation_image_3 = get_field('orientation_image_3'); ?>
                        <?php if ($orientation_image_3): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($orientation_image_3['url']); ?>" alt="Orientation Image"
                                width="361" height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-slide w-full justify-center">
                        <?php $orientation_image_4 = get_field('orientation_image_4'); ?>
                        <?php if ($orientation_image_4): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($orientation_image_4['url']); ?>" alt="Orientation Image"
                                width="361" height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-slide w-full justify-center">
                        <?php $orientation_image_5 = get_field('orientation_image_5'); ?>
                        <?php if ($orientation_image_5): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($orientation_image_5['url']); ?>" alt="Orientation Image"
                                width="361" height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="absolute lg:top-[6rem] md:top-[7rem] sm:top-[9.5rem] top-[5.5rem] -translate-y-1/2 left-[-14px] z-10">
                    <button class="swiper-button-prev-custom bg-white p-1 rounded-full ml-4">
                        <svg class="text-black size-4" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                            </path>
                        </svg> </button>
                </div>
                <div class="absolute lg:top-[6rem] md:top-[7rem] sm:top-[9.5rem] top-[5.5rem] -translate-y-1/2 right-[-14px] z-10">
                    <button class="swiper-button-next-custom bg-white p-1 rounded-full mr-4">
                        <svg class="text-black size-4" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z">
                            </path>
                        </svg>
                    </button>
                </div>

                <?php if (get_field('orientation_heading')): ?>
                <h2 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]">
                    <?php the_field('orientation_heading'); ?></h2>
                <?php endif; ?>

                <!-- <?php if ($orientation_image): ?>
                <div class="w-full flex justify-center lg:hidden">
                    <img src="<?php echo esc_url($orientation_image['url']); ?>" alt="Orientation Image" width="361"
                        height="156"
                        class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                </div>
                <?php endif; ?> -->

                <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow ">
                    <?php the_field('orientation_desc'); ?></p>

                <a href="<?php the_field('orientation_btn_link'); ?>"
                    class="w-fit inline-flex items-center shadow py-2 ps-4 pe-2 lg:ps-6 lg:pe-3 bg-[#121212] text-white rounded-full ring-2 ring-inset ring-[#121212] hover:ring-[#525252] hover:-translate-y-2 text-sm duration-500 transition-all hover:bg-gradient-to-r hover:from-[#000000] hover:to-[#545454]">
                    <?php the_field('orientation_btn_text'); ?>
                    <span class="bg-white rounded-full p-2 ms-3">
                        <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
            </div>

            <div
                class="swiper NewSwiper w-full bg-white border py-6 px-4 rounded-md shadow-md flex flex-col items-start gap-3">
                <div class="swiper-wrapper h-auto">
                    <div class="swiper-slide w-full justify-center">
                        <?php $patent_image = get_field('patent_image'); ?>
                        <?php if ($patent_image): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($patent_image['url']); ?>" alt="Patent Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="swiper-slide w-full justify-center">
                        <?php $patent_image_1 = get_field('patent_image_1'); ?>
                        <?php if ($patent_image_1): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($patent_image_1['url']); ?>" alt="Patent Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="swiper-slide w-full justify-center">
                        <?php $patent_image_2 = get_field('patent_image_2'); ?>
                        <?php if ($patent_image_2): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($patent_image_2['url']); ?>" alt="Patent Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="swiper-slide w-full justify-center">
                        <?php $patent_image_3 = get_field('patent_image_3'); ?>
                        <?php if ($patent_image_3): ?>
                        <div class="w-full flex justify-center">
                            <img src="<?php echo esc_url($patent_image_3['url']); ?>" alt="Patent Image" width="361"
                                height="156"
                                class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                        </div>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="absolute lg:top-[6rem] md:top-[7rem] sm:top-[9.5rem] top-[5.5rem] -translate-y-1/2 left-[-14px] z-10">
                    <button class="swiper-button-prev-custom bg-white p-1 rounded-full ml-4">
                        <svg class="text-black size-4" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                            </path>
                        </svg> </button>
                </div>
                <div class="absolute lg:top-[6rem] md:top-[7rem] sm:top-[9.5rem] top-[5.5rem] -translate-y-1/2 right-[-14px] z-10">
                    <button class="swiper-button-next-custom bg-white p-1 rounded-full mr-4">
                        <svg class="text-black size-4" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z">
                            </path>
                        </svg>
                    </button>
                </div>
                <?php if (get_field('patent_heading')): ?>
                <h2 class="lg:text-xl md:text-lg text-base font-semibold text-[#2a1313]">
                    <?php the_field('patent_heading'); ?>
                </h2>
                <?php endif; ?>

                <!-- <?php if ($patent_image): ?>
                <div class="w-full flex justify-center lg:hidden">
                    <img src="<?php echo esc_url($patent_image['url']); ?>" alt="Patent Image" width="361" height="156"
                        class="w-full rounded-md shadow aspect-[361/156] h-auto object-cover object-top " />
                </div>
                <?php endif; ?> -->

                <?php if (get_field('patent_desc')): ?>
                <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow ">
                    <?php the_field('patent_desc'); ?>
                </p>
                <?php endif; ?>

                <a href="<?php the_field('patent_btn_link'); ?>"
                    class="w-fit inline-flex items-center shadow py-2 ps-4 pe-2 lg:ps-6 lg:pe-3 bg-[#121212] text-white rounded-full ring-2 ring-inset ring-[#121212] hover:ring-[#525252] hover:-translate-y-2 text-sm duration-500 transition-all hover:bg-gradient-to-r hover:from-[#000000] hover:to-[#545454]">
                    <?php the_field('patent_btn_text'); ?>
                    <span class="bg-white rounded-full p-2 ms-3">
                        <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
            </div>

        </div>
    </div>
</section>

<section class="w-full relative lg:py-16 md:py-10 py-8">
    <div class="max-w-7xl mx-auto px-4 lg:px-6 flex flex-col justify-center">
        <span
            class="flex items-center mx-auto inline-block bg-[#bf4b50] py-[5px] px-7 rounded-full text-white rounded-full lg:text-3xl md:text-2xl text-xl font-medium mb-[15px] tracking-[1px] leading-[1.5] mb-6">
            <?php the_field('partners_badge'); ?>
        </span>

        <h2
            class="lg:text-2xl md:text-xl text-lg !leading-normal text-center font-semibold text-[#2a1313] lg:mb-14 mb-8">
            <?php the_field('partners_heading'); ?>
        </h2>

        <div class="flex justify-center items-center gap-0 divide-x-2 divide-dotted divide-gray-700">
            <?php
            $logos = [
            'startup_logo_1',
            'startup_logo_2',
            'startup_logo_3',
            ];

        $total = count($logos);
        $i = 1;

            foreach ($logos as $field_name) {
            $logo = get_field($field_name);
            if ($logo) {
                echo '<div class="lg:px-12 px-6">';
                echo '<img src="' . esc_url($logo['url']) . '" alt="Partner Logo" title="Partner Logo" width="133" height="120" class="max-w-full max-h-[120px] object-contain" />';
                echo '</div>';
                $i++;
            }
            }
        ?>
        </div>
    </div>
</section>

<?php echo do_shortcode('[habit_orientation_section]'); ?>



<?php get_footer();?>