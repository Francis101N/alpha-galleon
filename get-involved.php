<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Galleon - Get Involved</title>
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
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('images/4a280bfc0c3529fc7b56df441fe2d35a2203b09e.jpg');">


        <div class="max-w-7xl w-full mx-auto flex items-center justify-start">
            <div class="flex items-center gap-4 text-white z-10 animate-fade-in">

                <h1 class="text-4xl md:text-5xl font-black tracking-tight leading-none">
                    Get Involved
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

    <br><br><br>

    <section id="volunteer-form-anchor" class="w-full bg-white grid grid-cols-1 lg:grid-cols-12 overflow-hidden border-t border-gray-100">
        <div class="relative min-h-[300px] lg:min-h-full lg:col-span-5 bg-gray-900">
            <img src="images/636941d8f0ff9781ea8621065e33f6e4369b38c5.jpg" alt="Scholastic group mentoring validation context" class="absolute inset-0 w-full h-full object-cover">
        </div>

        <div class="p-8 sm:p-12 md:p-16 lg:col-span-7 flex flex-col justify-center items-start text-left">
            <h2 class="text-2xl md:text-3xl font-black text-gray-900 tracking-tight mb-2">Become a Volunteer Today....</h2>
            <div class="w-16 h-[2px] bg-brand-yellow mb-8"></div>

            <form action="processors/volunteer-submit.php" method="POST" class="w-full grid grid-cols-1 sm:grid-cols-2 gap-5 text-left">
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-gray-600 tracking-wide uppercase">First Name</label>
                    <input type="text" name="first_name" placeholder="First name" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/50">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-gray-600 tracking-wide uppercase">Last Name</label>
                    <input type="text" name="last_name" placeholder="Last name" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/50">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-gray-600 tracking-wide uppercase">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/50">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-gray-600 tracking-wide uppercase">Phone</label>
                    <input type="tel" name="phone" placeholder="Enter your num" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/50">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-gray-600 tracking-wide uppercase">Address</label>
                    <input type="text" name="address" placeholder="Enter your address" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/50">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-gray-600 tracking-wide uppercase">Program</label>
                    <select name="program_target" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-400 focus:outline-none focus:ring-1 focus:ring-brand-yellow/50 appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23a0aec0%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-[length:0.65rem_auto] bg-[right_1.25rem_center] bg-no-repeat">
                        <option value="" disabled selected>Select program</option>
                        <option value="outreach">Community Outreach Programs</option>
                        <option value="education">Educational Support Initiatives</option>
                        <option value="medical">Free Health Screening Operations</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-gray-600 tracking-wide uppercase">State</label>
                    <input type="text" name="state" placeholder="Select state" required class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/50">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-gray-600 tracking-wide uppercase">Donation</label>
                    <select name="donation_tier" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm text-gray-400 focus:outline-none focus:ring-1 focus:ring-brand-yellow/50 appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23a0aec0%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-[length:0.65rem_auto] bg-[right_1.25rem_center] bg-no-repeat">
                        <option value="" disabled selected>Select amount</option>
                        <option value="time">Volunteer Time Only</option>
                        <option value="silver">Sponsor Resources ($50 - $200)</option>
                        <option value="gold">Corporate Chapter Alliance ($500+)</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1.5 sm:col-span-2">
                    <label class="text-xs font-bold text-gray-600 tracking-wide uppercase">Additional Note</label>
                    <textarea name="message" rows="4" placeholder="Type your message" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-1 focus:ring-brand-yellow/50 resize-none"></textarea>
                </div>

                <br>
                <div class="sm:col-span-2 pt-2">
                    <button type="submit" class="px-10 py-3 bg-black text-white font-bold text-xs uppercase tracking-widest clip-asymmetric-lg shadow-md transition-colors hover:bg-gray-950 cursor-pointer focus:outline-none rounded-tl-2xl rounded-br-2xl rounded-tr-sm rounded-bl-sm">
                        Apply Now
                    </button>
                </div>
            </form>
        </div>
    </section>

    <?php include 'inc/footer.php'; ?>

</body>
<script src="dist/js/get-involved.js"></script>
</html>