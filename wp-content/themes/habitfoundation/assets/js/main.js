
document.addEventListener("DOMContentLoaded", function () {
  // Swiper init
  var swiperEl = document.querySelector(".NewSwiper");
  if (swiperEl) {
    new Swiper(".NewSwiper", {
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
  }

  // Your mobile menu toggle code here as well
  const toggle = document.getElementById("menuToggle");
  const menu = document.getElementById("mobile-menu");
  const close = document.getElementById("menuClose");
  const mobileOverlay = document.getElementById("mobileOverlay");

  if (toggle && menu && close && mobileOverlay) {
    toggle.addEventListener("click", () => {
      menu.classList.remove("translate-x-full");
      menu.classList.add("translate-x-0");
      mobileOverlay.classList.remove("hidden");
    });

    function closeMenu() {
      menu.classList.add("translate-x-full");
      menu.classList.remove("translate-x-0");
      mobileOverlay.classList.add("hidden");
    }

    close.addEventListener("click", closeMenu);
    mobileOverlay.addEventListener("click", closeMenu);
  }
});


document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});





// ------------------pdf popup------------------
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

//-------------------cover page popup-----------------
document.addEventListener("DOMContentLoaded", () => {
  const popup1 = document.getElementById("acfPopup");
  const trigger1 = document.querySelector('a[href="#readmore"]');
  const closeBtn1 = document.getElementById("popupCloseBtn1");

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
// -------------------tabbing---------------------
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

      tab.classList.toggle("bg-[#bf4b50]", isActive);
      tab.classList.toggle("bg-[#000000]", !isActive);

      const iconText = tab.querySelector(".icon-text");
      if (iconText) {
        iconText.classList.toggle("text-white", isActive);
        iconText.classList.toggle("text-[#212121]", !isActive);
      }

      content.classList.toggle("hidden", !isActive);
    });

    localStorage.setItem("activeTab", name);
  }

  Object.keys(tabs).forEach((key) => {
    const tab = tabs[key].tab;
    if (tab) {
      tab.addEventListener("click", (e) => {
        e.preventDefault();
        showTab(key);
      });
    }
  });

  const savedTab = localStorage.getItem("activeTab") || "product";
  showTab(savedTab);
});



document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector(".event-tabs2");
  if (!container) return;

  const buttons = container.querySelectorAll("button[data-tab]");
  const contents = container.querySelectorAll(".orientation-tab-content, .horizon-tab-content");

  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      const targetId = btn.getAttribute("data-tab");

      // Remove active class from all buttons
      buttons.forEach(b => {
        b.classList.remove("border-b-2", "border-[#bf4b50]", "text-[#bf4b50]");
        b.classList.add("text-gray-700");
      });

      // Add active class to clicked button
      btn.classList.remove("text-gray-700");
      btn.classList.add("border-b-2", "border-[#bf4b50]", "text-[#bf4b50]");

      // Hide all content panels
      contents.forEach(content => content.classList.add("hidden"));

      // Show the selected content panel
      const targetContent = container.querySelector(`#${targetId}`);
      if (targetContent) {
        targetContent.classList.remove("hidden");
      }
    });
  });
});
  document.addEventListener("DOMContentLoaded", () => {
            const popup = document.getElementById("popup2");
            const trigger = document.querySelector('a[href="#readmore2"]');
            const closeBtn = popup.querySelector("button"); // Assumes the close button is inside popup

            // Open popup on trigger click
            if (trigger && popup) {
            trigger.addEventListener("click", (e) => {
                e.preventDefault();
                popup.classList.remove("hidden");
                popup.classList.add("flex");
            });

            // Close popup on background click
            popup.addEventListener("click", (e) => {
                if (e.target === popup) {
                closePopup();
                }
            });

            // Close on Escape key
            document.addEventListener("keydown", (e) => {
                if (e.key === "Escape") {
                closePopup();
                }
            });

            // Close on button click
            if (closeBtn) {
                closeBtn.addEventListener("click", closePopup);
            }
            }

            function closePopup() {
            popup.classList.add("hidden");
            popup.classList.remove("flex");
            }
        });