<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media - Alpha Galleon</title>
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

<body>

    <?php include 'inc/header.php'; ?>

    <section class="relative w-full h-[350px] md:h-[400px] flex items-center justify-start px-6 md:px-24 overflow-hidden bg-cover bg-center font-sans"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('images/636941d8f0ff9781ea8621065e33f6e4369b38c5.jpg');">

        <div class="max-w-7xl w-full mx-auto flex items-center justify-start">
            <div class="flex items-center gap-4 text-white z-10 animate-fade-in">

                <h1 class="text-4xl md:text-5xl font-black tracking-tight leading-none">
                    Media
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

    <section class="w-full bg-[#fafbfc] py-16 px-6 md:px-24 font-sans relative overflow-hidden">

        <div class="absolute inset-0 pointer-events-none opacity-25">
            <div class="absolute -left-6 bottom-4 w-16 h-16 border border-dashed border-gray-200 rotate-45"></div>
            <div class="absolute left-32 top-6 w-20 h-20 border border-dashed border-gray-200 rotate-45"></div>
            <div class="absolute right-[-2%] top-1/2 w-24 h-24 border border-dashed border-gray-200 rotate-45"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">

            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-16">
                <h2 class="text-3xl md:text-[40px] font-black text-gray-800 tracking-tight">
                    Photo Gallery
                </h2>
                <div class="max-w-md">
                    <p class="text-sm md:text-base text-gray-600 leading-relaxed font-light tracking-wide">
                        Capture moments from our community outreach and every event moments.
                    </p>
                </div>
            </div>

            <?php

            $gallery_items = [
                [
                    'image'       => 'images/community.jpg',
                    'alt'         => 'Clean water supply community project hand pump distribution',
                    'col_span'    => 'lg:col-span-2',
                    'aspect_ratio' => 'aspect-[4/3] sm:aspect-auto sm:h-[320px]'
                ],
                [
                    'image'       => 'images/5b031d8b8ebef52311a6585f3378008cb7d1bf0a (1).jpg',
                    'alt'         => 'Alpha Galleon group photo of volunteers standing with medals',
                    'col_span'    => 'lg:col-span-1',
                    'aspect_ratio' => 'aspect-[4/5] sm:aspect-auto sm:h-[320px]'
                ],
                [
                    'image'       => 'images/Regional.jpg',
                    'alt'         => 'Golden soccer boot trophy cup and golden ball showcase award table',
                    'col_span'    => 'lg:col-span-1',
                    'aspect_ratio' => 'aspect-[4/5] sm:aspect-auto sm:h-[320px]'
                ],
                [
                    'image'       => 'images/9c71dc812147eb029a6dc92714584c21d0abf383.jpg',
                    'alt'         => 'Public lecture or orientation assembly hall filled with seated attendees',
                    'col_span'    => 'lg:col-span-1',
                    'aspect_ratio' => 'aspect-[3/4]'
                ],
                [
                    'image'       => 'images/27cf720c254201fcb7993028a472fd61faf62fae.jpg',
                    'alt'         => 'Volunteers arranging catering gift package boxes on long banquet tables',
                    'col_span'    => 'lg:col-span-1',
                    'aspect_ratio' => 'aspect-[3/4]'
                ],
                [
                    'image'       => 'images/9d5360d8aac98bcdcc05c5d87c8579b6d87df144.jpg',
                    'alt'         => 'Two happy smiling women seating at tables during the Annual Convention gala event',
                    'col_span'    => 'lg:col-span-2',
                    'aspect_ratio' => 'aspect-[4/3] lg:aspect-auto'
                ]
            ];
            ?>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
                <?php foreach ($gallery_items as $item): ?>

                    <div class="relative rounded-[2rem] overflow-hidden bg-gray-900 shadow-sm group cursor-pointer <?php echo $item['col_span'] . ' ' . $item['aspect_ratio']; ?>">

                        <img src="<?php echo htmlspecialchars($item['image']); ?>"
                            alt="<?php echo htmlspecialchars($item['alt']); ?>"
                            class="w-full h-full object-cover opacity-90 transition-all duration-700 ease-out transform group-hover:scale-105 group-hover:opacity-80"
                            loading="lazy">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-black/20 pointer-events-none"></div>

                        <div class="absolute top-4 right-4 z-20 flex items-center justify-center w-8 h-8 rounded-full border border-dashed border-white/80 bg-black/20 backdrop-blur-xs shadow-sm transition-transform duration-300 group-hover:scale-110">
                            <svg class="w-2.5 h-2.5 text-white ml-0.5 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>

                        <div class="absolute inset-0 border border-black/5 rounded-[2rem] pointer-events-none"></div>
                    </div>

                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <?php include 'inc/footer.php'; ?>
</body>
<script src="dist/js/media.js"></script>

</html>