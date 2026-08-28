<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Warp & Weft Tex'; ?></title>
    
    <!-- Tailwind CSS, Alpine.js & FontAwesome CDNs -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Site Custom Styles & JS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="assets/js/main.js"></script>
</head>
<body class="bg-[#07090e] text-slate-200 font-sans antialiased">

    <!-- Top Mini Bar -->
    <div class="bg-[#030508] border-b border-slate-800/80 text-xs text-slate-400 py-2.5">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-6">
                <span><i class="fa-solid fa-envelope text-sky-400 mr-2"></i>info@warpnwefttex.com</span>
                <span class="hidden md:inline"><i class="fa-solid fa-location-dot text-sky-400 mr-2"></i>Dhaka, Bangladesh</span>
            </div>
            <div class="flex items-center gap-4">
                <span><i class="fa-solid fa-phone text-sky-400 mr-1.5"></i>+880 1700-000000</span>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="site-header sticky top-0 z-50 bg-[#07090e]/90 backdrop-blur-md border-b border-slate-800/60">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center py-4 relative">
            
            <!-- Logo -->
            <a href="index.php" class="text-2xl font-black tracking-tight text-white">
                WARP & WEFT <span class="text-sky-400">TEX</span>
            </a>

            <!-- Mobile Hamburger Toggle Icon -->
            <button class="mobile-toggle md:hidden text-2xl text-slate-200 focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>

            <!-- Navigation Menu -->
            <nav class="nav-menu">
                <ul class="flex flex-col md:flex-row gap-6 md:gap-8 md:items-center">
                    <li><a href="index.php" class="<?php echo ($current_page == 'home') ? 'text-sky-400 font-bold' : 'text-slate-300 hover:text-sky-400'; ?> transition-colors uppercase text-xs tracking-wider font-semibold">Home</a></li>
                    <li><a href="about.php" class="<?php echo ($current_page == 'about') ? 'text-sky-400 font-bold' : 'text-slate-300 hover:text-sky-400'; ?> transition-colors uppercase text-xs tracking-wider font-semibold">About Us</a></li>
                    <li><a href="products.php" class="<?php echo ($current_page == 'products') ? 'text-sky-400 font-bold' : 'text-slate-300 hover:text-sky-400'; ?> transition-colors uppercase text-xs tracking-wider font-semibold">Products</a></li>
                    <li><a href="compliance.php" class="<?php echo ($current_page == 'compliance') ? 'text-sky-400 font-bold' : 'text-slate-300 hover:text-sky-400'; ?> transition-colors uppercase text-xs tracking-wider font-semibold">Compliance</a></li>
                    <li><a href="contact.php" class="bg-gradient-to-r from-sky-500 to-indigo-600 text-white px-5 py-2.5 rounded-lg font-semibold text-xs uppercase tracking-wider shadow-lg shadow-sky-500/20 hover:shadow-sky-500/40 inline-block text-center">Contact Us</a></li>
                </ul>
            </nav>

        </div>
    </header>