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

    @keyframes listFadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-row {
        animation: listFadeIn 0.5s ease-out forwards;
    }
</style>

<div class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF] al-font-body text-[#0B2545]">


    <nav
        class="al-navbar sticky top-4 z-50 max-w-6xl mx-auto flex items-center justify-between px-6 md:px-8 py-4 rounded-full  border border-white/60">
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

    <div class="max-w-4xl mx-auto py-20 px-6">

        <h1 class="al-font-display text-5xl md:text-6xl font-extrabold mb-4 tracking-tight text-[#0B2545]">
            Akreditasyonlar
        </h1>
        <p class="text-[#0B2545]/60 mb-12 text-lg">Yüksek mühendislik standartlarımızı ve veri güvenliği hassasiyetimizi
            tescilleyen kurumsal belgelerimiz.</p>

        <div
            class="bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-4 md:p-8 shadow-xl shadow-[#0B2545]/5">
            <div class="divide-y divide-[#0B2545]/10">


                <div class="animate-row py-5 flex items-center justify-between gap-6 group">
                    <div class="flex items-center gap-5">
                        <div
                            class="w-12 h-12 bg-[#0B2545] text-[#FF9F45] rounded-xl flex items-center justify-center font-bold al-font-mono text-sm shadow-md transition-transform duration-300 group-hover:scale-110">
                            ISO
                        </div>
                        <div>
                            <p class="font-bold text-[#0B2545] text-lg group-hover:text-[#2F6FED] transition-colors">ISO
                                / IEC 27001</p>
                            <p class="text-sm text-[#0B2545]/50">Bilgi Güvenliği Yönetim Sistemi Standardı</p>
                        </div>
                    </div>
                    <a href="{{ asset('documents/iso_27001_sertifikasi.pdf') }}" download
                        class="al-font-mono text-xs font-bold tracking-wider text-[#2F6FED] hover:text-[#FF9F45] bg-[#EAF4FF] hover:bg-[#0B2545] px-4 py-2.5 rounded-full shadow-sm transition-all duration-300 shrink-0">
                        İNDİR (PDF)
                    </a>
                </div>


                <div class="animate-row py-5 flex items-center justify-between gap-6 group"
                    style="animation-delay: 0.1s;">
                    <div class="flex items-center gap-5">
                        <div
                            class="w-12 h-12 bg-[#0B2545] text-[#FF9F45] rounded-xl flex items-center justify-center font-bold al-font-mono text-sm shadow-md transition-transform duration-300 group-hover:scale-110">
                            ISO
                        </div>
                        <div>
                            <p class="font-bold text-[#0B2545] text-lg group-hover:text-[#2F6FED] transition-colors">ISO
                                9001 : 2015</p>
                            <p class="text-sm text-[#0B2545]/50">Kalite Yönetim Sistemi Akreditasyonu</p>
                        </div>
                    </div>
                    <a href="{{ asset('documents/iso_9001_sertifikasi.pdf') }}" download
                        class="al-font-mono text-xs font-bold tracking-wider text-[#2F6FED] hover:text-[#FF9F45] bg-[#EAF4FF] hover:bg-[#0B2545] px-4 py-2.5 rounded-full shadow-sm transition-all duration-300 shrink-0">
                        İNDİR (PDF)
                    </a>
                </div>


                <div class="animate-row py-5 flex items-center justify-between gap-6 group"
                    style="animation-delay: 0.2s;">
                    <div class="flex items-center gap-5">
                        <div
                            class="w-12 h-12 bg-[#2F6FED] text-white rounded-xl flex items-center justify-center font-bold al-font-mono text-xs shadow-md transition-transform duration-300 group-hover:scale-110">
                            KVKK
                        </div>
                        <div>
                            <p class="font-bold text-[#0B2545] text-lg group-hover:text-[#2F6FED] transition-colors">
                                Veri Korunması Politikası</p>
                            <p class="text-sm text-[#0B2545]/50">Kişisel Verilerin Korunması Kanunu Tam Uyum Metni</p>
                        </div>
                    </div>
                    <a href="{{ asset('documents/kvkk_politikasi.pdf') }}" download
                        class="al-font-mono text-xs font-bold tracking-wider text-[#2F6FED] hover:text-[#FF9F45] bg-[#EAF4FF] hover:bg-[#0B2545] px-4 py-2.5 rounded-full shadow-sm transition-all duration-300 shrink-0">
                        İNCELE
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection