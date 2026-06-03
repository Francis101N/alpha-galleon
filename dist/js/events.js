const dropdownBtn = document.getElementById("dropdownBtn");
const dropdownMenu = document.getElementById("dropdownMenu");
const mobileMenuBtn = document.getElementById("mobileMenuBtn");
const mobileMenu = document.getElementById("mobileMenu");
const mobileDropdownBtn = document.getElementById("mobileDropdownBtn");
const mobileDropdownMenu = document.getElementById("mobileDropdownMenu");

if (dropdownBtn && dropdownMenu) {
  dropdownBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdownMenu.classList.toggle("hidden");
  });
}

if (mobileMenuBtn && mobileMenu) {
  mobileMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
    const icon = mobileMenuBtn.querySelector("i");
    if (icon) {
      icon.classList.toggle("fa-bars");
      icon.classList.toggle("fa-xmark");
    }
  });
}

if (mobileDropdownBtn && mobileDropdownMenu) {
  mobileDropdownBtn.addEventListener("click", () => {
    mobileDropdownMenu.classList.toggle("hidden");
  });
}

window.addEventListener("click", () => {
  if (dropdownMenu) dropdownMenu.classList.add("hidden");
});
