
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
  document.addEventListener("DOMContentLoaded", () => {
  const tabButtons = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content-new");

  tabButtons.forEach(button => {
    button.addEventListener("click", () => {
      // Reset all buttons
      tabButtons.forEach(btn => {
        btn.classList.remove("bg-[#bf4b50]", "text-white");
        btn.classList.add("bg-[#dbdbdb]", "text-[#212121]");
      });

      // Highlight active button
      button.classList.add("bg-[#bf4b50]", "text-white");
      button.classList.remove("bg-[#dbdbdb]", "text-[#212121]");

      // Hide all contents
      tabContents.forEach(content => content.classList.add("hidden"));

      // Show selected tab
      const tabId = button.getAttribute("data-tab");
      const tabToShow = document.getElementById(tabId);
      if (tabToShow) tabToShow.classList.remove("hidden");
    });
  });
});

</script>




</body>
</html>