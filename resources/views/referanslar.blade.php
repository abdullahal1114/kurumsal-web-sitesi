<x-app-layout>
    <style>
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
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .stagger-1 {
            animation-delay: 0.1s;
        }

        .stagger-2 {
            animation-delay: 0.2s;
        }
    </style>

    <div class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF]">

         Navbar 
        <nav
            class="al-navbar sticky top-4 z-50 max-w-6xl mx-auto flex items-center justify-between px-6 md:px-8 py-4 rounded-full mt-4 border border-white/60">
            <div
                class="al-font-display text-2xl font-bold tracking-tight text-[#0B2545] cursor-pointer hover:opacity-70 transition-opacity duration-300">
                AL<span class="text-[#FF9F45]">.</span>TECHNOLOGY
            </div>

            <div class="hidden md:flex items-center gap-9 al-font-mono text-xs tracking-[0.15em] text-[#0B2545]/60">

                 KURUMSAL Dropdown 
                <div class="relative group">
                    <a href="{{ route('kurumsal') }}"
                        class="flex items-center gap-1 hover:text-[#0B2545] hover:opacity-100 opacity-70 transition-all duration-300 py-3 cursor-pointer">
                        KURUMSAL
                        <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>

                     Dropdown Panel 
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

        <div class="max-w-7xl mx-auto py-10 px-6 opacity-0 animate-fade-in-up">

            <div class="text-center mb-16">
                <h2 class="al-font-display text-4xl md:text-5xl font-extrabold text-[#0B2545] mb-4">Referanslarımız</h2>
                <p class="text-[#0B2545]/60 max-w-2xl mx-auto text-lg">Sektörün öncü markalarıyla gerçekleştirdiğimiz
                    başarılı projeler ve dijital dönüşüm hikayeleri.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @php
                // Ekstra veri alanları (kategori ve yil) eklendi
                $referanslar = [
                ['isim' => 'SAMSUNG', 'dosya' => 'samsung-bg.jpg', 'metin' => 'Sürdürülebilirlik taahhüdünü dijital
                çözümlerimizle güçlendirdik.', 'kategori' => 'Kurumsal Dijitalleşme', 'yil' => '2026'],
                ['isim' => 'GLOBEX', 'dosya' => 'cloud-system.jpg', 'metin' => 'Bulut sistemleri altyapısı ile %40 daha
                yüksek performans.', 'kategori' => 'Cloud Sistemler', 'yil' => '2025'],
                ['isim' => 'ENERJİ-AŞ', 'dosya' => 'energy-project.jpg', 'metin' => 'Yapay zeka destekli analizlerle
                verimlilik odaklı dönüşüm.', 'kategori' => 'Yapay Zeka', 'yil' => '2025'],
                ['isim' => 'TECH HUB', 'dosya' => 'tech-hub.jpg', 'metin' => 'Dijital dönüşüm süreçlerini uçtan uca
                yönetiyoruz.', 'kategori' => 'Yazılım Çözümleri', 'yil' => '2026'],
                ['isim' => 'LOGİX', 'dosya' => 'logistics.jpg', 'metin' => 'Lojistik ağının otomasyonu için özel yazılım
                çözümleri.', 'kategori' => 'Otomasyon', 'yil' => '2024'],
                ['isim' => 'FIN-CORP', 'dosya' => 'finance.jpg', 'metin' => 'Güvenli veri aktarımı ile kurumsal finansal
                verimlilik.', 'kategori' => 'Siber Güvenlik', 'yil' => '2025'],
                ['isim' => 'RETAİL PLUS', 'dosya' => 'retail.jpg', 'metin' => 'E-ticaret uzmanlığı ile satışlarda %25
                artış sağlandı.', 'kategori' => 'E-Ticaret', 'yil' => '2026'],
                ['isim' => 'MEDİ-SYS', 'dosya' => 'health-tech.jpg', 'metin' => 'Sağlık sektöründe veri güvenliği ile
                tam entegre altyapı.', 'kategori' => 'Sistem Entegrasyonu', 'yil' => '2025']
                ];
                @endphp

                @foreach($referanslar as $index => $ref)
                <div
                    class="relative group h-[420px] rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 border border-[#0B2545]/10 opacity-0 animate-fade-in-up {{ $index % 2 == 0 ? 'stagger-1' : 'stagger-2' }}">

                    <img src="{{ asset('images/' . $ref['dosya']) }}"
                        onerror="this.style.display='none'; this.nextElementSibling.classList.add('bg-gradient-to-br', 'from-[#0B2545]', 'to-slate-900')"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0B2545] via-[#0B2545]/60 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-500">
                    </div>

                    <div
                        class="absolute inset-0 p-8 flex flex-col justify-end translate-y-8 group-hover:translate-y-0 transition-transform duration-500 ease-out">

                        <div
                            class="flex items-center justify-between mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                            <span
                                class="px-4 py-1.5 bg-[#FF9F1C] text-white text-xs font-bold tracking-wider rounded-full uppercase">
                                {{ $ref['kategori'] }}
                            </span>
                            <span class="text-white/80 text-sm font-medium">
                                {{ $ref['yil'] }}
                            </span>
                        </div>

                        <h3 class="text-white text-3xl font-extrabold mb-3 drop-shadow-md">{{ $ref['isim'] }}</h3>

                        <p
                            class="text-white/80 text-base leading-relaxed mb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200">
                            {{ $ref['metin'] }}
                        </p>

                        <div
                            class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center backdrop-blur-sm group-hover:bg-white group-hover:text-[#0B2545] text-white transition-all duration-300 opacity-0 group-hover:opacity-100 delay-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-5 h-5 group-hover:translate-x-1 transition-transform">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            console.log("Referanslar sayfası gelişmiş animasyonlarla yüklendi.");
        });
    </script>
    @endpush
</x-app-layout>