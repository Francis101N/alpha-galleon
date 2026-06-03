<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Galleon - Home</title>
   
    <script src="https://cdn.tailwindcss.com"></script>
  
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
<style>
    @keyframes marquee {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        animation: marquee 25s linear infinite;
    }

    .marquee-container:hover .animate-marquee {
        animation-play-state: paused;
    }
</style>

<body class="bg-white text-gray-800 antialiased font-sans">

    <?php include 'inc/header.php'; ?>

    <section id="heroSlider" class="relative h-[calc(100vh-76px)] min-h-[600px] flex items-center justify-start gap-6 px-6 md:px-24 overflow-hidden bg-cover bg-center transition-all duration-700 ease-in-out"
        style="background-image: linear-gradient(rgba(21, 62, 115, 0.84), rgba(21, 62, 115, 0.88)), url('images/hero-background.jpg');">

        <button id="prevBtn" class="hidden md:flex w-11 h-11 bg-white/70 hover:bg-white text-gray-800 rounded-full items-center justify-center transition-all z-20 shadow-md focus:outline-none shrink-0">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

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

        <button id="nextBtn" class="hidden md:flex absolute right-6 md:right-24 w-11 h-11 bg-white/70 hover:bg-white text-gray-800 rounded-full items-center justify-center transition-all z-20 shadow-md focus:outline-none">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </section>

    <section class="bg-gray-50/50 py-16 px-6 md:px-24">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start gap-8 md:gap-16">

            <div class="w-full md:w-1/2 flex flex-col items-start">

                <div class="flex items-center gap-3 mb-6">
                    <span class="text-xs md:text-sm font-bold text-gray-500 tracking-widest uppercase">
                        Our Programs
                    </span>

                    <svg class="w-8 h-8 opacity-90" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />

                        <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />

                        <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                    </svg>
                </div>

                <h2 class="text-2xl md:text-[35px] font-bold text-gray-800 leading-tight tracking-tight max-w-md">
                    Creating Measurable Impact Where It Matters Most
                </h2>
            </div>

            <div class="w-full md:w-1/2 flex flex-col items-start md:items-end justify-between h-full min-h-[160px]">

                <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide text-left w-full mb-8">
                    We are designed to address real community challenges through sustainable and practical solutions. From grassroots initiatives to large-scale development programs, we focus on delivering measurable results that improve lives and strengthen communities for the long term.
                </p>

                <a href="#" class="inline-block px-8 py-3 bg-[#e8d47d] text-gray-900 font-bold text-sm tracking-wide transition-all hover:bg-[#dec96b] rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs">
                    See All
                </a>
            </div>

        </div>
    </section>

    <?php

    $marquee_cards = [
        [
            'category' => 'Environment',
            'title'    => 'Clean Water &<br>Sanitation Initiative',
            'image'    => 'images/e50c7f8c8a2f72341863df4c9cd82d25369b997f.jpg',
            'alt'      => 'Clean Water & Sanitation Initiative'
        ],
        [
            'category' => 'Education',
            'title'    => 'Free Jamb Forms',
            'image'    => 'images/b2f3049c0549803965639b1902b4a973faa7a19e.jpg',
            'alt'      => 'Free Jamb Forms'
        ],
        [
            'category' => 'Empowerment',
            'title'    => 'Free Health Check',
            'image'    => 'images/4a280bfc0c3529fc7b56df441fe2d35a2203b09e.jpg',
            'alt'      => 'Free Health Check'
        ],
        [
            'category' => 'Family',
            'title'    => "Children's Day Program",
            'image'    => 'images/46c80a3c59f091ef8f035766aa35c62b44101ef3.jpg',
            'alt'      => "Children's Day Program"
        ],
        [
            'category' => 'Health',
            'title'    => "Free Medical Outreach & Health Awareness",
            'image'    => 'images/94ddaa2c876306aa87042a8ac33e6c0cf6b98a0d.jpg',
            'alt'      => "Free Medical Outreach & Health Awareness"
        ],
        [
            'category' => 'Humanitarian Support',
            'title'    => "Emergency Relief & Community Response",
            'image'    => 'images/f6beef2c00de639d076759e7ff6e329b1d675612.jpg',
            'alt'      => "Emergency Relief & Community Response"
        ]
    ];
    ?>

    <section class="w-full bg-white py-12 overflow-hidden marquee-container">
        <div class="w-full flex">

            <div class="flex flex-nowrap gap-6 shrink-0 animate-marquee pr-6">
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <?php foreach ($marquee_cards as $card): ?>

                        <div class="relative group h-[380px] w-[280px] md:w-[320px] rounded-2xl overflow-hidden shadow-md bg-gray-900 shrink-0">
                            <img src="<?php echo $card['image']; ?>"
                                alt="<?php echo htmlspecialchars($card['alt']); ?>"
                                class="w-full h-full object-cover opacity-60 transition-transform duration-700 group-hover:scale-105"
                                loading="lazy">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                            <div class="absolute top-0 right-0 bg-[#e8d47d] text-gray-900 font-bold text-xs md:text-sm px-5 py-2 rounded-bl-2xl rounded-tr-sm uppercase tracking-wide">
                                <?php echo htmlspecialchars($card['category']); ?>
                            </div>

                            <div class="absolute bottom-6 left-6 right-6">
                                <h3 class="text-white font-bold text-lg leading-snug tracking-wide">
                                    <?php echo $card['title']; ?>
                                </h3>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endfor; ?>
            </div>

        </div>
    </section>

    <section class="w-full bg-[#f9f9f9] py-16 px-6 md:px-24 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-20">

            <div class="w-full lg:w-1/2 flex items-center justify-center relative">
                <img src="images/ABT-PICS.png" alt="about-section" class="w-full h-full object-cover rounded-3xl">
            </div>

            <div class="w-full lg:w-1/2 flex flex-col items-start text-left">

                <div class="flex items-center gap-3 mb-6">
                    <span class="text-sm font-bold text-gray-500 tracking-widest uppercase">
                        About
                    </span>

                    <svg class="w-7 h-7" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                        <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                        <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                    </svg>
                </div>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight tracking-tight mb-6">
                    Building Trust Through Transparency, Accountability, and Service
                </h2>

                <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide mb-8 max-w-2xl">
                    We believe that true success is measured not just by what we achieve, but by the positive impact we create in the lives of others. Our commitment to charity giving is a reflection of our core values empathy, responsibility, and community.
                </p>

                <div class="flex flex-col gap-4 mb-10 w-full">

                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#e8d47d] rounded flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check text-white text-[10px] font-bold"></i>
                        </div>
                        <span class="text-sm md:text-base font-semibold text-gray-800">Supports Those in Need</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#e8d47d] rounded flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check text-white text-[10px] font-bold"></i>
                        </div>
                        <span class="text-sm md:text-base font-semibold text-gray-800">Promotes Social Equity</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#e8d47d] rounded flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check text-white text-[10px] font-bold"></i>
                        </div>
                        <span class="text-sm md:text-base font-semibold text-gray-800">Strengthens Communities</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 bg-[#e8d47d] rounded flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-check text-white text-[10px] font-bold"></i>
                        </div>
                        <span class="text-sm md:text-base font-semibold text-gray-800">Enhances Personal Well being</span>
                    </div>
                </div>

                <a href="#" class="inline-block px-8 py-3.5 bg-[#e8d47d] text-gray-900 font-bold text-sm tracking-wide transition-all hover:bg-[#dec96b] rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs">
                    Read Our Story
                </a>
            </div>

        </div>
    </section>

    <section class="w-full bg-[#f9f9f9] py-16 px-6 md:px-24">
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col md:flex-row justify-between items-start gap-6 md:gap-16 mb-12">
                <div class="w-full md:w-1/2 flex flex-col items-start">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-xs md:text-sm font-bold text-gray-500 tracking-widest uppercase">
                            Our Impact Metrics
                        </span>
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

                <div class="w-full md:w-1/2 flex flex-col items-start md:items-end justify-between h-full">
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide text-left mb-6 w-full">
                        Our events bring together volunteers, partners, and supporters who share a passion for transforming lives. Explore our upcoming activities and find out how you can participate.
                    </p>
                    <a href="#" class="inline-block px-8 py-3 bg-[#e8d47d] text-gray-900 font-bold text-sm tracking-wide transition-all hover:bg-[#dec96b] rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs">
                        View All Events
                    </a>
                </div>
            </div>

            <div class="w-full bg-white border border-gray-100 rounded-3xl shadow-xl shadow-gray-200/50 overflow-hidden flex flex-col md:flex-row min-h-[400px]">

                <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Free Eye Test</h3>
                    <div class="w-12 h-1 bg-[#e8d47d] mb-6 rounded-full"></div>

                    <div class="flex flex-wrap items-center gap-y-3 gap-x-6 text-sm text-gray-600 mb-6 font-medium">
                        <div class="flex items-center gap-2">
                            <i class="fa-regular fa-calendar text-[#e8d47d] text-base"></i>
                            <span>19/12/2026</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot text-[#e8d47d] text-base"></i>
                            <span>National Stadium Surulere, Lagos</span>
                        </div>
                    </div>

                    <p class="text-sm text-gray-500 leading-relaxed font-light tracking-wide mb-8">
                        We are offering free eye examinations to promote awareness, early detection of vision problems, and improved eye care for members and the public.
                    </p>

                    <div class="grid grid-cols-4 gap-3 sm:gap-4 max-w-sm">
                        <div class="bg-[#fdf8e6] p-3 text-center rounded-xl rounded-tl-2xl rounded-br-2xl border border-[#f5edd2]">
                            <span class="scramble-counter block text-2xl md:text-3xl font-bold text-gray-800" data-target="24">--</span>
                            <span class="text-[11px] md:text-xs font-medium text-gray-500 tracking-wide">Days</span>
                        </div>
                        <div class="bg-[#fdf8e6] p-3 text-center rounded-xl rounded-tl-2xl rounded-br-2xl border border-[#f5edd2]">
                            <span class="scramble-counter block text-2xl md:text-3xl font-bold text-gray-800" data-target="24">--</span>
                            <span class="text-[11px] md:text-xs font-medium text-gray-500 tracking-wide">Hours</span>
                        </div>
                        <div class="bg-[#fdf8e6] p-3 text-center rounded-xl rounded-tl-2xl rounded-br-2xl border border-[#f5edd2]">
                            <span class="scramble-counter block text-2xl md:text-3xl font-bold text-gray-800" data-target="60">--</span>
                            <span class="text-[11px] md:text-xs font-medium text-gray-500 tracking-wide">Minutes</span>
                        </div>
                        <div class="bg-[#fdf8e6] p-3 text-center rounded-xl rounded-tl-2xl rounded-br-2xl border border-[#f5edd2]">
                            <span class="scramble-counter block text-2xl md:text-3xl font-bold text-gray-800" data-target="30">--</span>
                            <span class="text-[11px] md:text-xs font-medium text-gray-500 tracking-wide">Seconds</span>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 relative min-h-[250px] md:min-h-full bg-gray-900 border-l border-gray-100">
                    <img src="images/free-eye-test.png" alt="Eye Medical Program Context" class="w-full h-full object-cover opacity-75">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/20 via-transparent to-transparent hidden md:block"></div>
                </div>

            </div>

        </div>
    </section>

    <section class="w-full bg-white py-16 px-6 md:px-24 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16">

            <div class="w-full lg:w-7/12 flex flex-col items-start text-left relative">

                <div class="flex items-center gap-3 mb-6">
                    <span class="text-sm font-bold text-gray-500 tracking-widest uppercase">
                        Our Impact in Numbers
                    </span>

                    <svg class="w-7 h-7" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                        <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                        <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                    </svg>
                </div>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight tracking-tight mb-8 me-3">
                    Real results driven by purpose and collective action.
                </h2>

                <div class="relative w-full">
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide me-3 z-10 relative">
                        We believe impact should be visible and measurable. Through strategic programs and strong community partnerships, we continue to track, evaluate, and improve our efforts to ensure lasting transformation.
                    </p>

                    <div class="absolute -bottom-6 right-10 w-16 h-16 border border-dashed border-gray-200 rotate-45 pointer-events-none opacity-60"></div>
                </div>
            </div>


            <div class="w-full lg:w-5/12 grid grid-cols-2 gap-6 sm:gap-8 pt-0 lg:pt-8">


                <div class="bg-[#fdf8e6] border-l-4 border-[#c4ddaf]/40 p-8 sm:p-10 flex flex-col justify-center items-center text-center rounded-tl-3xl rounded-br-3xl rounded-tr-sm rounded-bl-sm shadow-xs min-h-[190px] transform lg:translate-y-0 transition-transform">
                    <span class="block text-4xl sm:text-5xl font-bold text-gray-800 tracking-tight mb-2">5000+</span>
                    <span class="text-sm sm:text-base font-light text-gray-600 tracking-wide">Lives Impacted</span>
                </div>

                <div class="bg-[#fdf8e6] border-l-4 border-[#c4ddaf]/40 p-8 sm:p-10 flex flex-col justify-center items-center text-center rounded-tl-3xl rounded-br-3xl rounded-tr-sm rounded-bl-sm shadow-xs min-h-[190px] transform lg:translate-y-8 transition-transform">
                    <span class="block text-4xl sm:text-5xl font-bold text-gray-800 tracking-tight mb-2">30+</span>
                    <span class="text-sm sm:text-base font-light text-gray-600 tracking-wide">Community Project</span>
                </div>

                <div class="bg-[#fdf8e6] border-l-4 border-[#c4ddaf]/40 p-8 sm:p-10 flex flex-col justify-center items-center text-center rounded-tl-3xl rounded-br-3xl rounded-tr-sm rounded-bl-sm shadow-xs min-h-[190px] transform lg:-translate-y-4 transition-transform">
                    <span class="block text-4xl sm:text-5xl font-bold text-gray-800 tracking-tight mb-2">20</span>
                    <span class="text-sm sm:text-base font-light text-gray-600 tracking-wide">Partners</span>
                </div>

                <div class="bg-[#fdf8e6] border-l-4 border-[#c4ddaf]/40 p-8 sm:p-10 flex flex-col justify-center items-center text-center rounded-tl-3xl rounded-br-3xl rounded-tr-sm rounded-bl-sm shadow-xs min-h-[190px] transform lg:translate-y-4 transition-transform">
                    <span class="block text-4xl sm:text-5xl font-bold text-gray-800 tracking-tight mb-2">10+</span>
                    <span class="text-sm sm:text-base font-light text-gray-600 tracking-wide">Chapters</span>
                </div>

            </div>

        </div>
    </section>

    <?php

    $stories = [
        'beneficiary' => [
            'tab_title' => 'Beneficiary Story',
            'heading' => 'A Brighter Future Through Education',
            'image' => 'images/636941d8f0ff9781ea8621065e33f6e4369b38c5.jpg',
            'alt' => 'Students receiving educational support scholarship program',
            'content' => 'When Amina received educational support through our scholarship program, her life changed completely. With access to school supplies, mentorship, and encouragement, she is now excelling in school and inspiring other children in her community to pursue their dreams.'
        ],
        'volunteer' => [
            'tab_title' => 'Volunteer Story',
            'heading' => 'Serving with Purpose',
            'image' => 'images/e75d5724adb5115b72076562061512d3a85f5605.jpg',
            'alt' => 'Volunteers working together in the local community',
            'content' => 'Mrs Aisha joined our volunteer outreach team with a passion for helping others. Through community programs and Health support initiatives, she has contributed countless hours to empowering young people and strengthening community health development.'
        ],
        'community' => [
            'tab_title' => 'Community Story',
            'heading' => 'A Community United for Change',
            'image' => 'images/ca70168967a7c71ae9f68ffeb2706625b0c3ad41.jpg',
            'alt' => 'Community members gathered together during an outreach initiative',
            'content' => 'Through our clean water and sanitation initiative, an entire village now has access to safe drinking water. The project has improved health, strengthened local partnerships, and created a safer environment for families and children.'
        ]
    ];

    $active_tab_key = 'beneficiary';
    ?>

    <section class="w-full bg-[#fafafa] py-16 px-6 md:px-24 overflow-hidden font-sans">
        <div class="max-w-7xl mx-auto">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-16 items-start mb-12">

                <div class="flex flex-col items-start text-left">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-sm font-bold text-gray-500 tracking-widest uppercase">
                            Impact Stories
                        </span>

                        <svg class="w-6 h-6" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                            <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                            <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                        </svg>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 leading-tight tracking-tight max-w-md">
                        Real Stories. Real People. Real Change.
                    </h2>
                </div>

                <div class="lg:pt-10">
                    <p class="text-sm md:text-base text-gray-600 font-light leading-relaxed tracking-wide max-w-xl">
                        Behind every project is a story of transformation. Discover how our work is impacting lives, empowering volunteers, and strengthening communities.
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap gap-4 mb-14">
                <?php foreach ($stories as $key => $story):

                    $is_active = ($key === $active_tab_key);
                    $tab_button_classes = $is_active
                        ? "bg-white border border-gray-200 text-gray-800 rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm font-medium"
                        : "bg-[#e8d47d] text-gray-800 rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm font-medium hover:bg-[#dec96b]";
                ?>
                    <button
                        onclick="switchStoryTab('<?php echo $key; ?>')"
                        id="tab-btn-<?php echo $key; ?>"
                        class="story-tab-btn px-6 py-3 text-sm tracking-wide shadow-xs transition-all cursor-pointer focus:outline-none <?php echo $tab_button_classes; ?>">
                        <?php echo htmlspecialchars($story['tab_title']); ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="relative w-full">
                <?php foreach ($stories as $key => $story):
                    $is_hidden = ($key !== $active_tab_key) ? 'hidden' : '';
                ?>
                    <div id="story-panel-<?php echo $key; ?>" class="story-content-panel <?php echo $is_hidden; ?> flex flex-col lg:flex-row items-center gap-12 lg:gap-16 transition-all duration-500 opacity-100">

                        <div class="w-full lg:w-1/2 relative">

                            <div class="absolute -inset-1.5 bg-[#e8d47d] rounded-tl-[1rem] rounded-br-[1rem] rounded-tr-md rounded-bl-md pointer-events-none"></div>
                            <div class="relative overflow-hidden rounded-tl-[1rem] rounded-br-[1rem] rounded-tr-md rounded-bl-md aspect-[4/3] bg-gray-200">

                                <img src="<?php echo htmlspecialchars($story['image']); ?>"
                                    alt="<?php echo htmlspecialchars($story['alt']); ?>"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="w-full lg:w-1/2 flex flex-col items-start text-left relative">

                            <div class="w-12 h-12 border border-dashed border-gray-300 rotate-45 mb-6 opacity-80 self-start ml-12 pointer-events-none"></div>

                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 leading-tight mb-6 tracking-tight">
                                <?php echo htmlspecialchars($story['heading']); ?>
                            </h3>

                            <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide mb-8 max-w-lg">
                                <?php echo htmlspecialchars($story['content']); ?>
                            </p>

                            <a href="#" class="inline-block px-8 py-3 bg-[#e8d47d] text-gray-900 font-bold text-sm tracking-wide transition-all hover:bg-[#dec96b] rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs">
                                Read more
                            </a>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>


    <section class="w-full grid grid-cols-1 md:grid-cols-2 min-h-[450px] bg-white overflow-hidden font-sans">

        <div class="flex flex-col justify-center items-start text-left bg-[#fbf9ee] px-6 sm:px-12 md:px-20 py-16 relative">

            <div class="absolute inset-0 opacity-[0.03] pointer-events-none mix-blend-multiply bg-[url('images/subtle-pattern.png')] bg-repeat"></div>

            <div class="relative z-10 max-w-xl">
                <h2 class="text-4xl md:text-5xl font-black text-gray-800 leading-tight mb-3 tracking-tight">
                    Join Our Community
                </h2>

                <h3 class="text-xl md:text-2xl font-medium text-gray-700 mb-6 tracking-wide">
                    Together We Can Do More
                </h3>

                <p class="text-sm md:text-base text-gray-600 font-light leading-relaxed tracking-wide mb-10 max-w-md">
                    Sign up today and become part of a network of supporters committed to driving meaningful impact.
                </p>

                <a href="#" class="inline-block px-8 py-3.5 bg-black text-white font-bold text-sm tracking-widest uppercase transition-all hover:bg-gray-950 rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-md cursor-pointer">
                    Become A Member
                </a>
            </div>
        </div>

        <div class="relative w-full min-h-[300px] md:min-h-full bg-gray-200 group overflow-hidden">

            <img src="images/join-members.png" alt="Children participating in Alpha Galleon community event" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">

            <div class="absolute inset-0 flex items-center justify-center bg-black/10 transition-colors group-hover:bg-black/20">
                <button aria-label="Play Video Summary" class="w-16 h-16 sm:w-20 sm:h-20 bg-[#4cae4f] text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 transform hover:scale-110 active:scale-95 cursor-pointer focus:outline-none">

                    <svg class="w-6 h-6 sm:w-8 sm:h-8 fill-current ml-1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 5v14l11-7z" />
                    </svg>
                </button>
            </div>

            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 opacity-90 pointer-events-none">

            </div>
        </div>

    </section>

    <?php include 'inc/footer.php'; ?>
</body>

<script src="dist/js/index.js"></script>

</html>