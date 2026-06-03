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

const slides = [
  {
    subtitle: "Transforming a Community Together",
    title: "Empowering Communities<br class='hidden md:inline'>Through Service",
    bgImage: "images/hero-background.jpg",
    primaryBtnText: "Join The Movement",
    secondaryBtnText: "Support our program",
  },
  {
    subtitle: "Providing Medical Healthcare Care Packages",
    title: "Free Eye Exams &<br class='hidden md:inline'>Treatment Initiatives",
    bgImage: "images/76861a92e0d9a30fd3dd39e91881f6e1b3782a27.jpg",
    primaryBtnText: "Join The Movement",
    secondaryBtnText: "Support our program",
  },
  {
    subtitle: "Our Collective Growth Journey",
    title: "Building A Sustainable<br class='hidden md:inline'>Bright Future",
    bgImage: "images/d6822715794631b0ed9373c71a863cd12f6055e5.jpg",
    primaryBtnText: "Join The Movement",
    secondaryBtnText: "Support our program",
  },
];

let currentIndex = 0;
let autoSlideTimer = null;
const SLIDE_DURATION = 3000;

const heroSlider = document.getElementById("heroSlider");
const sliderSubtitle = document.getElementById("sliderSubtitle");
const sliderTitle = document.getElementById("sliderTitle");
const sliderBtnPrimary = document.getElementById("sliderBtnPrimary");
const sliderBtnSecondary = document.getElementById("sliderBtnSecondary");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

const textContainer = sliderSubtitle.parentElement;
if (textContainer) {
  textContainer.classList.add("transition-all", "duration-300");
}

function updateSlide(index) {
  const data = slides[index];

  if (textContainer) {
    textContainer.classList.remove("opacity-100");
    textContainer.classList.add("opacity-0");
  }

  setTimeout(() => {
    heroSlider.style.backgroundImage = `linear-gradient(rgba(21, 62, 115, 0.84), rgba(21, 62, 115, 0.88)), url('${data.bgImage}')`;

    sliderSubtitle.textContent = data.subtitle;
    sliderTitle.innerHTML = data.title;
    sliderBtnPrimary.textContent = data.primaryBtnText;
    sliderBtnSecondary.textContent = data.secondaryBtnText;

    if (textContainer) {
      textContainer.classList.remove("opacity-0");
      textContainer.classList.add("opacity-100");
    }
  }, 250);
}

function startAutoSlide() {
  stopAutoSlide();
  autoSlideTimer = setInterval(() => {
    currentIndex = currentIndex === slides.length - 1 ? 0 : currentIndex + 1;
    updateSlide(currentIndex);
  }, SLIDE_DURATION);
}

function stopAutoSlide() {
  if (autoSlideTimer) {
    clearInterval(autoSlideTimer);
  }
}

prevBtn.addEventListener("click", () => {
  currentIndex = currentIndex === 0 ? slides.length - 1 : currentIndex - 1;
  updateSlide(currentIndex);
  startAutoSlide();
});

nextBtn.addEventListener("click", () => {
  currentIndex = currentIndex === slides.length - 1 ? 0 : currentIndex + 1;
  updateSlide(currentIndex);
  startAutoSlide();
});

startAutoSlide();

(function () {
  const counters = document.querySelectorAll(".scramble-counter");

  function getRandomNumber() {
    const num = Math.floor(Math.random() * 90) + 10; // 10 to 99
    return num.toString();
  }

  const shuffleInterval = setInterval(() => {
    counters.forEach((counter) => {
      counter.textContent = getRandomNumber();
    });
  }, 70);

  setTimeout(() => {
    clearInterval(shuffleInterval);

    counters.forEach((counter) => {
      const finalTarget = counter.getAttribute("data-target");
      counter.textContent = finalTarget;
    });
  }, 5000);
})();

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
