<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Alpha Galleon</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome for Icons -->
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

<body class="bg-white">

    <?php include 'inc/header.php'; ?>

    <section class="relative w-full h-[350px] md:h-[400px] flex items-center justify-start px-6 md:px-24 overflow-hidden bg-cover bg-center font-sans"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('images/bec0ecf7808e2b0226e92bcc5fde420af40b1e9c (1).jpg');">

        <div class="max-w-7xl w-full mx-auto flex items-center justify-start">
            <div class="flex items-center gap-4 text-white z-10 animate-fade-in">

                <h1 class="text-4xl md:text-5xl font-black tracking-tight leading-none">
                    Projects
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

    $galleon_programs = [
        [
            'category'    => 'Community Outreach Programs',
            'sub_heading' => 'Organized initiatives that promote social impact through charity, volunteer work, and support for local communities.',
            'date'        => '19/03/2026',
            'location'    => 'National Stadium Surulere, Lagos',
            'title'       => 'Clean Water And Fresh Food',
            'description' => 'Join us for a special outreach event dedicated to delivering life\'s most basic necessities—clean water and nutritious food—to those who need them most. At Alpha Galleon, we believe that no one should go hungry or lack access to safe drinking water.',
            'images'      => [
                ['src' => 'images/community.jpg', 'alt' => 'Water filtration community hand-washing distribution'],
                ['src' => 'images/community2.jpg', 'alt' => 'Nutritious food supplies delivery packs package'],
                ['src' => 'images/community3.jpg', 'alt' => 'Alpha Galleon volunteers serving local communities']
            ]
        ],
        [
            'category'    => 'Regional Meetings',
            'sub_heading' => 'Regular meetings that bring members within each region together to discuss activities, updates, and collaborative plans.',
            'date'        => '19/03/2026',
            'location'    => 'National Stadium Surulere, Lagos',
            'title'       => 'Eastern Regional Assembly',
            'description' => 'Members from the eastern region come together to share ideas, address key matters, and reinforce unity and organizational growth.',
            'images'      => [
                ['src' => 'images/9c71dc812147eb029a6dc92714584c21d0abf383.jpg', 'alt' => 'Regional assembly conference hall presentation'],
                ['src' => 'images/Regional.jpg', 'alt' => 'Delegates collaborating over strategic operational briefs'],
                ['src' => 'images/Regional2.jpg', 'alt' => 'Eastern region members executive panel portrait assembly']
            ]
        ],
        [
            'category'    => 'Annual Conventions',
            'sub_heading' => 'A flagship gathering where members from different chapters come together to review progress, share ideas, and celebrate achievements.',
            'date'        => '19/03/2026',
            'location'    => 'National Stadium Surulere, Lagos',
            'title'       => 'Leadership & Strategy Summit',
            'description' => 'A key session dedicated to leadership development, strategic planning, and discussions that shape the future direction of the organization. Members engage in meaningful conversations, presentations, and collaborative planning.',
            'images'      => [
                ['src' => 'images/9d5360d8aac98bcdcc05c5d87c8579b6d87df144.jpg', 'alt' => 'Annual members celebration summit banquet'],
                ['src' => 'images/convention2.jpg', 'alt' => 'Keynote address execution presentation main stage'],
                ['src' => 'images/convention3.jpg', 'alt' => 'Corporate boardroom leadership framework session group']
            ]
        ]
    ];
    ?>

    <section class="w-full bg-[#fafbfc] py-24 px-6 md:px-24 font-sans relative overflow-hidden">

        <div class="absolute inset-0 pointer-events-none opacity-20">
            <div class="absolute top-[15%] left-[5%] w-24 h-24 border border-dashed border-gray-300 rotate-45"></div>
            <div class="absolute top-[45%] right-[3%] w-32 h-32 border border-dashed border-gray-300 rotate-45"></div>
            <div class="absolute bottom-[10%] left-[8%] w-20 h-20 border border-dashed border-gray-300 rotate-45"></div>
        </div>

        <div class="max-w-7xl mx-auto flex flex-col gap-24 relative z-10">
            <?php foreach ($galleon_programs as $index => $program):
                $unique_id = "program_gallery_" . $index;
            ?>
                <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16" id="<?php echo $unique_id; ?>">

                    <div class="w-full lg:w-1/2 flex flex-col items-start text-left">

                        <h2 class="text-2xl md:text-3xl font-black text-gray-700 tracking-tight mb-2">
                            <?php echo htmlspecialchars($program['category']); ?>
                        </h2>

                        <p class="text-sm text-gray-400 font-light max-w-xl leading-relaxed mb-6">
                            <?php echo htmlspecialchars($program['sub_heading']); ?>
                        </p>

                        <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mb-6 text-xs md:text-sm font-semibold text-gray-500">
                            <div class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar-days text-brand-yellow text-base"></i>
                                <span><?php echo htmlspecialchars($program['date']); ?></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-location-dot text-brand-yellow text-base"></i>
                                <span><?php echo htmlspecialchars($program['location']); ?></span>
                            </div>
                        </div>

                        <h3 class="text-lg md:text-xl font-bold text-gray-900 tracking-tight mb-4 relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-12 after:h-[3px] after:bg-brand-yellow">
                            <?php echo htmlspecialchars($program['title']); ?>
                        </h3>

                        <p class="text-sm md:text-base text-gray-600 font-normal leading-relaxed tracking-wide">
                            <?php echo htmlspecialchars($program['description']); ?>
                        </p>
                    </div>

                    <div class="w-full lg:w-1/2 flex flex-col gap-4">
                        <div class="relative w-full aspect-[16/10] bg-gray-100 rounded-[2rem] overflow-hidden shadow-md group">

                            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 to-gray-800 flex items-center justify-center">
                                <i class="fa-solid fa-image text-4xl text-white/20 transition-transform duration-500 group-hover:scale-110"></i>
                            </div>

                            <?php foreach ($program['images'] as $img_idx => $image_data): ?>
                                <img src="<?php echo htmlspecialchars($image_data['src']); ?>"
                                    alt="<?php echo htmlspecialchars($image_data['alt']); ?>"
                                    data-slide-index="<?php echo $img_idx; ?>"
                                    class="gallery-img absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-in-out transform <?php echo $img_idx === 0 ? 'opacity-100 scale-100 pointer-events-auto' : 'opacity-0 scale-95 pointer-events-none'; ?> group-hover:scale-105"
                                    loading="lazy">
                            <?php endforeach; ?>

                            <div class="absolute inset-0 ring-1 ring-black/10 rounded-[2rem] pointer-events-none"></div>
                        </div>

                        <div class="flex items-center justify-start gap-2 pl-4">
                            <?php foreach ($program['images'] as $img_idx => $image_data):
                                // First item starts fully active with the rose accent background
                                $dot_status_class = ($img_idx === 0) ? 'bg-rose-500 w-5' : 'bg-amber-100 w-2.5';
                            ?>
                                <span class="gallery-dot h-2.5 rounded-full cursor-pointer transition-all duration-300 <?php echo $dot_status_class; ?>"
                                    data-target-idx="<?php echo $img_idx; ?>"
                                    onclick="switchGallerySlide('<?php echo $unique_id; ?>', <?php echo $img_idx; ?>)">
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
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

                            <a href="#" class="inline-block px-8 py-2.5 bg-[#e8d47d] text-gray-900 font-bold text-sm tracking-wide border-2 border-transparent transition-all hover:bg-transparent hover:border-[#e8d47d] hover:text-black rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-xs">
                                Read more
                            </a>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <?php include 'inc/footer.php'; ?>

</body>
<script src="dist/js/project.js"></script>

</html>