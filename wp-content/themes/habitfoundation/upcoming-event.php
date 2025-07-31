<?php
/* Template Name: upcoming-event page */
get_header();?>
<section class="w-full bg-white relative lg:py-16 md:py-8 py-6 animate-bg-zoom bg-[url(<?php echo get_template_directory_uri(); ?>/assets/img/elevate4.webp)] bg-cover bg-center">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="w-full flex flex-col">
            <!-- <span class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
            <?php the_field('basic_events_badge'); ?>
            </span> -->
            <h2
                class="w-full lg:text-2xl md:text-xl text-lg mx-auto !leading-normal text-center font-semibold mx-auto text-[#2a1313] lg:mb-6 mb-4">
                Upcoming Events – What’s Next at HABIT Foundation
            </h2>
        </div>
    </div>
</section>

<?php get_footer();?>