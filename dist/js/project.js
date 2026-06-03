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

function switchGallerySlide(sectionId, targetIndex) {
  const container = document.getElementById(sectionId);
  if (!container) return;

  const slides = container.querySelectorAll(".gallery-img");
  const dots = container.querySelectorAll(".gallery-dot");

  slides.forEach((img) => {
    const currentIdx = parseInt(img.getAttribute("data-slide-index"), 10);
    if (currentIdx === targetIndex) {
      img.classList.remove("opacity-0", "scale-95", "pointer-events-none");
      img.classList.add("opacity-100", "scale-100", "pointer-events-auto");
    } else {
      img.classList.remove("opacity-100", "scale-100", "pointer-events-auto");
      img.classList.add("opacity-0", "scale-95", "pointer-events-none");
    }
  });

  dots.forEach((dot) => {
    const currentDotIdx = parseInt(dot.getAttribute("data-target-idx"), 10);
    if (currentDotIdx === targetIndex) {
      dot.classList.remove("bg-amber-100", "w-2.5");
      dot.classList.add("bg-rose-500", "w-5");
    } else {
      dot.classList.remove("bg-rose-500", "w-5");
      dot.classList.add("bg-amber-100", "w-2.5");
    }
  });
}

function switchStoryTab(targetKey) {
  const buttons = document.querySelectorAll(".story-tab-btn");
  const panels = document.querySelectorAll(".story-content-panel");

  buttons.forEach((btn) => {
    btn.classList.remove("bg-white", "border", "border-gray-200");
    btn.classList.add("bg-[#e8d47d]", "hover:bg-[#dec96b]");
  });

  panels.forEach((panel) => {
    panel.classList.add("hidden");
    panel.classList.remove("opacity-100");
    panel.classList.add("opacity-0");
  });

  const activeBtn = document.getElementById(`tab-btn-${targetKey}`);
  const activePanel = document.getElementById(`story-panel-${targetKey}`);

  if (activeBtn) {
    activeBtn.classList.remove("bg-[#e8d47d]", "hover:bg-[#dec96b]");
    activeBtn.classList.add("bg-white", "border", "border-gray-200");
  }

  if (activePanel) {
    activePanel.classList.remove("hidden");

    setTimeout(() => {
      activePanel.classList.remove("opacity-0");
      activePanel.classList.add("opacity-100");
    }, 50);
  }
}
