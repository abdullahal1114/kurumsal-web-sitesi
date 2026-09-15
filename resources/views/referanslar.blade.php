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


        <x-site-navbar active="referanslar" />

        <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 opacity-0 animate-fade-in-up">

            <div class="text-center mb-12 sm:mb-16">
                <h2 class="al-font-display text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#0B2545] mb-3 sm:mb-4">Referanslarımız</h2>
                <p class="text-[#0B2545]/60 max-w-2xl mx-auto text-base sm:text-lg">Sektörün öncü markalarıyla gerçekleştirdiğimiz
                    başarılı projeler ve dijital dönüşüm hikayeleri.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-10">
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
                    class="relative group h-[380px] sm:h-[420px] rounded-3xl sm:rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 border border-[#0B2545]/10 opacity-0 animate-fade-in-up {{ $index % 2 == 0 ? 'stagger-1' : 'stagger-2' }}">

                    <img src="{{ asset('images/' . $ref['dosya']) }}"
                        onerror="this.style.display='none'; this.nextElementSibling.classList.add('bg-gradient-to-br', 'from-[#0B2545]', 'to-slate-900')"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0B2545] via-[#0B2545]/60 to-transparent opacity-85 group-hover:opacity-95 transition-opacity duration-500">
                    </div>

                    <div
                        class="absolute inset-0 p-6 sm:p-8 flex flex-col justify-end translate-y-0 md:translate-y-8 md:group-hover:translate-y-0 transition-transform duration-500 ease-out">

                        <div
                            class="flex items-center justify-between mb-3 sm:mb-4 opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 delay-100">
                            <span
                                class="px-3.5 sm:px-4 py-1.5 bg-[#FF9F1C] text-white text-[11px] sm:text-xs font-bold tracking-wider rounded-full uppercase">
                                {{ $ref['kategori'] }}
                            </span>
                            <span class="text-white/80 text-xs sm:text-sm font-medium">
                                {{ $ref['yil'] }}
                            </span>
                        </div>

                        <h3 class="text-white text-2xl sm:text-3xl font-extrabold mb-2 sm:mb-3 drop-shadow-md">{{ $ref['isim'] }}</h3>

                        <p
                            class="text-white/85 text-sm sm:text-base leading-relaxed mb-4 sm:mb-6 opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 delay-200">
                            {{ $ref['metin'] }}
                        </p>

                        <div
                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border border-white/30 flex items-center justify-center backdrop-blur-sm group-hover:bg-white group-hover:text-[#0B2545] text-white transition-all duration-300 opacity-100 md:opacity-0 md:group-hover:opacity-100 delay-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform">
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