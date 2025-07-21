
<?php echo do_shortcode('[habit_footer]'); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const tabs = {
      product: {
        tab: document.getElementById("productTab"),
        content: document.getElementById("productContent"),
      },
      service: {
        tab: document.getElementById("serviceTab"),
        content: document.getElementById("serviceContent"),
      },
    };

    function showTab(name) {
      for (const key in tabs) {
        const { tab, content } = tabs[key];
        const isActive = key === name;

        // Toggle tab background
        tab.classList.toggle("bg-[#bf4b50]", isActive);
        tab.classList.toggle("bg-[#000000]", !isActive);

        // Toggle icon and text color inside span.icon-text
        const iconText = tab.querySelector(".icon-text");
        if (iconText) {
          iconText.classList.toggle("text-white", isActive);
          iconText.classList.toggle("text-[#212121]", !isActive);
        }

        // Show or hide content
        if (content) {
          content.classList.toggle("hidden", !isActive);
        }
      }

      localStorage.setItem("activeTab", name);
    }

    // Set click listeners
    Object.keys(tabs).forEach((key) => {
      tabs[key].tab.addEventListener("click", (e) => {
        e.preventDefault();
        showTab(key);
      });
    });

    // Load saved tab or default to product
    showTab(localStorage.getItem("activeTab") || "product");
  });
</script>


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