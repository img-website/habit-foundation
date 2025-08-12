<?php /* Template Name: cover page2 */ get_header(); ?>

<!-- <section class="hero-section w-full swiper bg-white lg:py-16 md:py-8 py-6 h-full swiper-initialized swiper-horizontal swiper-backface-hidden"
    data-swiper="{
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 1000,
            loop: true,
            keyboard: {enabled: true},
            pagination: {
                clickable: true,
                el: .swiper-pagination
            },
            navigation: {
                nextEl: .next,
                prevEl: .prev
            }
        }">
        <img
            loading="eager"
            fetchpriority="high"
            decoding="async"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/vector-hero1.svg"
            sizes="(max-width: 1024px) 100vw,
                    (max-width: 1280px) 100vw,
                    (max-width: 1536px) 100vw,
                    100vw"
            alt="hero-bg"
            class="absolute inset-0 size-full z-0 h-full object-cover object-center pointer-events-none"
            />      
        <div class="">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
                    <div class="flex items-center flex-col lg:flex-row justify-between md:gap-6 gap-4">
                        <div class="md:w-[55%] w-full flex flex-col">
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
                        <div class="md:w-[45%] w-full flex flex-col">
                            <?php $img = get_field('cover_page_img'); ?>
                                <?php if ($img): ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt="Company" title="Company" width="477" height="414"
                                    class="size-full object-contain mx-auto max-w-[32rem] max-md:aspect-[384/496]">
                            <?php endif; ?>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</section> -->

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



<?php get_footer();?>