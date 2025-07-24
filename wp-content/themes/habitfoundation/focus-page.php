<?php
/* Template Name: focus page */get_header();?>
<section class="relative w-full md:h-[200px] flex items-center max-md:py-4">
  <?php $bg = get_field('focus_banner_image'); ?>
  <?php if ($bg): ?>
    <div class="absolute inset-0">
      <img src="<?php echo esc_url($bg['url']); ?>" alt="focus Banner" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-[#01142a8c] bg-opacity-70"></div>
    </div>
  <?php endif; ?>

  <div class="relative z-10 max-w-7xl mx-auto px-4 w-full">
    <h2 class="text-white text-4xl md:text-5xl font-bold mb-4 text-center justify-center">
      <?php the_field('focus_main_heading'); ?>
      <span class="text-[lime-500]"><?php the_field('focus_highlight'); ?></span>
    </h2>

    <div class="flex items-center text-white text-sm font-medium space-x-2 justify-center">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="text-sm font-medium inline-block hover:underline lg:text-base font-medium tracking-[0.8px]">Home</a>
      <span class="font-medium inline-block text-[#bf4b50]">—</span>
      <span class="text-sm font-medium inline-block text-[#bf4b50] lg:text-base font-medium tracking-[0.8px]"><?php the_field('breadcrumb_label_focus'); ?></span>
    </div>
  </div>
</section>

<section class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6  animate-bg-zoom bg-[url(<?php echo get_template_directory_uri(); ?>/assets/img/elevate4.webp)] bg-cover bg-center">
  <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
      <div class="w-full flex flex-col">
          <!-- <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-bold flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
            <?php the_field('focus_sec_badge'); ?>
          </span> -->
          <h2 class="lg:w-9/12 w-full lg:text-2xl md:text-xl text-lg mx-auto !leading-normal text-center font-semibold text-[#2a1313] lg:mb-10 mb-4">
            <?php the_field('focus_sec_heading'); ?>
          </h2>
      </div>

    <div class="w-full flex items-center flex-row justify-center lg:gap-x-10 gap-6 flex-wrap pb-8 ">
      <a href="<?php the_field('innovative_product_link'); ?>" id="productTab" class="tab-btn active-tab flex items-center gap-2 lg:text-lg tracking-[0.5px] font-medium bg-[#bf4b50] py-3 px-6 rounded-md text-white text-center duration-300 hover:bg-[#000000] hover:text-white">
          <svg class="size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" fill-rule="evenodd" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M320 30.02c8.837 0 16 7.163 16 16v304c0 8.836-7.163 16-16 16H16c-8.837 0-16-7.164-16-16v-304c0-8.837 7.163-16 16-16zm-52 68H68v200h200zm493.333 87.686c6.248 6.248 6.248 16.379 0 22.627l-181.02 181.02c-6.248 6.248-16.378 6.248-22.627 0l-181.019-181.02c-6.248-6.248-6.248-16.379 0-22.627l181.02-181.02c6.248-6.248 16.378-6.248 22.627 0zm-84.853 11.313L569 89.54 461.52 197.02 569 304.5zM320 430.02c8.837 0 16 7.164 16 16v304c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16v-304c0-8.836 7.163-16 16-16zm-52 68H68v200h200zm452-68c8.837 0 16 7.164 16 16v304c0 8.837-7.163 16-16 16H416c-8.837 0-16-7.163-16-16v-304c0-8.836 7.163-16 16-16zm-52 68H468v200h200z" transform="translate(144 113.98)"></path></svg>
          <?php the_field('innovative_product_title'); ?>
      </a>
      <a href="<?php the_field('innovative_service_link'); ?>" id="serviceTab" class="tab-btn flex items-center gap-2 lg:text-lg tracking-[0.5px] font-medium bg-[#000000] py-3 px-6 rounded-md text-white text-center duration-300 hover:bg-[#bf4b50] hover:text-white">
        <svg class="size-6" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M20.97 7.27a.996.996 0 0 0 0-1.41l-2.83-2.83a.996.996 0 0 0-1.41 0l-4.49 4.49-3.89-3.89c-.78-.78-2.05-.78-2.83 0l-1.9 1.9c-.78.78-.78 2.05 0 2.83l3.89 3.89L3 16.76V21h4.24l4.52-4.52 3.89 3.89c.95.95 2.23.6 2.83 0l1.9-1.9c.78-.78.78-2.05 0-2.83l-3.89-3.89 4.48-4.48zM5.04 6.94l1.89-1.9L8.2 6.31 7.02 7.5l1.41 1.41 1.19-1.19 1.2 1.2-1.9 1.9-3.88-3.88zm11.23 7.44-1.19 1.19 1.41 1.41 1.19-1.19 1.27 1.27-1.9 1.9-3.89-3.89 1.9-1.9 1.21 1.21zM6.41 19H5v-1.41l9.61-9.61 1.3 1.3.11.11L6.41 19zm9.61-12.44 1.41-1.41 1.41 1.41-1.41 1.41-1.41-1.41z"></path></svg>
          <?php the_field('innovative_service_title'); ?>
      </a>
    </div>

    <div id="productContent" class="tab-content w-full flex flex-col">
        <div class="w-full bg-gradient-to-r from-[#dbd9d9] to-transparent py-6 px-8 mb-6 rounded-lg">
          <h4 class="flex items-center gap-2 lg:text-lg border-b border-gray-400 text-[#212121] tracking-[0.5px] w-full font-medium py-4 text-center duration-400 mb-3">
                <span class="*:size-6 w-fit flex items-center bg-white p-2 rounded-full *:text-black"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 11.33 18 18H6l5-6.67V6h2m2.96-2H8.04c-.42 0-.65.48-.39.81L9 6.5v4.17L3.2 18.4c-.49.66-.02 1.6.8 1.6h16c.82 0 1.29-.94.8-1.6L15 10.67V6.5l1.35-1.69c.26-.33.03-.81-.39-.81z"></path></svg></span>

                <?php the_field('product_1'); ?>
          </h4>
          <div class="flex flex-col lg:flex-row items-center lg:gap-10 gap-4 lg:pt-8 pt-4">
            <div class="lg:w-[55%] w-full flex flex-col gap-y-3">
                <div class="w-full lg:h-80 h-full flex items-center lg:hidden">
                  <?php $img = get_field('product_image_1'); ?>
                    <?php if ($img): ?>
                      <img src="<?php echo esc_url($img['url']); ?>" alt="Science" title="Science" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                  <?php endif; ?>               
                </div>
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_1'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('product_description_1'); ?></p>
                  </div>
                </div>
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                    </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_2'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('product_description_2'); ?></p>
                  </div>
                </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_3'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('product_description_3'); ?></p>
                  </div>
              </div>
            </div>
            <div class="lg:w-[45%] w-full flex flex-col items-center gap-y-2">
                <div class="w-full lg:h-80 h-full lg:flex items-center hidden">
                  <?php $img = get_field('product_image_1'); ?>
                    <?php if ($img): ?>
                      <img src="<?php echo esc_url($img['url']); ?>" alt="Science" title="Science" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                  <?php endif; ?>               
                </div>
            </div>
        </div>
        </div>
        <div class="w-full bg-gradient-to-r from-[#dbd9d9] to-transparent py-6 px-8 mb-6 rounded-lg">
          <h4 class="flex items-center gap-2 lg:text-lg border-b border-gray-400 text-[#212121] tracking-[0.5px] w-full font-medium py-4 text-center duration-400 mb-3">
                <span class="*:size-6 w-fit flex items-center bg-white p-2 rounded-full *:text-black"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 11.33 18 18H6l5-6.67V6h2m2.96-2H8.04c-.42 0-.65.48-.39.81L9 6.5v4.17L3.2 18.4c-.49.66-.02 1.6.8 1.6h16c.82 0 1.29-.94.8-1.6L15 10.67V6.5l1.35-1.69c.26-.33.03-.81-.39-.81z"></path></svg></span>
                <?php the_field('product_2'); ?>
          </h4>
          <div class="flex flex-col lg:flex-row items-center lg:gap-10 gap-4 lg:pt-8 pt-4">
            <div class="lg:w-[45%] w-full flex flex-col items-center gap-y-2">
                  <div class="w-full lg:h-80 h-full flex items-center">
                    <?php $img = get_field('product_image_2'); ?>
                      <?php if ($img): ?>
                        <img src="<?php echo esc_url($img['url']); ?>" alt="Pharmacy" title="Pharmacy" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                    <?php endif; ?>                
                  </div>
            </div>
            <div class="lg:w-[55%] w-full flex flex-col gap-y-3">
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_4'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('product_description_4'); ?></p>
                  </div>
                </div>
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                    </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_5'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('product_description_5'); ?></p>
                  </div>
                </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_6'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('product_description_6'); ?></p>
                  </div>
              </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_7'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('product_description_7'); ?></p>
                  </div>
                </div>
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                    </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_8'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('product_description_8'); ?></p>
                  </div>
                </div>
            </div>
          </div>    
        </div>
        <div class="w-full bg-gradient-to-r from-[#dbd9d9] to-transparent  py-6 px-8 mb-6 rounded-lg">
          <h4 class="flex items-center gap-2 lg:text-lg border-b border-gray-400 text-[#212121] tracking-[0.5px] w-full font-medium py-4 text-center duration-400 mb-3">
                   <span class="*:size-6 w-fit flex items-center bg-white p-2 rounded-full *:text-black"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 11.33 18 18H6l5-6.67V6h2m2.96-2H8.04c-.42 0-.65.48-.39.81L9 6.5v4.17L3.2 18.4c-.49.66-.02 1.6.8 1.6h16c.82 0 1.29-.94.8-1.6L15 10.67V6.5l1.35-1.69c.26-.33.03-.81-.39-.81z"></path></svg></span>
                <?php the_field('product_3'); ?>
          </h4>
            <div class="flex flex-col lg:flex-row items-center lg:gap-10 gap-4 lg:pt-8 pt-4">
            <div class="lg:w-[55%] w-full flex flex-col gap-y-3">
                <div class="w-full lg:h-80 h-full flex items-center lg:hidden">
                  <?php $img = get_field('product_image_3'); ?>
                        <?php if ($img): ?>
                          <img src="<?php echo esc_url($img['url']); ?>" alt="Engineering" title="Engineering" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                  <?php endif; ?>
                </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_9'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('product_description_9'); ?></p>
                  </div>
              </div>
              
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_10'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('product_description_10'); ?></p>
                  </div>
                </div>
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                    </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_11'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('product_description_11'); ?></p>
                  </div>
                </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_12'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('product_description_12'); ?></p>
                  </div>
              </div>
                
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_13'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('product_description_13'); ?></p>
                  </div>
              </div>
            </div>
            <div class="lg:w-[45%] w-full flex flex-col items-center gap-y-2">
                <div class="w-full lg:h-80 h-full lg:flex items-center hidden">
                  <?php $img = get_field('product_image_3'); ?>
                        <?php if ($img): ?>
                          <img src="<?php echo esc_url($img['url']); ?>" alt="Engineering" title="Engineering" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                  <?php endif; ?>
                </div>
            </div>
          </div>
        </div>
        <div class="w-full bg-gradient-to-r from-[#dbd9d9] to-transparent  py-6 px-8 mb-6 rounded-lg">
          <h4 class="flex items-center gap-2 lg:text-lg border-b border-gray-400 text-[#212121] tracking-[0.5px] w-full font-medium py-4 text-center duration-400 mb-3">
                  <span class="*:size-6 w-fit flex items-center bg-white p-2 rounded-full *:text-black"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 11.33 18 18H6l5-6.67V6h2m2.96-2H8.04c-.42 0-.65.48-.39.81L9 6.5v4.17L3.2 18.4c-.49.66-.02 1.6.8 1.6h16c.82 0 1.29-.94.8-1.6L15 10.67V6.5l1.35-1.69c.26-.33.03-.81-.39-.81z"></path></svg></span>
                <?php the_field('product_4'); ?>
          </h4>
            <div class="flex flex-col lg:flex-row items-center lg:gap-10 gap-4 lg:pt-8 pt-4">
            <div class="lg:w-[45%] w-full flex flex-col items-center gap-y-2">
                  <div class="w-full lg:h-80 h-full flex items-center">
                    <?php $img = get_field('product_image_4'); ?>
                        <?php if ($img): ?>
                          <img src="<?php echo esc_url($img['url']); ?>" alt="Pharmacy" title="Pharmacy" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                    <?php endif; ?>
                  </div>
            </div>
            <div class="lg:w-[55%] w-full flex flex-col gap-y-3">
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                     <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                    </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_14'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('product_description_14'); ?></p>
                  </div>
                </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                   <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_15'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('product_description_15'); ?></p>
                  </div>
              </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                   <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_16'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('product_description_16'); ?></p>
                  </div>
              </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('product_title_17'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('product_description_17'); ?></p>
                  </div>
              </div>
            </div>
            </div>
        </div>
    </div>
    
    <div id="serviceContent" class="tab-content hidden w-full flex flex-col items-center lg:gap-6 gap-4">
        <div class="w-full bg-gradient-to-r from-[#dbd9d9] to-transparent py-6 px-8 mb-6 rounded-lg">
          <h4 class="flex items-center gap-2 lg:text-lg border-b border-gray-400 text-[#212121] tracking-[0.5px] w-full font-medium py-4 text-center duration-400 mb-3">
              <span class="*:size-6 w-fit flex items-center bg-gray-200 p-2 rounded-full *:text-black"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 11.33 18 18H6l5-6.67V6h2m2.96-2H8.04c-.42 0-.65.48-.39.81L9 6.5v4.17L3.2 18.4c-.49.66-.02 1.6.8 1.6h16c.82 0 1.29-.94.8-1.6L15 10.67V6.5l1.35-1.69c.26-.33.03-.81-.39-.81z"></path></svg></span>
              <?php the_field('service_1'); ?>
          </h4>
          <div class="flex flex-col lg:flex-row items-center lg:gap-10 gap-4 pt-8">
            <div class="lg:w-[55%] w-full flex flex-col gap-y-3">
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_1'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('service_description_1'); ?></p>
                  </div>
                </div>
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                    </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_2'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('service_description_2'); ?></p>
                  </div>
                </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_3'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('service_description_3'); ?></p>
                  </div>
              </div>
            </div>
            <div class="lg:w-[45%] w-full flex flex-col items-center gap-y-2">
                  <div class="w-full h-80 flex items-center">
                  <?php $img = get_field('service_image_1'); ?>
                        <?php if ($img): ?>
                          <img src="<?php echo esc_url($img['url']); ?>" alt="Pharmacy" title="Pharmacy" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                    <?php endif; ?>  
                  </div>
              </div>
            </div>
        </div>

        <div class="w-full bg-gradient-to-r from-[#dbd9d9] to-transparent py-6 px-8 mb-6 rounded-lg">
          <h4 class="flex items-center gap-2 lg:text-lg border-b border-gray-400 text-[#212121] tracking-[0.5px] w-full font-medium py-4 text-center duration-400 mb-3">
                <span class="*:size-6 w-fit flex items-center bg-gray-200 p-2 rounded-full *:text-black"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 11.33 18 18H6l5-6.67V6h2m2.96-2H8.04c-.42 0-.65.48-.39.81L9 6.5v4.17L3.2 18.4c-.49.66-.02 1.6.8 1.6h16c.82 0 1.29-.94.8-1.6L15 10.67V6.5l1.35-1.69c.26-.33.03-.81-.39-.81z"></path></svg></span>
                <?php the_field('service_2'); ?>
          </h4>
          <div class="flex flex-col lg:flex-row items-center lg:gap-10 gap-4 pt-8">
          <div class="lg:w-[45%] w-full flex flex-col items-center gap-y-2">
                  <div class="w-full h-80 flex items-center">
                    <?php $img = get_field('service_image_2'); ?>
                        <?php if ($img): ?>
                          <img src="<?php echo esc_url($img['url']); ?>" alt="Management" title="Management" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                    <?php endif; ?>  
                  </div>
            </div>
            <div class="lg:w-[55%] w-full flex flex-col gap-y-3">
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_4'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('service_description_4'); ?></p>
                  </div>
                </div>
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                    </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_5'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('service_description_5'); ?></p>
                  </div>
                </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_6'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('service_description_6'); ?></p>
                  </div>
              </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_7'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('service_description_7'); ?></p>
                  </div>
                </div>
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                    </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_8'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('service_description_8'); ?></p>
                  </div>
                </div>
            </div>
          </div>    
        </div>

        <div class="w-full bg-gradient-to-r from-[#dbd9d9] to-transparent  py-6 px-8 mb-6 rounded-lg">
          <h4 class="flex items-center gap-2 lg:text-lg border-b border-gray-400 text-[#212121] tracking-[0.5px] w-full font-medium py-4 text-center duration-400 mb-3">
                <span class="*:size-6 w-fit flex items-center bg-white p-2 rounded-full *:text-black"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 11.33 18 18H6l5-6.67V6h2m2.96-2H8.04c-.42 0-.65.48-.39.81L9 6.5v4.17L3.2 18.4c-.49.66-.02 1.6.8 1.6h16c.82 0 1.29-.94.8-1.6L15 10.67V6.5l1.35-1.69c.26-.33.03-.81-.39-.81z"></path></svg></span>
                <?php the_field('service_3'); ?>
          </h4>
          <div class="flex flex-col lg:flex-row items-center lg:gap-10 gap-4 lg:pt-8 pt-4">
            <div class="lg:w-[55%] w-full flex flex-col gap-y-3">
              <div class="w-full lg:h-80 h-full flex items-center lg:hidden">
                    <?php $img = get_field('service_image_3'); ?>
                        <?php if ($img): ?>
                          <img src="<?php echo esc_url($img['url']); ?>" alt="Law" title="Law" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                    <?php endif; ?>                  
                  </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_9'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('service_description_9'); ?></p>
                  </div>
              </div>
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_10'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('service_description_10'); ?></p>
                  </div>
                </div>
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                    </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_11'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('service_description_11'); ?></p>
                  </div>
                </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_12'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('service_description_12'); ?></p>
                  </div>
              </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_13'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('service_description_13'); ?></p>
                  </div>
              </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_14'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('service_description_14'); ?></p>
                  </div>
                </div>
            </div>
            <div class="lg:w-[45%] w-full flex flex-col items-center gap-y-2">
                  <div class="w-full lg:h-80 h-full lg:flex items-center hidden">
                    <?php $img = get_field('service_image_3'); ?>
                        <?php if ($img): ?>
                          <img src="<?php echo esc_url($img['url']); ?>" alt="Management" title="Management" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                    <?php endif; ?>                  
                  </div>
            </div>
          </div>
        </div>
        
        <div class="w-full bg-gradient-to-r from-[#dbd9d9] to-transparent  py-6 px-8 mb-6 rounded-lg">
          <h4 class="flex items-center gap-2 lg:text-lg border-b border-gray-400 text-[#212121] tracking-[0.5px] w-full font-medium py-4 text-center duration-400 mb-3">
                  <span class="*:size-6 w-fit flex items-center bg-white p-2 rounded-full *:text-black"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13 11.33 18 18H6l5-6.67V6h2m2.96-2H8.04c-.42 0-.65.48-.39.81L9 6.5v4.17L3.2 18.4c-.49.66-.02 1.6.8 1.6h16c.82 0 1.29-.94.8-1.6L15 10.67V6.5l1.35-1.69c.26-.33.03-.81-.39-.81z"></path></svg></span>
                <?php the_field('service_4'); ?>
          </h4>
          <div class="flex flex-col lg:flex-row items-center lg:gap-10 gap-4 lg:pt-8 pt-4">
            <div class="lg:w-[45%] w-full flex flex-col items-center gap-y-2">
                  <div class="w-full lg:h-80 h-full flex items-center">
                    <?php $img = get_field('service_image_4'); ?>
                        <?php if ($img): ?>
                        <img src="<?php echo esc_url($img['url']); ?>" alt="Law" title="Law" width="477" height="293" class="object-cover w-full h-full rounded-[40px]">
                    <?php endif; ?>                
                  </div>
            </div>
            <div class="lg:w-[55%] w-full flex flex-col gap-y-3">
                
                <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                    </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_15'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4"><?php the_field('service_description_15'); ?></p>
                  </div>
                </div>
              <div class="flex items-start gap-2 rounded-lg duration-300 ">
                  <span class="*:size-6 text-gray-800">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path></svg>
                  </span>
                  <div class="flex flex-col gap-y-1 ">
                    <h4 class="lg:text-lg text-sm !leading-6 text-[#212121] font-medium"><?php the_field('service_title_16'); ?></h4>
                    <p class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6 mb-4">
                      <?php the_field('service_description_16'); ?></p>
                  </div>
              </div>
          </div>
        </div>
    </div>

  </div>
</section>

<?php get_footer();?>
