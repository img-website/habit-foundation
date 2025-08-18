<?php
/* Template Name: contact page */get_header();?>
<section class="relative w-full md:h-[200px] flex items-center max-md:py-4">
    <?php $bg = get_field('contact_banner_image'); ?>
    <?php if ($bg): ?>
    <div class="absolute inset-0">
        <img src="<?php echo esc_url($bg['url']); ?>" alt="contact Banner" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-[#01142a8c] bg-opacity-70"></div>
    </div>
    <?php endif; ?>
    <div class="relative z-10 max-w-7xl mx-auto px-4 w-full">
        <h2 class="text-white text-2xl sm:text-3xl  md:text-5xl font-bold lg:mb-4 mb-2 text-center justify-center">
            <?php the_field('contact_main_heading'); ?>
            <span class="text-[lime-500]"><?php the_field('contact_highlight'); ?></span>
        </h2>
        <div class="flex items-center text-white text-sm font-medium space-x-2 justify-center">
            <a href="<?php echo esc_url(home_url('/')); ?>"
                class="text-sm font-medium inline-block hover:underline lg:text-base font-medium tracking-[0.8px]">Home</a>
            <span class="font-medium inline-block text-[#bf4b50]">—</span>
            <span
                class="text-sm font-medium inline-block text-[#bf4b50] lg:text-base font-medium tracking-[0.8px]"><?php the_field('breadcrumb_label_contact'); ?></span>
        </div>
    </div>
</section>

<section class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6">
    <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
        <div class="w-full flex flex-col">
            <!-- <span
                class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white lg:text-3xl md:text-2xl text-xl font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
                <?php the_field('contact_sec_badge'); ?>
            </span> -->
            <h2
                class="lg:text-2xl md:text-xl text-lg !leading-normal text-center font-semibold text-[#2a1313] lg:mb-8 mb-4">
                <?php the_field('contact_sec_heading'); ?>
            </h2>
        </div>
        <div class="w-full flex items-center flex-row justify-center lg:gap-4 gap-2 lg:pb-8 pb-6">
            <a href="https://project.imgglobal.in/habit-foundation/incubatee-application-form/" class="lg:px-6 lg:py-4 px-2 py-2 lg:text-base sm:text-sm text-[12px] cursor-pointer float-left bg-[#bf4b50] border border-[#dadada] rounded-[2px] shadow-[0_4px_6px_rgb(196,194,194)] text-white text-center duration-300">
                Incubatee Application Form            
            </a>

            <a href="https://project.imgglobal.in/habit-foundation/connect-us/" class="lg:px-6 lg:py-4 px-2 py-2 lg:text-base sm:text-sm text-[12px] cursor-pointer float-left bg-[#bf4b50] border border-[#dadada] rounded-[2px] shadow-[0_4px_6px_rgb(196,194,194)] text-white text-center duration-300">
                Connect with us           
            </a>
        </div>
        <div class="bg-white flex items-start justify-between md:flex-row flex-col rounded-xl lg:py-10 lg:px-7 sm:py-5 sm:px-4 py-2 px-2 gap-8">
            <div class="lg:w-1/2 w-full flex flex-col">
                <!-- <div class="flex flex-col gap-2 mb-6">
                    <h4 class="lg:text-lg text-black font-semibold"><?php the_field('contact_info_title'); ?></h4>
                    <p class="lg:text-base text-sm text-slate-700"><?php the_field('contact_main_descritpion'); ?></p>
                </div> -->

                <!-- <div class="flex flex-col gap-1">
                    <span class="inline-flex items-center gap-2">
                        <svg class="size-5 text-white" stroke="currentColor" fill="none" stroke-width="2"
                            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px"
                            width="200px" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        <a href="tel:<?php the_field('contact_num'); ?>"
                            class="text-white text-base font-medium hover:underline">
                            <?php the_field('contact_num'); ?>
                        </a>
                    </span>
                </div> -->
                <div class="flex flex-col lg:gap-y-5 gap-4">
                    <div class="w-full flex items-center gap-2 flex rounded-lg shadow space-x-3 shadow-[#9C9292] lg:px-4 lg:py-5 px-3 py-4 flex-row">
                        <span class="bg-[#bf4b50] p-2 rounded-full transition-all duration-300">
                            <svg class="size-6 text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M83.19,174.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,163,141.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,81.6,163.2,8,8,0,0,0,83.19,174.4ZM112,112a24,24,0,1,1,24,24A24,24,0,0,1,112,112Zm96-88H64A16,16,0,0,0,48,40V64H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v40H32a8,8,0,0,0,0,16H48v24a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V40A16,16,0,0,0,208,24Zm0,192H64V40H208Z"></path></svg>
                        </span>
                        <div class="flex flex-col">
                            <span class="text-black lg:text-lg text-base font-semibold">
                                <?php the_field('contact_address'); ?></span>
                            <p class="text-slate-700 font-medium tracking-[0.3px] lg:w-4/5 lg:text-[15px] text-[13px]"><?php the_field('contact_address_detail'); ?></p>
                        </div>
                    </div>
                    <div class="w-full flex items-center gap-2 flex rounded-lg shadow space-x-3 shadow-[#9C9292] lg:px-4 lg:py-5 px-3 py-4 flex-row">
                        <span class="bg-[#bf4b50] p-2 rounded-full transition-all duration-300">
                            <svg class="size-6 text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M16.23 7h2.6c-.06-.47-.36-.94-.79-1.17L10.5 2 2.8 5.83c-.48.26-.8.81-.8 1.34V15c0 1.1.9 2 2 2V7.4L10.5 4l5.73 3z"></path><path d="M20 8H7c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2v-9c0-1.1-.9-2-2-2zm0 11H7v-7l6.5 3.33L20 12v7zm-6.5-5.67L7 10h13l-6.5 3.33z"></path></svg>
                        </span>
                        <a href="mailto:info@habitfoundation.in" class="flex flex-col text-black text-base font-medium hover:underline">
                            <span class="text-black lg:text-lg text-base font-semibold">
                            <?php the_field('contact_email'); ?></span>
                            <p class="text-slate-700 font-medium tracking-[0.3px] lg:text-[15px] text-[13px]"><?php the_field('contact_email_detail'); ?></p>
                        </a>
                    </div>
                    <div class="w-full flex items-center gap-2 flex rounded-lg shadow space-x-3 shadow-[#9C9292] lg:px-4 lg:py-5 px-3 py-4 flex-row">
                        <span class="bg-[#bf4b50] p-2 rounded-full transition-all duration-300">
                            <svg class="size-6 text-white" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </span>
                        <div class="flex flex-col">
                            <span class="text-black lg:text-lg text-base font-semibold">
                                <?php the_field('contact_phone'); ?></span>
                            <p class="text-slate-700 font-medium tracking-[0.3px] lg:text-[15px] text-[13px]"><?php the_field('contact_phone_detail'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 w-full flex flex-col">
                <div class="h-[22rem] w-full overflow-hidden border-dashed border-gray-400 px-2 py-3 border-[2px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d402903.00661212084!2d72.8906324!3d19.0495314!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c8af05318bbd%3A0x28bee6819b33a604!2sTrishul%20Bunglows%20Sindhi%20Society%2C%20Chembur%20Mumbai%2C%20Maharashtra%20400071!3m2!1d19.0495314!2d72.8906324!5e1!3m2!1sen!2sin!4v1754472710249!5m2!1sen!2sin" class="w-full h-full" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById("dropdown");
        const iconDown = document.getElementById("iconDown");
        const iconUp = document.getElementById("iconUp");

        const isHidden = dropdown.classList.contains("hidden");

        if (isHidden) {
            dropdown.classList.remove("hidden");
            iconDown.classList.add("hidden");
            iconUp.classList.remove("hidden");
        } else {
            dropdown.classList.add("hidden");
            iconDown.classList.remove("hidden");
            iconUp.classList.add("hidden");
        }
    }

    function selectItem(element) {
        const items = document.querySelectorAll('#dropdownList li');
        items.forEach(item => {
            item.classList.remove("bg-white", "text-black");
        });

        element.classList.add("bg-white", "text-black");
        document.getElementById("selectedText").textContent = element.textContent;

        document.getElementById("dropdown").classList.add("hidden");
        document.getElementById("iconUp").classList.add("hidden");
        document.getElementById("iconDown").classList.remove("hidden");
    }

    // Close dropdown if clicked outside
    document.addEventListener("click", function(event) {
        const wrapper = document.getElementById("dropdownWrapper");
        if (!wrapper.contains(event.target)) {
            document.getElementById("dropdown").classList.add("hidden");
            document.getElementById("iconUp").classList.add("hidden");
            document.getElementById("iconDown").classList.remove("hidden");
        }
    });
</script>

<?php get_footer();?>