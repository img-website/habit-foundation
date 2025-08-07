<?php
// Theme setup
function habitfoundation_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');

  
}
add_action('after_setup_theme', 'habitfoundation_theme_setup');

// Enqueue styles and scripts
function habitfoundation_enqueue_assets() {
    wp_enqueue_style('habitfoundation-style', get_stylesheet_uri());

    wp_enqueue_script('habitfoundation-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'habitfoundation_enqueue_assets');


// Allow SVG uploads
function allow_svg_uploads($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'allow_svg_uploads');



function habit_custom_header_shortcode() {  
    ob_start();
    ?>
<header
    class="w-full relative bg-white shadow-[0px_4px_4px_0px_#0000001F] border-b-[3px] border-[#b93a40] sticky top-0 z-40">
    <div class="max-w-7xl mx-auto lg:px-4 lg:px-6 lg:py-2 flex justify-between items-center ">
        <div class="flex items-center">

            <a href="https://project.imgglobal.in/habit-foundation" class="hidden lg:block w-20 cursor-pointer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Habit-LOGO.png"
                    alt="Habit Foundation Logo" class="w-full h-auto" />
            </a>


            <a href="https://project.imgglobal.in/habit-foundation" class="block lg:hidden w-full cursor-pointer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile-header.webp"
                    alt="Habit Foundation Mobile Logo" class="max-w-full object-cover h-full aspect-[1100/160]"
                    width="1100" height="160" />
            </a>
        </div>

        
        <nav class="lg:flex justify-center mx-auto hidden">
            <ul class="lg:flex items-center space-x-10">
                <li>
                <!-- <a href="https://project.imgglobal.in/habit-foundation/about-us/" class="relative text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-medium hover:text-[#bf4b50] tracking-[0.5px] 
                before:content-[''] before:absolute before:-bottom-2 before:right-0 
                before:h-[3px] before:w-full before:bg-[#bf4b50] 
                before:transition-transform before:duration-500 before:scale-x-0 before:origin-top-right 
                hover:before:scale-x-100 hover:before:origin-top-left duration-300">
                About Us
                </a> -->
                    <a href="https://project.imgglobal.in/habit-foundation/about-us/" class="relative text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-semibold hover:text-[#bf4b50] tracking-[0.5px] 
                    duration-300">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="https://project.imgglobal.in/habit-foundation/focus/" class="relative text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-semibold hover:text-[#bf4b50] tracking-[0.5px] 
                    duration-300">Focus
                    </a>
                </li>

                <li>
                    <a href="https://project.imgglobal.in/habit-foundation/benefits/"
                        class="relative flex items-center gap-1 text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-semibold hover:text-[#bf4b50] tracking-[0.5px] duration-300">Benefits
                    </a>
                </li>

                <li class="relative group/cs">
                    <a href="javascript:;"
                        class="relative flex items-center gap-1 text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-semibold hover:text-[#bf4b50] tracking-[0.5px] duration-300">Events
                        <span class="*:size-5 transition-transform duration-500 group-hover/cs:[transform:rotateX(180deg)]"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="200px" width="200px"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z">
                                </path>
                            </svg>
                        </span>
                    </a>
                    <ul
                        class="bg-white w-52 absolute top-[3.2rem] -left-5 rounded-md p-0 opacity-0 z-40 transition-all translate-y-4 shadow-[0px_7px_10px_-1px_rgba(0,0,0,0.2)] invisible group-hover/cs:visible group-hover/cs:opacity-100">
                        <li class="relative">
                            <a href="https://project.imgglobal.in/habit-foundation/key-event/" class="w-full py-4 px-5 flex items-center gap-2 rounded-tr-md font-semibold text-black font-semibold text-sm !leading-7 duration-500 whitespace-nowra hover:ps-[46px] hover:bg-[#bd686b2e] cursor-pointer">
                                <span class="*:size-5 inline-block *:text-black">
                                <svg stroke="currentColor" fill="none"
                                    stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                                    height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 2v4"></path>
                                    <path d="M16 2v4"></path>
                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                    <path d="M3 10h18"></path>
                                    <path d="m9 16 2 2 4-4"></path>
                                </svg>
                                </span>
                                Key Events
                            </a>
                        </li>
                        <li class="relative">
                            <a href="https://project.imgglobal.in/habit-foundation/basic-event" class=" w-full py-4 px-5 flex items-center gap-2 border-t border-gray-200 font-semibold text-black font-semibold text-sm !leading-7 duration-500 whitespace-nowrap hover:ps-[46px] hover:bg-[#bd686b2e] cursor-pointer">
                                <span class="*:size-5 inline-block *:text-black">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
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
                                </span>Basic Events
                            </a>
                        </li>
                        <li class="relative">
                            <a href="https://project.imgglobal.in/habit-foundation/upcoming-event" class=" w-full py-4 px-5 flex items-center gap-2 rounded-br-md border-t border-gray-200 font-semibold text-black font-semibold text-sm !leading-7 duration-500 whitespace-nowrap hover:ps-[46px] hover:bg-[#bd686b2e] cursor-pointer">
                                <span class="*:size-5 inline-block *:text-black">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                        d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.2 3.2.8-1.3-4.5-2.7V7z">
                                    </path>
                                </svg>
                                </span>
                                Upcoming Events
                            </a>
                        </li>
                    </ul>
                
                </li>

                <li>
                    <a href="https://project.imgglobal.in/habit-foundation/contact-us/" class="relative text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-semibold hover:text-[#bf4b50] tracking-[0.5px] duration-300">Contact
                    Us
                    </a>
                </li>
            </ul>
        </nav>
        <ul class="lg:flex flex-col items-start hidden gap-1">
            <li class="flex items-center gap-2 py-2 px-3 rounded-sm">
                <div class="flex items-center text-black">
                    <svg class="w-8 h-8 bg-gradient-to-r from-[#BF4B50] to-[#1A2C38] p-[7px] text-white rounded-xl"
                        stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                        stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19h-8a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v6"></path>
                        <path d="M3 7l9 6l9 -6"></path>
                        <path d="M16 22l5 -5"></path>
                        <path d="M21 21.5v-4.5h-4.5"></path>
                    </svg>
                </div>
                <a href="mailto:info@habitfoundation.in" class="text-black text-base font-medium hover:underline">
                    info@habitfoundation.in
                </a>
            </li>
            <li class="flex items-center gap-2 py-2 px-4 rounded-sm">
                <div class="flex items-center bg-gradient-to-r from-[#BF4B50] to-[#1A2C38] rounded-xl text-black">
                    <svg class="w-8 h-8  p-[7px] text-white" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2c-3.03 0-5.89-1.17-8.63-3.07a19.5 19.5 0 0 1-6-6C4.2 11.1 3 8.23 3 5.2A2 2 0 0 1 5.11 3h3a2 2 0 0 1 2 1.72c.15.96.4 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.1 9.9a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.3 1.85.55 2.81.7a2 2 0 0 1 1.71 1.91z">
                        </path>
                    </svg>
                    <svg class="w-8 h-8  p-[7px] text-white" stroke="currentColor" fill="currentColor" stroke-width="0"
                        viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M414.73 97.1A222.14 222.14 0 0 0 256.94 32C134 32 33.92 131.58 33.87 254a220.61 220.61 0 0 0 29.78 111L32 480l118.25-30.87a223.63 223.63 0 0 0 106.6 27h.09c122.93 0 223-99.59 223.06-222A220.18 220.18 0 0 0 414.73 97.1zM256.94 438.66h-.08a185.75 185.75 0 0 1-94.36-25.72l-6.77-4-70.17 18.32 18.73-68.09-4.41-7A183.46 183.46 0 0 1 71.53 254c0-101.73 83.21-184.5 185.48-184.5a185 185 0 0 1 185.33 184.64c-.04 101.74-83.21 184.52-185.4 184.52zm101.69-138.19c-5.57-2.78-33-16.2-38.08-18.05s-8.83-2.78-12.54 2.78-14.4 18-17.65 21.75-6.5 4.16-12.07 1.38-23.54-8.63-44.83-27.53c-16.57-14.71-27.75-32.87-31-38.42s-.35-8.56 2.44-11.32c2.51-2.49 5.57-6.48 8.36-9.72s3.72-5.56 5.57-9.26.93-6.94-.46-9.71-12.54-30.08-17.18-41.19c-4.53-10.82-9.12-9.35-12.54-9.52-3.25-.16-7-.2-10.69-.2a20.53 20.53 0 0 0-14.86 6.94c-5.11 5.56-19.51 19-19.51 46.28s20 53.68 22.76 57.38 39.3 59.73 95.21 83.76a323.11 323.11 0 0 0 31.78 11.68c13.35 4.22 25.5 3.63 35.1 2.2 10.71-1.59 33-13.42 37.63-26.38s4.64-24.06 3.25-26.37-5.11-3.71-10.69-6.48z">
                        </path>
                    </svg>
                </div>
                <a href="tel:+918591962429" class="text-black text-base font-medium hover:underline">
                    +91-8591962429
                </a>
            </li>

        </ul>

        <div class="flex items-end space-x-4">
            <button id="menuToggle"
                class="lg:hidden px-4 focus:outline-none z-50 absolute right-0 top-0 pt-2  text-white h-full flex items-center justify-center">
                <svg class="text-[#af2a30] lg:size-12 md:size-10 size-6" stroke="currentColor" fill="currentColor"
                    stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm8.25 5.25a.75.75 0 0 1 .75-.75h8.25a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75Z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <!-- Mobile Slide-in Menu -->
    <div id="mobile-menu" role="dialog" aria-modal="true" aria-labelledby="mobileMenuLabel"
        class="fixed top-0 right-0 h-full w-full max-w-xs bg-white transform translate-x-full transition-transform duration-300 ease-in-out z-50 lg:hidden shadow-lg overflow-y-auto">

        <!-- Header with Close -->
        <div class="flex justify-between items-center p-4 border-b">
            <a href="https://project.imgglobal.in/habit-foundation" class="cursor-pointer block h-auto w-full"> <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/Habit-LOGO.png"
                    alt="Habit Foundation Logo" class="sm:w-16 w-12" /></a>

            <button id="menuClose" aria-label="Close Menu" class="text-gray-700 text-4xl font-normal">&times;</button>
        </div>

        <!-- Navigation Links -->
        <ul class="flex flex-col p-4 space-y-4">
            <li class="relative flex flex-col">
                <a href="https://project.imgglobal.in/habit-foundation/about-us"
                    class="relative flex items-center gap-1 text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-semibold hover:text-[#bf4b50] tracking-[0.5px] duration-300">About Us</a>
            </li>

            <li class="relative flex flex-col">
                <a href="https://project.imgglobal.in/habit-foundation/focus"
                    class="relative flex items-center gap-1 text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-semibold hover:text-[#bf4b50] tracking-[0.5px] duration-300">Focus</a>
            </li>

            <li class="relative flex flex-col">
                <a href="https://project.imgglobal.in/habit-foundation/benefits"
                    class="relative flex items-center gap-1 text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-semibold hover:text-[#bf4b50] tracking-[0.5px] duration-300">Benefits</a>
            </li>

            <li class="relative flex flex-col">
                <input type="checkbox" id="events-toggle" class="peer hidden">

                <label for="events-toggle"
                    class="relative flex items-center justify-between gap-1 text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-semibold tracking-[0.5px] duration-300 cursor-pointer">
                    Events
                    <span class="*:size-5">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny"
                            viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.8 9.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.4-.3.7s.1.5.3.7z">
                            </path>
                        </svg>
                    </span>
                </label>

                <ul
                    class="bg-white flex flex-col w-full whitespace-nowrap p-0 z-40 transition-all max-h-0 overflow-hidden peer-checked:max-h-[500px] peer-checked:py-2 duration-300">
                    <li
                        class="relative w-full py-3 px-5 flex items-center gap-2 rounded-tr-md font-semibold text-black text-sm !leading-7 cursor-pointer">
                        <span class="*:size-5 inline-block *:text-black">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 2v4"></path>
                                <path d="M16 2v4"></path>
                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                <path d="M3 10h18"></path>
                                <path d="m9 16 2 2 4-4"></path>
                            </svg>
                        </span>
                        <a href="https://project.imgglobal.in/habit-foundation/key-event/"
                                class="md:hover:text-white">Key Events</a>
                    </li>

                    <li
                        class="relative w-full py-3 px-5 flex items-center gap-2 border-t border-gray-200 font-semibold text-black text-sm !leading-7 cursor-pointer">
                        <span class="*:size-5 inline-block *:text-black">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
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
                        <a href="https://project.imgglobal.in/habit-foundation/basic-event"
                                class="md:hover:text-white">Basic Events</a>
                    </li>

                    <li
                        class="relative w-full py-3 px-5 flex items-center gap-2 rounded-br-md border-t border-gray-200 font-semibold text-black text-sm !leading-7 cursor-pointer">
                        <span class="*:size-5 inline-block *:text-black">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                width="200px" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.2 3.2.8-1.3-4.5-2.7V7z">
                                </path>
                            </svg>
                        </span>
                        <a href="https://project.imgglobal.in/habit-foundation/upcoming-event"
                                class="md:hover:text-white">Upcoming Events</a>
                    </li>
                </ul>
            </li>

            <li class="relative flex flex-col ">
                <a href="http://localhost/habit-foundation/contact-us"
                class="relative flex items-center gap-1 text-[#0c0c0c] xl:text-[18px] lg:text-[15px] text-sm !leading-6 font-semibold hover:text-[#bf4b50] tracking-[0.5px] duration-300">Contact Us</a>
            </li>
            
        </ul>
    </div>
    
    <div id="drawerOverlay" class="fixed inset-0 bg-black bg-opacity-20 hidden z-30"></div>

</header>



<?php
    return ob_get_clean();
}
add_shortcode('habit_header', 'habit_custom_header_shortcode');


function habit_orientation_section_shortcode() {
    ob_start();
    ?>
<section class="w-full lg:py-16 md:py-10 py-8 relative overflow-hidden lg:h-96 h-full w-full bg-cover bg-center"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Business-Owners-Learn-From-Each-Other.webp');">
    <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

    <div class="max-w-7xl mx-auto px-4 lg:px-6 relative z-20 lg:top-16">
        <div class="flex flex-col items-center gap-y-3 ">
            <span
                class="text-sm font-medium inline-block text-[#ffffff] text-center lg:text-lg font-medium tracking-[2.4px] leading-[1.5] ">
                Ready to Build Your Vision?
            </span>

            <h2 class="lg:text-3xl md:text-2xl text-xl !leading-normal text-center font-semibold text-[#ffffff] ">
                Get the support, tools, and mentorship you need
            </h2>

            <?php 
            $btn_text = get_field('orientation_btn_text',);
            $btn_link = get_field('orientation_btn_link',);
            ?>
            <a href="<?php echo esc_url($btn_link); ?>"
                class="w-fit inline-flex items-center shadow py-2 lg:ps-6 lg:pe-3 ps-4 pe-2 bg-[#bf4b50] text-white rounded-full ring-2 ring-inset ring-[#bf4b50] hover:ring-[#525252] hover:-translate-y-2 text-sm duration-500 transition-all hover:bg-gradient-to-r hover:from-[#000000] hover:to-[#545454]">
                <?php echo esc_html($btn_text); ?>
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
</section>
<?php
    return ob_get_clean();
}
add_shortcode('habit_orientation_section', 'habit_orientation_section_shortcode');


function habit_footer_shortcode() {
    ob_start();
    ?>

<footer class="w-full relative lg:pt-16 lg:pb-4 md:py-10 py-8 h-full w-full bg-cover bg-center"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/dark-background.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60 z-0"></div>
    <div class="max-w-7xl mx-auto px-4 lg:px-6 relative z-20">
        <div class="flex flex-row flex-wrap lg:flex-nowrap items-start gap-8">
            <div class="lg:w-2/5 w-full">
                <h3
                    class="text-lg inline-block text-center font-medium tracking-[2.4px] leading-[1.5] mb-4 relative before:absolute before:left-[-12px] before:top-[2px] before:bg-[#bf4b50] before:translateY-1/2 before:h-5 before:w-1 text-white">
                    Contact Info</h3>
                <ul class="space-y-3 text-sm/6 text-gray-300 tracking-[0.8px]">
                    <li class="inline-flex items-start gap-2">
                        <svg class="w-6 h-6 text-[#bf4b50]" stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-width="2"
                                d="M12,22 C12,22 4,16 4,10 C4,5 8,2 12,2 C16,2 20,5 20,10 C20,16 12,22 12,22 Z M12,13 C13.657,13 15,11.657 15,10 C15,8.343 13.657,7 12,7 C10.343,7 9,8.343 9,10 C9,11.657 10.343,13 12,13 L12,13 Z">
                            </path>
                        </svg>
                        <div class="text-gray-300 text-xs lg:text-[15px] w-full text-start leading-6 ">
                            Address: VES Trust Office, 1st Floor, <br> Sindhi Society, Chembur, Mumbai – 400074 <br>
                        </div>
                    </li>

                    <li class="inline-flex items-start gap-2">
                        <svg class="w-6 h-6 text-[#bf4b50]" stroke="currentColor" fill="none" stroke-width="0"
                            viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14 7C13.4477 7 13 7.44772 13 8V16C13 16.5523 13.4477 17 14 17H18C18.5523 17 19 16.5523 19 16V8C19 7.44772 18.5523 7 18 7H14ZM17 9H15V15H17V9Z"
                                fill="currentColor"></path>
                            <path
                                d="M6 7C5.44772 7 5 7.44772 5 8C5 8.55228 5.44772 9 6 9H10C10.5523 9 11 8.55228 11 8C11 7.44772 10.5523 7 10 7H6Z"
                                fill="currentColor"></path>
                            <path
                                d="M6 11C5.44772 11 5 11.4477 5 12C5 12.5523 5.44772 13 6 13H10C10.5523 13 11 12.5523 11 12C11 11.4477 10.5523 11 10 11H6Z"
                                fill="currentColor"></path>
                            <path
                                d="M5 16C5 15.4477 5.44772 15 6 15H10C10.5523 15 11 15.4477 11 16C11 16.5523 10.5523 17 10 17H6C5.44772 17 5 16.5523 5 16Z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4 3C2.34315 3 1 4.34315 1 6V18C1 19.6569 2.34315 21 4 21H20C21.6569 21 23 19.6569 23 18V6C23 4.34315 21.6569 3 20 3H4ZM20 5H4C3.44772 5 3 5.44772 3 6V18C3 18.5523 3.44772 19 4 19H20C20.5523 19 21 18.5523 21 18V6C21 5.44772 20.5523 5 20 5Z"
                                fill="currentColor"></path>
                        </svg>
                        <div
                            class="text-gray-300 text-xs lg:text-[15px] sm:w-2/3 w-full text-start leading-6 whitespace-nowrap">
                            Website:
                            <a href="https://habitfoundation.in/" class="text-[#b0c8ff]">
                                https://habitfoundation.in/ </a><br>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="lg:w-1/4 md:w-1/2 w-full">
                <h3
                    class="text-lg inline-block text-center font-medium tracking-[2.4px] leading-[1.5] mb-4 relative before:absolute before:left-[-12px] before:top-[2px] before:bg-[#bf4b50] before:translateY-1/2 before:h-5 before:w-1 text-white">
                    About HABIT</h3>
                <div class="flex items-start lg:gap-6 gap-3">
                    <ul class="space-y-2 text-sm/6 text-gray-300 tracking-[0.8px]">
                        <li><a href="https://project.imgglobal.in/habit-foundation/about-us/"
                                class="md:hover:text-white">About Us</a></li>
                        <li><a href="https://project.imgglobal.in/habit-foundation/focus"
                                class="md:hover:text-white">Focus</a></li>
                        <li><a href="https://project.imgglobal.in/habit-foundation/benefits" class="md:hover:text-white">Benefits</a></li>
                        <li><a href="https://project.imgglobal.in/habit-foundation/contact-us" class="md:hover:text-white">Contact Us</a></li>
                        <li><a href="https://project.imgglobal.in/habit-foundation/key-event/"
                                class="md:hover:text-white">Key Events</a></li>
                        <li><a href="https://project.imgglobal.in/habit-foundation/basic-event"
                                class="md:hover:text-white">Basic Events</a></li>
                        <li><a href="https://project.imgglobal.in/habit-foundation/upcoming-event"
                                class="md:hover:text-white">Upcoming Events</a></li>
                    </ul>
                </div>
            </div>

            <div class="lg:w-1/4 md:w-1/2 w-full">
                <h3
                    class="text-lg inline-block text-center font-medium tracking-[2.4px] leading-[1.5] mb-4 relative before:absolute before:left-[-12px] before:top-[2px] before:bg-[#bf4b50] before:translateY-1/2 before:h-5 before:w-1 text-white">
                    Follow Us On</h3>
                <div class="flex items-center gap-3">

                    <a href="https://www.facebook.com/people/Habit-Foundation/61570220092085" target="_blank"
                        class="bg-[#bf4b50] p-2 rounded-full transition-all duration-300 md:hover:-translate-y-2 md:hover:bg-[#a33438]">
                        <svg class="size-4 text-white" stroke="currentColor" fill="currentColor" viewBox="0 0 320 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                        </svg>
                    </a>

                    <a href="" target="_blank"
                        class="bg-[#bf4b50] p-2 rounded-full transition-all duration-300 md:hover:-translate-y-2 md:hover:bg-[#a33438]">
                        <svg class="size-4 text-white" fill="currentColor" viewBox="0 0 512 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/company/habit-foundation/"
                        class="bg-[#bf4b50] p-2 rounded-full transition-all duration-300 md:hover:-translate-y-2 md:hover:bg-[#a33438]">
                        <svg class="size-4 text-white" fill="currentColor" viewBox="0 0 448 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                        </svg>
                    </a>

                    <a href="https://www.youtube.com/@habitfoundation" target="_blank"
                        class="bg-[#bf4b50] p-2 rounded-full transition-all duration-300 md:hover:-translate-y-2 md:hover:bg-[#a33438]">
                        <svg class="size-4 text-white" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>

                    <a href="https://www.instagram.com/habit.foundation/" target="_blank"
                        class="bg-[#bf4b50] p-2 rounded-full transition-all duration-300 md:hover:-translate-y-2 md:hover:bg-[#a33438]">
                        <svg class="size-4 text-white" fill="currentColor" viewBox="0 0 448 512"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <div class="mt-6 border-t border-gray-700 text-gray-300 pt-3 text-center text-sm relative z-20">
        &copy; <?php echo date('Y'); ?> HABIT Foundation. All Right Reserved.
    </div>

</footer>

<?php
    return ob_get_clean();
}
add_shortcode('habit_footer', 'habit_footer_shortcode');

function enqueue_swiper_assets() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-tabs', get_template_directory_uri() . '/js/tabs.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

