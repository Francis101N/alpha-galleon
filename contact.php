<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us -Alpha Galleon</title>
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
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('images/fed604f60acb7408374a4a93f8f2eaf23c294116.jpg');">

        <div class="max-w-7xl w-full mx-auto flex items-center justify-start">
            <div class="flex items-center gap-4 text-white z-10 animate-fade-in">

                <h1 class="text-4xl md:text-5xl font-black tracking-tight leading-none">
                    Contact
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

    <main class="w-full min-h-screen flex items-center justify-center py-24 px-6 md:px-24 relative overflow-hidden bg-white">
        <div class="absolute top-20 left-12 w-16 h-16 border border-dashed border-gray-200 rotate-45 pointer-events-none"></div>
        <div class="absolute bottom-16 right-20 w-24 h-24 border border-dashed border-gray-200 rotate-45 pointer-events-none"></div>
        <div class="absolute bottom-1/3 left-1/4 w-12 h-12 border border-dashed border-gray-100 rotate-45 pointer-events-none"></div>

        <div class="max-w-7xl w-full mx-auto grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-8 items-center relative z-10">

            <div class="lg:col-span-5 flex flex-col items-start text-left">
                <h1 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tight mb-2">Get In Touch</h1>
                <h2 class="text-lg md:text-xl font-bold text-gray-400 tracking-wide mb-4">For Questions & Support</h2>
                <div class="w-24 h-[3px] bg-brand-yellow mb-6"></div>
                <p class="text-sm md:text-base text-gray-500 font-light leading-relaxed mb-12">
                    As the global leader in charity ,we feel a responsibilty to unite oue border communities,and to use these moment to become stronger
                </p>

                <div class="flex flex-col gap-8 w-full">
                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 rounded-xl bg-brand-yellow flex items-center justify-center shrink-0 shadow-sm text-gray-900 text-lg">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="flex flex-col text-left">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Visit Us</span>
                            <span class="text-base md:text-lg font-black text-gray-800 leading-snug">1,Tsm Avenue Ikeja, Lagos<br>Nigeria</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 rounded-xl bg-brand-yellow flex items-center justify-center shrink-0 shadow-sm text-gray-900 text-lg">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="flex flex-col text-left">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Call Us</span>
                            <a href="tel:+2348012345678" class="text-base md:text-lg font-black text-gray-800 hover:text-brand-gold transition-colors">+234-80-12345678</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-5">
                        <div class="w-12 h-12 rounded-xl bg-brand-yellow flex items-center justify-center shrink-0 shadow-sm text-gray-900 text-lg">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="flex flex-col text-left">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Mail Us</span>
                            <a href="mailto:Info@alphagalleon.com" class="text-base md:text-lg font-black text-gray-800 hover:text-brand-gold transition-colors">Info@alphagalleon.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 bg-white p-8 sm:p-12 md:p-16 rounded-[2.5rem] shadow-[0_20px_60px_rgba(0,0,0,0.06)] border border-gray-50/50 relative">
                <div class="absolute -bottom-4 -right-4 w-10 h-10 border border-dashed border-gray-200 rotate-45 pointer-events-none hidden sm:block"></div>

                <h3 class="text-2xl font-black text-gray-900 mb-8 tracking-tight text-left">Fill The Form below</h3>

                <form action="proc_contact" method="POST" class="w-full grid grid-cols-1 sm:grid-cols-2 gap-6 text-left">

                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-gray-800 tracking-wide">Name</label>
                        <input type="text" name="client_name" placeholder="Your Name" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/60 text-gray-700 placeholder-gray-400">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-gray-800 tracking-wide">Email</label>
                        <input type="email" name="client_email" placeholder="Your Email" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/60 text-gray-700 placeholder-gray-400">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-gray-800 tracking-wide">Phone</label>
                        <input type="tel" name="client_phone" placeholder="Your Phone" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/60 text-gray-700 placeholder-gray-400">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-xs font-bold text-gray-800 tracking-wide">Subject</label>
                        <input type="text" name="client_subject" placeholder="Your Subject" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/60 text-gray-700 placeholder-gray-400">
                    </div>
                    <div class="flex flex-col gap-2 sm:col-span-2">
                        <label class="text-xs font-bold text-gray-800 tracking-wide">Message</label>
                        <textarea name="client_message" rows="5" placeholder="Type your message" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/60 text-gray-700 placeholder-gray-400 resize-none"></textarea>
                    </div>
                    <div class="sm:col-span-2 pt-2">
                        <button type="submit" class="px-10 py-2.5 bg-black text-white font-bold text-xs uppercase tracking-widest border-2 border-transparent transition-all hover:bg-transparent hover:border-black hover:text-black cursor-pointer focus:outline-none rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm shadow-md">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </main>

    <?php include 'inc/footer.php'; ?>
</body>
<script src="dist/js/contact.js"></script>

</html>