<?php
$page_title = "Home | Warp & Weft Tex - Global Apparel Solutions";
$current_page = "home";
include('includes/header.php');
?>

<main class="relative bg-[#07090e] text-slate-200 overflow-hidden">

    <!-- Ambient Glowing Backdrops -->
    <div class="glow-bg w-[500px] h-[500px] bg-sky-500 top-10 -left-40"></div>
    <div class="glow-bg w-[400px] h-[400px] bg-indigo-500 top-[40%] -right-20"></div>

    <!-- Hero Interactive Auto-Carousel Section -->
    <section class="py-12 relative" x-data="{ activeSlide: 1, totalSlides: 4, autoPlay() { setInterval(() => { this.activeSlide = this.activeSlide === this.totalSlides ? 1 : this.activeSlide + 1 }, 5000) } }" x-init="autoPlay()">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="glass-card rounded-3xl overflow-hidden relative min-h-[500px] flex items-center p-8 md:p-16 border border-white/10 shadow-2xl">
                
                <!-- Background Images with Fade Effect -->
                <div class="absolute inset-0 z-0">
                    <img x-show="activeSlide === 1" x-transition.opacity.duration.1000ms src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1400&q=80" class="w-full h-full object-cover filter brightness-[0.35]">
                    <img x-show="activeSlide === 2" x-transition.opacity.duration.1000ms src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1400&q=80" class="w-full h-full object-cover filter brightness-[0.35]">
                    <img x-show="activeSlide === 3" x-transition.opacity.duration.1000ms src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&fit=crop&w=1400&q=80" class="w-full h-full object-cover filter brightness-[0.35]">
                    <img x-show="activeSlide === 4" x-transition.opacity.duration.1000ms src="https://images.unsplash.com/photo-1582552938357-32b906df40cb?auto=format&fit=crop&w=1400&q=80" class="w-full h-full object-cover filter brightness-[0.35]">
                </div>

                <!-- Slide Content Overlay -->
                <div class="relative z-10 max-w-2xl space-y-6">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest bg-sky-500/20 text-sky-400 border border-sky-500/30">
                        <span class="w-2 h-2 rounded-full bg-sky-400 animate-ping"></span> Global Buying House
                    </span>

                    <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
                        Innovative <span class="gradient-text">Apparel Sourcing</span> Solutions
                    </h1>

                    <p class="text-slate-300 text-lg leading-relaxed">
                        Precision manufacturing, compliant factory network, and seamless global supply chain management from Bangladesh.
                    </p>

                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="products.php" class="bg-gradient-to-r from-sky-500 to-indigo-600 text-white font-semibold px-8 py-3.5 rounded-xl shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all inline-flex items-center gap-2">
                            <span>Explore Products</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                        <a href="contact.php" class="glass-card hover:bg-white/10 text-white font-semibold px-8 py-3.5 rounded-xl transition-all">
                            Request Quote
                        </a>
                    </div>
                </div>

                <!-- Carousel Controls / Indicators -->
                <div class="absolute bottom-6 right-8 z-10 flex gap-2">
                    <template x-for="i in totalSlides">
                        <button @click="activeSlide = i" class="w-3 h-3 rounded-full transition-all" :class="activeSlide === i ? 'bg-sky-400 w-8' : 'bg-white/30'"></button>
                    </template>
                </div>

            </div>

        </div>
    </section>

    <!-- Key Numbers Counter -->
    <section class="py-12 border-y border-slate-800/60 bg-[#030508]/50">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <h3 class="text-4xl font-extrabold text-white">2017</h3>
                <p class="text-sky-400 text-xs font-semibold uppercase tracking-wider mt-1">Established</p>
            </div>
            <div>
                <h3 class="text-4xl font-extrabold text-white">100%</h3>
                <p class="text-sky-400 text-xs font-semibold uppercase tracking-wider mt-1">Compliant Factories</p>
            </div>
            <div>
                <h3 class="text-4xl font-extrabold text-white">3,000+</h3>
                <p class="text-sky-400 text-xs font-semibold uppercase tracking-wider mt-1">MOQ / Style</p>
            </div>
            <div>
                <h3 class="text-4xl font-extrabold text-white">Global</h3>
                <p class="text-sky-400 text-xs font-semibold uppercase tracking-wider mt-1">Export Support</p>
            </div>
        </div>
    </section>

    <!-- Core Highlights Grid -->
    <section class="py-20 relative">
        <div class="max-w-7xl mx-auto px-6 space-y-12">
            
            <div class="text-center max-w-2xl mx-auto">
                <span class="text-sky-400 font-bold uppercase tracking-widest text-xs">WHY CHOOSE US</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mt-2">Engineered for Excellence</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Card 1 -->
                <div class="glass-card glass-card-hover rounded-2xl p-8 border border-white/5 relative group">
                    <div class="w-14 h-14 rounded-2xl bg-sky-500/10 flex items-center justify-center text-sky-400 text-2xl mb-6">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Versatile Products</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Tees, Polos, Denim, Jackets, Workwear, Sweaters, and Sportswear for Men, Women & Kids.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="glass-card glass-card-hover rounded-2xl p-8 border border-white/5 relative group">
                    <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 flex items-center justify-center text-indigo-400 text-2xl mb-6">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Certified Safety</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Partnered exclusively with WRAP, BSCI, Oeko-Tex, and Sedex compliant factories.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="glass-card glass-card-hover rounded-2xl p-8 border border-white/5 relative group">
                    <div class="w-14 h-14 rounded-2xl bg-purple-500/10 flex items-center justify-center text-purple-400 text-2xl mb-6">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Global Export</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Flexible shipping terms (FOB, C&F) with low minimum MOQs starting from 3,000 pcs per style.
                    </p>
                </div>

            </div>

        </div>
    </section>

</main>

<?php
include('includes/footer.php');
?>