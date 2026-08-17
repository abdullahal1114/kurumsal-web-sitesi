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

    @keyframes m-pulse-line {

        0%,
        100% {
            opacity: 0.15;
        }

        50% {
            opacity: 0.55;
        }
    }

    .m-pulse {
        animation: m-pulse-line 4s ease-in-out infinite;
    }

    .m-pulse-delay {
        animation: m-pulse-line 4s ease-in-out infinite;
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

    @keyframes m-fade-up {
        from {
            opacity: 0;
            transform: translateY(28px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .m-hero-fade {
        animation: m-fade-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* Scroll-reveal kartlar */
    .m-card {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease, border-color 0.4s ease;
    }

    .m-card.in-view {
        opacity: 1;
        transform: translateY(0);
    }

    .m-card:hover {
        transform: translateY(-6px);
    }

    .m-card:hover .m-badge {
        transform: scale(1.08) rotate(-3deg);
    }

    .m-badge {
        transition: transform 0.3s ease;
    }

    /* Sepet ikonu titreşimi */
    @keyframes m-cart-bump {
        0% {
            transform: scale(1);
        }

        30% {
            transform: scale(1.35);
        }

        60% {
            transform: scale(0.9);
        }

        100% {
            transform: scale(1);
        }
    }

    .m-cart-bump {
        animation: m-cart-bump 0.45s ease;
    }

    /* Sepete eklendi checkmark geçişi */
    .m-btn-label,
    .m-btn-check {
        transition: opacity 0.25s ease, transform 0.25s ease;
    }

    
    @keyframes m-card-added-pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(47, 111, 237, 0.35);
        }

        70% {
            box-shadow: 0 0 0 14px rgba(47, 111, 237, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(47, 111, 237, 0);
        }
    }

    .m-card-added {
        animation: m-card-added-pulse 0.9s ease-out;
    }

    /* İndirim şeridi parıltısı */
    @keyframes m-shine {
        0% {
            transform: translateX(-120%) skewX(-15deg);
        }

        100% {
            transform: translateX(220%) skewX(-15deg);
        }
    }

    .m-shine::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 40%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.55), transparent);
        animation: m-shine 2.8s ease-in-out infinite;
        animation-delay: 1s;
    }

    [x-cloak] {
        display: none !important;
    }
</style>

@php
// Sayfa ilk yüklendiğinde navbar'daki sepet rakamını gerçek session sepetinden başlatıyoruz.
$sepetAdet = collect(session('sepet', []))->sum('adet');
@endphp

<div class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF] al-font-body text-[#0B2545] selection:bg-[#FFB347] selection:text-[#0A1830]"
    x-data="{
        active: 'all',
        bump: false,
        addedItems: {},
        addItem(kod) {
            this.addedItems = { ...this.addedItems, [kod]: true };
            this.bump = true;
            $store.cart.count++;
            setTimeout(() => (this.bump = false), 450);
            setTimeout(() => { this.addedItems = { ...this.addedItems, [kod]: false }; }, 1500);
        }
    }">

     Navbar 
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
            <a href="{{ route('magaza') }}" class="text-[#0B2545] opacity-100">MAĞAZA</a>
        </div>

        <div class="flex items-center gap-3">
             Sepet Butonu: gerçek cart-drawer Livewire bileşenini açar 
            <button type="button" @click="Livewire.dispatch('cart-open')"
                class="relative w-11 h-11 rounded-full bg-white/70 border border-[#0B2545]/10 flex items-center justify-center hover:bg-white transition-colors duration-300">
                <svg :class="bump ? 'm-cart-bump' : ''" class="w-5 h-5 text-[#0B2545]" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 1.94-4.752 2.442-7.303a1.125 1.125 0 00-1.11-1.322H5.106M7.5 14.25L5.106 5.165M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <span x-show="$store.cart.count > 0" x-cloak x-text="$store.cart.count"
                    class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-[#D9483F] text-white text-[10px] font-bold flex items-center justify-center al-font-mono"></span>
            </button>

            <button type="button" onclick="Livewire.dispatch('openQuoteModal')"
                class="al-font-display bg-[#FF9F45] hover:bg-[#ffb066] hover:opacity-90 hover:scale-[1.03] transition-all duration-300 text-[#0A1830] px-6 py-2.5 rounded-full font-bold text-sm tracking-wide">
                FİYAT TEKLİFİ AL
            </button>
        </div>
    </nav>

     Hero 
    <header class="relative py-24 md:py-28 px-6 overflow-hidden">
        <div class="absolute inset-0 al-grid-bg pointer-events-none"></div>
        <div
            class="absolute top-1/3 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#FF9F45]/50 to-transparent m-pulse">
        </div>
        <div
            class="absolute top-2/3 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#2F6FED]/40 to-transparent m-pulse-delay">
        </div>

        <div class="relative max-w-4xl mx-auto text-center m-hero-fade">
            <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-6">MAĞAZA</p>
            <h1
                class="al-font-display text-5xl md:text-7xl font-extrabold mb-6 leading-[0.98] tracking-tight text-[#0B2545]">
                Stoktan <span class="text-[#2F6FED]">hazır</span> teknoloji.
            </h1>
            <p class="max-w-xl mx-auto text-[#0B2545]/60 text-lg leading-relaxed">
                Kurumunuz için ihtiyaç duyduğunuz donanım, lisans ve aksesuarlar —
                stoktan hemen teslim, tek tıkla sepete.
            </p>
        </div>
    </header>

     Filtre 
    <div class="max-w-5xl mx-auto px-6 mb-14">
        <div class="flex flex-wrap items-center justify-center gap-3">
            <button @click="active = 'all'"
                :class="active === 'all' ? 'bg-[#0B2545] text-white border-[#0B2545]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#0B2545]/30'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                TÜMÜ
            </button>
            <button @click="active = 'sunucu'"
                :class="active === 'sunucu' ? 'bg-[#FF9F45] text-[#0A1830] border-[#FF9F45]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#FF9F45]/50'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                SUNUCU
            </button>
            <button @click="active = 'ag'"
                :class="active === 'ag' ? 'bg-[#0B2545] text-white border-[#0B2545]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#0B2545]/40'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                AĞ EKİPMANI
            </button>
            <button @click="active = 'guvenlik'"
                :class="active === 'guvenlik' ? 'bg-[#D9483F] text-white border-[#D9483F]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#D9483F]/40'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                GÜVENLİK
            </button>
            <button @click="active = 'lisans'"
                :class="active === 'lisans' ? 'bg-[#2F6FED] text-white border-[#2F6FED]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#2F6FED]/40'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                LİSANS
            </button>
            <button @click="active = 'aksesuar'"
                :class="active === 'aksesuar' ? 'bg-[#64748B] text-white border-[#64748B]' : 'bg-white/60 text-[#0B2545]/60 border-[#0B2545]/10 hover:border-[#64748B]/40'"
                class="al-font-mono text-xs tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300">
                AKSESUAR
            </button>
        </div>
    </div>

     Ürün Grid 
    <section class="max-w-7xl mx-auto px-6 pb-32">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @php
            $urunler = [
            ['kod' => 'SRV1', 'kategori' => 'sunucu', 'etiket' => 'SUNUCU', 'renk' => '#FF9F45', 'ad' => 'AL.Rack Sunucu
            R1', 'aciklama' => '2U rack tipi, çift işlemcili, kurumsal iş yükleri için genişletilebilir sunucu.',
            'specs' => ['2x Xeon Silver', '64GB DDR5 RAM', '4x 1.92TB SSD'], 'fiyat' => 184900, 'eskiFiyat' => 214900,
            'stok' => true],
            ['kod' => 'SRV2', 'kategori' => 'sunucu', 'etiket' => 'SUNUCU', 'renk' => '#FF9F45', 'ad' => 'AL.Edge Mini
            Sunucu', 'aciklama' => 'Şube ve saha ofisleri için kompakt, düşük güç tüketimli edge sunucu ünitesi.',
            'specs' => ['Fanless şasi', '32GB RAM', '1TB NVMe'], 'fiyat' => 42500, 'eskiFiyat' => null, 'stok' => true],
            ['kod' => 'NSW1', 'kategori' => 'ag', 'etiket' => 'AĞ EKİPMANI', 'renk' => '#0B2545', 'ad' => 'AL.Net Switch
            48P', 'aciklama' => '48 portlu, Layer 3 yönlendirmeli, PoE+ destekli yönetilebilir ağ anahtarı.', 'specs' =>
            ['48x1G + 4xSFP+', 'Layer 3', 'PoE+ 740W'], 'fiyat' => 38900, 'eskiFiyat' => 45900, 'stok' => true],
            ['kod' => 'AP1', 'kategori' => 'ag', 'etiket' => 'AĞ EKİPMANI', 'renk' => '#0B2545', 'ad' => 'AL.WiFi6
            Access Point', 'aciklama' => 'Yoğun kullanıcı ortamları için WiFi 6 destekli tavan tipi erişim noktası.',
            'specs' => ['WiFi 6 (802.11ax)', '2.5G Uplink', 'PoE ile beslenir'], 'fiyat' => 6750, 'eskiFiyat' => null,
            'stok' => true],
            ['kod' => 'FW1', 'kategori' => 'guvenlik', 'etiket' => 'GÜVENLİK', 'renk' => '#D9483F', 'ad' => 'AL.Shield
            Firewall Cihazı', 'aciklama' => 'Donanım tabanlı, derin paket incelemeli yeni nesil güvenlik duvarı
            cihazı.', 'specs' => ['10 Gbps aktarım', 'Sıfırıncı gün koruması', '1 yıl tehdit istihbaratı dahil'],
            'fiyat' => 76500, 'eskiFiyat' => 89900, 'stok' => true],
            ['kod' => 'CAM1', 'kategori' => 'guvenlik', 'etiket' => 'GÜVENLİK', 'renk' => '#D9483F', 'ad' => 'AL.Vizyon
            IP Kamera', 'aciklama' => 'Gece görüşlü, 4K çözünürlüklü, hareket algılamalı kurumsal güvenlik kamerası.',
            'specs' => ['4K / 30fps', 'IR gece görüş 30m', 'IP67 dış mekan'], 'fiyat' => 5200, 'eskiFiyat' => null,
            'stok' => true],
            ['kod' => 'LIC1', 'kategori' => 'lisans', 'etiket' => 'LİSANS', 'renk' => '#2F6FED', 'ad' => 'AL.ERP Suite
            Lisansı', 'aciklama' => 'Yıllık kullanım lisansı, 10 kullanıcıya kadar, tüm modüller dahil.', 'specs' =>
            ['10 kullanıcı', 'Tüm modüller', '7/24 destek dahil'], 'fiyat' => 54000, 'eskiFiyat' => 64000, 'stok' =>
            true],
            ['kod' => 'LIC2', 'kategori' => 'lisans', 'etiket' => 'LİSANS', 'renk' => '#2F6FED', 'ad' => 'AL.VPN
            Kurumsal Lisansı', 'aciklama' => 'Sınırsız kullanıcı destekli, yıllık kurumsal VPN erişim lisansı.', 'specs'
            => ['Sınırsız kullanıcı', 'Sıfır güven mimarisi', 'MFA dahil'], 'fiyat' => 21900, 'eskiFiyat' => null,
            'stok' => true],
            ['kod' => 'ACC1', 'kategori' => 'aksesuar', 'etiket' => 'AKSESUAR', 'renk' => '#64748B', 'ad' => 'AL.Rack
            Kablo Seti', 'aciklama' => 'Renkli kodlamalı, 24 adet Cat6a rack kablo ve düzenleyici seti.', 'specs' =>
            ['24x Cat6a kablo', 'Kablo düzenleyici', 'Renk kodlu etiketler'], 'fiyat' => 1450, 'eskiFiyat' => 1800,
            'stok' => true],
            ['kod' => 'ACC2', 'kategori' => 'aksesuar', 'etiket' => 'AKSESUAR', 'renk' => '#64748B', 'ad' => 'AL.UPS Güç
            Kaynağı 2000VA', 'aciklama' => 'Sunucu odaları için kesintisiz güç kaynağı, LCD ekranlı, hat interaktif
            tip.', 'specs' => ['2000VA / 1200W', 'LCD gösterge', '8 çıkışlı'], 'fiyat' => 9800, 'eskiFiyat' => null,
            'stok' => false],
            ['kod' => 'ACC3', 'kategori' => 'aksesuar', 'etiket' => 'AKSESUAR', 'renk' => '#64748B', 'ad' => 'AL.Rack
            Kabinet 42U', 'aciklama' => 'Kilitli cam kapılı, tekerlekli, 42U kapasiteli sunucu odası kabineti.', 'specs'
            => ['42U kapasite', 'Kilitli cam kapı', 'Tekerlekli taban'], 'fiyat' => 32900, 'eskiFiyat' => 37500, 'stok'
            => true],
            ];
            @endphp

            @foreach($urunler as $urun)
            <div x-show="active === 'all' || active === '{{ $urun['kategori'] }}'"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                :class="addedItems['{{ $urun['kod'] }}'] ? 'm-card-added' : ''"
                class="m-card group relative bg-white/70 backdrop-blur-sm border border-[#0B2545]/10 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-500"
                style="border-left: 3px solid {{ $urun['renk'] }};">
                @if($urun['eskiFiyat'])
                <div
                    class="m-shine absolute top-3 right-5 z-10 bg-[#D9483F]  text-white text-[10px] font-bold al-font-mono tracking-widest px-3 py-1.5 rounded-full overflow-hidden">
                    %{{ round((1 - $urun['fiyat'] / $urun['eskiFiyat']) * 100) }} İNDİRİM
                </div>
                @endif

                <div class="p-7 flex flex-col h-full">
                    <div class="flex items-center justify-between mb-5">
                        <div class="m-badge w-11 h-11 rounded-xl flex items-center justify-center al-font-mono text-[10px] font-bold text-white shrink-0"
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

                    <div class="flex items-end justify-between mb-5">
                        <div>
                            @if($urun['eskiFiyat'])
                            <p class="al-font-mono text-xs text-[#0B2545]/40 line-through mb-0.5">
                                {{ number_format($urun['eskiFiyat'], 0, ',', '.') }} ₺
                            </p>
                            @endif
                            <p class="al-font-display text-2xl font-extrabold text-[#0B2545]">
                                {{ number_format($urun['fiyat'], 0, ',', '.') }} ₺
                            </p>
                        </div>
                        @if($urun['stok'])
                        <span
                            class="al-font-mono text-[10px] tracking-widest font-bold text-emerald-600 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> STOKTA
                        </span>
                        @else
                        <span
                            class="al-font-mono text-[10px] tracking-widest font-bold text-[#0B2545]/40 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#0B2545]/30"></span> TÜKENDİ
                        </span>
                        @endif
                    </div>

                    <button type="button" @if($urun['stok']) @click="
                            Livewire.dispatch('addToCart', { kod: @js($urun['kod']), ad: @js($urun['ad']), fiyat: {{ $urun['fiyat'] }}, renk: @js($urun['renk']) });
                            addItem('{{ $urun['kod'] }}');
                        " @endif :disabled="!{{ $urun['stok'] ? 'true' : 'false' }}"
                        class="relative w-full h-11 al-font-mono text-xs font-bold tracking-widest rounded-xl overflow-hidden transition-all duration-300 {{ $urun['stok'] ? 'bg-[#0B2545] text-white hover:bg-[#2F6FED]' : 'bg-[#0B2545]/10 text-[#0B2545]/40 cursor-not-allowed' }}">
                        <span class="m-btn-label absolute inset-0 flex items-center justify-center gap-2"
                            x-show="!addedItems['{{ $urun['kod'] }}']"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0">{{ $urun['stok'] ? 'SEPETE EKLE' : 'STOK
                            YOK' }}</span>

                        @if($urun['stok'])
                        <span
                            class="m-btn-check absolute inset-0 flex items-center justify-center gap-2 bg-emerald-500 text-white"
                            x-show="addedItems['{{ $urun['kod'] }}']" x-cloak
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            SEPETE EKLENDİ
                        </span>
                        @endif
                    </button>
                </div>
            </div>
            @endforeach

        </div>
    </section>

    
    <livewire:cart-drawer />

     Footer 
    <footer class="relative bg-[#0B2545] text-white overflow-hidden">
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px); background-size: 56px 56px; mask-image: radial-gradient(ellipse 80% 60% at 50% 50%, black 40%, transparent 100%);">
        </div>
        <div
            class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#FF9F45]/50 to-transparent m-pulse">
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
    
    document.addEventListener('alpine:init', () => {
        Alpine.store('cart', { count: {{ $sepetAdet }} });
    });

    // cart-drawer bileşeni içinde ürün artırılıp azaltıldığında (drawer açıkken) navbar rakamını
    // gerçek (sunucudan gelen) veriyle senkron tutar. cart-drawer.blade.php dosyasının render
    // çıktısını okur, iş mantığına dokunmaz.
    document.addEventListener('livewire:init', () => {
        Livewire.hook('morph.updated', ({ component }) => {
            if (!component || component.name !== 'cart-drawer') return;

            // Drawer kapalıyken içerik DOM'da yok; bu durumda rakama dokunmuyoruz.
            const header = component.el.querySelector('h2');
            if (!header) return;

            let total = 0;
            component.el.querySelectorAll('.w-4.text-center.text-sm.font-semibold').forEach((span) => {
                total += parseInt(span.textContent, 10) || 0;
            });

            Alpine.store('cart').count = total;
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => entry.target.classList.add('in-view'), i * 60);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        document.querySelectorAll('.m-card').forEach(card => observer.observe(card));
    });
</script>
@endsection