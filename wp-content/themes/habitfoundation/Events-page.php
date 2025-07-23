<?php
/* Template Name: events page */get_header();?>
<section class="relative w-full h-[250px] flex items-center">
  <?php $bg = get_field('events_banner_image'); ?>
  <?php if ($bg): ?>
    <div class="absolute inset-0">
      <img src="<?php echo esc_url($bg['url']); ?>" alt="events Banner" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-[#01142a8c] bg-opacity-70"></div>
    </div>
  <?php endif; ?>
  <div class="relative z-10 max-w-7xl mx-auto px-4 w-full">
    <h2 class="text-white text-4xl md:text-5xl font-bold mb-4 text-center justify-center">
      <?php the_field('events_main_heading'); ?>
      <span class="text-[lime-500]"><?php the_field('events_highlight'); ?></span>
    </h2>
    <div class="flex items-center text-white text-sm font-medium space-x-2 justify-center">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="text-sm font-medium inline-block hover:underline lg:text-base font-medium tracking-[0.8px]">Home</a>
      <span class="font-medium inline-block text-[#bf4b50]">—</span>
      <span class="text-sm font-medium inline-block text-[#bf4b50] lg:text-base font-medium tracking-[0.8px]"><?php the_field('breadcrumb_label_events'); ?></span>
    </div>
  </div>
</section>

<section class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6 animate-bg-zoom bg-[url(<?php echo get_template_directory_uri(); ?>/assets/img/elevate4.webp)] bg-cover bg-center">
  <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
    <div class="w-full flex flex-col">
        <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white text-sm lg:text-base font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
          <?php the_field('events_sec_badge'); ?>
        </span>
        <h2 class="lg:w-9/12 w-full lg:text-3xl md:text-2xl text-xl mx-auto !leading-normal text-center font-semibold text-[#2a1313] lg:mb-10 mb-4">
          <?php the_field('events_sec_heading'); ?>
        </h2>
    </div>
    <div class="w-full flex flex-col items-center lg:gap-6 gap-4">

      <div class="w-full flex py-4 px-3 rounded-xl bg-white items-center border border-[#e9e7e3]">  
        <span class="*:size-6 inline-flex items-center justify-center text-white bg-[#bf4b50] rounded-sm p-2"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="M8 14h.01"></path><path d="M12 14h.01"></path><path d="M16 14h.01"></path><path d="M8 18h.01"></path><path d="M12 18h.01"></path><path d="M16 18h.01"></path></svg></span>
        <h2 class="font-semibold text-[#2a1313] text-start lg:text-xl md:text-lg text-base uppercase !leading-8 duration-300 px-2 md:group-hover:text-[#bf4b50]"><?php the_field('event_top_heading_1'); ?></h2>
      </div>  

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_1'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_1'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_1'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
          <?php $img1 = get_field('event_image_1'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_1'); ?>" title="<?php the_field('event_title_1'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_2'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_1'); ?>" title="<?php the_field('event_title_1'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_3'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_1'); ?>" title="<?php the_field('event_title_1'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_1'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_2'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_2'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
          <?php $img1 = get_field('event_image_4'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_2'); ?>" title="<?php the_field('event_title_2'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_5'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_2'); ?>" title="<?php the_field('event_title_2'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_6'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_2'); ?>" title="<?php the_field('event_title_2'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
        </div>
      </div>
      
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_1'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_3'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_3'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
          <?php $img1 = get_field('event_image_8'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_3'); ?>" title="<?php the_field('event_title_3'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_9'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_3'); ?>" title="<?php the_field('event_title_3'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_10'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_3'); ?>" title="<?php the_field('event_title_3'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
        </div>
      </div>
      
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_1'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_4'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_4'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
          <?php $img1 = get_field('event_image_11'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_4'); ?>" title="<?php the_field('event_title_4'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_12'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_4'); ?>" title="<?php the_field('event_title_4'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_13'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_4'); ?>" title="<?php the_field('event_title_4'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_1'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_5'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_5'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
          <?php $img1 = get_field('event_image_14'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_5'); ?>" title="<?php the_field('event_title_5'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_15'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_5'); ?>" title="<?php the_field('event_title_5'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_16'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_5'); ?>" title="<?php the_field('event_title_5'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_1'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_6'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_6'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
          <?php $img1 = get_field('event_image_17'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_6'); ?>" title="<?php the_field('event_title_6'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_18'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_6'); ?>" title="<?php the_field('event_title_6'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_19'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_6'); ?>" title="<?php the_field('event_title_6'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_2'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_7'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_7'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
          <?php $img1 = get_field('event_image_20'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_7'); ?>" title="<?php the_field('event_title_7'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_21'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_7'); ?>" title="<?php the_field('event_title_7'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_22'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_7'); ?>" title="<?php the_field('event_title_7'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_23'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_7'); ?>" title="<?php the_field('event_title_7'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_3'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_8'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_8'); ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
          <?php $img1 = get_field('event_image_24'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_8'); ?>" title="<?php the_field('event_title_8'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
            </div>
          <?php endif; ?>
          
          <?php $img1 = get_field('event_image_25'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_8'); ?>" title="<?php the_field('event_title_8'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          
          <?php $img1 = get_field('event_image_26'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_8'); ?>" title="<?php the_field('event_title_8'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>

          <?php $img1 = get_field('event_image_27'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_8'); ?>" title="<?php the_field('event_title_8'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
        </div>
      </div>

    </div>
    
    <div class="w-full flex flex-col items-center lg:gap-6 gap-4 lg:mt-14 mt-6">
      <div class="w-full flex py-4 px-3 rounded-xl bg-white items-center border border-[#e9e7e3]">  
        <span class="*:size-6 inline-flex items-center justify-center text-white bg-[#bf4b50] rounded-sm p-2"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="M8 14h.01"></path><path d="M12 14h.01"></path><path d="M16 14h.01"></path><path d="M8 18h.01"></path><path d="M12 18h.01"></path><path d="M16 18h.01"></path></svg></span>
        <h2 class="font-semibold text-[#2a1313] text-start lg:text-xl md:text-lg text-base uppercase !leading-8 duration-300 px-2 md:group-hover:text-[#bf4b50]"><?php the_field('event_top_heading_2'); ?></h2>
      </div> 
      
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_9'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_9'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
          <?php $img1 = get_field('event_image_28'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_9'); ?>" title="<?php the_field('event_title_9'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_29'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_9'); ?>" title="<?php the_field('event_title_9'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_30'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_9'); ?>" title="<?php the_field('event_title_9'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_10'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_10'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-3">
          <?php $img1 = get_field('event_image_31'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_10'); ?>" title="<?php the_field('event_title_10'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_32'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_10'); ?>" title="<?php the_field('event_title_10'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
          <?php $img1 = get_field('event_image_33'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full flex justify-center">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_10'); ?>" title="<?php the_field('event_title_10'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="w-full h-full flex lg:flex-row flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="lg:w-4/5 w-full h-full flex items-center">
          <div class="flex flex-col gap-y-1 mb-4">
            <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
            <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_13'); ?></h4>
            <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_11'); ?></p>
          </div>
        </div>
        <div class="lg:w-1/5 w-full h-full flex items-end">
          <?php $img1 = get_field('event_image_34'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_13'); ?>" title="<?php the_field('event_title_13'); ?>" width="473" height="440" class="w-full rounded-md shadow aspect-[361/440] h-auto object-contain object-top rounded-md">
            </div>
        </div>
      </div>

      <div class="w-full h-full flex lg:flex-row flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="lg:w-4/5 w-full h-full flex items-center"> 
          <div class="flex flex-col gap-y-1 mb-4">
            <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_4'); ?></span>
            <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_12'); ?></h4>
            <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_12'); ?></p>
          </div>
        </div>
        <div class="lg:w-1/5 w-full h-full flex items-end">
        <?php endif; ?>
          <?php $img1 = get_field('event_image_35'); ?>
          <?php if ($img1): ?>
            <div class="py-2 px-2 w-full">
              <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_12'); ?>" title="<?php the_field('event_title_12'); ?>" width="473" height="440" class="w-full rounded-md shadow aspect-[361/440] h-auto object-contain object-top rounded-md">
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:px-4 lg:py-4 px-2 py-4">
        <div class="flex flex-col gap-y-1 mb-4">
          <span class="rounded-full text-[#bf4b50] text-base lg:text-lg font-semibold flex items-start text-start inline-block leading-[1.5]"><?php the_field('event_sub_heading_5'); ?></span>
          <h4 class="lg:text-xl md:text-lg text-base text-lg font-semibold text-[#2a1313]"><?php the_field('event_title_13'); ?></h4>
          <p class="font-normal text-[#4c4949] w-full md:text-base text-sm tracking-[0.3px] !leading-7 grow"><?php the_field('event_description_13'); ?></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
            <?php $img1 = get_field('event_image_36'); ?>
            <?php if ($img1): ?>
              <div class="py-2 px-2 w-full flex justify-center">
                <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_13'); ?>" title="<?php the_field('event_title_13'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md">
              </div>
            <?php endif; ?>

            <?php $img1 = get_field('event_image_37'); ?>
            <?php if ($img1): ?>
              <div class="py-2 px-2 w-full flex justify-center">
                <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_13'); ?>" title="<?php the_field('event_title_13'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
              </div>
            <?php endif; ?>

            <?php $img1 = get_field('event_image_38'); ?>
            <?php if ($img1): ?>
              <div class="py-2 px-2 w-full flex justify-center">
                <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_13'); ?>" title="<?php the_field('event_title_13'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
              </div>
            <?php endif; ?>
            <?php $img1 = get_field('event_image_39'); ?>
            <?php if ($img1): ?>
              <div class="py-2 px-2 w-full flex justify-center">
                <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php the_field('event_title_13'); ?>" title="<?php the_field('event_title_13'); ?>" width="373" height="240" class="w-full rounded-md shadow aspect-[361/240] h-auto object-cover object-top rounded-md ">
              </div>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
