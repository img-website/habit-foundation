<?php /* Template Name: cover page1 */ get_header(); ?>

<section class="w-full relative lg:py-16 md:py-10 py-8 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="w-full flex flex-col">
        <h2 class="lg:text-2xl md:text-xl text-lg !leading-normal font-semibold text-[#2a1313] mb-4">
            <?php the_field('popup_title'); ?>
        </h2>
        <div class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6">
            <?php the_field('popup_content'); ?>
        </div>
        </div>
    </div>
</section>

    <!-- ACF Popup Modal -->
    <div id="acfPopup" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="max-w-3xl top-12 bg-white lg:py-10 lg:px-7 py-6 px-6 rounded-xl relative">
            <button id="popupCloseBtn1"
                class="absolute top-3 right-4 text-white bg-[#bf4b50] hover:bg-red-600 px-[13px] py-[8px] rounded-full shadow z-10">
                ✖
            </button>
            <h2 class="lg:text-2xl md:text-xl text-lg !leading-normal font-semibold text-[#2a1313] mb-4">
                <?php the_field('popup_title'); ?>
            </h2>
            <div class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6">
                <?php the_field('popup_content'); ?>
            </div>
        </div>
    </div>

    <div id="popup2" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="max-w-3xl top-12 bg-white py-6 px-6 rounded-xl relative">
            <button
                class="absolute top-3 right-4 text-white bg-[#bf4b50] hover:bg-red-600 px-[13px] py-[8px] rounded-full shadow z-10">✖</button>
            <h2 class="lg:text-2xl md:text-xl text-lg !leading-normal font-semibold text-[#2a1313] mb-4">
                <?php the_field('popup_title_2'); ?></h2>
            <div class="font-normal md:text-base text-sm  tracking-[0.3px] text-[#4c4949] !leading-7 lg:mb-6">
                <?php the_field('popup_content_2'); ?></div>
        </div>
    </div>

<?php get_footer();?>