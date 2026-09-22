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


    <x-site-navbar active="belgeler" />

    <div class="max-w-4xl mx-auto py-10 sm:py-20 px-4 sm:px-6">

        <h1 class="al-font-display text-3xl sm:text-5xl md:text-6xl font-extrabold mb-3 sm:mb-4 tracking-tight text-[#0B2545]">
            Akreditasyonlar
        </h1>
        <p class="text-[#0B2545]/60 mb-8 sm:mb-12 text-sm sm:text-base md:text-lg">Yüksek mühendislik standartlarımızı ve veri güvenliği hassasiyetimizi
            tescilleyen kurumsal belgelerimiz.</p>

        <div
            class="bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-4 sm:p-6 md:p-8 shadow-xl shadow-[#0B2545]/5">
            <div class="divide-y divide-[#0B2545]/10">


                <div class="animate-row py-4 sm:py-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 group">
                    <div class="flex items-center gap-3 sm:gap-5">
                        <div
                            class="w-10 h-10 sm:w-12 sm:h-12 bg-[#0B2545] text-[#FF9F45] rounded-xl flex items-center justify-center font-bold al-font-mono text-xs sm:text-sm shadow-md transition-transform duration-300 group-hover:scale-110 shrink-0">
                            ISO
                        </div>
                        <div>
                            <p class="font-bold text-[#0B2545] text-base sm:text-lg group-hover:text-[#2F6FED] transition-colors">ISO
                                / IEC 27001</p>
                            <p class="text-xs sm:text-sm text-[#0B2545]/50">Bilgi Güvenliği Yönetim Sistemi Standardı</p>
                        </div>
                    </div>
                    <a href="{{ asset('documents/iso_27001_sertifikasi.pdf') }}" download
                        class="w-full sm:w-auto text-center al-font-mono text-xs font-bold tracking-wider text-[#2F6FED] hover:text-[#FF9F45] bg-[#EAF4FF] hover:bg-[#0B2545] px-4 py-2.5 rounded-full shadow-sm transition-all duration-300 shrink-0">
                        İNDİR (PDF)
                    </a>
                </div>


                <div class="animate-row py-4 sm:py-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 group"
                    style="animation-delay: 0.1s;">
                    <div class="flex items-center gap-3 sm:gap-5">
                        <div
                            class="w-10 h-10 sm:w-12 sm:h-12 bg-[#0B2545] text-[#FF9F45] rounded-xl flex items-center justify-center font-bold al-font-mono text-xs sm:text-sm shadow-md transition-transform duration-300 group-hover:scale-110 shrink-0">
                            ISO
                        </div>
                        <div>
                            <p class="font-bold text-[#0B2545] text-base sm:text-lg group-hover:text-[#2F6FED] transition-colors">ISO
                                9001 : 2015</p>
                            <p class="text-xs sm:text-sm text-[#0B2545]/50">Kalite Yönetim Sistemi Akreditasyonu</p>
                        </div>
                    </div>
                    <a href="{{ asset('documents/iso_9001_sertifikasi.pdf') }}" download
                        class="w-full sm:w-auto text-center al-font-mono text-xs font-bold tracking-wider text-[#2F6FED] hover:text-[#FF9F45] bg-[#EAF4FF] hover:bg-[#0B2545] px-4 py-2.5 rounded-full shadow-sm transition-all duration-300 shrink-0">
                        İNDİR (PDF)
                    </a>
                </div>


                <div class="animate-row py-4 sm:py-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 group"
                    style="animation-delay: 0.2s;">
                    <div class="flex items-center gap-3 sm:gap-5">
                        <div
                            class="w-10 h-10 sm:w-12 sm:h-12 bg-[#2F6FED] text-white rounded-xl flex items-center justify-center font-bold al-font-mono text-xs shadow-md transition-transform duration-300 group-hover:scale-110 shrink-0">
                            KVKK
                        </div>
                        <div>
                            <p class="font-bold text-[#0B2545] text-base sm:text-lg group-hover:text-[#2F6FED] transition-colors">
                                Veri Korunması Politikası</p>
                            <p class="text-xs sm:text-sm text-[#0B2545]/50">Kişisel Verilerin Korunması Kanunu Tam Uyum Metni</p>
                        </div>
                    </div>
                    <a href="{{ asset('documents/kvkk_politikasi.pdf') }}" download
                        class="w-full sm:w-auto text-center al-font-mono text-xs font-bold tracking-wider text-[#2F6FED] hover:text-[#FF9F45] bg-[#EAF4FF] hover:bg-[#0B2545] px-4 py-2.5 rounded-full shadow-sm transition-all duration-300 shrink-0">
                        İNCELE
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection