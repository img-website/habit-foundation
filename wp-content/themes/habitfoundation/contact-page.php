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
<section>
    <div class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6">
        <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
            <div class="w-full lg:w-3/5 mx-auto bg-white py-3 px-7 rounded-2xl">
                <div class="p-[20px]  flex flex-col gap-2 w-full">
                    <h2
                        class="lg:text-2xl md:text-xl text-lg !leading-normal text-center font-semibold text-[#bf4b50] mb-2">
                        Registration Form
                    </h2>

                    <form action="" class="pt-2 flex flex-col gap-4 md:gap-3.5 xl:gap-5">

                        <div class="w-full">
                            <input type="text" name="name" id="" placeholder="Full Name*"
                                class="px-[15px] border border-[#d4d4d4] text-sm focus:outline-none rounded-[5px] h-[40px] md:h-[44px] w-full placeholder:font-primary placeholder:font-medium">
                        </div>
                        <div class="w-full">
                            <input type="email" name="email" id="" placeholder="Email*"
                                class="px-[15px] border border-[#d4d4d4] text-sm focus:outline-none rounded-[5px] h-[40px] md:h-[44px] w-full placeholder:font-primary placeholder:font-medium">
                        </div>



                        <div class="w-full">
                            <input type="tel" name="phone number" id="" placeholder="Phone Number*"
                                class="px-[15px] border border-[#d4d4d4] text-sm focus:outline-none rounded-[5px] h-[40px] md:h-[44px] w-full placeholder:font-primary placeholder:font-medium">
                        </div>
                        <div class="w-full flex items-center ">
                            <div class="relative inline-block text-left w-full" id="dropdownWrapper">
                                <button type="button" onclick="toggleDropdown()"
                                    class=" px-[15px] py-[10px] lg:py-[13px] xl:py-[12px] 2xl:py-[13px]  border border-[#d4d4d4] rounded-[5px]  w-full flex justify-between items-center gap-[50px] cursor-pointer">
                                    <span id="selectedText"
                                        class="font-medium font-primary text-sm text-gray-500">Property
                                        Type</span>
                                    <span>
                                        <!-- down-arrow -->
                                        <svg id="iconDown" class="transition duration-300" stroke="#9CA3AF"
                                            fill="#9CA3AF" stroke-width="0" viewBox="0 0 1024 1024" height="11px"
                                            width="11px" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                            </path>
                                        </svg>
                                        <!-- up-arrow -->
                                        <svg id="iconUp" class="transition duration-300 hidden" stroke="#9CA3AF"
                                            fill="#9CA3AF" stroke-width="0" viewBox="0 0 512 512" height="11px"
                                            width="11px" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M448 368 256 144 64 368h384z"></path>
                                        </svg>

                                    </span>
                                </button>

                                <div id="dropdown"
                                    class="hidden absolute z-50 bg-white w-full border border-[#d4d4d4] rounded-bl-[3px]">

                                    <ul id="dropdownList"
                                        class="text-black text-[13px] font-primary w-full overflow-y-auto">

                                        <li onclick="selectItem(this)" class="px-[12px] py-[10px] cursor-pointer ">
                                            Incubate
                                        </li>
                                        <li onclick="selectItem(this)" class="px-[12px] py-[10px] cursor-pointer ">Other
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="w-full">
                            <textarea name="" id="" placeholder="Message"
                                class="px-[15px] pt-[15px] border border-[#d4d4d4] text-sm focus:outline-none rounded-[5px] min-h-[100px]  overflow-y-auto w-full placeholder:font-primary placeholder:font-medium"></textarea>
                        </div>

                        <div class="w-full mx-auto flex justify-center">
                            <a href=""
                                class="inline-flex items-center justify-center gap-2 px-12 py-3 font-primary font-medium xl:font-semibold  text-white  rounded-[5px] overflow-hidden bg-[#bf4b50] transition-all duration-300 group capitalize text-sm xl:text-base">Submit
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6">
    <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
        <div class="w-full flex flex-col">
            <span
                class="bg-[#bf4b50] w-fit py-[5px] px-7 rounded-full text-white text-sm lg:text-base font-medium flex items-center inline-block mx-auto mb-6 tracking-[1px] leading-[1.5]">
                <?php the_field('contact_sec_badge'); ?>
            </span>
            <h2
                class="lg:text-3xl md:text-2xl text-xl !leading-normal text-center font-semibold text-[#2a1313] lg:mb-14 mb-8">
                <?php the_field('contact_sec_heading'); ?>
            </h2>
        </div>
        <div class="bg-white flex items-center justify-between rounded-xl lg:py-3 lg:px-3 py-2 px-2 gap-8">
            <div class="bg-[#bf4b50] lg:w-2/5 md:3/5 w-full flex flex-col py-4 px-3 rounded-xl">
                <div class="flex flex-col gap-2">
                    <h4 class="lg:text-lg text-white font-semibold"><?php the_field('contact_info_title'); ?></h4>
                    <p class="lg:text-base text-sm text-[#dbdbdb]"><?php the_field('contact_main_descritpion'); ?></p>
                </div>
                <div class="flex flex-col gap-1">
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