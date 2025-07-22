
<?php echo do_shortcode('[habit_footer]'); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  
// tabbing 
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
    Object.keys(tabs).forEach((key) => {
      const tab = tabs[key].tab;
      const content = tabs[key].content;
      const isActive = key === name;

      if (!tab || !content) return; // Avoid error if any element is missing

      // Toggle active tab background color
      tab.classList.toggle("bg-[#bf4b50]", isActive);
      tab.classList.toggle("bg-[#000000]", !isActive);

      // Toggle icon-text color inside tab
      const iconText = tab.querySelector(".icon-text");
      if (iconText) {
        iconText.classList.toggle("text-white", isActive);
        iconText.classList.toggle("text-[#212121]", !isActive);
      }

      // Show or hide tab content
      content.classList.toggle("hidden", !isActive);
    });

    // Save active tab
    localStorage.setItem("activeTab", name);
  }

  // Set click listeners for all tabs
  Object.keys(tabs).forEach((key) => {
    const tab = tabs[key].tab;
    if (tab) {
      tab.addEventListener("click", (e) => {
        e.preventDefault();
        showTab(key);
      });
    }
  });

  // Load saved tab or default to "product"
  const savedTab = localStorage.getItem("activeTab") || "product";
  showTab(savedTab);
});
</script>


<script>
// swiper slider js   
    var swiper = new Swiper(".NewSwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next-custom",  
        prevEl: ".swiper-button-prev-custom",  
      },
    });
</script>
</body>
</html>