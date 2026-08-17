<x-kurumsal-layout>
    <nav
        class="al-navbar sticky top-4 z-50 max-w-6xl mx-auto flex items-center justify-between px-6 md:px-8 py-4 rounded-full mt-4 border border-white/60 bg-white/80 backdrop-blur-md shadow-sm">

        <a href="{{ route('home') }}"
            class="al-font-display text-2xl font-bold tracking-tight text-[#0B2545] cursor-pointer hover:opacity-70 transition-opacity duration-300">
            AL<span class="text-[#FF9F45]">.</span>TECHNOLOGY
        </a>

        <div class="hidden md:flex items-center gap-9 al-font-mono text-xs tracking-[0.15em] text-[#0B2545]/60">

            <div class="relative group">
                <a href="{{ route('kurumsal') }}"
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
                        <a href="{{ route('kurumsal.hakkimizda') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Hakkımızda</a>
                        <a href="{{ route('kurumsal.vizyon-misyon') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Vizyon
                            - Misyon</a>
                        <a href="{{ route('kurumsal.haberler') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Haberler</a>
                        <a href="{{ route('kurumsal.belgeler') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Belgeler</a>
                    </div>
                </div>
            </div>

            <a href="{{ route('referanslar') }}"
                class="hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300">REFERANSLAR</a>
            <a href="{{ route('urunler') }}"
                class="hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300">ÜRÜNLER</a>
            <a href="{{ route('magaza') }}"
                class="hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300">MAĞAZA</a>
        </div>

        <button type="button" onclick="Livewire.dispatch('openQuoteModal')"
            class="al-font-display bg-[#FF9F45] hover:bg-[#ffb066] hover:opacity-90 hover:scale-[1.03] transition-all duration-300 text-[#0A1830] px-6 py-2.5 rounded-full font-bold text-sm tracking-wide">
            FİYAT TEKLİFİ AL
        </button>
    </nav>

    <style>
        .al-grid-bg-kurumsal {
            background-image:
                linear-gradient(rgba(11, 37, 69, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(11, 37, 69, 0.05) 1px, transparent 1px);
            background-size: 56px 56px;
            mask-image: radial-gradient(ellipse 80% 60% at 50% 20%, black 40%, transparent 100%);
        }

        @keyframes kPulseLine {

            0%,
            100% {
                opacity: 0.15;
            }

            50% {
                opacity: 0.55;
            }
        }

        .k-pulse {
            animation: kPulseLine 4s ease-in-out infinite;
        }

        .k-pulse-delay {
            animation: kPulseLine 4s ease-in-out infinite;
            animation-delay: 1.5s;
        }

        @keyframes kFadeUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .k-fade {
            opacity: 0;
            animation: kFadeUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .k-delay-1 {
            animation-delay: 0.1s;
        }

        .k-delay-2 {
            animation-delay: 0.2s;
        }

        .k-delay-3 {
            animation-delay: 0.3s;
        }

        .k-delay-4 {
            animation-delay: 0.4s;
        }
    </style>

    <header class="relative py-24 animate-in overflow-hidden">
        <div class="absolute inset-0 al-grid-bg-kurumsal pointer-events-none"></div>
        <div
            class="absolute top-1/3 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#FF9F45]/50 to-transparent k-pulse">
        </div>
        <div
            class="absolute top-2/3 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#2F6FED]/40 to-transparent k-pulse-delay">
        </div>

        <div class="relative max-w-4xl mx-auto px-6 text-center">
            <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-6">KURUMSAL</p>
            <h1 class="al-font-display text-6xl font-extrabold text-[#0B2545] mb-6">Geleceği Kodluyoruz</h1>
            <p class="text-xl text-slate-600">AL.TECHNOLOGY, dijital dönüşüm süreçlerinde kurumsal çözüm ortağınız.</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 pb-24 space-y-24">

         Kısa Tanıtım + İstatistik Şeridi 
        <section class="k-fade">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <p class="text-[#0B2545]/60 text-lg leading-relaxed">
                    12 yılı aşkın süredir yazılım, bulut altyapısı ve teknik destek alanlarında
                    kurumlara uçtan uca dijital dönüşüm hizmeti sunuyoruz. Ölçülebilir sonuçlara
                    odaklanan mühendislik disiplinimizle, iş ortaklarımızın büyüme hedeflerine
                    teknolojiyle eşlik ediyoruz.
                </p>
            </div>

            <div
                class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-white/70 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-8 shadow-sm">
                <div class="text-center">
                    <p class="al-font-display text-4xl font-extrabold text-[#0B2545]">12+</p>
                    <p class="al-font-mono text-[10px] tracking-widest text-[#0B2545]/50 mt-1">YIL DENEYİM</p>
                </div>
                <div class="text-center">
                    <p class="al-font-display text-4xl font-extrabold text-[#0B2545]">240+</p>
                    <p class="al-font-mono text-[10px] tracking-widest text-[#0B2545]/50 mt-1">TAMAMLANAN PROJE</p>
                </div>
                <div class="text-center">
                    <p class="al-font-display text-4xl font-extrabold text-[#0B2545]">98%</p>
                    <p class="al-font-mono text-[10px] tracking-widest text-[#0B2545]/50 mt-1">MÜŞTERİ MEMNUNİYETİ</p>
                </div>
                <div class="text-center">
                    <p class="al-font-display text-4xl font-extrabold text-[#0B2545]">24/7</p>
                    <p class="al-font-mono text-[10px] tracking-widest text-[#0B2545]/50 mt-1">TEKNİK DESTEK</p>
                </div>
            </div>
        </section>

         Kurumsal Alt Sayfa Kartları 
        <section>
            <div class="text-center mb-12">
                <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-4">KEŞFEDİN</p>
                <h2 class="al-font-display text-4xl md:text-5xl font-extrabold text-[#0B2545]">Kurumsal Bilgiler</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <a href="{{ route('kurumsal.hakkimizda') }}"
                    class="k-fade k-delay-1 group relative bg-white/70 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-7 shadow-sm hover:shadow-xl hover:shadow-[#2F6FED]/10 hover:border-[#FF9F45]/40 hover:-translate-y-1 transition-all duration-500">
                    <div
                        class="w-12 h-12 rounded-xl bg-[#0B2545] text-[#FF9F45] flex items-center justify-center al-font-mono text-xs font-bold mb-6 group-hover:scale-110 transition-transform duration-300">
                        01
                    </div>
                    <h3
                        class="al-font-display text-xl font-bold text-[#0B2545] mb-2 group-hover:text-[#2F6FED] transition-colors">
                        Hakkımızda</h3>
                    <p class="text-sm text-[#0B2545]/60 leading-relaxed mb-6">Hikayemiz, ekibimiz ve çalışma
                        prensiplerimiz.</p>
                    <span
                        class="al-font-mono text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] flex items-center gap-1 transition-colors">
                        İNCELE <span class="transform group-hover:translate-x-1 transition-transform">→</span>
                    </span>
                </a>

                <a href="{{ route('kurumsal.vizyon-misyon') }}"
                    class="k-fade k-delay-2 group relative bg-white/70 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-7 shadow-sm hover:shadow-xl hover:shadow-[#2F6FED]/10 hover:border-[#FF9F45]/40 hover:-translate-y-1 transition-all duration-500">
                    <div
                        class="w-12 h-12 rounded-xl bg-[#0B2545] text-[#FF9F45] flex items-center justify-center al-font-mono text-xs font-bold mb-6 group-hover:scale-110 transition-transform duration-300">
                        02
                    </div>
                    <h3
                        class="al-font-display text-xl font-bold text-[#0B2545] mb-2 group-hover:text-[#2F6FED] transition-colors">
                        Vizyon - Misyon</h3>
                    <p class="text-sm text-[#0B2545]/60 leading-relaxed mb-6">Bizi yönlendiren hedefler ve değer
                        önerimiz.</p>
                    <span
                        class="al-font-mono text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] flex items-center gap-1 transition-colors">
                        İNCELE <span class="transform group-hover:translate-x-1 transition-transform">→</span>
                    </span>
                </a>

                <a href="{{ route('kurumsal.haberler') }}"
                    class="k-fade k-delay-3 group relative bg-white/70 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-7 shadow-sm hover:shadow-xl hover:shadow-[#2F6FED]/10 hover:border-[#FF9F45]/40 hover:-translate-y-1 transition-all duration-500">
                    <div
                        class="w-12 h-12 rounded-xl bg-[#0B2545] text-[#FF9F45] flex items-center justify-center al-font-mono text-xs font-bold mb-6 group-hover:scale-110 transition-transform duration-300">
                        03
                    </div>
                    <h3
                        class="al-font-display text-xl font-bold text-[#0B2545] mb-2 group-hover:text-[#2F6FED] transition-colors">
                        Haberler</h3>
                    <p class="text-sm text-[#0B2545]/60 leading-relaxed mb-6">Teknoloji gündemi ve şirket duyurularımız.
                    </p>
                    <span
                        class="al-font-mono text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] flex items-center gap-1 transition-colors">
                        İNCELE <span class="transform group-hover:translate-x-1 transition-transform">→</span>
                    </span>
                </a>

                <a href="{{ route('kurumsal.belgeler') }}"
                    class="k-fade k-delay-4 group relative bg-white/70 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-7 shadow-sm hover:shadow-xl hover:shadow-[#2F6FED]/10 hover:border-[#FF9F45]/40 hover:-translate-y-1 transition-all duration-500">
                    <div
                        class="w-12 h-12 rounded-xl bg-[#0B2545] text-[#FF9F45] flex items-center justify-center al-font-mono text-xs font-bold mb-6 group-hover:scale-110 transition-transform duration-300">
                        04
                    </div>
                    <h3
                        class="al-font-display text-xl font-bold text-[#0B2545] mb-2 group-hover:text-[#2F6FED] transition-colors">
                        Belgeler</h3>
                    <p class="text-sm text-[#0B2545]/60 leading-relaxed mb-6">Akreditasyonlarımız ve kurumsal
                        dokümanlar.</p>
                    <span
                        class="al-font-mono text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] flex items-center gap-1 transition-colors">
                        İNCELE <span class="transform group-hover:translate-x-1 transition-transform">→</span>
                    </span>
                </a>

            </div>
        </section>

         Değerlerimiz 
        <section>
            <div class="bg-[#0B2545] rounded-3xl p-10 md:p-16 relative overflow-hidden">
                <div class="absolute inset-0 pointer-events-none"
                    style="background-image: linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px); background-size: 56px 56px; mask-image: radial-gradient(ellipse 80% 60% at 50% 50%, black 40%, transparent 100%);">
                </div>

                <div class="relative">
                    <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-4 text-center">DEĞERLERİMİZ</p>
                    <h2 class="al-font-display text-3xl md:text-4xl font-extrabold text-white mb-12 text-center">
                        Bizi biz yapan ilkeler
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div
                                class="w-14 h-14 mx-auto rounded-full bg-[#FF9F45]/10 border border-[#FF9F45]/30 flex items-center justify-center mb-5">
                                <span class="al-font-mono text-[#FF9F45] font-bold">01</span>
                            </div>
                            <h3 class="al-font-display font-bold text-white mb-2">Şeffaflık</h3>
                            <p class="text-blue-100/50 text-sm leading-relaxed">Her projede açık iletişim ve düzenli
                                raporlama esastır.</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-14 h-14 mx-auto rounded-full bg-[#FF9F45]/10 border border-[#FF9F45]/30 flex items-center justify-center mb-5">
                                <span class="al-font-mono text-[#FF9F45] font-bold">02</span>
                            </div>
                            <h3 class="al-font-display font-bold text-white mb-2">Mühendislik Disiplini</h3>
                            <p class="text-blue-100/50 text-sm leading-relaxed">Sürdürülebilir ve ölçeklenebilir
                                çözümler tasarlıyoruz.</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-14 h-14 mx-auto rounded-full bg-[#FF9F45]/10 border border-[#FF9F45]/30 flex items-center justify-center mb-5">
                                <span class="al-font-mono text-[#FF9F45] font-bold">03</span>
                            </div>
                            <h3 class="al-font-display font-bold text-white mb-2">Sürekli Gelişim</h3>
                            <p class="text-blue-100/50 text-sm leading-relaxed">Teknolojiyi yakından takip eder,
                                ekibimize sürekli yatırım yaparız.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         CTA 
        <section class="text-center">
            <h2 class="al-font-display text-3xl md:text-4xl font-extrabold text-[#0B2545] mb-4">
                Projenizi konuşmaya hazır mısınız?
            </h2>
            <p class="text-[#0B2545]/60 mb-8 max-w-xl mx-auto">
                İhtiyaçlarınızı dinleyelim, size en uygun teknoloji yol haritasını birlikte çıkaralım.
            </p>
            <button type="button" onclick="Livewire.dispatch('openQuoteModal')"
                class="al-font-display bg-[#FF9F45] hover:bg-[#ffb066] hover:opacity-90 hover:scale-[1.03] transition-all duration-300 text-[#0A1830] px-6 py-2.5 rounded-full font-bold text-sm tracking-wide">
                FİYAT TEKLİFİ AL
            </button>
        </section>

    </main>
</x-kurumsal-layout>