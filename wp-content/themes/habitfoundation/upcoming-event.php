<?php
/* Template Name: upcoming-event page */
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
            <?php the_field('upcoming_events_heading'); ?>
            <span class="text-[lime-500]"><?php the_field('events_highlight'); ?></span>
        </h2>
        <div class="flex items-center text-white text-sm font-medium space-x-2 justify-center">
            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="text-sm font-medium inline-block hover:underline lg:text-base font-medium tracking-[0.8px]">Home</a>
            <span class="font-medium inline-block text-[#bf4b50]">—</span>
            <a href="https://project.imgglobal.in/habit-foundation/upcoming-event/">
            <span class="text-sm font-medium inline-block text-[#bf4b50] lg:text-base font-medium tracking-[0.8px]"><?php the_field('breadcrumb_label_upcomingevents'); ?></span>
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
                Upcoming Events – What’s Next at HABIT Foundation
            </h2>
        </div>
        <div class="w-full grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="bg-gradient-to-r from-[#e7e7e7] to-[#efd8d8] rounded-[10px] py-6 px-3 hover:shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300 flex flex-col items-center gap-2 md:gap-2.5">
                <button class="design-tab-btn text-base lg:text-base font-semibold py-3"
                    data-tab="design-tab">Design Thinking Workshop</button>
                <a href="<?php the_field('upcoming_events_link'); ?>" class="px-4 py-3 border border-[#b93b41] text-[#b93b41] font-medium rounded-sm text-sm text-center flex items-center justify-center mx-auto"><?php the_field('upcoming_events_text'); ?></a>
            </div>

            <div class="bg-gradient-to-r from-[#e7e7e7] to-[#efd8d8] rounded-[10px] py-6 px-3 hover:shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300 flex flex-col items-center gap-2 md:gap-2.5">
                <button class="design-tab-btn text-base lg:text-base font-semibold py-3"
                    data-tab="design-tab">Patent Awareness Session</button>
                <a href="<?php the_field('upcoming_events_link'); ?>" class="px-4 py-3 border border-[#b93b41] text-[#b93b41] font-medium rounded-sm text-sm text-center flex items-center justify-center mx-auto"><?php the_field('upcoming_events_text'); ?></a>
            </div>
            
            <div class="bg-gradient-to-r from-[#e7e7e7] to-[#efd8d8] rounded-[10px] py-6 px-3 hover:shadow-[0_4px_12px_rgba(0,0,0,0.1)] transition-all duration-300 flex flex-col items-center gap-2 md:gap-2.5">
                <button class="design-tab-btn text-base lg:text-base font-semibold py-3"
                    data-tab="design-tab">Session on Startup Regulatory Compliance</button>
                <a href="<?php the_field('upcoming_events_link'); ?>" class="px-4 py-3 border border-[#b93b41] text-[#b93b41] font-medium rounded-sm text-sm text-center flex items-center justify-center mx-auto"><?php the_field('upcoming_events_text'); ?></a>

            </div>
        </div>
        </div>
</section>

<?php get_footer();?>