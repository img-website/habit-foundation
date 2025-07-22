
  // For #offCanvas panel
const openBtn = document.getElementById("openDrawer");
const closeBtn = document.getElementById("closeDrawer");
const panel = document.getElementById("offCanvas");
const drawerOverlay = document.getElementById("drawerOverlay");

openBtn.addEventListener("click", () => {
  panel.classList.remove("translate-x-full");
  drawerOverlay.classList.remove("hidden");
});

closeBtn.addEventListener("click", () => {
  panel.classList.add("translate-x-full");
  drawerOverlay.classList.add("hidden");
});

drawerOverlay.addEventListener("click", () => {
  panel.classList.add("translate-x-full");
  drawerOverlay.classList.add("hidden");
});

// For #mobile-menu panel
const toggle = document.getElementById('menuToggle');
const menu = document.getElementById('mobile-menu');
const close = document.getElementById('menuClose');
const mobileOverlay = document.getElementById('mobileOverlay');

toggle.addEventListener('click', () => {
  menu.classList.remove('translate-x-full');
  menu.classList.add('translate-x-0');
  mobileOverlay.classList.remove('hidden');
});

function closeMenu() {
  menu.classList.add('translate-x-full');
  menu.classList.remove('translate-x-0');
  mobileOverlay.classList.add('hidden');
}

close.addEventListener('click', closeMenu);
mobileOverlay.addEventListener('click', closeMenu);



