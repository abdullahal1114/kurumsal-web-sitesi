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



    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .animate-delay-100 {
        animation-delay: 0.1s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .animate-delay-200 {
        animation-delay: 0.2s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .animate-delay-300 {
        animation-delay: 0.3s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .animate-delay-400 {
        animation-delay: 0.4s;
        opacity: 0;
        animation-fill-mode: forwards;
    }
</style>

<div
    class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF] al-font-body text-[#0B2545] relative overflow-hidden">
    <div class="absolute inset-0 al-grid-bg pointer-events-none"></div>



    <nav
        class="al-navbar sticky top-4 z-50 max-w-6xl mx-auto flex items-center justify-between px-6 md:px-8 py-4 rounded-full mt-4 border border-white/60">
        <a href="{{ route('home') }}"
            class="al-font-display text-2xl font-bold tracking-tight text-[#0B2545] cursor-pointer hover:opacity-70 transition-opacity duration-300">
            AL<span class="text-[#FF9F45]">.</span>TECHNOLOGY
        </a>

        <div class="hidden md:flex items-center gap-9 al-font-mono text-xs tracking-widest text-[#0B2545]/60">
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
                            class="al-font-body text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Hakkımızda</a>
                        <a href="{{ route('kurumsal.vizyon-misyon') }}"
                            class="al-font-body text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Vizyon
                            - Misyon</a>
                        <a href="{{ route('kurumsal.haberler') }}"
                            class="al-font-body text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Haberler</a>
                        <a href="{{ route('kurumsal.belgeler') }}"
                            class="al-font-body text-sm font-semibold text-white text-center bg-[#0B2545] hover:bg-[#2F6FED] transition-colors duration-300 rounded-xl py-3 px-4">Belgeler</a>
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


    <div class="max-w-6xl mx-auto relative z-10 pt-16 pb-20 px-6">


        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start mt-8">


            <div class="lg:col-span-7 animate-fade-in-up">
                <span
                    class="al-font-mono text-xs font-bold tracking-[0.25em] text-[#FF9F45] bg-[#FF9F45]/10 px-4 py-2 rounded-full">
                    BİZ KİMİZ?
                </span>

                <h1
                    class="al-font-display text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-[#0B2545] mt-6 mb-8 leading-tight">
                    Yarını Bugünden <br class="hidden sm:block">
                    <span class="text-[#2F6FED] relative inline-block">
                        İnşa Ediyoruz.
                        <span class="absolute left-0 bottom-1.5 w-full h-3 bg-[#2F6FED]/10 rounded-full -z-10"></span>
                    </span>
                </h1>

                <div
                    class="bg-white/50 backdrop-blur-sm border border-[#0B2545]/10 rounded-3xl p-6 md:p-8 shadow-md hover:border-[#2F6FED]/20 transition-all duration-500 space-y-6">
                    <div class="border-l-4 border-[#FF9F45] pl-4 py-1">
                        <p class="font-bold text-xl md:text-2xl text-[#0B2545] leading-relaxed">
                            AL Technology, dijital ekosistemde kalıcı izler bırakmak ve kurumlara küresel standartlarda
                            teknoloji ortaklığı sunmak amacıyla kuruldu.
                        </p>
                    </div>

                    <div class="space-y-4 text-[#0B2545]/80 text-base md:text-lg leading-relaxed font-normal">
                        <p>
                            Kurulduğumuz ilk günden beri karmaşık altyapı problemlerini yalın, ölçeklenebilir ve güvenli
                            mimarilere dönüştürüyoruz. Sadece kod yazmıyor; işletmelerin verimliliğini artıran,
                            maliyetlerini optimize eden ve onları geleceğin dijital dünyasında rekabetçi kılan uçtan uca
                            çözümler tasarlıyoruz.
                        </p>
                        <p>
                            Genç, çevik ve sürekli öğrenen mühendislik kadromuzla bulut bilişim, yapay zeka
                            entegrasyonları ve özel yazılım geliştirme alanlarında sektöre yön veriyoruz. Güvenilirlik,
                            şeffaflık ve yüksek mühendislik kalitesi, AL Technology kültürünün değişmez temel
                            taşlarıdır.
                        </p>
                        <p>
                            Bugün gelinen noktada, farklı sektörlerden onlarca kurumun dijital dönüşüm sürecine ortak
                            oluyor; startup'lardan kurumsal ölçekli işletmelere kadar geniş bir yelpazede özel çözümler
                            geliştiriyoruz. Her proje bizim için yeni bir öğrenme fırsatı, her müşteri ilişkisi ise uzun
                            soluklu bir teknoloji ortaklığının başlangıcıdır.
                        </p>
                        <p>
                            Ekibimiz; yazılım mimarları, DevOps mühendisleri, veri bilimciler ve ürün tasarımcılarından
                            oluşan disiplinler arası bir yapıya sahiptir. Bu çok yönlülük sayesinde, bir projeyi
                            yalnızca teknik açıdan değil; iş hedefleri, kullanıcı deneyimi ve uzun vadeli
                            sürdürülebilirlik açısından da ele alıyoruz.
                        </p>
                    </div>
                </div>
            </div>


            <div class="lg:col-span-5 animate-fade-in-up animate-delay-100 lg:sticky lg:top-28">
                <div
                    class="relative group rounded-3xl overflow-hidden shadow-2xl border border-white/50 bg-[#0B2545] aspect-[4/5] min-h-[400px]">
                    <img src="{{ asset('images/tech-hub.jpg') }}" alt="AL Technology Tech Hub"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-[1.2s] ease-out opacity-85">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B2545] via-[#0B2545]/25 to-transparent"></div>

                    Floating glassmorphic badge
                    <div
                        class="absolute bottom-8 left-6 right-6 bg-white/70 backdrop-blur-md border border-white/60 p-6 rounded-2xl shadow-xl hover:-translate-y-1 transition-transform duration-300">
                        <span
                            class="al-font-mono text-xs font-extrabold text-[#FF9F45] tracking-widest mb-1.5 block">MÜHENDİSLİK
                            GÜCÜ</span>
                        <h4 class="text-[#0B2545] font-bold text-lg leading-snug">Geleceğin çözümlerini şimdiden
                            kodlayan yetkin ve çevik mühendislik kadrosu.</h4>
                    </div>
                </div>
            </div>

        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-24 animate-fade-in-up animate-delay-200">

            <div
                class="group bg-white/60 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-8 shadow-sm hover:shadow-xl hover:shadow-[#FF9F45]/5 hover:-translate-y-1 hover:border-[#FF9F45]/30 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#FF9F45]/10 text-[#FF9F45] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            SVG İnovasyon
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <span class="al-font-mono text-xs font-bold text-[#0B2545]/30">01 / DEĞER</span>
                    </div>
                    <h3
                        class="al-font-display text-xl font-bold text-[#0B2545] mb-3 group-hover:text-[#FF9F45] transition-colors duration-300">
                        Sürekli Ar-Ge</h3>
                    <p class="text-sm text-[#0B2545]/70 leading-relaxed">Dünyadaki en yeni teknoloji trendlerini ve
                        mimari yaklaşımları henüz olgunlaşmadan sistemlerimize entegre ediyoruz.</p>
                </div>
            </div>


            <div
                class="group bg-white/60 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-8 shadow-sm hover:shadow-xl hover:shadow-[#2F6FED]/5 hover:-translate-y-1 hover:border-[#2F6FED]/30 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#2F6FED]/10 text-[#2F6FED] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            SVG Güvenilirlik
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <span class="al-font-mono text-xs font-bold text-[#0B2545]/30">02 / DEĞER</span>
                    </div>
                    <h3
                        class="al-font-display text-xl font-bold text-[#0B2545] mb-3 group-hover:text-[#2F6FED] transition-colors duration-300">
                        Sıfır Risk Politikası</h3>
                    <p class="text-sm text-[#0B2545]/70 leading-relaxed">Veri güvenliğini ve kesintisiz operasyonu şansa
                        bırakmıyor, her katmanda yedekli mimariler kurguluyoruz.</p>
                </div>
            </div>


            <div
                class="group bg-white/60 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl p-8 shadow-sm hover:shadow-xl hover:shadow-[#0B2545]/5 hover:-translate-y-1 hover:border-[#0B2545]/30 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#0B2545]/10 text-[#0B2545] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            SVG Şeffaflık
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <span class="al-font-mono text-xs font-bold text-[#0B2545]/30">03 / DEĞER</span>
                    </div>
                    <h3
                        class="al-font-display text-xl font-bold text-[#0B2545] mb-3 group-hover:text-[#0B2545] transition-colors duration-300">
                        Açık İletişim</h3>
                    <p class="text-sm text-[#0B2545]/70 leading-relaxed">Projelerimizin her aşamasını ölçülebilir
                        metriklerle raporluyor, süreçleri iş ortaklarımıza anlık sunuyoruz.</p>
                </div>
            </div>
        </div>


        <div class="mt-28 animate-fade-in-up animate-delay-300">
            <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-3">RAKAMLARLA</p>
            <h2 class="al-font-display text-3xl md:text-4xl font-extrabold text-[#0B2545] mb-10">
                Büyümemizin Kısa Özeti
            </h2>
            <div
                class="grid grid-cols-2 md:grid-cols-4 gap-6 bg-white/60 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-8 md:p-12 shadow-xl shadow-[#0B2545]/5">
                <div class="text-center group border-r border-[#0B2545]/5 last:border-none last:pr-0 pr-4 md:pr-0">
                    <p
                        class="al-font-display text-5xl md:text-6xl font-extrabold text-[#0B2545] group-hover:scale-110 transition-transform duration-500 ease-out">
                        12+</p>
                    <p class="al-font-mono text-[11px] tracking-widest text-[#0B2545]/60 mt-3 font-semibold">YIL DENEYİM
                    </p>
                </div>
                <div class="text-center group border-r border-[#0B2545]/5 last:border-none last:pr-0 pr-4 md:pr-0">
                    <p
                        class="al-font-display text-5xl md:text-6xl font-extrabold text-[#2F6FED] group-hover:scale-110 transition-transform duration-500 ease-out">
                        240+</p>
                    <p class="al-font-mono text-[11px] tracking-widest text-[#0B2545]/60 mt-3 font-semibold">TAMAMLANAN
                        PROJE</p>
                </div>
                <div class="text-center group border-r border-[#0B2545]/5 last:border-none last:pr-0 pr-4 md:pr-0">
                    <p
                        class="al-font-display text-5xl md:text-6xl font-extrabold text-[#FF9F45] group-hover:scale-110 transition-transform duration-500 ease-out">
                        40+</p>
                    <p class="al-font-mono text-[11px] tracking-widest text-[#0B2545]/60 mt-3 font-semibold">UZMAN EKİP
                    </p>
                </div>
                <div class="text-center group">
                    <p
                        class="al-font-display text-5xl md:text-6xl font-extrabold text-[#0B2545] group-hover:scale-110 transition-transform duration-500 ease-out">
                        98%</p>
                    <p class="al-font-mono text-[11px] tracking-widest text-[#0B2545]/60 mt-3 font-semibold">MÜŞTERİ
                        MEMNUNİYETİ</p>
                </div>
            </div>
        </div>


        <div class="mt-28 animate-fade-in-up animate-delay-400">
            <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-3">YOLCULUĞUMUZ</p>
            <h2 class="al-font-display text-3xl md:text-4xl font-extrabold text-[#0B2545] mb-10">
                Kısa Bir Zaman Yolculuğu
            </h2>

            <div class="relative pl-10 md:pl-12">

                <div class="absolute left-4 md:left-5 top-2 bottom-2 w-0.5 bg-[#0B2545]/15"></div>


                <div class="relative mb-12 group">

                    <span
                        class="absolute left-2 md:left-3 top-1.5 w-4.5 h-4.5 rounded-full bg-white border-4 border-[#FF9F45] shadow-md group-hover:scale-125 transition-transform duration-300 z-10"></span>
                    <div class="pl-4 ml-3">
                        <p class="al-font-mono text-xs font-bold text-[#FF9F45] tracking-widest mb-1">KURULUŞ</p>
                        <h3
                            class="al-font-display text-xl font-bold text-[#0B2545] mb-2 group-hover:text-[#FF9F45] transition-colors duration-300">
                            İlk adım atıldı</h3>
                        <p class="text-[#0B2545]/70 text-sm md:text-base leading-relaxed max-w-2xl font-normal">
                            Küçük bir ekip ve büyük bir vizyonla yola çıktık. İlk projelerimizde yerel işletmelere özel
                            yazılım çözümleri sunarak sektördeki yerimizi almaya başladık.
                        </p>
                    </div>
                </div>


                <div class="relative mb-12 group">

                    <span
                        class="absolute left-2 md:left-3 top-1.5 w-4.5 h-4.5 rounded-full bg-white border-4 border-[#2F6FED] shadow-md group-hover:scale-125 transition-transform duration-300 z-10"></span>
                    <div class="pl-4 ml-3">
                        <p class="al-font-mono text-xs font-bold text-[#2F6FED] tracking-widest mb-1">BÜYÜME</p>
                        <h3
                            class="al-font-display text-xl font-bold text-[#0B2545] mb-2 group-hover:text-[#2F6FED] transition-colors duration-300">
                            Bulut altyapısına geçiş</h3>
                        <p class="text-[#0B2545]/70 text-sm md:text-base leading-relaxed max-w-2xl font-normal">
                            Artan proje hacmiyle birlikte ekibimizi genişlettik ve bulut tabanlı altyapı çözümlerinde
                            uzmanlaşarak kurumsal müşterilere hizmet vermeye başladık.
                        </p>
                    </div>
                </div>


                <div class="relative mb-12 group">

                    <span
                        class="absolute left-2 md:left-3 top-1.5 w-4.5 h-4.5 rounded-full bg-white border-4 border-[#0B2545] shadow-md group-hover:scale-125 transition-transform duration-300 z-10"></span>
                    <div class="pl-4 ml-3">
                        <p class="al-font-mono text-xs font-bold text-[#0B2545] tracking-widest mb-1">STANDARDİZASYON
                        </p>
                        <h3
                            class="al-font-display text-xl font-bold text-[#0B2545] mb-2 group-hover:text-[#0B2545] transition-colors duration-300">
                            Akreditasyon süreçleri</h3>
                        <p class="text-[#0B2545]/70 text-sm md:text-base leading-relaxed max-w-2xl font-normal">
                            ISO/IEC 27001 ve ISO 9001 standartlarına uyum sağlayarak süreçlerimizi kurumsallaştırdık,
                            veri güvenliği ve kalite yönetiminde ölçülebilir bir çıta belirledik.
                        </p>
                    </div>
                </div>


                <div class="relative group">

                    <span
                        class="absolute left-2 md:left-3 top-1.5 w-4.5 h-4.5 rounded-full bg-white border-4 border-[#FF9F45] shadow-md group-hover:scale-125 transition-transform duration-300 z-10"></span>
                    <div class="pl-4 ml-3">
                        <p class="al-font-mono text-xs font-bold text-[#FF9F45] tracking-widest mb-1">BUGÜN</p>
                        <h3
                            class="al-font-display text-xl font-bold text-[#0B2545] mb-2 group-hover:text-[#FF9F45] transition-colors duration-300">
                            Geleceğe hazır bir ekip</h3>
                        <p class="text-[#0B2545]/70 text-sm md:text-base leading-relaxed max-w-2xl font-normal">
                            Bugün yapay zeka entegrasyonlarından siber güvenliğe, edge computing'den siber-fiziksel
                            sistemlere kadar geniş bir uzmanlık yelpazesiyle müşterilerimizin yanındayız.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div
            class="mt-28 bg-[#0B2545] rounded-3xl p-12 md:p-16 text-center relative overflow-hidden animate-fade-in-up animate-delay-400 border border-white/5 shadow-2xl">
            <div class="absolute inset-0 al-grid-bg pointer-events-none opacity-25"></div>
            <div class="absolute -top-12 -left-12 w-48 h-48 rounded-full bg-[#2F6FED]/10 blur-3xl pointer-events-none">
            </div>
            <div
                class="absolute -bottom-12 -right-12 w-48 h-48 rounded-full bg-[#FF9F45]/10 blur-3xl pointer-events-none">
            </div>
            <div class="relative z-10">
                <h2 class="al-font-display text-3xl md:text-4xl font-extrabold text-white mb-4 tracking-tight">
                    Bizimle çalışmaya hazır mısınız?
                </h2>
                <p class="text-blue-100/70 max-w-xl mx-auto mb-8 text-sm md:text-base leading-relaxed">
                    İhtiyaçlarınızı dinleyelim, projenize en uygun teknoloji yol haritasını birlikte çıkaralım.
                    Geleceğin altyapısını birlikte kuralım.
                </p>

                <button type="button" onclick="Livewire.dispatch('openContactModal')"
                    class="inline-flex items-center gap-2 al-font-mono text-xs font-bold tracking-wider text-[#0B2545] bg-[#FF9F45] hover:bg-white hover:scale-105 transition-all duration-300 rounded-full py-4 px-10 shadow-lg shadow-[#FF9F45]/15">
                    BİZE ULAŞIN
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>
@endsection