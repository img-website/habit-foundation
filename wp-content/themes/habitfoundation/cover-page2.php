<?php /* Template Name: cover page2 */ get_header(); ?>

<section class="w-full relative lg:py-16 md:py-10 py-8 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="w-full flex flex-col">
        <a href="<?php the_field('back_button_link'); ?>"
                class="w-fit inline-flex items-center shadow py-2 lg:pe-6 lg:ps-3 pe-4 ps-2 bg-[#121212] mb-4 text-white rounded-full ring-2 ring-inset ring-[#121212] hover:ring-[#525252] hover:-translate-y-2 text-sm duration-500 transition-all hover:bg-gradient-to-r hover:from-[#000000] hover:to-[#545454]">
            <span class="bg-white rounded-full p-2 me-3">
                <svg class="w-3 h-3 text-black -rotate-90" stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 24 24" aria-hidden="true" height="200px" width="200px"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z"
                        clip-rule="evenodd"></path>
                </svg>
            </span>
            <?php the_field('back_button_text'); ?>
        </a>
        <h2 class="lg:text-2xl md:text-xl text-lg !leading-normal font-semibold text-[#2a1313] mb-4">
            <?php the_field('popup_title_2'); ?>
        </h2>
        <div class="font-normal md:text-base text-sm text-justify text-[#4c4949] !leading-7 lg:mb-6">
            <?php the_field('popup_content_2'); ?>
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