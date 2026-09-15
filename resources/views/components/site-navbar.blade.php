@props([
    'active' => '',
    'hasCart' => false,
])

<div x-data="{ mobileOpen: false, kurumsalOpen: {{ in_array($active, ['kurumsal', 'hakkimizda', 'vizyon-misyon', 'haberler', 'belgeler']) ? 'true' : 'false' }} }" 
     @keydown.escape.window="mobileOpen = false"
     class="sticky top-3 sm:top-4 z-50 max-w-6xl mx-3 sm:mx-6 md:mx-auto">

    {{-- Main Navbar Floating Pill --}}
    <nav class="al-navbar flex items-center justify-between px-4 sm:px-6 md:px-8 py-3 md:py-4 rounded-full border border-white/60 bg-white/80 backdrop-blur-md shadow-sm transition-all duration-300">
        
        {{-- Brand Logo --}}
        <a href="{{ route('home') }}"
            class="al-font-display text-xl sm:text-2xl font-bold tracking-tight text-[#0B2545] cursor-pointer hover:opacity-70 transition-opacity duration-300 shrink-0">
            AL<span class="text-[#FF9F45]">.</span>TECHNOLOGY
        </a>

        {{-- Desktop Navigation Links --}}
        <div class="hidden md:flex items-center gap-7 lg:gap-9 al-font-mono text-xs tracking-[0.15em] text-[#0B2545]/70">
            
            {{-- Kurumsal Dropdown --}}
            <div class="relative group">
                <a href="{{ route('kurumsal') }}"
                    class="flex items-center gap-1.5 py-3 cursor-pointer transition-all duration-300 {{ in_array($active, ['kurumsal', 'hakkimizda', 'vizyon-misyon', 'haberler', 'belgeler']) ? 'text-[#0B2545] font-bold opacity-100' : 'hover:text-[#0B2545] hover:opacity-100 opacity-70' }}">
                    KURUMSAL
                    <svg class="w-3 h-3 transition-transform duration-300 group-hover:rotate-180" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <div class="absolute top-full left-1/2 -translate-x-1/2 pt-2 w-56 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 ease-out z-50">
                    <div class="bg-white/95 backdrop-blur-md border border-[#0B2545]/10 rounded-2xl shadow-xl shadow-[#0B2545]/10 p-3 flex flex-col gap-1.5">
                        <a href="{{ route('kurumsal.hakkimizda') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold rounded-xl py-2.5 px-3.5 transition-colors duration-200 {{ $active === 'hakkimizda' ? 'bg-[#2F6FED] text-white' : 'text-[#0B2545] hover:bg-[#0B2545]/5' }}">
                            Hakkımızda
                        </a>
                        <a href="{{ route('kurumsal.vizyon-misyon') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold rounded-xl py-2.5 px-3.5 transition-colors duration-200 {{ $active === 'vizyon-misyon' ? 'bg-[#2F6FED] text-white' : 'text-[#0B2545] hover:bg-[#0B2545]/5' }}">
                            Vizyon - Misyon
                        </a>
                        <a href="{{ route('kurumsal.haberler') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold rounded-xl py-2.5 px-3.5 transition-colors duration-200 {{ $active === 'haberler' ? 'bg-[#2F6FED] text-white' : 'text-[#0B2545] hover:bg-[#0B2545]/5' }}">
                            Haberler
                        </a>
                        <a href="{{ route('kurumsal.belgeler') }}"
                            class="al-font-body normal-case tracking-normal text-sm font-semibold rounded-xl py-2.5 px-3.5 transition-colors duration-200 {{ $active === 'belgeler' ? 'bg-[#2F6FED] text-white' : 'text-[#0B2545] hover:bg-[#0B2545]/5' }}">
                            Belgeler
                        </a>
                    </div>
                </div>
            </div>

            <a href="{{ route('referanslar') }}"
                class="transition-all duration-300 {{ $active === 'referanslar' ? 'text-[#0B2545] font-bold opacity-100' : 'hover:text-[#0B2545] hover:opacity-100 opacity-70' }}">
                REFERANSLAR
            </a>

            <a href="{{ route('urunler') }}"
                class="transition-all duration-300 {{ $active === 'urunler' ? 'text-[#0B2545] font-bold opacity-100' : 'hover:text-[#0B2545] hover:opacity-100 opacity-70' }}">
                ÜRÜNLER
            </a>

            <a href="{{ route('magaza') }}"
                class="transition-all duration-300 {{ $active === 'magaza' ? 'text-[#0B2545] font-bold opacity-100' : 'hover:text-[#0B2545] hover:opacity-100 opacity-70' }}">
                MAĞAZA
            </a>
        </div>

        {{-- Right Actions (Cart, CTA, Hamburger) --}}
        <div class="flex items-center gap-2 sm:gap-3">
            
            {{-- Optional Cart Button (primarily on Magaza) --}}
            @if($hasCart)
            <button type="button" @click="Livewire.dispatch('cart-open')"
                class="relative w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white/80 border border-[#0B2545]/10 flex items-center justify-center hover:bg-white hover:border-[#2F6FED]/30 transition-all duration-300 shadow-sm"
                aria-label="Sepet">
                <svg :class="bump ? 'm-cart-bump' : ''" class="w-5 h-5 text-[#0B2545]" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 1.94-4.752 2.442-7.303a1.125 1.125 0 00-1.11-1.322H5.106M7.5 14.25L5.106 5.165M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <span x-show="typeof $store !== 'undefined' && $store.cart && $store.cart.count > 0" x-cloak x-text="$store.cart?.count"
                    class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-[#D9483F] text-white text-[10px] font-bold flex items-center justify-center al-font-mono shadow"></span>
            </button>
            @endif

            {{-- Desktop CTA Button --}}
            <button type="button" onclick="Livewire.dispatch('openQuoteModal')"
                class="hidden sm:inline-flex items-center al-font-display bg-[#FF9F45] hover:bg-[#ffb066] hover:opacity-95 hover:scale-[1.03] transition-all duration-300 text-[#0A1830] px-5 md:px-6 py-2 md:py-2.5 rounded-full font-bold text-xs md:text-sm tracking-wide shadow-sm">
                FİYAT TEKLİFİ AL
            </button>

            {{-- Mobile Hamburger Button --}}
            <button type="button" 
                @click="mobileOpen = !mobileOpen"
                class="md:hidden relative w-10 h-10 rounded-full bg-white/80 hover:bg-white border border-[#0B2545]/10 flex items-center justify-center text-[#0B2545] transition-all duration-300 focus:outline-none shadow-sm"
                :aria-expanded="mobileOpen"
                aria-label="Menüyü Aç/Kapat">
                <div class="w-5 h-4 flex flex-col justify-between items-center relative">
                    <span class="w-5 h-0.5 bg-[#0B2545] rounded-full transition-all duration-300 transform origin-left"
                          :class="mobileOpen ? 'rotate-45 translate-x-0.5 -translate-y-0.5' : ''"></span>
                    <span class="w-5 h-0.5 bg-[#0B2545] rounded-full transition-all duration-200"
                          :class="mobileOpen ? 'opacity-0 scale-x-0' : 'opacity-100'"></span>
                    <span class="w-5 h-0.5 bg-[#0B2545] rounded-full transition-all duration-300 transform origin-left"
                          :class="mobileOpen ? '-rotate-45 translate-x-0.5 translate-y-0.5' : ''"></span>
                </div>
            </button>
        </div>
    </nav>

    {{-- Mobile Dropdown Menu Panel --}}
    <div x-show="mobileOpen" 
         x-cloak 
         x-transition:enter="transition ease-out duration-300 transform" 
         x-transition:enter-start="opacity-0 -translate-y-4 scale-[0.98]" 
         x-transition:enter-end="opacity-100 translate-y-0 scale-100" 
         x-transition:leave="transition ease-in duration-200 transform" 
         x-transition:leave-start="opacity-100 translate-y-0 scale-100" 
         x-transition:leave-end="opacity-0 -translate-y-4 scale-[0.98]" 
         @click.outside="mobileOpen = false"
         class="md:hidden mt-2 bg-white/95 backdrop-blur-xl border border-white/80 rounded-3xl p-5 shadow-2xl shadow-[#0B2545]/15 overflow-hidden">
        
        <div class="space-y-1.5">

            {{-- Mobile Kurumsal Accordion --}}
            <div>
                <button type="button" 
                    @click="kurumsalOpen = !kurumsalOpen"
                    class="w-full flex items-center justify-between py-3 px-3.5 rounded-2xl font-bold text-sm transition-all duration-200 {{ in_array($active, ['kurumsal', 'hakkimizda', 'vizyon-misyon', 'haberler', 'belgeler']) ? 'bg-[#0B2545]/5 text-[#0B2545]' : 'text-[#0B2545]/80 hover:bg-[#0B2545]/5' }}">
                    <span class="al-font-mono tracking-wider text-xs">KURUMSAL</span>
                    <svg class="w-4 h-4 text-[#0B2545]/60 transition-transform duration-300"
                         :class="kurumsalOpen ? 'rotate-180 text-[#FF9F45]' : ''"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="kurumsalOpen" 
                     x-collapse
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 -translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="pl-4 pr-2 pt-1 pb-2 space-y-1">
                    
                    <a href="{{ route('kurumsal') }}" 
                        @click="mobileOpen = false"
                        class="flex items-center gap-2.5 py-2 px-3 rounded-xl text-xs font-semibold transition-colors {{ $active === 'kurumsal' ? 'text-[#2F6FED] bg-[#2F6FED]/10 font-bold' : 'text-[#0B2545]/70 hover:text-[#0B2545] hover:bg-black/5' }}">
                        <span class="w-1.5 h-1.5 rounded-full {{ $active === 'kurumsal' ? 'bg-[#2F6FED]' : 'bg-[#0B2545]/30' }}"></span>
                        Genel Bakış
                    </a>

                    <a href="{{ route('kurumsal.hakkimizda') }}" 
                        @click="mobileOpen = false"
                        class="flex items-center gap-2.5 py-2 px-3 rounded-xl text-xs font-semibold transition-colors {{ $active === 'hakkimizda' ? 'text-[#2F6FED] bg-[#2F6FED]/10 font-bold' : 'text-[#0B2545]/70 hover:text-[#0B2545] hover:bg-black/5' }}">
                        <span class="w-1.5 h-1.5 rounded-full {{ $active === 'hakkimizda' ? 'bg-[#2F6FED]' : 'bg-[#0B2545]/30' }}"></span>
                        Hakkımızda
                    </a>

                    <a href="{{ route('kurumsal.vizyon-misyon') }}" 
                        @click="mobileOpen = false"
                        class="flex items-center gap-2.5 py-2 px-3 rounded-xl text-xs font-semibold transition-colors {{ $active === 'vizyon-misyon' ? 'text-[#2F6FED] bg-[#2F6FED]/10 font-bold' : 'text-[#0B2545]/70 hover:text-[#0B2545] hover:bg-black/5' }}">
                        <span class="w-1.5 h-1.5 rounded-full {{ $active === 'vizyon-misyon' ? 'bg-[#2F6FED]' : 'bg-[#0B2545]/30' }}"></span>
                        Vizyon - Misyon
                    </a>

                    <a href="{{ route('kurumsal.haberler') }}" 
                        @click="mobileOpen = false"
                        class="flex items-center gap-2.5 py-2 px-3 rounded-xl text-xs font-semibold transition-colors {{ $active === 'haberler' ? 'text-[#2F6FED] bg-[#2F6FED]/10 font-bold' : 'text-[#0B2545]/70 hover:text-[#0B2545] hover:bg-black/5' }}">
                        <span class="w-1.5 h-1.5 rounded-full {{ $active === 'haberler' ? 'bg-[#2F6FED]' : 'bg-[#0B2545]/30' }}"></span>
                        Haberler
                    </a>

                    <a href="{{ route('kurumsal.belgeler') }}" 
                        @click="mobileOpen = false"
                        class="flex items-center gap-2.5 py-2 px-3 rounded-xl text-xs font-semibold transition-colors {{ $active === 'belgeler' ? 'text-[#2F6FED] bg-[#2F6FED]/10 font-bold' : 'text-[#0B2545]/70 hover:text-[#0B2545] hover:bg-black/5' }}">
                        <span class="w-1.5 h-1.5 rounded-full {{ $active === 'belgeler' ? 'bg-[#2F6FED]' : 'bg-[#0B2545]/30' }}"></span>
                        Belgeler
                    </a>
                </div>
            </div>

            {{-- Referanslar Link --}}
            <a href="{{ route('referanslar') }}" 
                @click="mobileOpen = false"
                class="flex items-center justify-between py-3 px-3.5 rounded-2xl font-bold text-sm transition-all duration-200 {{ $active === 'referanslar' ? 'bg-[#0B2545] text-white' : 'text-[#0B2545]/80 hover:bg-[#0B2545]/5' }}">
                <span class="al-font-mono tracking-wider text-xs">REFERANSLAR</span>
                <span class="text-xs opacity-60">→</span>
            </a>

            {{-- Ürünler Link --}}
            <a href="{{ route('urunler') }}" 
                @click="mobileOpen = false"
                class="flex items-center justify-between py-3 px-3.5 rounded-2xl font-bold text-sm transition-all duration-200 {{ $active === 'urunler' ? 'bg-[#0B2545] text-white' : 'text-[#0B2545]/80 hover:bg-[#0B2545]/5' }}">
                <span class="al-font-mono tracking-wider text-xs">ÜRÜNLER</span>
                <span class="text-xs opacity-60">→</span>
            </a>

            {{-- Mağaza Link --}}
            <a href="{{ route('magaza') }}" 
                @click="mobileOpen = false"
                class="flex items-center justify-between py-3 px-3.5 rounded-2xl font-bold text-sm transition-all duration-200 {{ $active === 'magaza' ? 'bg-[#0B2545] text-white' : 'text-[#0B2545]/80 hover:bg-[#0B2545]/5' }}">
                <span class="al-font-mono tracking-wider text-xs">MAĞAZA</span>
                <span class="text-xs opacity-60">→</span>
            </a>
        </div>

        {{-- Divider --}}
        <div class="h-px bg-gradient-to-r from-transparent via-[#0B2545]/10 to-transparent my-4"></div>

        {{-- Action Buttons --}}
        <div class="space-y-2">
            <button type="button" 
                @click="mobileOpen = false; Livewire.dispatch('openQuoteModal')"
                class="w-full al-font-display bg-[#FF9F45] hover:bg-[#ffb066] text-[#0A1830] font-bold py-3.5 px-4 rounded-2xl flex items-center justify-center gap-2 text-sm shadow-md transition-all active:scale-[0.98]">
                <span>FİYAT TEKLİFİ AL</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>

            <button type="button" 
                @click="mobileOpen = false; Livewire.dispatch('openContactModal')"
                class="w-full al-font-mono text-xs font-bold tracking-wide text-[#0B2545] bg-[#0B2545]/5 hover:bg-[#0B2545]/10 py-3 px-4 rounded-2xl flex items-center justify-center gap-2 transition-all active:scale-[0.98]">
                <span>BİZE ULAŞIN</span>
            </button>
        </div>

        {{-- Footer Details in Mobile Menu --}}
        <div class="mt-4 pt-3 border-t border-[#0B2545]/5 flex items-center justify-between text-[11px] text-[#0B2545]/50 al-font-mono">
            <a href="tel:+902120000000" class="hover:text-[#0B2545] transition-colors">+90 (212) 000 00 00</a>
            <a href="mailto:info@altechnology.com" class="hover:text-[#0B2545] transition-colors">info@altechnology.com</a>
        </div>
    </div>
</div>
