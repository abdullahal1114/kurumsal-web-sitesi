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

    @keyframes p-fade-up {
        from {
            opacity: 0;
            transform: translateY(28px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .p-hero-fade {
        animation: p-fade-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* Scroll-reveal: kartlar başlangıçta gizli, .in-view eklenince belirir */
    .p-card {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease, border-color 0.4s ease, translate 0.4s ease;
    }

    .p-card.in-view {
        opacity: 1;
        transform: translateY(0);
    }

    .p-card:hover {
        transform: translateY(-6px);
    }

    .p-card:hover .p-badge {
        transform: scale(1.08);
    }

    .p-badge {
        transition: transform 0.3s ease;
    }


    .p-cta-btn {
        cursor: pointer;
        background: none;
        border: none;
        padding: 0;
    }

    .p-cta-btn:active {
        transform: scale(0.97);
    }
</style>

<div class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF] al-font-body text-[#0B2545] selection:bg-[#FFB347] selection:text-[#0A1830]"
    x-data="{ active: 'all' }">


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
            <a href="{{ route('urunler') }}" class="text-[#0B2545] opacity-100">ÜRÜNLER</a>
            <a href="{{ route('magaza') }}"
                class="hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300">MAĞAZA</a>
        </div>

        <button type="button" onclick="Livewire.dispatch('openQuoteModal')"
            class="al-font-display bg-[#FF9F45] hover:bg-[#ffb066] hover:opacity-90 hover:scale-[1.03] transition-all duration-300 text-[#0A1830] px-6 py-2.5 rounded-full font-bold text-sm tracking-wide">
            FİYAT TEKLİFİ AL
        </button>
    </nav>


    <header class="relative py-24 md:py-28 px-6 overflow-hidden">
        <div class="absolute inset-0 al-grid-bg pointer-events-none"></div>
        <div
            class="absolute top-1/3 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#FF9F45]/50 to-transparent al-pulse">
        </div>
        <div
            class="absolute top-2/3 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#2F6FED]/40 to-transparent al-pulse-delay">
        </div>

        <div class="relative max-w-4xl mx-auto text-center p-hero-fade">
            <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-6">ÜRÜN KATALOĞU</p>
            <h1
                class="al-font-display text-5xl md:text-7xl font-extrabold mb-6 leading-[0.98] tracking-tight text-[#0B2545]">
                Mühendislikle <span class="text-[#2F6FED]">tasarlanan</span> çözümler.
            </h1>
            <p class="max-w-xl mx-auto text-[#0B2545]/60 text-lg leading-relaxed">
                Yazılımdan donanıma, bulut altyapısından siber güvenliğe — işletmenizin
                ihtiyaç duyduğu her katmanda üretim seviyesinde ürünler.
            </p>
        </div>
    </header>


    <div class="max-w-5xl mx-auto px-6 mb-14">
        <div class="flex flex-wrap items-center justify-center gap-3">
            <button @click="active = 'all'"
                :class="active === 'all' ? 'bg-[#0B2545] text-white border-[#0B2545]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#0B2545]/30'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                TÜMÜ
            </button>
            <button @click="active = 'software'"
                :class="active === 'software' ? 'bg-[#2F6FED] text-white border-[#2F6FED]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#2F6FED]/40'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                YAZILIM
            </button>
            <button @click="active = 'cloud'"
                :class="active === 'cloud' ? 'bg-[#0B2545] text-white border-[#0B2545]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#0B2545]/40'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                BULUT
            </button>
            <button @click="active = 'security'"
                :class="active === 'security' ? 'bg-[#D9483F] text-white border-[#D9483F]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#D9483F]/40'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                GÜVENLİK
            </button>
            <button @click="active = 'hardware'"
                :class="active === 'hardware' ? 'bg-[#FF9F45] text-[#0A1830] border-[#FF9F45]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#FF9F45]/50'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                DONANIM
            </button>
            <button @click="active = 'service'"
                :class="active === 'service' ? 'bg-[#64748B] text-white border-[#64748B]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#64748B]/40'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                HİZMET
            </button>
        </div>
    </div>

    <section class="max-w-7xl mx-auto px-6 pb-32">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @php
            $urunler = [
            ['kod' => 'SW', 'kategori' => 'software', 'etiket' => 'YAZILIM', 'renk' => '#2F6FED', 'ad' => 'AL.ERP
            Suite', 'aciklama' => 'Üretimden finansa, tek panelden yönetilen uçtan uca kurumsal kaynak planlama
            yazılımı.', 'specs' => ['Modüler mimari', 'Çoklu şube desteği', 'Açık API']],
            ['kod' => 'CR', 'kategori' => 'software', 'etiket' => 'YAZILIM', 'renk' => '#2F6FED', 'ad' => 'AL.CRM Pro',
            'aciklama' => 'Satış hunisini, müşteri iletişimini ve fırsat takibini tek yerde toplayan CRM platformu.',
            'specs' => ['Otomatik skorlama', 'E-posta entegrasyonu', 'Canlı raporlama']],
            ['kod' => 'AI', 'kategori' => 'software', 'etiket' => 'YAZILIM', 'renk' => '#2F6FED', 'ad' => 'AL.AI
            Otomasyon', 'aciklama' => 'LLM tabanlı doküman işleme motoruyla evrak ve süreç otomasyonunu hızlandırın.',
            'specs' => ['Doğal dil işleme', 'ERP entegrasyonu', '%70 zaman tasarrufu']],
            ['kod' => 'AN', 'kategori' => 'software', 'etiket' => 'YAZILIM', 'renk' => '#2F6FED', 'ad' =>
            'AL.Analytics', 'aciklama' => 'Gerçek zamanlı iş zekası panosuyla verinizi karar noktasına dönüştürün.',
            'specs' => ['Özel dashboard', '50+ veri kaynağı', 'Anlık uyarılar']],
            ['kod' => 'PS', 'kategori' => 'software', 'etiket' => 'YAZILIM', 'renk' => '#2F6FED', 'ad' => 'AL.POS
            Sistemi', 'aciklama' => 'Perakende ve mağaza zincirleri için stok senkronizasyonlu satış noktası çözümü.',
            'specs' => ['Offline çalışma', 'Stok senkronu', 'Çoklu ödeme']],

            ['kod' => 'CS', 'kategori' => 'cloud', 'etiket' => 'BULUT', 'renk' => '#0B2545', 'ad' => 'AL.Cloud Starter',
            'aciklama' => 'Küçük ve orta ölçekli ekipler için hazır yapılandırılmış bulut sunucu paketi.', 'specs' =>
            ['4 vCPU / 8GB RAM', '100GB SSD', 'Aylık yedekleme']],
            ['kod' => 'CE', 'kategori' => 'cloud', 'etiket' => 'BULUT', 'renk' => '#0B2545', 'ad' => 'AL.Cloud
            Enterprise', 'aciklama' => 'Yüksek trafikli iş yükleri için otomatik ölçeklenen, çoklu bölge kurumsal
            altyapı.', 'specs' => ['Oto. ölçeklendirme', 'Çoklu bölge', '%99.9 SLA']],
            ['kod' => 'BV', 'kategori' => 'cloud', 'etiket' => 'BULUT', 'renk' => '#0B2545', 'ad' => 'AL.Backup Vault',
            'aciklama' => '3-2-1 yedekleme mimarisiyle veri kaybı riskini sıfıra indiren felaket kurtarma servisi.',
            'specs' => ['Saatlik anlık görüntü', '3-2-1 mimari', '15dk kurtarma']],

            ['kod' => 'SF', 'kategori' => 'security', 'etiket' => 'GÜVENLİK', 'renk' => '#D9483F', 'ad' => 'AL.Shield
            Firewall', 'aciklama' => 'Derin paket incelemesi ve sıfırıncı gün korumasıyla ağınızı çevreleyen yeni nesil
            güvenlik duvarı.', 'specs' => ['Derin paket incelemesi', 'Sıfırıncı gün koruması', 'Canlı tehdit
            istihbaratı']],
            ['kod' => 'SC', 'kategori' => 'security', 'etiket' => 'GÜVENLİK', 'renk' => '#D9483F', 'ad' => 'AL.SOC
            7/24', 'aciklama' => 'Uzman analist ekibiyle sisteminizi kesintisiz izleyen güvenlik operasyon merkezi
            hizmeti.', 'specs' => ['7/24 canlı izleme', 'Olay müdahale ekibi', 'Aylık güvenlik raporu']],
            ['kod' => 'VP', 'kategori' => 'security', 'etiket' => 'GÜVENLİK', 'renk' => '#D9483F', 'ad' => 'AL.VPN
            Kurumsal', 'aciklama' => 'Sıfır güven mimarisiyle çalışan, sınırsız kullanıcı destekli uzaktan erişim
            çözümü.', 'specs' => ['Sıfır güven mimarisi', 'Çok faktörlü doğrulama', 'Sınırsız kullanıcı']],

            ['kod' => 'NS', 'kategori' => 'hardware', 'etiket' => 'DONANIM', 'renk' => '#FF9F45', 'ad' => 'AL.Net Switch
            Pro', 'aciklama' => 'Kurumsal ağlar için 48 portlu, Layer 3 yönlendirmeli yönetilebilir ağ anahtarı.',
            'specs' => ['48x1G + 4x10G SFP+', 'Layer 3 yönlendirme', 'PoE+ desteği']],
            ['kod' => 'ES', 'kategori' => 'hardware', 'etiket' => 'DONANIM', 'renk' => '#FF9F45', 'ad' => 'AL.Edge
            Sunucu', 'aciklama' => 'Zorlu ortam koşullarına dayanıklı, düşük gecikmeli kompakt edge computing ünitesi.',
            'specs' => ['Endüstriyel şasi', '-20°C / 60°C aralık', 'Düşük gecikme mimarisi']],
            ['kod' => 'IG', 'kategori' => 'hardware', 'etiket' => 'DONANIM', 'renk' => '#FF9F45', 'ad' => 'AL.IoT
            Gateway', 'aciklama' => '200’ün üzerinde cihazı tek noktadan yöneten endüstriyel IoT ağ geçidi.', 'specs' =>
            ['200+ cihaz desteği', 'MQTT / Modbus', 'Uzaktan yönetim']],

            ['kod' => 'D3', 'kategori' => 'service', 'etiket' => 'HİZMET', 'renk' => '#64748B', 'ad' => 'AL.Destek 360',
            'aciklama' => 'Sistemlerinizin sağlığını sürekli takip eden, uçtan uca yönetilen BT destek paketi.', 'specs'
            => ['7/24 destek hattı', 'Ort. <5dk müdahale', 'Aylık sağlık raporu' ]], ];
                $kategoriServisEtiketi=[ 'software'=>
                'Yazılım Çözümleri',
                'cloud' => 'Cloud Sistemler',
                'security' => 'Siber Güvenlik',
                'hardware' => 'Donanım',
                'service' => 'Teknik Destek',
                ];
                @endphp

                @foreach($urunler as $urun)
                <div x-show="active === 'all' || active === '{{ $urun['kategori'] }}'"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    class="p-card group bg-white/70 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-500"
                    style="border-left: 3px solid {{ $urun['renk'] }};">
                    <div class="p-7 flex flex-col h-full">
                        <div class="flex items-center justify-between mb-5">
                            <div class="p-badge w-11 h-11 rounded-xl flex items-center justify-center al-font-mono text-xs font-bold text-white shrink-0"
                                style="background-color: {{ $urun['renk'] }};">
                                {{ $urun['kod'] }}
                            </div>
                            <span class="al-font-mono text-[10px] tracking-widest font-bold"
                                style="color: {{ $urun['renk'] }};">
                                {{ $urun['etiket'] }}
                            </span>
                        </div>

                        <h3
                            class="al-font-display text-xl font-bold text-[#0B2545] mb-2 group-hover:text-[#2F6FED] transition-colors duration-300">
                            {{ $urun['ad'] }}
                        </h3>
                        <p class="text-sm text-[#0B2545]/60 leading-relaxed mb-6 flex-grow">
                            {{ $urun['aciklama'] }}
                        </p>

                        <div
                            class="al-font-mono text-[11px] text-[#0B2545]/50 space-y-1.5 mb-6 pt-5 border-t border-[#0B2545]/10">
                            @foreach($urun['specs'] as $spec)
                            <div class="flex items-center gap-2">
                                <span class="w-1 h-1 rounded-full shrink-0"
                                    style="background-color: {{ $urun['renk'] }};"></span>
                                {{ $spec }}
                            </div>
                            @endforeach
                        </div>

                        <button type="button"
                            @click="Livewire.dispatch('openQuoteModal', { product: @js($urun['ad']), service: @js($kategoriServisEtiketi[$urun['kategori']]) })"
                            class="p-cta-btn al-font-mono text-xs font-bold text-[#0B2545] group-hover:text-[#2F6FED] flex items-center gap-1.5 transition-colors duration-300">
                            TEKLİF AL <span
                                class="transform group-hover:translate-x-1 transition-transform duration-300">→</span>
                        </button>
                    </div>
                </div>
                @endforeach

        </div>
    </section>


    <footer class="relative bg-[#0B2545] text-white overflow-hidden">
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px); background-size: 56px 56px; mask-image: radial-gradient(ellipse 80% 60% at 50% 50%, black 40%, transparent 100%);">
        </div>
        <div
            class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#FF9F45]/50 to-transparent al-pulse">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-8 pt-20 pb-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-2">
                    <div class="al-font-display text-2xl font-bold tracking-tight mb-4">
                        AL<span class="text-[#FF9F45]">.</span>TECHNOLOGY
                    </div>
                    <p class="text-blue-100/60 text-sm leading-relaxed max-w-sm">
                        Dijital dönüşümde profesyonel çözümler sunan teknoloji partneriniz.
                        Yazılım, cloud ve teknik destek alanlarında uçtan uca hizmet.
                    </p>
                </div>
                <div>
                    <p class="al-font-mono text-xs tracking-widest text-[#FF9F45] mb-5">KURUMSAL</p>
                    <ul class="space-y-3 text-sm text-blue-100/60">
                        <li><a href="{{ route('kurumsal.hakkimizda') }}"
                                class="hover:text-white transition-colors duration-300">Hakkımızda</a></li>
                        <li><a href="{{ route('referanslar') }}"
                                class="hover:text-white transition-colors duration-300">Referanslar</a></li>
                        <li><a href="{{ route('kurumsal.haberler') }}"
                                class="hover:text-white transition-colors duration-300">Haberler</a></li>
                        <li><a href="{{ route('kurumsal.belgeler') }}"
                                class="hover:text-white transition-colors duration-300">Belgeler</a></li>
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
            </div>
        </div>
    </footer>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => entry.target.classList.add('in-view'), i * 60);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        document.querySelectorAll('.p-card').forEach(card => observer.observe(card));
    });
</script>
@endsection