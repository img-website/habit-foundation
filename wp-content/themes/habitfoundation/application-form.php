<?php
/* Template Name: application-form page */get_header();?>



<section class="w-full bg-[#f6f5f2] relative lg:py-16 md:py-8 py-6">
    <div class="max-w-7xl mx-auto px-4 px-4 lg:px-6">
        <div class="w-full flex flex-col gap-y-6">
            
            <div class="bg-white flex flex-col items-start justify-between rounded-xl mb-4 lg:py-10 lg:px-7 py-5 px-4 gap-8">
                <h2 class="lg:text-2xl md:text-xl text-lg !leading-normal text-center font-semibold text-[#2a1313] lg:mb-4">
                    HABIT Foundation Incubatee Application Form
                </h2>    
                <?php echo do_shortcode('[contact-form-7 id="31aae7f" title="Application Form"]'); ?>  
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>