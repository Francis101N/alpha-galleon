const dropdownBtn = document.getElementById("dropdownBtn");
const dropdownMenu = document.getElementById("dropdownMenu");
const mobileMenuBtn = document.getElementById("mobileMenuBtn");
const mobileMenu = document.getElementById("mobileMenu");
const mobileDropdownBtn = document.getElementById("mobileDropdownBtn");
const mobileDropdownMenu = document.getElementById("mobileDropdownMenu");

dropdownBtn.addEventListener("click", (e) => {
  e.stopPropagation();
  dropdownMenu.classList.toggle("hidden");
});

mobileMenuBtn.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
  const icon = mobileMenuBtn.querySelector("i");
  icon.classList.toggle("fa-bars");
  icon.classList.toggle("fa-xmark");
});

mobileDropdownBtn.addEventListener("click", () => {
  mobileDropdownMenu.classList.toggle("hidden");
});

window.addEventListener("click", () => {
  dropdownMenu.classList.add("hidden");
});
