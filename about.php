<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Alpha Galleon</title>
   
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

<body class="bg-white">

    <?php include 'inc/header.php'; ?>

    <section class="relative w-full h-[350px] md:h-[400px] flex items-center justify-start px-6 md:px-24 overflow-hidden bg-cover bg-center font-sans"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('images/1beaf06e092836a7ea525473fef886e79c562289.jpg');">

        <div class="max-w-7xl w-full mx-auto flex items-center justify-start">
            <div class="flex items-center gap-4 text-white z-10 animate-fade-in">

                <h1 class="text-4xl md:text-5xl font-black tracking-tight leading-none">
                    About
                </h1>

                <div class="inline-flex items-center justify-center pt-1 shrink-0">
                    <svg class="w-7 h-7 md:w-9 md:h-9" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />

                        <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />

                        <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                    </svg>
                </div>
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
                        ABOUT ALPHA GALLEON
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


                <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide mb-4 max-w-2xl">
                    Alpha Galleon is regarded as one of the early or foundational operational chapters within the Buccaneers confraternity structure.
                </p>

                <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide mb-4 max-w-2xl">
                    We believe that true success is measured not just by what we achieve, but by the positive impact we create in the lives of others. Our commitment to charity giving is a reflection of our core values empathy, responsibility, and community.
                </p>

                <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide mb-8 max-w-2xl">
                    The name <b>Alpha</b> symbolizes <b>leadership, origin, and precedence</b>, while <b>“Galleon”</b> refers to a <b>large sailing ship</b> historically used for exploration and naval operations.
                </p>

                <div class="flex flex-col gap-4 mb-4 w-full">

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
            </div>
        </div>
    </section>

    <?php

    $strategic_directions = [
        [
            'title' => 'Our Mission',
            'content' => 'To foster brotherhood, leadership, discipline, and service among members while promoting unity, personal development, and positive societal contribution.'
        ],
        [
            'title' => 'Our Core Values',
            'content' => 'Encouraging members to develop confidence & responsibility to guide others in Maintaining order, respect, and adherence to organizational rules and traditions.'
        ],
        [
            'title' => 'Our Vision',
            'content' => 'To build a strong and respected brotherhood that develops responsible leaders who contribute positively to their communities and uphold the traditions of the Sea Lords.'
        ]
    ];

    $team_leaders = [
        [
            'role_title' => 'Galleon Master',
            'image' => 'images/team/galleon-master.jpg',
            'alt' => 'Galleon Master Profile Photo'
        ],
        [
            'role_title' => 'Galleon Penmate',
            'image' => 'images/team/galleon-penmate.jpg',
            'alt' => 'Galleon Penmate Profile Photo'
        ],
        [
            'role_title' => 'Galleon Purse',
            'image' => 'images/team/galleon-purse.jpg',
            'alt' => 'Galleon Purse Profile Photo'
        ],
        [
            'role_title' => 'Galleon Mascot',
            'image' => 'images/team/galleon-mascot.jpg',
            'alt' => 'Galleon Mascot Profile Photo'
        ]
    ];
    ?>

    <section class="w-full bg-white py-20 px-6 md:px-24 overflow-hidden font-sans relative">

        <div class="absolute inset-0 pointer-events-none opacity-40">
            <div class="absolute top-12 left-1/2 w-16 h-16 border border-dashed border-gray-200 rotate-45"></div>
            <div class="absolute top-4 right-1/4 w-24 h-24 border border-dashed border-gray-100 rotate-45"></div>
            <div class="absolute bottom-12 right-12 w-20 h-20 border border-dashed border-gray-200 rotate-45"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">

            <div class="flex flex-col items-start text-left mb-12 max-w-3xl">
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-sm font-bold text-gray-500 tracking-widest uppercase">
                        Our Strategic Directions
                    </span>

                    <svg class="w-5 h-5 shrink-0" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                        <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                        <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                    </svg>
                </div>
                <h2 class="text-2xl md:text-3xl font-black text-gray-900 leading-tight tracking-tight">
                    The beliefs that unite us, inspire us, and drive our commitment to leadership and service.”
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                <?php foreach ($strategic_directions as $direction): ?>
                    <div class="bg-[#f7f2d4] bg-opacity-60 rounded-2xl p-8 flex flex-col justify-start items-start text-left transition-all duration-300 hover:bg-white hover:bg-opacity-100 hover:shadow-md border border-yellow-100/50">
                        <h3 class="text-xl font-bold text-gray-800 tracking-tight mb-4 relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-10 after:h-[2px] after:bg-[#e8d47d]">
                            <?php echo htmlspecialchars($direction['title']); ?>
                        </h3>
                        <p class="text-sm md:text-base text-gray-600 font-light leading-relaxed tracking-wide">
                            <?php echo htmlspecialchars($direction['content']); ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="w-full bg-[#fbf9ee] py-20 px-6 md:px-24 overflow-hidden font-sans relative">
        <div class="absolute inset-0 opacity-[0.02] pointer-events-none mix-blend-multiply bg-[url('images/subtle-pattern.png')] bg-repeat"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="flex flex-col items-center text-center mb-16 max-w-3xl mx-auto">
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-sm font-bold text-gray-500 tracking-widest uppercase">
                        Meet The Team Leaders
                    </span>
                    <svg class="w-5 h-5 shrink-0" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                        <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                        <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                    </svg>
                </div>
                <h2 class="text-2xl md:text-3xl font-black text-gray-900 leading-snug tracking-tight">
                    Strong leadership at every level, driving unity, excellence, and lasting impact.
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                <?php foreach ($team_leaders as $leader): ?>
                    <div class="relative overflow-hidden bg-black rounded-2xl aspect-[4/5] shadow-lg group">
                        <div class="absolute inset-0 flex flex-col items-center justify-end bg-black">
                            <div class="w-24 h-24 rounded-full bg-[#e8d47d] mb-4 transform translate-y-4 transition-transform duration-500 group-hover:scale-105"></div>
                            <div class="w-40 h-32 rounded-t-full bg-[#e8d47d] opacity-90 transition-transform duration-500 group-hover:translate-y-1"></div>
                        </div>

                        <?php if (!empty($leader['image']) && file_exists($leader['image'])): ?>
                            <img src="<?php echo htmlspecialchars($leader['image']); ?>"
                                alt="<?php echo htmlspecialchars($leader['alt']); ?>"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <?php endif; ?>

                        <div class="absolute bottom-4 left-4 z-20 transition-all duration-500 ease-out group-hover:left-full group-hover:-translate-x-[calc(100%+1rem)]">
                            <span class="inline-block px-5 py-2.5 bg-white text-gray-900 font-bold text-xs tracking-wide shadow-md rounded-tl-xl rounded-br-xl rounded-tr-xs rounded-bl-xs uppercase whitespace-nowrap border border-transparent transition-all duration-300 hover:bg-transparent hover:text-white hover:border-[#e8d47d] cursor-pointer">
                                <?php echo htmlspecialchars($leader['role_title']); ?>
                            </span>
                        </div>
                        <div class="absolute inset-0 border border-black/10 rounded-2xl pointer-events-none"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'inc/footer.php'; ?>

</body>
<script src="dist/js/about.js"></script>

</html>