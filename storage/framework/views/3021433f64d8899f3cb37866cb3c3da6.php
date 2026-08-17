

<?php $__env->startSection('content'); ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700;800&family=Inter:wght=400;500;600&family=JetBrains+Mono:wght=500&display=swap');

    .al-font-display {
        font-family: 'Space Grotesk', sans-serif;
    }

    .al-font-body {
        font-family: 'Inter', sans-serif;
    }

    .al-font-mono {
        font-family: 'JetBrains Mono', monospace;
    }

    .al-navbar {
        background: rgba(255, 255, 255, 0.55);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        transition: background 0.4s ease, box-shadow 0.4s ease;
    }

    .al-navbar:hover {
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 8px 30px -12px rgba(11, 37, 69, 0.15);
    }

    .al-grid-bg {
        background-image: linear-gradient(rgba(11, 37, 69, 0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(11, 37, 69, 0.05) 1px, transparent 1px);
        background-size: 56px 56px;
        mask-image: radial-gradient(ellipse 80% 60% at 50% 20%, black 40%, transparent 100%);
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-card {
        animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .delay-card-2 {
        animation-delay: 0.15s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .delay-card-3 {
        animation-delay: 0.3s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .delay-card-4 {
        animation-delay: 0.45s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .al-counter {
        font-variant-numeric: tabular-nums;
    }

    .al-dot-line {
        background-image: radial-gradient(rgba(11, 37, 69, 0.18) 1.5px, transparent 1.5px);
        background-size: 12px 12px;
    }

    .al-value-card:hover .al-value-icon {
        transform: translateY(-4px) rotate(-4deg);
    }

    .al-value-icon {
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
</style>

<div class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF] al-font-body text-[#0B2545]">

     Navbar 
    <nav
        class="al-navbar sticky top-4 z-50 max-w-6xl mx-auto flex items-center justify-between px-6 md:px-8 py-4 rounded-full mt-4 border border-white/60">
        <a href="<?php echo e(route('home')); ?>"
            class="al-font-display text-2xl font-bold tracking-tight text-[#0B2545] cursor-pointer hover:opacity-70 transition-opacity duration-300">
            AL<span class="text-[#FF9F45]">.</span>TECHNOLOGY
        </a>

        <div class="hidden md:flex items-center gap-9 al-font-mono text-xs tracking-widest text-[#0B2545]/60">
            <div class="relative group">
                <a href="<?php echo e(route('kurumsal')); ?>"
                    class="flex items-center gap-1 hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300 py-3 cursor-pointer">
                    KURUMSAL
                    <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 pt-2 w-56 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 ease-out z-50">
                    <div
                        class="bg-white/95 backdrop-blur-md border border-[#0B2545]/10 rounded-2xl shadow-xl shadow-[#0B2545]/10 p-3 flex flex-col gap-2">
                        <a href="<?php echo e(route('kurumsal.hakkimizda')); ?>"
                            class="al-font-body text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Hakkımızda</a>
                        <a href="<?php echo e(route('kurumsal.vizyon-misyon')); ?>"
                            class="al-font-body text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Vizyon
                            - Misyon</a>
                        <a href="<?php echo e(route('kurumsal.haberler')); ?>"
                            class="al-font-body text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Haberler</a>
                        <a href="<?php echo e(route('kurumsal.belgeler')); ?>"
                            class="al-font-body text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Belgeler</a>
                    </div>
                </div>
            </div>
            <a href="<?php echo e(route('referanslar')); ?>"
                class="hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300">REFERANSLAR</a>
            <a href="<?php echo e(route('urunler')); ?>"
                class="hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300">ÜRÜNLER</a>
            <a href="<?php echo e(route('magaza')); ?>"
                class="hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300">MAĞAZA</a>
        </div>

        <button type="button" onclick="Livewire.dispatch('openQuoteModal')"
            class="al-font-display bg-[#FF9F45] hover:bg-[#ffb066] hover:opacity-90 hover:scale-[1.03] transition-all duration-300 text-[#0A1830] px-6 py-2.5 rounded-full font-bold text-sm tracking-wide">
            FİYAT TEKLİFİ AL
        </button>
    </nav>

     Hero 
    <div class="relative overflow-hidden py-20 px-6">
        <div class="absolute inset-0 al-grid-bg pointer-events-none"></div>

        <div class="max-w-5xl mx-auto relative z-10">

            <div class="flex justify-center mb-6">
                <span
                    class="al-font-mono text-xs tracking-widest text-[#2F6FED] font-bold border border-[#2F6FED]/25 bg-[#2F6FED]/5 rounded-full px-4 py-1.5">
                    VİZYON &amp; MİSYON
                </span>
            </div>

            <h1
                class="al-font-display text-5xl md:text-6xl font-extrabold mb-6 text-center tracking-tight text-[#0B2545]">
                Pusulamız: <span class="text-[#2F6FED]">Gelecek.</span>
            </h1>

            <p class="al-font-body text-center text-[#0B2545]/60 text-lg max-w-2xl mx-auto mb-16">
                Bugünün mühendisliğiyle yarının altyapısını kuruyoruz. Nereden geldiğimiz, nereye gittiğimiz ve bu yolda
                bizi neyin yönlendirdiği burada.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
                 Vizyon Card 
                <div
                    class="animate-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-8 md:p-12 shadow-xl shadow-[#0B2545]/5 flex flex-col justify-between group hover:scale-[1.02] hover:border-[#2F6FED]/30 hover:shadow-2xl hover:shadow-[#2F6FED]/5 transition-all duration-500">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <span class="al-font-mono text-xs text-[#FF9F45] tracking-widest font-bold">UFKUMUZ</span>
                            <span class="w-2 h-2 rounded-full bg-[#FF9F45]"></span>
                        </div>
                        <h2 class="al-font-display text-4xl font-extrabold mb-6 text-[#0B2545]">Vizyon</h2>
                        <p class="text-[#0B2545]/70 leading-relaxed text-lg">
                            Yapay zeka, otonom bulut sistemleri ve sürdürülebilir teknoloji mimarilerinde küresel
                            ölçekte standartları belirleyen, Türkiye'den dünyaya yüksek teknoloji ihraç eden en inovatif
                            ve güvenilir ekosistem öncüsü olmak.
                        </p>
                    </div>
                    <div class="h-1 w-12 bg-[#FF9F45] group-hover:w-full transition-all duration-500 rounded-full mt-8">
                    </div>
                </div>

                 Misyon Card 
                <div
                    class="animate-card delay-card-2 bg-[#0B2545] text-white rounded-3xl p-8 md:p-12 shadow-xl flex flex-col justify-between group hover:scale-[1.02] hover:shadow-2xl hover:shadow-[#0B2545]/20 transition-all duration-500 relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-tr from-[#2F6FED]/10 to-transparent pointer-events-none">
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <span class="al-font-mono text-xs text-[#FF9F45] tracking-widest font-bold">GÖREVİMİZ</span>
                            <span class="w-2 h-2 rounded-full bg-[#2F6FED]"></span>
                        </div>
                        <h2 class="al-font-display text-4xl font-extrabold mb-6">Misyon</h2>
                        <p class="text-blue-100/70 leading-relaxed text-lg">
                            İş ortaklarımızın dijital dönüşüm süreçlerini, yüksek mühendislik disiplini ve yenilikçi
                            yaklaşımlarla yalınlaştırmak. Karmaşık teknolojik altyapıları, işletmeler için maksimum hız,
                            minimum maliyet ve kusursuz güvenlikle çalışan sistemlere dönüştürmek.
                        </p>
                    </div>
                    <div
                        class="h-1 w-12 bg-[#2F6FED] group-hover:w-full transition-all duration-500 rounded-full mt-8 relative z-10">
                    </div>
                </div>
            </div>
        </div>
    </div>

     Stats strip 
    <div class="px-6 pb-20">
        <div class="max-w-5xl mx-auto">
            <div
                class="bg-[#0B2545] rounded-3xl px-8 md:px-12 py-10 grid grid-cols-2 md:grid-cols-4 gap-8 shadow-xl shadow-[#0B2545]/10">
                <div class="text-center md:text-left">
                    <div class="al-font-display al-counter text-4xl md:text-5xl font-extrabold text-white">%99.9</div>
                    <div class="al-font-mono text-[11px] tracking-widest text-blue-100/50 mt-2">SİSTEM ÇALIŞMA SÜRESİ
                    </div>
                </div>
                <div class="text-center md:text-left">
                    <div class="al-font-display al-counter text-4xl md:text-5xl font-extrabold text-white">7/24</div>
                    <div class="al-font-mono text-[11px] tracking-widest text-blue-100/50 mt-2">KESİNTİSİZ İZLEME</div>
                </div>
                <div class="text-center md:text-left">
                    <div class="al-font-display al-counter text-4xl md:text-5xl font-extrabold text-white">50+</div>
                    <div class="al-font-mono text-[11px] tracking-widest text-blue-100/50 mt-2">TAMAMLANAN PROJE</div>
                </div>
                <div class="text-center md:text-left">
                    <div class="al-font-display al-counter text-4xl md:text-5xl font-extrabold text-white">%100</div>
                    <div class="al-font-mono text-[11px] tracking-widest text-blue-100/50 mt-2">YERLİ MÜHENDİSLİK</div>
                </div>
            </div>
        </div>
    </div>

     Değerlerimiz 
    <div class="px-6 pb-20">
        <div class="max-w-5xl mx-auto">
            <div class="flex items-end justify-between mb-10 flex-wrap gap-4">
                <div>
                    <span class="al-font-mono text-xs text-[#2F6FED] tracking-widest font-bold">NEYE İNANIYORUZ</span>
                    <h2 class="al-font-display text-3xl md:text-4xl font-extrabold text-[#0B2545] mt-2">Değerlerimiz
                    </h2>
                </div>
                <p class="al-font-body text-[#0B2545]/50 max-w-sm text-sm leading-relaxed">
                    Her kod satırında, her sistem tasarımında bizi bir arada tutan dört ilke.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div
                    class="al-value-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-8 hover:border-[#2F6FED]/30 hover:bg-white/90 transition-all duration-500">
                    <div
                        class="al-value-icon w-11 h-11 rounded-2xl bg-[#2F6FED]/10 flex items-center justify-center mb-5">
                        <svg class="w-5 h-5 text-[#2F6FED]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="al-font-display text-xl font-bold text-[#0B2545] mb-2">Mühendislik Disiplini</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">Kısayol yok. Her sistemi ölçeklenebilir, test
                        edilebilir ve sürdürülebilir olacak şekilde inşa ediyoruz.</p>
                </div>

                <div
                    class="al-value-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-8 hover:border-[#2F6FED]/30 hover:bg-white/90 transition-all duration-500">
                    <div
                        class="al-value-icon w-11 h-11 rounded-2xl bg-[#FF9F45]/10 flex items-center justify-center mb-5">
                        <svg class="w-5 h-5 text-[#FF9F45]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="al-font-display text-xl font-bold text-[#0B2545] mb-2">Güven ve Şeffaflık</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">İş ortaklarımızla her aşamada açık iletişim
                        kurar, verdiğimiz sözün arkasında dururuz.</p>
                </div>

                <div
                    class="al-value-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-8 hover:border-[#2F6FED]/30 hover:bg-white/90 transition-all duration-500">
                    <div
                        class="al-value-icon w-11 h-11 rounded-2xl bg-[#2F6FED]/10 flex items-center justify-center mb-5">
                        <svg class="w-5 h-5 text-[#2F6FED]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="al-font-display text-xl font-bold text-[#0B2545] mb-2">Sürekli Yenilik</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">Teknoloji durmuyor, biz de durmuyoruz. Ar-Ge'ye
                        ve ekibimizin gelişimine sürekli yatırım yapıyoruz.</p>
                </div>

                <div
                    class="al-value-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-8 hover:border-[#2F6FED]/30 hover:bg-white/90 transition-all duration-500">
                    <div
                        class="al-value-icon w-11 h-11 rounded-2xl bg-[#FF9F45]/10 flex items-center justify-center mb-5">
                        <svg class="w-5 h-5 text-[#FF9F45]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                        </svg>
                    </div>
                    <h3 class="al-font-display text-xl font-bold text-[#0B2545] mb-2">Yerli Üretim</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">Türkiye'de tasarlıyor, Türkiye'de geliştiriyor,
                        dünyaya buradan değer üretiyoruz.</p>
                </div>
            </div>
        </div>
    </div>

     Stratejik Yol Haritası 
    <div class="px-6 pb-24">
        <div class="max-w-5xl mx-auto">
            <div class="mb-10">
                <span class="al-font-mono text-xs text-[#2F6FED] tracking-widest font-bold">NASIL İLERLİYORUZ</span>
                <h2 class="al-font-display text-3xl md:text-4xl font-extrabold text-[#0B2545] mt-2">Stratejik
                    Odaklarımız</h2>
            </div>

            <div class="relative">
                <div class="absolute left-[27px] top-2 bottom-2 w-px al-dot-line hidden md:block"></div>

                <div class="space-y-6">
                    <div class="flex gap-6 items-start">
                        <div
                            class="hidden md:flex al-font-mono w-14 h-14 rounded-2xl bg-white border border-[#0B2545]/10 items-center justify-center flex-shrink-0 text-sm font-bold text-[#2F6FED] relative z-10">
                            01</div>
                        <div
                            class="flex-1 bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-6 md:p-8 hover:border-[#2F6FED]/30 transition-all duration-500">
                            <h3 class="al-font-display text-lg font-bold text-[#0B2545] mb-1.5">Yapay Zeka Altyapısı
                            </h3>
                            <p class="text-[#0B2545]/60 text-sm leading-relaxed">Otonom karar destek sistemleri ve
                                makine öğrenmesi hatlarını iş süreçlerinin merkezine yerleştiriyoruz.</p>
                        </div>
                    </div>

                    <div class="flex gap-6 items-start">
                        <div
                            class="hidden md:flex al-font-mono w-14 h-14 rounded-2xl bg-white border border-[#0B2545]/10 items-center justify-center flex-shrink-0 text-sm font-bold text-[#2F6FED] relative z-10">
                            02</div>
                        <div
                            class="flex-1 bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-6 md:p-8 hover:border-[#2F6FED]/30 transition-all duration-500">
                            <h3 class="al-font-display text-lg font-bold text-[#0B2545] mb-1.5">Bulut ve
                                Ölçeklenebilirlik</h3>
                            <p class="text-[#0B2545]/60 text-sm leading-relaxed">Trafik ve yük ne olursa olsun
                                kesintisiz çalışan, kendi kendini iyileştiren bulut mimarileri kuruyoruz.</p>
                        </div>
                    </div>

                    <div class="flex gap-6 items-start">
                        <div
                            class="hidden md:flex al-font-mono w-14 h-14 rounded-2xl bg-white border border-[#0B2545]/10 items-center justify-center flex-shrink-0 text-sm font-bold text-[#2F6FED] relative z-10">
                            03</div>
                        <div
                            class="flex-1 bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-6 md:p-8 hover:border-[#2F6FED]/30 transition-all duration-500">
                            <h3 class="al-font-display text-lg font-bold text-[#0B2545] mb-1.5">Siber Güvenlik</h3>
                            <p class="text-[#0B2545]/60 text-sm leading-relaxed">Katmanlı güvenlik protokolleriyle iş
                                ortaklarımızın verisini uçtan uca koruma altına alıyoruz.</p>
                        </div>
                    </div>

                    <div class="flex gap-6 items-start">
                        <div
                            class="hidden md:flex al-font-mono w-14 h-14 rounded-2xl bg-white border border-[#0B2545]/10 items-center justify-center flex-shrink-0 text-sm font-bold text-[#2F6FED] relative z-10">
                            04</div>
                        <div
                            class="flex-1 bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-6 md:p-8 hover:border-[#2F6FED]/30 transition-all duration-500">
                            <h3 class="al-font-display text-lg font-bold text-[#0B2545] mb-1.5">Sürdürülebilir Teknoloji
                            </h3>
                            <p class="text-[#0B2545]/60 text-sm leading-relaxed">Enerji verimliliği yüksek, çevresel
                                etkisi düşük sistem tasarımlarını önceliklendiriyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     CTA 
    <div class="px-6 pb-24">
        <div class="max-w-5xl mx-auto">
            <div class="bg-[#0B2545] rounded-3xl px-8 md:px-14 py-14 text-center relative">
                <div class="absolute inset-0 rounded-3xl overflow-hidden pointer-events-none">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#2F6FED]/15 via-transparent to-[#FF9F45]/10">
                    </div>
                </div>
                <div class="relative z-10">
                    <h2 class="al-font-display text-3xl md:text-4xl font-extrabold text-white mb-4">Bu vizyonu birlikte
                        hayata geçirelim.</h2>
                    <p class="al-font-body text-blue-100/60 max-w-xl mx-auto mb-8">Projenizi anlatın, ekibimiz size özel
                        bir yol haritası hazırlasın.</p>
                    <div class="flex items-center justify-center gap-4 flex-wrap">
                        <button type="button" onclick="Livewire.dispatch('openQuoteModal')"
                            class="al-font-display bg-[#FF9F45] hover:bg-[#ffb066] hover:opacity-90 hover:scale-[1.03] transition-all duration-300 text-[#0A1830] px-6 py-2.5 rounded-full font-bold text-sm tracking-wide">
                            FİYAT TEKLİFİ AL
                        </button>
                        <a href="<?php echo e(route('referanslar')); ?>"
                            class="al-font-mono text-xs tracking-widest text-white/70 hover:text-white border border-white/20 hover:border-white/40 rounded-full px-6 py-3.5 transition-all duration-300">
                            REFERANSLARIMIZI İNCELEYİN
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.full', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\apoca\Desktop\livewire-projem\resources\views/Kurumsal/vizyon-misyon.blade.php ENDPATH**/ ?>