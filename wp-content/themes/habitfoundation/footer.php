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

<script>
function openPDFPopup(pdfUrl) {
    const popup = document.getElementById('pdfPopup');
    document.getElementById('pdfFrame').src = pdfUrl;
    popup.classList.remove('hidden');
    popup.classList.add('flex');
}

function closePDFPopup() {
    const popup = document.getElementById('pdfPopup');
    popup.classList.add('hidden');
    popup.classList.remove('flex');
    document.getElementById('pdfFrame').src = '';
}

function handleOutsideClick(event) {
    const modalBox = document.getElementById('pdfModalBox');
    if (!modalBox.contains(event.target)) {
        closePDFPopup();
    }
}
</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const popup1 = document.getElementById("acfPopup");
    const trigger1 = document.querySelector('a[href="#readmore"]');
    const closeBtn1 = document.getElementById("popupCloseBtn");

    const popup2 = document.getElementById("popup2");
    const trigger2 = document.querySelector('a[href="#readmore2"]');
    const closeBtn2 = popup2.querySelector("button"); // Assuming second close button is inside popup2

    // Handler for Popup 1
    if (trigger1 && popup1) {
        trigger1.addEventListener("click", e => {
            e.preventDefault();
            popup1.classList.remove("hidden");
            popup1.classList.add("flex");
        });

        popup1.addEventListener("click", e => {
            if (e.target === popup1) closePopup(popup1);
        });

        document.addEventListener("keydown", e => {
            if (e.key === "Escape") closePopup(popup1);
        });

        if (closeBtn1) {
            closeBtn1.addEventListener("click", () => closePopup(popup1));
        }
    }

    // Handler for Popup 2
    if (trigger2 && popup2) {
        trigger2.addEventListener("click", e => {
            e.preventDefault();
            popup2.classList.remove("hidden");
            popup2.classList.add("flex");
        });

        popup2.addEventListener("click", e => {
            if (e.target === popup2) closePopup(popup2);
        });

        document.addEventListener("keydown", e => {
            if (e.key === "Escape") closePopup(popup2);
        });

        if (closeBtn2) {
            closeBtn2.addEventListener("click", () => closePopup(popup2));
        }
    }

    // Common close function
    function closePopup(popupElement) {
        popupElement.classList.add("hidden");
        popupElement.classList.remove("flex");
    }
});
</script>

</body>

</html>