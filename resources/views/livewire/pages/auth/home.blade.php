@extends('layouts.full')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700;800&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&display=swap');

    .al-font-display {
        font-family: 'Space Grotesk', sans-serif;
    }

    .al-font-body {
        font-family: 'Inter', sans-serif;
    }

    .al-font-mono {
        font-family: 'JetBrains Mono', monospace;
    }

    .al-grid-bg {
        background-image:
            linear-gradient(rgba(11, 37, 69, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(11, 37, 69, 0.05) 1px, transparent 1px);
        background-size: 56px 56px;
        mask-image: radial-gradient(ellipse 80% 60% at 50% 20%, black 40%, transparent 100%);
    }

    .al-grid-bg-footer {
        background-image:
            linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        background-size: 56px 56px;
        mask-image: radial-gradient(ellipse 80% 60% at 50% 50%, black 40%, transparent 100%);
    }

    @keyframes al-pulse-line {

        0%,
        100% {
            opacity: 0.15;
        }

        50% {
            opacity: 0.55;
        }
    }

    .al-pulse {
        animation: al-pulse-line 4s ease-in-out infinite;
    }

    .al-pulse-delay {
        animation: al-pulse-line 4s ease-in-out infinite;
        animation-delay: 1.5s;
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
</style>

<div
    class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF] al-font-body text-[#0B2545] selection:bg-[#FFB347] selection:text-[#0A1830]">
    

    <nav
        class="al-navbar sticky top-4 z-50 max-w-6xl mx-auto flex items-center justify-between px-6 md:px-8 py-4 rounded-full border border-white/60">
        <div
            class="al-font-display text-2xl font-bold tracking-tight text-[#0B2545] cursor-pointer hover:opacity-70 transition-opacity duration-300">
            AL<span class="text-[#FF9F45]">.</span>TECHNOLOGY
        </div>

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


                <div class="absolute top-full left-1/2 -translate-x-1/2 pt-2 w-56
                            opacity-0 invisible translate-y-2
                            group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                            transition-all duration-300 ease-out z-50">

                    <div
                        class="bg-white/95 backdrop-blur-md border border-[#0B2545]/10 rounded-2xl shadow-xl shadow-[#0B2545]/10 p-3 flex flex-col gap-2">

                        <a href="{{ route('kurumsal.hakkimizda') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">
                            Hakkımızda
                        </a>

                        <a href="{{ route('kurumsal.vizyon-misyon') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">
                            Vizyon - Misyon
                        </a>

                        <a href="{{ route('kurumsal.haberler') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">
                            Haberler
                        </a>

                        <a href="{{ route('kurumsal.belgeler') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">
                            Belgeler
                        </a>

                    </div>
                </div>
            </div>

            <a href="{{ route('referanslar') }}"
                class="hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300">
                REFERANSLAR
            </a>
            <a href="#"
                class="hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300">ÜRÜNLER</a>
            <a href="#" class="hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300">MAĞAZA</a>
        </div>

        <livewire:quote-request-modal />
    </nav>


    <header class="relative py-28 md:py-36 px-6 overflow-hidden">
        <div class="absolute inset-0 al-grid-bg pointer-events-none"></div>


        <div
            class="absolute top-1/4 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#FF9F45]/50 to-transparent al-pulse">
        </div>
        <div
            class="absolute top-2/3 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#2F6FED]/40 to-transparent al-pulse-delay">
        </div>

        <div class="relative max-w-5xl mx-auto text-center">
            <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-6">DİJİTAL DÖNÜŞÜM PARTNERİ</p>

            <h1
                class="al-font-display text-6xl md:text-8xl font-extrabold mb-6 leading-[0.95] tracking-tight text-[#0B2545]">
                AL TECHNOLOGY
            </h1>
            <h2 class="al-font-display text-2xl md:text-4xl font-bold mb-8 text-[#2F6FED] tracking-wide">
                GELECEĞİ <span class="text-[#FF9F45]">KODLUYORUZ.</span>
            </h2>
            <p class="max-w-xl mx-auto text-[#0B2545]/60 text-lg leading-relaxed">
                Dijital dönüşümde profesyonel çözümler. İşletmeniz için en yeni teknolojileri,
                modern altyapı ve uzman destekle sunuyoruz.
            </p>
        </div>
    </header>


    <section class="relative max-w-6xl mx-auto px-6 -mt-6 mb-20">
        <div
            class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-white/70 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-8 shadow-sm">
            <div class="text-center">
                <p class="counter al-font-display text-4xl font-extrabold text-[#0B2545]" data-target="12">0</p>
                <p class="al-font-mono text-[10px] tracking-widest text-[#0B2545]/50 mt-1">YIL DENEYİM</p>
            </div>
            <div class="text-center">
                <p class="counter al-font-display text-4xl font-extrabold text-[#0B2545]" data-target="240">0</p>
                <p class="al-font-mono text-[10px] tracking-widest text-[#0B2545]/50 mt-1">TAMAMLANAN PROJE</p>
            </div>
            <div class="text-center">
                <p class="counter al-font-display text-4xl font-extrabold text-[#0B2545]" data-target="98">0</p>
                <p class="al-font-mono text-[10px] tracking-widest text-[#0B2545]/50 mt-1">MÜŞTERİ MEMNUNİYETİ</p>
            </div>
            <div class="text-center">
                <p class="al-font-display text-4xl font-extrabold text-[#0B2545]">24/7</p>
                <p class="al-font-mono text-[10px] tracking-widest text-[#0B2545]/50 mt-1">TEKNİK DESTEK</p>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.counter');
        
        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            const duration = 3000; // Animasyon süresi (milisaniye)
            const step = target / (duration / 16); 

            const update = () => {
                const current = +counter.innerText;
                if (current < target) {
                    counter.innerText = Math.ceil(current + step);
                    requestAnimationFrame(update);
                } else {
                    counter.innerText = target + "+";
                }
            };
            update();
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));
    });
    </script>


    <section class="max-w-7xl mx-auto px-6 pb-32">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


            <div
                class="group relative h-96 border border-[#0B2545]/10 overflow-hidden hover:border-[#FF9F45]/50 transition-all duration-500 cursor-pointer rounded-2xl shadow-sm hover:shadow-xl hover:shadow-[#2F6FED]/10">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=800&q=80"
                    alt="Yazılım Çözümleri"
                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0B2545]/90 via-[#0B2545]/50 to-[#0B2545]/10"></div>

                <div class="relative h-full p-10 flex flex-col justify-end">
                    <span class="al-font-mono text-xs text-[#FF9F45] mb-auto">SW</span>
                    <h3 class="al-font-display text-3xl font-bold mb-3 text-white">Yazılım Çözümleri</h3>
                    <p class="text-white/70 text-sm mb-4 leading-relaxed">
                        Kurumunuza özel, ölçeklenebilir yazılım mimarileri.
                    </p>
                    <div class="h-0.5 w-12 bg-[#FF9F45] group-hover:w-full transition-all duration-500"></div>
                </div>
            </div>


            <div
                class="group relative h-96 border border-[#0B2545]/10 overflow-hidden hover:border-[#FF9F45]/50 transition-all duration-500 cursor-pointer rounded-2xl shadow-sm hover:shadow-xl hover:shadow-[#2F6FED]/10">
                <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&w=800&q=80"
                    alt="Cloud Sistemler"
                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0B2545]/90 via-[#0B2545]/50 to-[#0B2545]/10"></div>

                <div class="relative h-full p-10 flex flex-col justify-end">
                    <span class="al-font-mono text-xs text-[#FF9F45] mb-auto">CL</span>
                    <h3 class="al-font-display text-3xl font-bold mb-3 text-white">Cloud Sistemler</h3>
                    <p class="text-white/70 text-sm mb-4 leading-relaxed">
                        Güvenli, esnek ve kesintisiz bulut altyapı yönetimi.
                    </p>
                    <div class="h-0.5 w-12 bg-[#FF9F45] group-hover:w-full transition-all duration-500"></div>
                </div>
            </div>


            <div
                class="group relative h-96 border border-[#0B2545]/10 overflow-hidden hover:border-[#FF9F45]/50 transition-all duration-500 cursor-pointer rounded-2xl shadow-sm hover:shadow-xl hover:shadow-[#2F6FED]/10">
                <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?auto=format&fit=crop&w=800&q=80"
                    alt="Teknik Destek"
                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0B2545]/90 via-[#0B2545]/50 to-[#0B2545]/10"></div>

                <div class="relative h-full p-10 flex flex-col justify-end">
                    <span class="al-font-mono text-xs text-[#FF9F45] mb-auto">TD</span>
                    <h3 class="al-font-display text-3xl font-bold mb-3 text-white">Teknik Destek</h3>
                    <p class="text-white/70 text-sm mb-4 leading-relaxed">
                        7/24 uzman ekip ile kesintisiz operasyon güvencesi.
                    </p>
                    <div class="h-0.5 w-12 bg-[#FF9F45] group-hover:w-full transition-all duration-500"></div>
                </div>
            </div>

        </div>
    </section>


    <section class="max-w-7xl mx-auto px-6 pb-32 space-y-24">


        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="rounded-2xl overflow-hidden shadow-sm order-2 md:order-1">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=900&q=80"
                    alt="Ekip çalışması" class="w-full h-80 object-cover">
            </div>
            <div class="order-1 md:order-2">
                <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-4">SÜREÇ</p>
                <h3 class="al-font-display text-3xl font-bold text-[#0B2545] mb-4">
                    Analizden teslime uçtan uca ortaklık
                </h3>
                <p class="text-[#0B2545]/60 leading-relaxed mb-6">
                    İhtiyaç analiziyle başlayıp, mimari tasarım, geliştirme ve devreye alma
                    süreçlerinin her adımında yanınızdayız. Her proje, ölçülebilir hedeflerle
                    şekillenir ve düzenli raporlamayla ilerler.
                </p>
                <div class="flex gap-8">
                    <div>
                        <p class="al-font-display text-2xl font-bold text-[#2F6FED]">%40</p>
                        <p class="text-[#0B2545]/50 text-xs">daha hızlı teslim</p>
                    </div>
                    <div>
                        <p class="al-font-display text-2xl font-bold text-[#2F6FED]">%25</p>
                        <p class="text-[#0B2545]/50 text-xs">maliyet tasarrufu</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-4">ALTYAPI</p>
                <h3 class="al-font-display text-3xl font-bold text-[#0B2545] mb-4">
                    Güvenli ve ölçeklenebilir bulut mimarisi
                </h3>
                <p class="text-[#0B2545]/60 leading-relaxed mb-6">
                    Trafiğinize göre otomatik ölçeklenen, çoklu bölge yedeklemeli altyapılar
                    kuruyoruz. Böylece büyüme dönemlerinde performans kaybı yaşamaz,
                    kesinti riskini minimuma indirirsiniz.
                </p>
                <ul class="space-y-2 text-sm text-[#0B2545]/70">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#FF9F45]"></span>
                        Otomatik yedekleme ve felaket kurtarma
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#FF9F45]"></span>
                        %99.9 çalışma süresi garantisi
                    </li>
                </ul>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=900&q=80"
                    alt="Sunucu ve bulut altyapısı" class="w-full h-80 object-cover">
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="rounded-2xl overflow-hidden shadow-sm order-2 md:order-1">
                <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=900&q=80"
                    alt="Veri analizi ve dashboard" class="w-full h-80 object-cover">
            </div>
            <div class="order-1 md:order-2">
                <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-4">İZLEME</p>
                <h3 class="al-font-display text-3xl font-bold text-[#0B2545] mb-4">
                    Gerçek zamanlı görünürlük ve raporlama
                </h3>
                <p class="text-[#0B2545]/60 leading-relaxed mb-6">
                    Sistem performansını, kullanıcı davranışlarını ve iş metriklerini tek bir
                    panelden izlemenizi sağlıyoruz. Kararlarınızı veriyle destekleyin.
                </p>
                <div class="flex gap-8">
                    <div>
                        <p class="al-font-display text-2xl font-bold text-[#2F6FED]">7/24</p>
                        <p class="text-[#0B2545]/50 text-xs">canlı izleme</p>
                    </div>
                    <div>
                        <p class="al-font-display text-2xl font-bold text-[#2F6FED]">Fark</p>
                        <p class="text-[#0B2545]/50 text-xs">Anlık müdahale hızı</p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="max-w-7xl mx-auto px-6 pb-32">
        <div class="text-center mb-16">
            <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-4">KÜRESEL BAKIŞ</p>
            <h2 class="al-font-display text-4xl md:text-5xl font-extrabold text-[#0B2545] mb-4">
                Dünyada Teknoloji
            </h2>
            <p class="max-w-2xl mx-auto text-[#0B2545]/60 text-lg leading-relaxed">
                Global teknoloji trendlerini yakından takip ediyor, işletmenizi geleceğe hazırlayacak
                çözümleri erken adapte ediyoruz.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div
                class="flex gap-5 bg-white/60 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-7 hover:border-[#2F6FED]/30 hover:bg-white transition-all duration-500">
                <div class="al-font-mono text-xs text-[#2F6FED] font-bold shrink-0 pt-1">AI</div>
                <div>
                    <h3 class="al-font-display text-xl font-bold text-[#0B2545] mb-2">Yapay Zeka ve Otomasyon</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Kurumlar, operasyonel verimliliği artırmak için üretken yapay zekayı iş
                        süreçlerine entegre ediyor. Biz de müşterilerimize bu dönüşümde rehberlik ediyoruz.
                    </p>
                </div>
            </div>

            <div
                class="flex gap-5 bg-white/60 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-7 hover:border-[#2F6FED]/30 hover:bg-white transition-all duration-500">
                <div class="al-font-mono text-xs text-[#2F6FED] font-bold shrink-0 pt-1">SEC</div>
                <div>
                    <h3 class="al-font-display text-xl font-bold text-[#0B2545] mb-2">Siber Güvenlik</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Artan siber tehditlere karşı sıfır güven (zero-trust) mimarileri ve sürekli
                        izleme, işletmelerin öncelikli gündemi haline geldi.
                    </p>
                </div>
            </div>

            <div
                class="flex gap-5 bg-white/60 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-7 hover:border-[#2F6FED]/30 hover:bg-white transition-all duration-500">
                <div class="al-font-mono text-xs text-[#2F6FED] font-bold shrink-0 pt-1">EDGE</div>
                <div>
                    <h3 class="al-font-display text-xl font-bold text-[#0B2545] mb-2">Edge Computing</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Veri işlemenin kaynağa yakınlaştırılması, gecikme sürelerini azaltarak
                        gerçek zamanlı karar alma süreçlerini hızlandırıyor.
                    </p>
                </div>
            </div>

            <div
                class="flex gap-5 bg-white/60 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-7 hover:border-[#2F6FED]/30 hover:bg-white transition-all duration-500">
                <div class="al-font-mono text-xs text-[#2F6FED] font-bold shrink-0 pt-1">SUS</div>
                <div>
                    <h3 class="al-font-display text-xl font-bold text-[#0B2545] mb-2">Sürdürülebilir Teknoloji</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Enerji verimli veri merkezleri ve yeşil yazılım pratikleri, dijital
                        dönüşümün çevresel ayak izini azaltmada öne çıkıyor.
                    </p>
                </div>
            </div>

        </div>
    </section>


    <section class="max-w-6xl mx-auto px-6 pb-32">
        <div class="bg-[#0B2545] rounded-3xl p-10 md:p-16 relative overflow-hidden">
            <div class="absolute inset-0 al-grid-bg-footer pointer-events-none"></div>

            <div class="relative grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-4">NEDEN AL TECHNOLOGY</p>
                    <h2 class="al-font-display text-3xl md:text-4xl font-extrabold text-white mb-6 leading-tight">
                        Teknolojiyi değil,<br>sonuçları konuşuruz.
                    </h2>
                    <p class="text-blue-100/60 leading-relaxed">
                        Her projede ölçülebilir iş değeri hedefliyoruz. Süreç boyunca şeffaf iletişim
                        ve uzun vadeli teknik ortaklık kuruyoruz.
                    </p>
                </div>

                <ul class="space-y-5">
                    <li class="flex items-start gap-4">
                        <span class="al-font-mono text-xs text-[#FF9F45] mt-1">01</span>
                        <div>
                            <p class="al-font-display font-bold text-white mb-1">Uzman Kadro</p>
                            <p class="text-blue-100/50 text-sm">Alanında deneyimli mühendis ve mimarlardan oluşan ekip.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="al-font-mono text-xs text-[#FF9F45] mt-1">02</span>
                        <div>
                            <p class="al-font-display font-bold text-white mb-1">Şeffaf Süreç</p>
                            <p class="text-blue-100/50 text-sm">Her aşamada raporlama ve düzenli geri bildirim.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="al-font-mono text-xs text-[#FF9F45] mt-1">03</span>
                        <div>
                            <p class="al-font-display font-bold text-white mb-1">Sürekli Destek</p>
                            <p class="text-blue-100/50 text-sm">Proje tesliminden sonra da yanınızdayız.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <footer class="relative bg-[#0B2545] text-white overflow-hidden">

        <div class="absolute inset-0 al-grid-bg-footer pointer-events-none"></div>
        <div
            class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#FF9F45]/50 to-transparent al-pulse">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-8 pt-20 pb-10">

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">


                <div class="md:col-span-2">
                    <div class="al-font-display text-2xl font-bold tracking-tight mb-4">
                        AL<span class="text-[#FF9F45]">.</span>TECHNOLOGY
                    </div>
                    <p class="text-blue-100/60 text-sm leading-relaxed max-w-sm mb-6">
                        Dijital dönüşümde profesyonel çözümler sunan teknoloji partneriniz.
                        Yazılım, cloud ve teknik destek alanlarında uçtan uca hizmet.
                    </p>
                    <div class="flex gap-3">
                        <a href="https://www.facebook.com/kullaniciadi" target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 rounded-full border border-white/15 flex items-center justify-center hover:border-[#FF9F45]/60 hover:bg-[#FF9F45]/10 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15h-2.4v-3H10V9.5C10 7.15 11.5 6 13.6 6c.94 0 1.9.17 1.9.17v2.5h-1.27c-1.25 0-1.63.78-1.63 1.58V12h2.78l-.44 3H12.6v6.8c4.56-.93 8-4.96 8-9.8z" />
                            </svg>
                        </a>

                        <a href="https://www.linkedin.com/in/abdullah-al-5b008b3b7/" target="_blank"
                            rel="noopener noreferrer"
                            class="w-10 h-10 rounded-full border border-white/15 flex items-center justify-center hover:border-[#FF9F45]/60 hover:bg-[#FF9F45]/10 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14zM8.34 18.5v-8.4H5.67v8.4h2.67zM7 8.9c.85 0 1.4-.56 1.4-1.27C8.38 6.93 7.85 6.4 7.02 6.4c-.84 0-1.4.53-1.4 1.24 0 .7.54 1.27 1.36 1.27h.02zM18.5 18.5v-4.7c0-2.5-1.34-3.67-3.13-3.67-1.44 0-2.08.8-2.44 1.35v-1.16h-2.67c.03.7 0 8.18 0 8.18h2.67v-4.57c0-.24.02-.49.1-.66.2-.49.66-1 1.44-1 1.02 0 1.43.78 1.43 1.9v4.33h2.6z" />
                            </svg>
                        </a>

                        <a href="https://x.com/MrBeast" target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 rounded-full border border-white/15 flex items-center justify-center hover:border-[#FF9F45]/60 hover:bg-[#FF9F45]/10 transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.29 20.25c7.55 0 11.68-6.26 11.68-11.68 0-.18 0-.36-.01-.53a8.35 8.35 0 002.05-2.13 8.19 8.19 0 01-2.36.65 4.12 4.12 0 001.81-2.27 8.22 8.22 0 01-2.6 1 4.1 4.1 0 00-6.99 3.74A11.65 11.65 0 013.15 4.6a4.1 4.1 0 001.27 5.47A4.07 4.07 0 012.8 9.5v.05a4.1 4.1 0 003.29 4.02 4.1 4.1 0 01-1.85.07 4.1 4.1 0 003.83 2.85A8.23 8.23 0 012 18.4a11.62 11.62 0 006.29 1.84" />
                            </svg>
                        </a>
                    </div>
                </div>


                <div>
                    <p class="al-font-mono text-xs tracking-widest text-[#FF9F45] mb-5">KURUMSAL</p>
                    <ul class="space-y-3 text-sm text-blue-100/60">
                        <li><a href="{{ route('kurumsal.hakkimizda') }}"
                                class="hover:text-white transition-colors duration-300">Hakkımızda</a></li>
                        <li><a href="{{ route('referanslar') }}"
                                class="hover:text-white transition-colors duration-300">Referanslar</a></li>
                        <li><a href="{{ route('kurumsal')}}"
                                class="hover:text-white transition-colors duration-300">Kariyer</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Blog</a></li>
                    </ul>
                </div>


                <div>
                    <p class="al-font-mono text-xs tracking-widest text-[#FF9F45] mb-5">İLETİŞİM</p>
                    <ul class="space-y-3 text-sm text-blue-100/60">
                        <li>info@altechnology.com</li>
                        <li>+90 (212) 000 00 00</li>
                        <li>İstanbul, Türkiye</li>
                    </ul>
                </div>

            </div>


            <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="al-font-mono text-xs text-blue-100/40 tracking-wide">
                    © {{ date('Y') }} AL TECHNOLOGY — TÜM HAKLARI SAKLIDIR
                </p>
                <div class="flex gap-6 al-font-mono text-xs text-blue-100/40">
                    <a href="{{ route('policy.show') }}" target="_blank"
                        class="hover:text-white transition-colors duration-300">Gizlilik Politikası</a>
                    <a href="{{ route('terms.show') }}" target="_blank"
                        class="hover:text-white transition-colors duration-300">Kullanım Şartları</a>
                </div>
            </div>

        </div>
    </footer>

</div>

@endsection