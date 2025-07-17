
<?php echo do_shortcode('[habit_footer]'); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".NewSwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop:true,
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    //   },
    navigation: {
        nextEl: ".swiper-button-prev-custom",
        prevEl: ".swiper-button-next-custom",
      },
    });
  </script>
</body>
</html>