<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events -Alpha Galleon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            gold: '#af9253',
                            blue: '#153e73',
                            yellow: '#e8d47d',
                            accent: '#f4d03f'
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white text-gray-800 antialiased font-sans">

    <?php include 'inc/header.php'; ?>

    <section class="relative w-full h-[350px] md:h-[400px] flex items-center justify-start px-6 md:px-24 overflow-hidden bg-cover bg-center font-sans"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('images/e50c7f8c8a2f72341863df4c9cd82d25369b997f.jpg');">

        <div class="max-w-7xl w-full mx-auto flex items-center justify-start">
            <div class="flex items-center gap-4 text-white z-10 animate-fade-in">

                <h1 class="text-4xl md:text-5xl font-black tracking-tight leading-none">
                    Events
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

    <?php

    $upcoming_events = [
        [
            'title'       => 'Dinner & Gala Night',
            'date'        => '19/03/2026',
            'location'    => 'National Stadium Surulere ,Lagos',
            'description' => 'An evening dedicated to celebration, networking, and recognition of outstanding members who have contributed to the growth and success of the organization.',
            'image'       => 'images/d8a82e968b8ef77df78b9205d576ce575c81fe53.jpg',
            'alt'         => 'Banquet table group dining and networking environment',
            'image_right' => false
        ],
        [
            'title'       => 'Free Eye Test',
            'date'        => '19/03/2026',
            'location'    => 'National Stadium Surulere ,Lagos',
            'description' => 'We are offering free eye examinations to promote awareness, early detection of vision problems, and improved eye care for members and the public.',
            'image'       => 'images/27cf720c254201fcb7993028a472fd61faf62fae.jpg',
            'alt'         => 'Medical screening consultation registry desk area',
            'image_right' => true
        ],
        [
            'title'       => 'Health Cup',
            'date'        => '19/03/2026',
            'location'    => 'National Stadium Surulere ,Lagos',
            'description' => 'A wellness activity designed to promote healthy living, fitness, and community engagement through a refreshing group walk.',
            'image'       => 'images/5b031d8b8ebef52311a6585f3378008cb7d1bf0a.jpg',
            'alt'         => 'Health Cup',
            'image_right' => false
        ],
        [
            'title'       => 'Master Cup',
            'date'        => '19/03/2026',
            'location'    => 'National Stadium Surulere ,Lagos',
            'description' => 'A friendly sporting competition that brings members together to promote teamwork, sportsmanship, and unity through exciting matches.',
            'image'       => 'images/7cd8852d15acec3a8ba2d8ecc391f8b0d634f52c.jpg',
            'alt'         => 'Runners assembly lineup at a track starting milestone marker line',
            'image_right' => true
        ]
    ];
    ?>

    <section class="w-full bg-[#fafbfc] py-20 px-6 md:px-24 overflow-hidden relative font-sans">

        <div class="absolute inset-0 pointer-events-none opacity-40">
            <div class="absolute top-12 left-[10%] w-16 h-16 border border-dashed border-gray-200 rotate-45"></div>
            <div class="absolute top-24 right-[8%] w-20 h-20 border border-dashed border-gray-200 rotate-45"></div>
            <div class="absolute bottom-16 left-[40%] w-14 h-14 border border-dashed border-gray-200 rotate-45"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">

            <div class="flex flex-col items-center text-center mb-16">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-lg font-black text-gray-400 tracking-widest uppercase">UPCOMING EVENTS</span>
                    <div class="inline-flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                            <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                            <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-gray-900 tracking-tight">Join Us. Make an Impact.</h2>
            </div>

            <div class="flex flex-col gap-12 w-full">
                <?php foreach ($upcoming_events as $event): ?>

                    <div class="w-full bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-[0_15px_45px_rgba(0,0,0,0.04)] grid grid-cols-1 md:grid-cols-12 relative group mb-5">

                        <div class="absolute top-0 inset-x-0 h-[2px] bg-gradient-to-r from-transparent via-brand-yellow to-transparent opacity-80"></div>

                        <div class="p-8 sm:p-10 md:p-12 md:col-span-7 flex flex-col justify-center items-start text-left <?php echo $event['image_right'] ? 'md:order-1' : 'md:order-2'; ?>">

                            <h3 class="text-xl md:text-2xl font-black text-gray-900 mb-4 tracking-tight relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-10 after:h-[2px] after:bg-brand-yellow">
                                <?php echo htmlspecialchars($event['title']); ?>
                            </h3>

                            <div class="flex flex-wrap gap-x-6 gap-y-2 text-xs md:text-sm font-semibold text-gray-400 mb-5">
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-calendar-days text-brand-yellow"></i>
                                    <span><?php echo htmlspecialchars($event['date']); ?></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-location-dot text-brand-yellow"></i>
                                    <span><?php echo htmlspecialchars($event['location']); ?></span>
                                </div>
                            </div>

                            <p class="text-xs md:text-sm text-gray-400 font-light leading-relaxed mb-8 max-w-xl">
                                <?php echo htmlspecialchars($event['description']); ?>
                            </p>

                            <div class="grid grid-cols-4 gap-3 w-full max-w-sm sm:max-w-md">
                                <?php
                                $metrics = [
                                    ['val' => '24', 'lbl' => 'Days'],
                                    ['val' => '24', 'lbl' => 'Hours'],
                                    ['val' => '60', 'lbl' => 'Minutes'],
                                    ['val' => '30', 'lbl' => 'Seconds']
                                ];
                                foreach ($metrics as $metric):
                                ?>
                                    <div class="bg-[#fcfaf2] rounded-xl p-3 flex flex-col items-center justify-center border border-brand-yellow/10 shadow-[0_4px_12px_rgba(175,146,83,0.03)]">
                                        <span class="text-lg md:text-2xl font-black text-gray-800"><?php echo $metric['val']; ?></span>
                                        <span class="text-[9px] md:text-[10px] uppercase tracking-wider text-gray-400 font-bold mt-0.5"><?php echo $metric['lbl']; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="relative min-h-[250px] md:min-h-full md:col-span-5 bg-gray-900 overflow-hidden <?php echo $event['image_right'] ? 'md:order-2' : 'md:order-1'; ?>">
                            <img src="<?php echo htmlspecialchars($event['image']); ?>"
                                alt="<?php echo htmlspecialchars($event['alt']); ?>"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                loading="lazy">

                            <div class="absolute inset-0 bg-black/10 transition-opacity duration-500 group-hover:bg-black/20 pointer-events-none"></div>
                        </div>

                    </div>
                    <br><br>

                <?php endforeach; ?>

            </div>

        </div>
    </section>


    <?php

    $past_event = [
        'badge_text'  => 'Past Events',
        'title'       => 'Annual Convention 2025',
        'video_url'   => '#',
        'cover_image' => 'images/9d5360d8aac98bcdcc05c5d87c8579b6d87df144.jpg',
        'alt'         => 'Two female attendees smiling at the Annual Convention 2025 banquet event'
    ];
    ?>

    <section class=" relative">
        <div class="">

            <div class="flex items-center gap-2 mb-8 pl-2 ms-5 ps-5 pt-5 mt-5">
                <span class="text-lg font-black text-gray-400 tracking-widest uppercase">
                    <?php echo htmlspecialchars($past_event['badge_text']); ?>
                </span>
                <div class="inline-flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M46 25V60H20C20 60 30 35 46 25Z" fill="#e8d47d" />
                        <path d="M54 20V60H75C75 60 70 30 54 20Z" fill="#e8d47d" />
                        <path d="M15 68C15 68 25 85 50 85C75 85 85 68 85 68H15Z" fill="#e8d47d" />
                    </svg>
                </div>
            </div>

            <div class="relative w-full aspect-[16/7] md:aspect-[21/9] overflow-hidden shadow-xl bg-gray-900 group">


                <img src="<?php echo htmlspecialchars($past_event['cover_image']); ?>"
                    alt="<?php echo htmlspecialchars($past_event['alt']); ?>"
                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-102">

                <div class="absolute inset-0 bg-black/40 transition-colors duration-500 group-hover:bg-black/45"></div>

                <a href="<?php echo htmlspecialchars($past_event['video_url']); ?>"
                    class="absolute inset-0 flex items-center justify-center group/btn focus:outline-none z-10"
                    aria-label="Play Event Highlights Video">

                    <div class="relative w-16 h-16 md:w-20 md:h-20 flex items-center justify-center rounded-full border-2 border-dashed border-white/80 bg-black/10 backdrop-blur-[2px] transition-all duration-500 group-hover/btn:scale-110 group-hover/btn:border-brand-yellow group-hover/btn:bg-black/30 shadow-lg">

                        <svg class="w-5 h-5 md:w-6 md:h-6 text-white ml-1 transition-colors duration-300 group-hover/btn:text-brand-yellow"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5V19L19 12L8 5Z" />
                        </svg>
                    </div>
                </a>

                <div class="absolute bottom-6 left-6 md:bottom-10 md:left-10 z-10 pointer-events-none">
                    <div class="bg-white text-gray-900 font-bold text-xs md:text-sm px-6 py-3 rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs shadow-md tracking-tight border border-gray-100">
                        <?php echo htmlspecialchars($past_event['title']); ?>
                    </div>
                </div>


                <div class="absolute inset-0 ring-1 ring-black/10 rounded-[2rem] pointer-events-none"></div>
            </div>

        </div>
    </section>

    <?php include 'inc/footer.php'; ?>

</body>
<script src="dist/js/events.js"></script>

</html>