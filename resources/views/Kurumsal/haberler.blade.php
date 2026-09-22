@extends('layouts.full')

@section('content')
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

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.95) translateY(15px);
        }

        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    .animate-news-card {
        animation: scaleIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .al-filter-pill {
        transition: all 0.3s ease;
    }

    .al-filter-pill.active {
        background: #0B2545;
        color: #fff;
    }

    .al-featured-grid {
        background-image: linear-gradient(rgba(255, 255, 255, 0.08) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.08) 1px, transparent 1px);
        background-size: 34px 34px;
    }
</style>

<div class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF] al-font-body text-[#0B2545]">


    <x-site-navbar active="haberler" />

    <div class="max-w-6xl mx-auto py-10 sm:py-20 px-4 sm:px-6" x-data="{ cat: 'tumu' }">

        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-8 sm:mb-12">
            <div>
                <span class="al-font-mono text-xs text-[#2F6FED] tracking-widest font-bold">GÜNCEL</span>
                <h1 class="al-font-display text-3xl sm:text-5xl md:text-6xl font-extrabold mt-1.5 sm:mt-2 tracking-tight text-[#0B2545]">
                    Teknoloji Gündemi
                </h1>
                <p class="al-font-body text-[#0B2545]/60 text-sm sm:text-base md:text-lg max-w-xl mt-2 sm:mt-4">
                    Ürün lansmanları, Ar-Ge başarıları ve şirket içi gelişmeler — AL.TECHNOLOGY'den en taze haberler
                    burada.
                </p>
            </div>

            <div class="flex items-center gap-2 overflow-x-auto no-scrollbar py-1 sm:py-0 sm:flex-wrap al-font-mono text-[11px] tracking-widest -mx-4 px-4 sm:mx-0 sm:px-0">
                <button type="button" @click="cat = 'tumu'" :class="cat === 'tumu' ? 'active' : 'text-[#0B2545]/60'"
                    class="al-filter-pill whitespace-nowrap shrink-0 cursor-pointer rounded-full px-3.5 sm:px-4 py-2 border border-[#0B2545]/10 bg-white/70 hover:bg-white">TÜMÜ</button>
                <button type="button" @click="cat = 'altyapi'"
                    :class="cat === 'altyapi' ? 'active' : 'text-[#0B2545]/60'"
                    class="al-filter-pill whitespace-nowrap shrink-0 cursor-pointer rounded-full px-3.5 sm:px-4 py-2 border border-[#0B2545]/10 bg-white/70 hover:bg-white">ALTYAPI</button>
                <button type="button" @click="cat = 'yapay-zeka'"
                    :class="cat === 'yapay-zeka' ? 'active' : 'text-[#0B2545]/60'"
                    class="al-filter-pill whitespace-nowrap shrink-0 cursor-pointer rounded-full px-3.5 sm:px-4 py-2 border border-[#0B2545]/10 bg-white/70 hover:bg-white">YAPAY
                    ZEKA</button>
                <button type="button" @click="cat = 'ar-ge'" :class="cat === 'ar-ge' ? 'active' : 'text-[#0B2545]/60'"
                    class="al-filter-pill whitespace-nowrap shrink-0 cursor-pointer rounded-full px-3.5 sm:px-4 py-2 border border-[#0B2545]/10 bg-white/70 hover:bg-white">AR-GE</button>
                <button type="button" @click="cat = 'etkinlik'"
                    :class="cat === 'etkinlik' ? 'active' : 'text-[#0B2545]/60'"
                    class="al-filter-pill whitespace-nowrap shrink-0 cursor-pointer rounded-full px-3.5 sm:px-4 py-2 border border-[#0B2545]/10 bg-white/70 hover:bg-white">ETKİNLİK</button>
            </div>
        </div>

        <div
            class="animate-news-card mb-8 relative bg-[#0B2545] rounded-3xl overflow-hidden shadow-xl shadow-[#0B2545]/10 group cursor-pointer">
            <div class="absolute inset-0 al-featured-grid opacity-60 pointer-events-none"></div>
            <div
                class="absolute inset-0 bg-gradient-to-tr from-[#2F6FED]/20 via-transparent to-[#FF9F45]/10 pointer-events-none">
            </div>
            <div class="relative z-10 p-5 sm:p-8 md:p-14 grid grid-cols-1 md:grid-cols-5 gap-6 sm:gap-8 items-center">
                <div class="md:col-span-3">
                    <div class="flex items-center gap-3 mb-3 sm:mb-5">
                        <span
                            class="al-font-mono text-[10px] sm:text-[11px] tracking-widest font-bold bg-[#FF9F45] text-[#0B2545] rounded-full px-2.5 sm:px-3 py-1">MANŞET</span>
                        <span class="al-font-mono text-xs text-blue-100/50">22.07.2026</span>
                    </div>
                    <h2
                        class="al-font-display text-xl sm:text-3xl md:text-4xl font-extrabold text-white mb-3 sm:mb-5 leading-tight group-hover:text-[#FF9F45] transition-colors duration-300">
                        AL.TECHNOLOGY, Ulusal Bulut Girişimi'nde Stratejik Ortak Seçildi
                    </h2>
                    <p class="text-blue-100/70 text-xs sm:text-sm md:text-base leading-relaxed mb-4 sm:mb-6">
                        Kamu ve özel sektöre yönelik yerli bulut altyapısını genişletmeyi hedefleyen ulusal girişim
                        kapsamında, veri egemenliği ve düşük gecikme süresi odaklı çözümlerimizle stratejik ortak olarak
                        seçildik.
                    </p>
                    <span class="text-xs font-bold text-[#FF9F45] flex items-center gap-1.5">Haberin Devamı <span
                            class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
                <div class="md:col-span-2 hidden md:flex items-center justify-center">
                    <div class="al-font-display text-[120px] font-extrabold text-white/10 leading-none select-none">01
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">

            <div x-show="cat === 'tumu' || cat === 'altyapi'" x-transition.opacity.duration.300ms
                class="animate-news-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2F6FED]/30 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="al-font-mono text-xs text-[#FF9F45] font-bold">ALTYAPI</span>
                        <span class="al-font-mono text-xs text-[#0B2545]/40">02.07.2026</span>
                    </div>
                    <h3
                        class="al-font-display text-2xl font-bold mb-4 text-[#0B2545] group-hover:text-[#2F6FED] transition-colors duration-300">
                        Yeni Nesil Edge Sunucu Noktamız Devreye Alındı</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Kritik iş yükleri ve gerçek zamanlı veri analizleri için Türkiye ve Avrupa merkezli veri
                        noktalarımıza bir yenisini ekledik. Gecikme sürelerini %35 azalttık.
                    </p>
                </div>
                <div class="p-8 pt-0">
                    <span
                        class="text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] transition-colors flex items-center gap-1 cursor-pointer">Devamını
                        Oku <span class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
            </div>


            <div x-show="cat === 'tumu' || cat === 'yapay-zeka'" x-transition.opacity.duration.300ms
                class="animate-news-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2F6FED]/30 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between"
                style="animation-delay: 0.1s;">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="al-font-mono text-xs text-[#2F6FED] font-bold">YAPAY ZEKA</span>
                        <span class="al-font-mono text-xs text-[#0B2545]/40">15.06.2026</span>
                    </div>
                    <h3
                        class="al-font-display text-2xl font-bold mb-4 text-[#0B2545] group-hover:text-[#2F6FED] transition-colors duration-300">
                        AL.AI Otomasyon Modülü Yayında</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Mevcut ERP altyapılarına tam entegre çalışabilen yeni LLM tabanlı otomasyon katmanımız
                        sayesinde, kurumsal şirketlerin evrak işleme hızını 4 kat artırıyoruz.
                    </p>
                </div>
                <div class="p-8 pt-0">
                    <span
                        class="text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] transition-colors flex items-center gap-1 cursor-pointer">Devamını
                        Oku <span class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
            </div>


            <div x-show="cat === 'tumu' || cat === 'ar-ge'" x-transition.opacity.duration.300ms
                class="animate-news-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2F6FED]/30 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between"
                style="animation-delay: 0.2s;">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="al-font-mono text-xs text-[#0B2545]/50 font-bold">AR-GE</span>
                        <span class="al-font-mono text-xs text-[#0B2545]/40">28.05.2026</span>
                    </div>
                    <h3
                        class="al-font-display text-2xl font-bold mb-4 text-[#0B2545] group-hover:text-[#2F6FED] transition-colors duration-300">
                        Sürdürülebilir Yeşil Kod Başarısı</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Sunucu işlemci optimizasyonu sağlayan algoritmalarımızla, veri merkezlerindeki karbon ayak izini
                        azaltan çevre dostu yazılım geliştirme ödülünü aldık.
                    </p>
                </div>
                <div class="p-8 pt-0">
                    <span
                        class="text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] transition-colors flex items-center gap-1 cursor-pointer">Devamını
                        Oku <span class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
            </div>


            <div x-show="cat === 'tumu'" x-transition.opacity.duration.300ms
                class="animate-news-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2F6FED]/30 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between"
                style="animation-delay: 0.3s;">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="al-font-mono text-xs text-[#FF9F45] font-bold">GÜVENLİK</span>
                        <span class="al-font-mono text-xs text-[#0B2545]/40">10.05.2026</span>
                    </div>
                    <h3
                        class="al-font-display text-2xl font-bold mb-4 text-[#0B2545] group-hover:text-[#2F6FED] transition-colors duration-300">
                        ISO 27001 Bilgi Güvenliği Sertifikasını Yeniledik</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Bağımsız denetim sürecinden başarıyla geçerek bilgi güvenliği yönetim sistemimizi bir yıl daha
                        uzattık; süreçlerimizi sıfırdan gözden geçirdik.
                    </p>
                </div>
                <div class="p-8 pt-0">
                    <span
                        class="text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] transition-colors flex items-center gap-1 cursor-pointer">Devamını
                        Oku <span class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
            </div>


            <div x-show="cat === 'tumu' || cat === 'etkinlik'" x-transition.opacity.duration.300ms
                class="animate-news-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2F6FED]/30 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between"
                style="animation-delay: 0.4s;">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="al-font-mono text-xs text-[#2F6FED] font-bold">ETKİNLİK</span>
                        <span class="al-font-mono text-xs text-[#0B2545]/40">22.04.2026</span>
                    </div>
                    <h3
                        class="al-font-display text-2xl font-bold mb-4 text-[#0B2545] group-hover:text-[#2F6FED] transition-colors duration-300">
                        TEKNOFEST'te Kendi Standımızla Yer Aldık</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Otonom bulut izleme sistemimizi sergilediğimiz standımızda, ziyaretçilerle birebir teknik
                        sohbetler gerçekleştirdik.
                    </p>
                </div>
                <div class="p-8 pt-0">
                    <span
                        class="text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] transition-colors flex items-center gap-1 cursor-pointer">Devamını
                        Oku <span class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
            </div>


            <div x-show="cat === 'tumu'" x-transition.opacity.duration.300ms
                class="animate-news-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2F6FED]/30 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between"
                style="animation-delay: 0.5s;">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="al-font-mono text-xs text-[#0B2545]/50 font-bold">ŞİRKET HABERİ</span>
                        <span class="al-font-mono text-xs text-[#0B2545]/40">05.04.2026</span>
                    </div>
                    <h3
                        class="al-font-display text-2xl font-bold mb-4 text-[#0B2545] group-hover:text-[#2F6FED] transition-colors duration-300">
                        Mühendislik Ekibimiz 20 Kişiye Ulaştı</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Büyüyen proje hacmimize paralel olarak backend, bulut ve yapay zeka alanlarında yeni mühendisler
                        ekibimize katıldı.
                    </p>
                </div>
                <div class="p-8 pt-0">
                    <span
                        class="text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] transition-colors flex items-center gap-1 cursor-pointer">Devamını
                        Oku <span class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
            </div>


            <div x-show="cat === 'tumu' || cat === 'altyapi'" x-transition.opacity.duration.300ms
                class="animate-news-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2F6FED]/30 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between"
                style="animation-delay: 0.6s;">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="al-font-mono text-xs text-[#FF9F45] font-bold">ALTYAPI</span>
                        <span class="al-font-mono text-xs text-[#0B2545]/40">18.03.2026</span>
                    </div>
                    <h3
                        class="al-font-display text-2xl font-bold mb-4 text-[#0B2545] group-hover:text-[#2F6FED] transition-colors duration-300">
                        Hibrit Bulut Ortaklığımızı Genişlettik</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Kurumsal müşterilerimizin yerinde ve bulut altyapılarını tek panelden yönetebilmesi için hibrit
                        bulut çözüm ortaklığımızı yeni bölgelere taşıdık.
                    </p>
                </div>
                <div class="p-8 pt-0">
                    <span
                        class="text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] transition-colors flex items-center gap-1 cursor-pointer">Devamını
                        Oku <span class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
            </div>


            <div x-show="cat === 'tumu' || cat === 'yapay-zeka'" x-transition.opacity.duration.300ms
                class="animate-news-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2F6FED]/30 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between"
                style="animation-delay: 0.7s;">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="al-font-mono text-xs text-[#2F6FED] font-bold">YAPAY ZEKA</span>
                        <span class="al-font-mono text-xs text-[#0B2545]/40">30.01.2026</span>
                    </div>
                    <h3
                        class="al-font-display text-2xl font-bold mb-4 text-[#0B2545] group-hover:text-[#2F6FED] transition-colors duration-300">
                        AL.Vision Görüntü Tanıma Motoru Duyuruldu</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Üretim hattı kalite kontrolünde kullanılabilecek, düşük gecikmeli ve yüksek doğruluklu görüntü
                        tanıma motorumuzu pilot müşterilerle test etmeye başladık.
                    </p>
                </div>
                <div class="p-8 pt-0">
                    <span
                        class="text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] transition-colors flex items-center gap-1 cursor-pointer">Devamını
                        Oku <span class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
            </div>


            <div x-show="cat === 'tumu' || cat === 'ar-ge'" x-transition.opacity.duration.300ms
                class="animate-news-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2F6FED]/30 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between"
                style="animation-delay: 0.8s;">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="al-font-mono text-xs text-[#0B2545]/50 font-bold">AR-GE</span>
                        <span class="al-font-mono text-xs text-[#0B2545]/40">12.01.2026</span>
                    </div>
                    <h3
                        class="al-font-display text-2xl font-bold mb-4 text-[#0B2545] group-hover:text-[#2F6FED] transition-colors duration-300">
                        Otonom Ölçekleme Algoritmamıza Patent Onayı</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Sunucu yükünü öngörerek kaynak dağıtımını otomatik optimize eden algoritmamız için patent
                        başvurumuz resmi olarak onaylandı.
                    </p>
                </div>
                <div class="p-8 pt-0">
                    <span
                        class="text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] transition-colors flex items-center gap-1 cursor-pointer">Devamını
                        Oku <span class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
            </div>


            <div x-show="cat === 'tumu' || cat === 'etkinlik'" x-transition.opacity.duration.300ms
                class="animate-news-card bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2F6FED]/30 hover:-translate-y-1 transition-all duration-500 group flex flex-col justify-between"
                style="animation-delay: 0.9s;">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-4">
                        <span class="al-font-mono text-xs text-[#2F6FED] font-bold">ETKİNLİK</span>
                        <span class="al-font-mono text-xs text-[#0B2545]/40">08.12.2025</span>
                    </div>
                    <h3
                        class="al-font-display text-2xl font-bold mb-4 text-[#0B2545] group-hover:text-[#2F6FED] transition-colors duration-300">
                        Fintech Summit İstanbul'da Konuşmacıydık</h3>
                    <p class="text-[#0B2545]/60 text-sm leading-relaxed">
                        Bulut güvenliği ve ölçeklenebilir mimariler üzerine yaptığımız sunum, finans sektöründen
                        katılımcılardan yoğun ilgi gördü.
                    </p>
                </div>
                <div class="p-8 pt-0">
                    <span
                        class="text-xs font-bold text-[#2F6FED] group-hover:text-[#FF9F45] transition-colors flex items-center gap-1 cursor-pointer">Devamını
                        Oku <span class="transform group-hover:translate-x-1 transition-transform">→</span></span>
                </div>
            </div>
        </div>


        <div x-show="!(cat === 'tumu' || cat === 'altyapi' || cat === 'yapay-zeka' || cat === 'ar-ge' || cat === 'etkinlik')"
            class="text-center py-16">
            <p class="al-font-body text-[#0B2545]/40">Bu kategoride henüz haber bulunmuyor.</p>
        </div>


        <div class="flex justify-center mt-12">
            <button
                class="al-font-mono text-xs tracking-widest text-[#0B2545]/60 hover:text-[#0B2545] border border-[#0B2545]/15 hover:border-[#0B2545]/30 bg-white/60 hover:bg-white rounded-full px-8 py-3.5 transition-all duration-300">
                DAHA FAZLA HABER YÜKLE
            </button>
        </div>


        <div class="mt-14 sm:mt-24 bg-[#0B2545] rounded-3xl px-5 sm:px-8 md:px-14 py-8 sm:py-12 relative">
            <div class="absolute inset-0 rounded-3xl overflow-hidden pointer-events-none">
                <div class="absolute inset-0 bg-gradient-to-tr from-[#2F6FED]/15 via-transparent to-[#FF9F45]/10"></div>
            </div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-center md:text-left">
                    <span class="al-font-mono text-xs text-[#FF9F45] tracking-widest font-bold">BÜLTENİMİZE
                        KATILIN</span>
                    <h3 class="al-font-display text-xl sm:text-2xl md:text-3xl font-extrabold text-white mt-1.5 sm:mt-2">Haberleri
                        kaçırmayın.</h3>
                    <p class="text-blue-100/50 text-xs sm:text-sm mt-1.5 sm:mt-2">Ayda bir, sadece işe yarayan gelişmeler — spam yok.</p>
                </div>
                <form class="flex w-full md:w-auto gap-3 flex-col sm:flex-row">
                    <input type="email" placeholder="e-posta adresiniz"
                        class="al-font-body text-sm rounded-full px-5 py-3.5 bg-white/10 border border-white/20 text-white placeholder-white/40 focus:outline-none focus:border-[#2F6FED] w-full sm:w-64" />
                    <button type="submit"
                        class="w-full sm:w-auto al-font-mono text-xs tracking-widest font-bold bg-[#FF9F45] hover:bg-[#ffb066] text-[#0B2545] rounded-full px-6 py-3.5 transition-colors duration-300 whitespace-nowrap">
                        ABONE OL
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection