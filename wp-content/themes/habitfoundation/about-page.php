<?php
/* Template Name: about page */
get_header();
?>
<section class="relative w-full h-[300px] md:h-[350px] flex items-center">
  <?php $bg = get_field('about_banner_image'); ?>
  <?php if ($bg): ?>
    <div class="absolute inset-0">
      <img src="<?php echo esc_url($bg['url']); ?>" alt="About Banner" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-[#01142a8c] bg-opacity-70"></div>
    </div>
  <?php endif; ?>

  <div class="relative z-10 max-w-7xl mx-auto px-4 w-full">
    <h2 class="text-white text-4xl md:text-5xl font-bold mb-4">
      <?php the_field('about_main_heading'); ?>
      <span class="text-[lime-500]"><?php the_field('about_highlight'); ?></span>
    </h2>

    <div class="flex items-center text-white text-sm font-medium space-x-2">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:underline">Home</a>
      <span class="font-medium inline-block text-[#bf4b50]">—</span>
      <span class="text-xs font-medium inline-block text-[#bf4b50] lg:text-sm font-medium "><?php the_field('breadcrumb_label'); ?></span>
    </div>
  </div>
</section>

<section class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6">
  <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
     <div class="w-full flex flex-col">
          <span class="text-sm font-medium inline-block flex items-center justify-center text-[#bf4b50] text-center lg:text-lg font-medium mb-[15px] tracking-[2.4px] leading-[1.5] mb-6">
            <?php the_field('director_sec_badge'); ?>
          </span>
          <h2 class="lg:text-3xl md:text-2xl text-xl !leading-normal text-center font-semibold text-[#2a1313] lg:mb-14 mb-8">
            <?php the_field('director_sec_heading'); ?>
          </h2>
      </div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 py-6">
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('director_1_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('director_1_name')); ?>" alt="Shri Baldev Boolani" title="Shri Baldev Boolani" width="420" height="320" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('director_1_name'); ?></h4>
          </div>
      </div>
      
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img2 = get_field('director_2_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full">
              <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr(get_field('director_2_name')); ?>" alt="Shri Rajesh Gehani" title="Shri Rajesh Gehani" width="420" height="320" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('director_2_name'); ?></h4>
          </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img2 = get_field('director_3_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full h-[270px]">
              <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr(get_field('director_3_name')); ?>" alt="Shri Rajesh Gehani" title="Shri Rajesh Gehani" width="420" height="320" class="size-full object-top object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('director_3_name'); ?></h4>
          </div>
      </div>
      
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:mt-3">
        <?php $img2 = get_field('director_4_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full h-[270px]">
              <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr(get_field('director_4_name')); ?>"  title="<?php echo esc_attr(get_field('director_4_name')); ?>" width="420" height="320" class="size-full object-top object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('director_4_name'); ?></h4>
          </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:mt-3">
        <?php $img2 = get_field('director_5_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full h-[270px]">
              <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr(get_field('director_5_name')); ?>"  title="<?php echo esc_attr(get_field('director_5_name')); ?>" width="420" height="320" class="size-full object-top object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('director_5_name'); ?></h4>
          </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:mt-3">
        <?php $img2 = get_field('director_6_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full h-[270px]">
              <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr(get_field('director_6_name')); ?>" title="<?php echo esc_attr(get_field('director_6_name')); ?>" width="420" height="320" class="size-full object-top object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('director_6_name'); ?></h4>
          </div>
      </div>

    </div>
  </div>
</section>

<section class="w-full bg-[#f6f5f2] relative lg:py-6 md:py-4">
  <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
     <div class="w-full flex flex-col">
          <span class="text-sm font-medium inline-block flex items-center justify-center text-[#bf4b50] text-center lg:text-lg font-medium mb-[15px] tracking-[2.4px] leading-[1.5] mb-6">
            <?php the_field('leadership_team_sec_badge'); ?>
          </span>
          <h2 class="lg:text-3xl md:text-2xl text-xl lg:w-9/12 !leading-normal mx-auto text-center font-semibold text-[#2a1313] lg:mb-14 mb-8">
            <?php the_field('leadership_team_sec_heading'); ?>
          </h2>
      </div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 py-6">
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img1 = get_field('leadership_team_1_image'); ?>
        <?php if ($img1): ?>
          <div class="py-2 px-2 w-full">
            <img src="<?php echo esc_url($img1['url']); ?>" alt="<?php echo esc_attr(get_field('leadership_team_1_name')); ?>" title="<?php echo esc_attr(get_field('leadership_team_1_name')); ?>i" width="420" height="320" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('leadership_team_1_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('leadership_team_1_designation'); ?></p>
          </div>
      </div>
      
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img2 = get_field('leadership_team_2_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full">
              <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr(get_field('leadership_team_2_name')); ?>"  title="<?php echo esc_attr(get_field('leadership_team_2_name')); ?>" width="420" height="320" class="size-full object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('leadership_team_2_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('leadership_team_2_designation'); ?>
            </p>
          </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg">
        <?php $img2 = get_field('leadership_team_3_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full h-[270px]">
              <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr(get_field('leadership_team_3_name')); ?>" title="<?php echo esc_attr(get_field('leadership_team_3_name')); ?>" width="420" height="320" class="size-full object-top object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('leadership_team_3_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('leadership_team_3_designation'); ?></p>
          </div>
      </div>
      
      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:mt-3">
        <?php $img2 = get_field('leadership_team_4_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full h-[270px]">
              <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr(get_field('leadership_team_4_name')); ?>"  title="<?php echo esc_attr(get_field('leadership_team_4_name')); ?>" width="420" height="320" class="size-full object-top object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('leadership_team_4_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('leadership_team_4_designation'); ?>
            </p>
          </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:mt-3">
        <?php $img2 = get_field('leadership_team_5_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full h-[270px]">
              <img src="<?php echo esc_url($img2['url']); ?>" alt="<?php echo esc_attr(get_field('leadership_team_5_name')); ?>"  title="<?php echo esc_attr(get_field('leadership_team_5_name')); ?>" width="420" height="320" class="size-full object-top object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('leadership_team_5_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('leadership_team_5_designation'); ?></p>
          </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:mt-3">
        <?php $img2 = get_field('leadership_team_6_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full h-[270px]">
              <img src="<?php echo esc_url($img2['url']); ?>" 
              alt="<?php echo esc_attr(get_field('leadership_team_6_name')); ?>" title="<?php echo esc_attr(get_field('leadership_team_6_name')); ?>" width="420" height="320" class="size-full object-top object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('leadership_team_6_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('leadership_team_6_designation'); ?></p>
          </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:mt-3">
        <?php $img2 = get_field('leadership_team_7_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full h-[270px]">
              <img src="<?php echo esc_url($img2['url']); ?>" 
              alt="<?php echo esc_attr(get_field('leadership_team_7_name')); ?>" title="<?php echo esc_attr(get_field('leadership_team_7_name')); ?>" width="420" height="320" class="size-full object-top object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('leadership_team_7_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('leadership_team_7_designation'); ?></p>
          </div>
      </div>

      <div class="w-full h-full flex flex-col bg-white border border-[#e9e7e3] rounded-xl shadow-sm duration-300 group md:group-hover:shadow-lg lg:mt-3">
        <?php $img2 = get_field('leadership_team_8_image'); ?>
        <?php if ($img2): ?>
          <div class="py-2 px-2 w-full h-[270px]">
              <img src="<?php echo esc_url($img2['url']); ?>" 
              alt="<?php echo esc_attr(get_field('leadership_team_8_name')); ?>" title="<?php echo esc_attr(get_field('leadership_team_8_name')); ?>" width="420" height="320" class="size-full object-top object-cover rounded-md">
          </div>
          <?php endif; ?>
          <div class="flex flex-col gap-y-1 px-4 py-4">
            <h4 class="font-medium text-[#2a1313] text-start lg:text-lg text-sm !leading-8 duration-300 pe-2 md:group-hover:text-[#bf4b50]"><?php the_field('leadership_team_8_name'); ?></h4>
            <p class="font-medium text-gray-800 lg:text-base text-sm"><?php the_field('leadership_team_8_designation'); ?></p>
          </div>
      </div>

    </div>
  </div>
</section>


<?php get_footer();?>
