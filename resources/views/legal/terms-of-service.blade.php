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

    .al-legal-content h2 {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
        font-size: 1.5rem;
        color: #0B2545;
        margin-top: 2.5rem;
        margin-bottom: 1rem;
    }

    .al-legal-content p,
    .al-legal-content li {
        color: rgba(11, 37, 69, 0.65);
        line-height: 1.75;
        font-size: 0.975rem;
    }

    .al-legal-content ul {
        list-style: none;
        margin-top: 0.75rem;
        margin-bottom: 1.25rem;
    }

    .al-legal-content li {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 0.5rem;
    }

    .al-legal-content li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0.6rem;
        width: 6px;
        height: 6px;
        border-radius: 9999px;
        background: #FF9F45;
    }
</style>

<div class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF] al-font-body text-[#0B2545]">


    <nav
        class="al-navbar sticky top-4 z-50 max-w-6xl mx-auto flex items-center justify-between px-6 md:px-8 py-4 rounded-full mt-4 border border-white/60">
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

        <livewire:quote-request-modal />
    </nav>


    <div class="max-w-3xl mx-auto py-20 px-6">
        <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] mb-4">YASAL BİLGİLENDİRME</p>
        <h1 class="al-font-display text-5xl md:text-6xl font-extrabold mb-4 tracking-tight text-[#0B2545]">
            Kullanım Şartları
        </h1>
        <p class="text-[#0B2545]/50 al-font-mono text-xs mb-12">Son güncelleme: {{ date('d.m.Y') }}</p>

        <div
            class="bg-white/70 backdrop-blur-md border border-[#0B2545]/10 rounded-3xl p-8 md:p-12 shadow-xl shadow-[#0B2545]/5 al-legal-content">

            <p>Bu web sitesini kullanarak aşağıdaki kullanım şartlarını kabul etmiş sayılırsınız. Lütfen siteyi
                kullanmadan önce bu şartları dikkatlice okuyunuz.</p>

            <h2>1. Genel Hükümler</h2>
            <p>Bu site AL TECHNOLOGY tarafından işletilmektedir. Sitede yer alan tüm içerikler, ticari markalar ve
                tasarımlar AL TECHNOLOGY'nin mülkiyetindedir ve izinsiz kullanılamaz.</p>

            <h2>2. Hizmetlerin Kapsamı</h2>
            <p>AL TECHNOLOGY, yazılım geliştirme, bulut altyapı ve teknik destek hizmetleri sunmaktadır. Sitede yer alan
                bilgiler tanıtım amaçlıdır ve bağlayıcı bir teklif niteliği taşımaz; teklifler ancak yazılı sözleşme ile
                geçerlilik kazanır.</p>

            <h2>3. Kullanıcı Yükümlülükleri</h2>
            <ul>
                <li>Siteyi yalnızca yasal amaçlarla kullanmayı kabul edersiniz</li>
                <li>Site üzerinden paylaştığınız bilgilerin doğruluğundan siz sorumlusunuz</li>
                <li>Sitenin işleyişine zarar verecek herhangi bir eylemde bulunmamayı taahhüt edersiniz</li>
            </ul>

            <h2>4. Fikri Mülkiyet Hakları</h2>
            <p>Sitede yer alan tüm metin, görsel, logo ve yazılım unsurları telif hakkı ile korunmaktadır. Önceden
                yazılı izin alınmadan çoğaltılamaz, dağıtılamaz veya ticari amaçla kullanılamaz.</p>

            <h2>5. Sorumluluğun Sınırlandırılması</h2>
            <p>AL TECHNOLOGY, sitenin kesintisiz veya hatasız çalışacağını garanti etmez. Site kullanımından doğabilecek
                doğrudan veya dolaylı zararlardan sorumlu tutulamaz.</p>

            <h2>6. Değişiklikler</h2>
            <p>AL TECHNOLOGY, bu kullanım şartlarını dilediği zaman güncelleme hakkını saklı tutar. Güncellemeler sitede
                yayımlandığı andan itibaren yürürlüğe girer.</p>

            <h2>7. İletişim</h2>
            <p>Bu şartlarla ilgili sorularınız için <span
                    class="font-semibold text-[#0B2545]">info@altechnology.com</span> adresinden bize ulaşabilirsiniz.
            </p>

        </div>
    </div>


    <footer class="relative bg-[#0B2545] text-white overflow-hidden mt-20">
        <div class="absolute inset-0 al-grid-bg-footer pointer-events-none"></div>
        <div
            class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#FF9F45]/50 to-transparent al-pulse">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-8 pt-16 pb-10">
            <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="al-font-mono text-xs text-blue-100/40 tracking-wide">
                    © {{ date('Y') }} AL TECHNOLOGY — TÜM HAKLARI SAKLIDIR
                </p>
                <div class="flex gap-6 al-font-mono text-xs text-blue-100/40">
                    <a href="{{ route('policy.show') }}"
                        class="hover:text-white transition-colors duration-300">Gizlilik Politikası</a>
                    <a href="{{ route('terms.show') }}" class="hover:text-white transition-colors duration-300">Kullanım
                        Şartları</a>
                </div>
            </div>
        </div>
    </footer>

</div>
@endsection