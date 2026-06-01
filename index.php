<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Galleon</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandGold: '#af9253',
                        brandBlue: '#153e73',
                        brandYellow: '#f4d03f',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white text-gray-800 antialiased font-sans">

    <!-- Header Navigation -->
    <?php include 'inc/header.php'; ?>

    <!-- Hero Slider Section Container -->
    <section id="heroSlider" class="relative h-[calc(100vh-76px)] min-h-[600px] flex items-center justify-start gap-6 px-6 md:px-24 overflow-hidden bg-cover bg-center transition-all duration-700 ease-in-out"
        style="background-image: linear-gradient(rgba(21, 62, 115, 0.84), rgba(21, 62, 115, 0.88)), url('images/hero-background.jpg');">

        <!-- Vector Overlays -->
        <div class="absolute inset-0 pointer-events-none opacity-10">
            <div class="absolute bottom-10 left-1/3 w-96 h-96 border-4 border-white rounded-full flex items-center justify-center">
                <div class="w-48 h-48 border-4 border-white rounded-full"></div>
            </div>
            <div class="absolute bottom-20 left-1/2 w-40 h-40 border-4 border-white rounded-full"></div>
        </div>

        <!-- Left Slider Arrow Button -->
        <!-- CHANGED: Added 'shrink-0' so the arrow button doesn't squish -->
        <button id="prevBtn" class="hidden md:flex w-11 h-11 bg-white/70 hover:bg-white text-gray-800 rounded-full items-center justify-center transition-all z-20 shadow-md focus:outline-none shrink-0">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <!-- Content Panel -->
        <!-- CHANGED: Removed 'w-full' to let it sit naturally on the left -->
        <div class="max-w-3xl text-white z-10 flex flex-col justify-center text-left items-start md:ml-6">
            <p id="sliderSubtitle" class="text-lg md:text-2xl font-light tracking-wide mb-3 opacity-90 transition-all duration-300">
                Transforming a Community Together
            </p>

            <h1 id="sliderTitle" class="text-4xl md:text-6xl font-bold tracking-tight leading-tight mb-8 transition-all duration-300">
                Empowering Communities<br class="hidden md:inline">Through Service
            </h1>

            <div class="flex flex-wrap gap-4 mb-12">
                <a id="sliderBtnPrimary" href="#" class="inline-block px-8 py-3 bg-[#e8d47d] text-gray-900 font-bold text-sm tracking-wide transition-all hover:bg-[#dec96b] rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs">
                    Join The Movement
                </a>
                <a id="sliderBtnSecondary" href="#" class="inline-block px-8 py-3 bg-transparent border border-white text-white font-bold text-sm tracking-wide transition-all hover:bg-[#e8d47d] hover:text-gray-900 hover:border-[#e8d47d] rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs">
                    Support our program
                </a>
            </div>
        </div>

        <!-- Right Slider Arrow Button -->
        <!-- CHANGED: Added 'absolute right-6 md:right-24' so it anchors to the right wall regardless of content layout -->
        <button id="nextBtn" class="hidden md:flex absolute right-6 md:right-24 w-11 h-11 bg-white/70 hover:bg-white text-gray-800 rounded-full items-center justify-center transition-all z-20 shadow-md focus:outline-none">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </section>


    <!-- Interactive Logic Script -->
    <script>
        // --- 1. Navigation Event Handling ---
        const dropdownBtn = document.getElementById('dropdownBtn');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileDropdownBtn = document.getElementById('mobileDropdownBtn');
        const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');

        // Desktop programs dropdown click toggle
        dropdownBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdownMenu.classList.toggle('hidden');
        });

        // Mobile navigation bar toggle
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-xmark');
        });

        // Mobile nested dropdown accordion toggle
        mobileDropdownBtn.addEventListener('click', () => {
            mobileDropdownMenu.classList.toggle('hidden');
        });

        // Close open popups clicking outside global window view
        window.addEventListener('click', () => {
            dropdownMenu.classList.add('hidden');
        });


        // --- 2. 3-Slide Object Matrix Data ---
        const slides = [{
                subtitle: "Transforming a Community Together",
                title: "Empowering Communities<br class='hidden md:inline'>Through Service",
                bgImage: "images/hero-background.jpg",
                primaryBtnText: "Join The Movement",
                secondaryBtnText: "Support our program"
            },
            {
                subtitle: "Providing Medical Healthcare Care Packages",
                title: "Free Eye Exams &<br class='hidden md:inline'>Treatment Initiatives",
                bgImage: "https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=1600",
                primaryBtnText: "Book Appointment",
                secondaryBtnText: "Partner With Us"
            },
            {
                subtitle: "Our Collective Growth Journey",
                title: "Building A Sustainable<br class='hidden md:inline'>Bright Future",
                bgImage: "https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=1600",
                primaryBtnText: "Discover Projects",
                secondaryBtnText: "Volunteer Hub"
            }
        ];

        let currentIndex = 0;
        let autoSlideTimer = null; // Holds the interval instance reference
        const SLIDE_DURATION = 3000; // 4 seconds auto-advance cycle

        const heroSlider = document.getElementById('heroSlider');
        const sliderSubtitle = document.getElementById('sliderSubtitle');
        const sliderTitle = document.getElementById('sliderTitle');
        const sliderBtnPrimary = document.getElementById('sliderBtnPrimary');
        const sliderBtnSecondary = document.getElementById('sliderBtnSecondary');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        // Locate or target the outer text container frame for visual transition effects
        const textContainer = sliderSubtitle.parentElement;
        if (textContainer) {
            textContainer.classList.add('transition-all', 'duration-300');
        }

        function updateSlide(index) {
            const data = slides[index];

            // 1. Gently drop opacity of the content panel
            if (textContainer) {
                textContainer.classList.remove('opacity-100');
                textContainer.classList.add('opacity-0');
            }

            // 2. Perform style and data array updates during the fade-out duration gap
            setTimeout(() => {
                // Update backgrounds dynamically retaining linear gradient styling
                heroSlider.style.backgroundImage = `linear-gradient(rgba(21, 62, 115, 0.84), rgba(21, 62, 115, 0.88)), url('${data.bgImage}')`;

                // Update DOM markup variables
                sliderSubtitle.textContent = data.subtitle;
                sliderTitle.innerHTML = data.title;
                sliderBtnPrimary.textContent = data.primaryBtnText;
                sliderBtnSecondary.textContent = data.secondaryBtnText;

                // 3. Bring text elements crisply back to view
                if (textContainer) {
                    textContainer.classList.remove('opacity-0');
                    textContainer.classList.add('opacity-100');
                }
            }, 250);
        }

        // --- 3. Auto-Advance Timer Control Functions ---
        function startAutoSlide() {
            stopAutoSlide(); // Ensure clean lifecycle before spinning up a new interval loop
            autoSlideTimer = setInterval(() => {
                currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
                updateSlide(currentIndex);
            }, SLIDE_DURATION);
        }

        function stopAutoSlide() {
            if (autoSlideTimer) {
                clearInterval(autoSlideTimer);
            }
        }

        // --- 4. User Interaction Handlers ---
        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
            updateSlide(currentIndex);
            startAutoSlide(); // Manual action override resets the 4s cycle window timeline
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
            updateSlide(currentIndex);
            startAutoSlide(); // Manual action override resets the 4s cycle window timeline
        });

        // Initialize the auto-slide thread sequence on initial document load
        startAutoSlide();
    </script>


    <section class="bg-gray-50/50 py-16 px-6 md:px-24">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start gap-8 md:gap-16">

            <!-- Left Column: Header Elements -->
            <div class="w-full md:w-1/2 flex flex-col items-start">
                <!-- Upper Section Badge -->
                <div class="flex items-center gap-3 mb-6">
                    <span class="text-xs md:text-sm font-bold text-gray-500 tracking-widest uppercase">
                        Our Programs
                    </span>
                    <!-- Stylized Sailboat Icon Badge from Screenshot 2026-06-01 at 4.01.09 PM.png -->
                    <svg class="w-8 h-8 opacity-90" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Left Sail -->
                        <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                        <!-- Right Sail -->
                        <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                        <!-- Boat Hull -->
                        <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                    </svg>
                </div>

                <!-- Main Section Heading -->
                <h2 class="text-2xl md:text-[35px] font-bold text-gray-800 leading-tight tracking-tight max-w-md">
                    Creating Measurable Impact Where It Matters Most
                </h2>
            </div>

            <!-- Right Column: Description & Action Button -->
            <div class="w-full md:w-1/2 flex flex-col items-start md:items-end justify-between h-full min-h-[160px]">
                <!-- Paragraph Content -->
                <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide text-left w-full mb-8">
                    We are designed to address real community challenges through sustainable and practical solutions. From grassroots initiatives to large-scale development programs, we focus on delivering measurable results that improve lives and strengthen communities for the long term.
                </p>

                <!-- Action Button with Custom Rounded Profiles matching the screenshot -->
                <a href="#" class="inline-block px-8 py-3 bg-[#e8d47d] text-gray-900 font-bold text-sm tracking-wide transition-all hover:bg-[#dec96b] rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs">
                    See All
                </a>
            </div>

        </div>
    </section>


    <section class="w-full bg-white py-12 px-6 md:px-24">
        <div class="max-w-7xl mx-auto">
            <!-- Responsive Grid: 1 col on mobile, 2 on tablet, 4 on desktop -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1: Environment -->
                <div class="relative group h-[380px] rounded-2xl overflow-hidden shadow-md bg-gray-900">
                    <!-- Background Image (Replace with local 'images/environment.jpg' if needed) -->
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=600" alt="Clean Water & Sanitation Initiative" class="w-full h-full object-cover opacity-60">
                    <!-- Dark gradient overlay for typography readability -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                    <!-- Top Right Category Badge with Asymmetric Border Corners -->
                    <div class="absolute top-0 right-0 bg-[#e8d47d] text-gray-900 font-bold text-xs md:text-sm px-5 py-2 rounded-bl-2xl rounded-tr-sm">
                        Environment
                    </div>

                    <!-- Bottom Left Text -->
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-white font-bold text-lg leading-snug tracking-wide">
                            Clean Water &<br>Sanitation Initiative
                        </h3>
                    </div>
                </div>

                <!-- Card 2: Education -->
                <div class="relative group h-[380px] rounded-2xl overflow-hidden shadow-md bg-gray-900">
                    <!-- Background Image -->
                    <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?q=80&w=600" alt="Free Jamb Forms" class="w-full h-full object-cover opacity-60">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                    <!-- Badge -->
                    <div class="absolute top-0 right-0 bg-[#e8d47d] text-gray-900 font-bold text-xs md:text-sm px-5 py-2 rounded-bl-2xl rounded-tr-sm">
                        Education
                    </div>

                    <!-- Title -->
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-white font-bold text-lg leading-snug tracking-wide">
                            Free Jamb Forms
                        </h3>
                    </div>
                </div>

                <!-- Card 3: Empowerment -->
                <div class="relative group h-[380px] rounded-2xl overflow-hidden shadow-md bg-gray-900">
                    <!-- Background Image -->
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=600" alt="Free Health Check" class="w-full h-full object-cover opacity-60">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                    <!-- Badge -->
                    <div class="absolute top-0 right-0 bg-[#e8d47d] text-gray-900 font-bold text-xs md:text-sm px-5 py-2 rounded-bl-2xl rounded-tr-sm">
                        Empowerment
                    </div>

                    <!-- Title -->
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-white font-bold text-lg leading-snug tracking-wide">
                            Free Health Check
                        </h3>
                    </div>
                </div>

                <!-- Card 4: Family -->
                <div class="relative group h-[380px] rounded-2xl overflow-hidden shadow-md bg-gray-900">
                    <!-- Background Image -->
                    <img src="https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?q=80&w=600" alt="Children's Day Program" class="w-full h-full object-cover opacity-60">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                    <!-- Badge -->
                    <div class="absolute top-0 right-0 bg-[#e8d47d] text-gray-900 font-bold text-xs md:text-sm px-5 py-2 rounded-bl-2xl rounded-tr-sm">
                        Family
                    </div>

                    <!-- Title -->
                    <div class="absolute bottom-6 left-6 right-6">
                        <h3 class="text-white font-bold text-lg leading-snug tracking-wide">
                            Children's Day Program
                        </h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="w-full bg-[#f9f9f9] py-16 px-6 md:px-24 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-20">

            <!-- Left Column: Geometric Segmented Image Display Frame -->
            <div class="w-full lg:w-1/2 flex items-center justify-center relative">

                <!-- Faint background decorative diamond outlines -->
                <div class="absolute -top-12 -left-12 w-24 h-24 border border-dashed border-gray-200 rotate-45 pointer-events-none"></div>
                <div class="absolute -bottom-12 right-12 w-20 h-20 border border-dashed border-gray-200 rotate-45 pointer-events-none"></div>

                <!-- Main Outer Yellow-Tinted Diamond Backdrop Wrapper -->
                <div class="relative w-[320px] h-[320px] sm:w-[420px] sm:h-[420px] bg-[#fdf8e6] rounded-[40px] rotate-45 flex items-center justify-center overflow-hidden p-3 shadow-xs">

                    <!-- Inner Image Container Counter-Rotated to keep photo right-side up -->
                    <div class="-rotate-45 w-[140%] h-[140%] grid grid-cols-2 gap-2 p-1 bg-[#fdf8e6]">

                        <!-- Segment 1: Top Left Grid Window -->
                        <div class="overflow-hidden rounded-tl-[110px] rounded-br-[10px] rounded-tr-[10px] rounded-bl-[10px] bg-gray-200">
                            <img src="images/hero-background.jpg" alt="Team Huddle Top Left" class="w-[200%] h-[200%] max-w-none object-cover object-top-left scale-[1.15] translate-x-[10%] translate-y-[10%]">
                        </div>

                        <!-- Segment 2: Top Right Grid Window -->
                        <div class="overflow-hidden rounded-tr-[110px] rounded-bl-[10px] rounded-tl-[10px] rounded-br-[10px] bg-gray-200">
                            <img src="images/hero-background.jpg" alt="Team Huddle Top Right" class="w-[200%] h-[200%] max-w-none object-cover object-top-right scale-[1.15] -translate-x-[45%] translate-y-[10%]">
                        </div>

                        <!-- Segment 3: Bottom Left Grid Window -->
                        <div class="overflow-hidden rounded-bl-[110px] rounded-tr-[10px] rounded-tl-[10px] rounded-br-[10px] bg-gray-200">
                            <img src="images/hero-background.jpg" alt="Team Huddle Bottom Left" class="w-[200%] h-[200%] max-w-none object-cover object-bottom-left scale-[1.15] translate-x-[10%] -translate-y-[45%]">
                        </div>

                        <!-- Segment 4: Bottom Right Grid Window -->
                        <div class="overflow-hidden rounded-br-[110px] rounded-tl-[10px] rounded-tr-[10px] rounded-bl-[10px] bg-gray-200">
                            <img src="images/hero-background.jpg" alt="Team Huddle Bottom Right" class="w-[200%] h-[200%] max-w-none object-cover object-bottom-right scale-[1.15] -translate-x-[45%] -translate-y-[45%]">
                        </div>

                    </div>
                </div>
            </div>

            <!-- Right Column: Content Breakdown -->
            <div class="w-full lg:w-1/2 flex flex-col items-start text-left">
                <!-- Section Tag -->
                <div class="flex items-center gap-3 mb-6">
                    <span class="text-sm font-bold text-gray-500 tracking-widest uppercase">
                        About
                    </span>
                    <!-- Minimal Sailboat Graphic Vector Symbol -->
                    <svg class="w-7 h-7" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                        <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                        <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                    </svg>
                </div>

                <!-- Main Headline Header -->
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight tracking-tight mb-6">
                    Building Trust Through Transparency, Accountability, and Service
                </h2>

                <!-- Body Copy Text Description -->
                <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide mb-8 max-w-2xl">
                    We believe that true success is measured not just by what we achieve, but by the positive impact we create in the lives of others. Our commitment to charity giving is a reflection of our core values empathy, responsibility, and community.
                </p>

                <!-- Bulleted Verification List Elements -->
                <div class="flex flex-col gap-4 mb-10 w-full">
                    <!-- Item 1 -->
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#e8d47d] rounded flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check text-gray-900 text-[10px] font-bold"></i>
                        </div>
                        <span class="text-sm md:text-base font-semibold text-gray-800">Supports Those in Need</span>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#e8d47d] rounded flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check text-gray-900 text-[10px] font-bold"></i>
                        </div>
                        <span class="text-sm md:text-base font-semibold text-gray-800">Promotes Social Equity</span>
                    </div>
                    <!-- Item 3 -->
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#e8d47d] rounded flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check text-gray-900 text-[10px] font-bold"></i>
                        </div>
                        <span class="text-sm md:text-base font-semibold text-gray-800">Strengthens Communities</span>
                    </div>
                    <!-- Item 4 -->
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#e8d47d] rounded flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check text-gray-900 text-[10px] font-bold"></i>
                        </div>
                        <span class="text-sm md:text-base font-semibold text-gray-800">Enhances Personal Well being</span>
                    </div>
                </div>

                <!-- Action Button with Custom Rounded Profiles matching the design -->
                <a href="#" class="inline-block px-8 py-3.5 bg-[#e8d47d] text-gray-900 font-bold text-sm tracking-wide transition-all hover:bg-[#dec96b] rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs">
                    Read Our Story
                </a>
            </div>

        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="w-full bg-[#f9f9f9] py-16 px-6 md:px-24">
        <div class="max-w-7xl mx-auto">

            <!-- Section Header Layer -->
            <div class="flex flex-col md:flex-row justify-between items-start gap-6 md:gap-16 mb-12">
                <!-- Left Header Title -->
                <div class="w-full md:w-1/2 flex flex-col items-start">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-xs md:text-sm font-bold text-gray-500 tracking-widest uppercase">
                            Upcoming Events
                        </span>
                        <!-- Sailboat Icon Graphic -->
                        <svg class="w-7 h-7" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                            <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                            <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-[40px] font-bold text-gray-800 leading-tight tracking-tight">
                        Join Us. Make an Impact.
                    </h2>
                </div>

                <!-- Right Header Description & Button -->
                <div class="w-full md:w-1/2 flex flex-col items-start md:items-end justify-between h-full">
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide text-left mb-6 w-full">
                        Our events bring together volunteers, partners, and supporters who share a passion for transforming lives. Explore our upcoming activities and find out how you can participate.
                    </p>
                    <a href="#" class="inline-block px-8 py-3 bg-[#e8d47d] text-gray-900 font-bold text-sm tracking-wide transition-all hover:bg-[#dec96b] rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs">
                        View All Events
                    </a>
                </div>
            </div>

            <!-- Featured Event Spotlight Card -->
            <div class="w-full bg-white border border-gray-100 rounded-3xl shadow-xl shadow-gray-200/50 overflow-hidden flex flex-col md:flex-row min-h-[400px]">

                <!-- Event Content Column (Left on Desktop) -->
                <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                    <!-- Event Heading Tag -->
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Free Eye Test</h3>
                    <div class="w-12 h-1 bg-[#e8d47d] mb-6 rounded-full"></div>

                    <!-- Meta Meta-Info: Date and Location Wrap -->
                    <div class="flex flex-wrap items-center gap-y-3 gap-x-6 text-sm text-gray-600 mb-6 font-medium">
                        <div class="flex items-center gap-2">
                            <i class="fa-regular fa-calendar text-[#e8d47d] text-base"></i>
                            <span>19/03/2026</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot text-[#e8d47d] text-base"></i>
                            <span>National Stadium Surulere, Lagos</span>
                        </div>
                    </div>

                    <!-- Event Description Copy -->
                    <p class="text-sm text-gray-500 leading-relaxed font-light tracking-wide mb-8">
                        We are offering free eye examinations to promote awareness, early detection of vision problems, and improved eye care for members and the public.
                    </p>

                    <!-- Countdown Timer Sub-Matrix Container -->
                    <div class="grid grid-cols-4 gap-3 sm:gap-4 max-w-sm">
                        <!-- Days Box -->
                        <div class="bg-[#fdf8e6] p-3 text-center rounded-xl rounded-tl-2xl rounded-br-2xl border border-[#f5edd2]">
                            <span id="countdown-days" class="block text-2xl md:text-3xl font-bold text-gray-800">24</span>
                            <span class="text-[11px] md:text-xs font-medium text-gray-500 tracking-wide">Days</span>
                        </div>
                        <!-- Hours Box -->
                        <div class="bg-[#fdf8e6] p-3 text-center rounded-xl rounded-tl-2xl rounded-br-2xl border border-[#f5edd2]">
                            <span id="countdown-hours" class="block text-2xl md:text-3xl font-bold text-gray-800">24</span>
                            <span class="text-[11px] md:text-xs font-medium text-gray-500 tracking-wide">Hours</span>
                        </div>
                        <!-- Minutes Box -->
                        <div class="bg-[#fdf8e6] p-3 text-center rounded-xl rounded-tl-2xl rounded-br-2xl border border-[#f5edd2]">
                            <span id="countdown-minutes" class="block text-2xl md:text-3xl font-bold text-gray-800">60</span>
                            <span class="text-[11px] md:text-xs font-medium text-gray-500 tracking-wide">Minutes</span>
                        </div>
                        <!-- Seconds Box -->
                        <div class="bg-[#fdf8e6] p-3 text-center rounded-xl rounded-tl-2xl rounded-br-2xl border border-[#f5edd2]">
                            <span id="countdown-seconds" class="block text-2xl md:text-3xl font-bold text-gray-800">30</span>
                            <span class="text-[11px] md:text-xs font-medium text-gray-500 tracking-wide">Seconds</span>
                        </div>
                    </div>
                </div>

                <!-- Event Image Media Window Cover Column (Right on Desktop) -->
                <div class="w-full md:w-1/2 relative min-h-[250px] md:min-h-full bg-gray-900 border-l border-gray-100">
                    <!-- Event Banner Asset Image -->
                    <img src="images/hero-background.jpg" alt="Eye Medical Program Context" class="w-full h-full object-cover opacity-75">
                    <!-- Smooth layout overlay shading for depth -->
                    <div class="absolute inset-0 bg-gradient-to-r from-black/20 via-transparent to-transparent hidden md:block"></div>
                </div>

            </div>

        </div>
    </section>

    <!-- Countdown Engine Script Block -->
    <script>
        (function() {
            // Set target future timestamp (19 March 2026 matches the mockup datum node)
            const targetDate = new Date("March 19, 2026 09:00:00").getTime();

            function updateCountdown() {
                const now = new Date().getTime();
                const difference = targetDate - now;

                // Element pointer handles
                const dEl = document.getElementById("countdown-days");
                const hEl = document.getElementById("countdown-hours");
                const mEl = document.getElementById("countdown-minutes");
                const sEl = document.getElementById("countdown-seconds");

                if (difference < 0) {
                    if (dEl) {
                        dEl.textContent = "00";
                        hEl.textContent = "00";
                        mEl.textContent = "00";
                        sEl.textContent = "00";
                    }
                    return;
                }

                // Time math logic units calculations
                const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((difference % (1000 * 60)) / 1000);

                // Render onto Document Interface structure safely
                if (dEl) {
                    dEl.textContent = days < 10 ? "0" + days : days;
                    hEl.textContent = hours < 10 ? "0" + hours : hours;
                    mEl.textContent = minutes < 10 ? "0" + minutes : minutes;
                    sEl.textContent = seconds < 10 ? "0" + seconds : seconds;
                }
            }

            // Run ticks every single continuous second interval loop
            setInterval(updateCountdown, 1000);
            updateCountdown();
        })();
    </script>

    <!-- Our Impact in Numbers Section -->
    <section class="w-full bg-white py-16 px-6 md:px-24 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16">

            <!-- Left Column: Context Text Header Layer -->
            <div class="w-full lg:w-7/12 flex flex-col items-start text-left relative">
                <!-- Section Tag & Branding Symbol -->
                <div class="flex items-center gap-3 mb-6">
                    <span class="text-sm font-bold text-gray-500 tracking-widest uppercase">
                        Our Impact in Numbers
                    </span>
                    <!-- Minimal Sailboat Graphic Vector Symbol -->
                    <svg class="w-7 h-7" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                        <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                        <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                    </svg>
                </div>

                <!-- Main Heavy Typography Headline -->
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight tracking-tight mb-8 me-3">
                    Real results driven by purpose and collective action.
                </h2>

                <!-- Description Block with Faint Background Accent Shape -->
                <div class="relative w-full">
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide me-3 z-10 relative">
                        We believe impact should be visible and measurable. Through strategic programs and strong community partnerships, we continue to track, evaluate, and improve our efforts to ensure lasting transformation.
                    </p>
                    <!-- Faint background decorative diamond outline resting near text end -->
                    <div class="absolute -bottom-6 right-10 w-16 h-16 border border-dashed border-gray-200 rotate-45 pointer-events-none opacity-60"></div>
                </div>
            </div>

            <!-- Right Column: Staggered Stat Card Matrix Grid -->
            <div class="w-full lg:w-5/12 grid grid-cols-2 gap-6 sm:gap-8 pt-0 lg:pt-8">

                <!-- Card 1: Lives Impacted (Left Column - Top) -->
                <div class="bg-[#fdf8e6] border-l-4 border-[#cbd5e1]/40 p-8 sm:p-10 flex flex-col justify-center items-center text-center rounded-tl-3xl rounded-br-3xl rounded-tr-sm rounded-bl-sm shadow-xs min-h-[190px] transform lg:translate-y-0 transition-transform">
                    <span class="block text-4xl sm:text-5xl font-bold text-gray-800 tracking-tight mb-2">5000+</span>
                    <span class="text-sm sm:text-base font-light text-gray-600 tracking-wide">Lives Impacted</span>
                </div>

                <!-- Card 2: Community Project (Right Column - Shifted Down Slightly) -->
                <div class="bg-[#fdf8e6] border-l-4 border-[#cbd5e1]/40 p-8 sm:p-10 flex flex-col justify-center items-center text-center rounded-tl-3xl rounded-br-3xl rounded-tr-sm rounded-bl-sm shadow-xs min-h-[190px] transform lg:translate-y-8 transition-transform">
                    <span class="block text-4xl sm:text-5xl font-bold text-gray-800 tracking-tight mb-2">30+</span>
                    <span class="text-sm sm:text-base font-light text-gray-600 tracking-wide">Community Project</span>
                </div>

                <!-- Card 3: Partners (Left Column - Bottom) -->
                <div class="bg-[#fdf8e6] border-l-4 border-[#cbd5e1]/40 p-8 sm:p-10 flex flex-col justify-center items-center text-center rounded-tl-3xl rounded-br-3xl rounded-tr-sm rounded-bl-sm shadow-xs min-h-[190px] transform lg:-translate-y-4 transition-transform">
                    <span class="block text-4xl sm:text-5xl font-bold text-gray-800 tracking-tight mb-2">20</span>
                    <span class="text-sm sm:text-base font-light text-gray-600 tracking-wide">Partners</span>
                </div>

                <!-- Card 4: Chapters (Right Column - Bottom Shifted Down) -->
                <div class="bg-[#fdf8e6] border-l-4 border-[#cbd5e1]/40 p-8 sm:p-10 flex flex-col justify-center items-center text-center rounded-tl-3xl rounded-br-3xl rounded-tr-sm rounded-bl-sm shadow-xs min-h-[190px] transform lg:translate-y-4 transition-transform">
                    <span class="block text-4xl sm:text-5xl font-bold text-gray-800 tracking-tight mb-2">10+</span>
                    <span class="text-sm sm:text-base font-light text-gray-600 tracking-wide">Chapters</span>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer Section -->
    <?php include 'inc/footer.php'; ?>
</body>

</html>