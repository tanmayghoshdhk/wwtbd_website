<?php
$page_title = "About Us | Warp & Weft Tex";
$current_page = "about";
include('includes/header.php');
?>

<!-- Tailwind CSS & FontAwesome CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/about.css">

<main class="relative bg-[#07090e] text-slate-200 overflow-hidden min-h-screen">

    <!-- Ambient Glowing Background Spheres -->
    <div class="glow-bg w-[500px] h-[500px] bg-sky-500 top-10 -left-40"></div>
    <div class="glow-bg w-[400px] h-[400px] bg-indigo-500 bottom-20 -right-20"></div>

    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 border-b border-slate-800/60">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full text-xs font-semibold uppercase tracking-widest bg-sky-500/10 text-sky-400 border border-sky-500/20 mb-6">
                <span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span> Corporate Profile
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-white mb-6">
                Shaping the Future of <span class="gradient-text">Apparel Sourcing</span>
            </h1>
            <p class="max-w-2xl mx-auto text-slate-400 text-lg leading-relaxed">
                Empowering global clothing brands through sustainable, ethical, and precision-driven supply chain management from Bangladesh.
            </p>
        </div>
    </section>

    <!-- Owner & Main Narrative Section -->
    <section class="py-24 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left: Interactive Owner Profile Card (4 Columns) -->
                <div class="lg:col-span-5" x-data="{ hovered: false }">
                    <div 
                        @mouseenter="hovered = true" 
                        @mouseleave="hovered = false"
                        class="glass-card glass-card-hover rounded-2xl p-4 relative group"
                    >
                        <div class="img-zoom-container rounded-xl overflow-hidden aspect-[4/5] relative">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=1000&q=80" 
                                 alt="Managing Director" 
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#07090e] via-transparent to-transparent opacity-90"></div>
                            
                            <!-- Dynamic Floating Tag -->
                            <div class="absolute top-4 right-4 bg-slate-900/80 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/10 text-xs font-medium text-sky-400">
                                <i class="fa-solid fa-award mr-1"></i> Industry Leader
                            </div>

                            <!-- Name Overlay inside Card -->
                            <div class="absolute bottom-6 left-6 right-6">
                                <h3 class="text-2xl font-bold text-white mb-1">Md. Saiful Islam</h3>
                                <p class="text-sky-400 font-semibold text-sm tracking-wide uppercase">Managing Director & Founder</p>
                            </div>
                        </div>

                        <!-- Quote Section -->
                        <div class="p-6 text-center">
                            <p class="text-slate-300 italic text-sm leading-relaxed">
                                "Our commitment is centered on delivering uncompromised apparel quality, operational transparency, and environmental sustainability."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right: High-End Interactive Article Content (7 Columns) -->
                <div class="lg:col-span-7 space-y-8">
                    <div>
                        <span class="text-sky-400 font-bold uppercase tracking-widest text-xs mb-3 block">WHO WE ARE</span>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-white leading-tight">
                            Connecting Global Visionaries with Excellence in Manufacturing
                        </h2>
                    </div>

                    <p class="text-slate-300 text-lg leading-relaxed">
                        Warp & Weft Tex operates as an enterprise-level apparel buying house and strategic supply chain facilitator in Bangladesh. We bridge international high-fashion brands with top-tier, compliant production facilities.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
                        <!-- Dynamic Feature Cards -->
                        <div class="glass-card rounded-xl p-5 border border-white/5 hover:border-sky-500/30 transition-all">
                            <div class="w-10 h-10 rounded-lg bg-sky-500/10 flex items-center justify-center text-sky-400 mb-4 text-xl">
                                <i class="fa-solid fa-[#000]"></i><i class="fa-solid fa-microchip"></i>
                            </div>
                            <h4 class="text-white font-semibold text-lg mb-2">Modern Execution</h4>
                            <p class="text-slate-400 text-sm">Advanced tech integration for tracking sample development and bulk timelines.</p>
                        </div>

                        <div class="glass-card rounded-xl p-5 border border-white/5 hover:border-sky-500/30 transition-all">
                            <div class="w-10 h-10 rounded-lg bg-indigo-500/10 flex items-center justify-center text-indigo-400 mb-4 text-xl">
                                <i class="fa-solid fa-shield-check"></i>
                            </div>
                            <h4 class="text-white font-semibold text-lg mb-2">AQL Standard Quality</h4>
                            <p class="text-slate-400 text-sm">On-site quality assurance teams ensuring zero-defect exports across all orders.</p>
                        </div>
                    </div>

                    <!-- Interactive Accordion / Value Pillars -->
                    <div x-data="{ activeTab: 1 }" class="space-y-3 pt-4">
                        <div class="glass-card rounded-xl overflow-hidden border border-white/5">
                            <button @click="activeTab = activeTab === 1 ? 0 : 1" class="w-full px-6 py-4 text-left font-semibold text-white flex justify-between items-center">
                                <span><i class="fa-solid fa-leaf text-sky-400 mr-2"></i> Sustainability & Compliance</span>
                                <i class="fa-solid" :class="activeTab === 1 ? 'fa-chevron-up text-sky-400' : 'fa-chevron-down text-slate-500'"></i>
                            </button>
                            <div x-show="activeTab === 1" x-collapse class="px-6 pb-4 text-slate-400 text-sm leading-relaxed">
                                Partnered exclusively with WRAP, BSCI, Sedex, and Oeko-Tex certified units adhering to fair wages and zero hazardous chemical discharge.
                            </div>
                        </div>

                        <div class="glass-card rounded-xl overflow-hidden border border-white/5">
                            <button @click="activeTab = activeTab === 2 ? 0 : 2" class="w-full px-6 py-4 text-left font-semibold text-white flex justify-between items-center">
                                <span><i class="fa-solid fa-globe text-sky-400 mr-2"></i> Global Logistics Network</span>
                                <i class="fa-solid" :class="activeTab === 2 ? 'fa-chevron-up text-sky-400' : 'fa-chevron-down text-slate-500'"></i>
                            </button>
                            <div x-show="activeTab === 2" x-collapse class="px-6 pb-4 text-slate-400 text-sm leading-relaxed">
                                Flexible shipping solutions including FOB, CIF, and C&F arrangements with optimized customs and freight support.
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="contact.php" class="inline-flex items-center gap-3 bg-gradient-to-r from-sky-500 to-indigo-600 text-white font-semibold px-8 py-4 rounded-xl shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-[1.02] transition-all">
                            <span>Partner With Us</span>
                            <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
include('includes/footer.php');
?>