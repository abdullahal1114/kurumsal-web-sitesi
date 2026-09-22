<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest-plain')] class extends Component
{
    public string $name = '';
    public string $surname = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function register()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', 'min:8'],
        ]);

        $user = User::create([
            'name' => $this->name . ' ' . $this->surname,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        // Hata ayıklama için: Kayıt başarılıysa session'a mesajı bas
        session()->flash('status', 'Kayıdınız başarıyla oluşturulmuştur.');

        // Yönlendirmeyi basitleştirelim
       return redirect()->to(route('login'));
    }
}; ?>

<div
    class="al-font-body min-h-screen w-full relative overflow-hidden bg-gradient-to-br from-[#0B2545] via-[#12315F] to-[#0B2545] flex items-center justify-center p-4 sm:p-6">

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

        .al-grid-bg-login {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
            background-size: 48px 48px;
            mask-image: radial-gradient(ellipse 80% 70% at 30% 40%, black 40%, transparent 100%);
        }

        @keyframes loginPulse {
            0%, 100% { opacity: 0.15; }
            50% { opacity: 0.5; }
        }

        .login-pulse {
            animation: loginPulse 4.5s ease-in-out infinite;
        }

        .login-pulse-delay {
            animation: loginPulse 4.5s ease-in-out infinite;
            animation-delay: 1.6s;
        }

        @keyframes loginFadeUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-fade {
            opacity: 0;
            animation: loginFadeUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .login-fade-delay {
            animation-delay: 0.15s;
        }

        @keyframes alLiveDot {
            0%, 100% { box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.55); }
            50% { box-shadow: 0 0 0 5px rgba(52, 211, 153, 0); }
        }

        .al-live-dot {
            animation: alLiveDot 2.2s ease-in-out infinite;
        }

        .al-input-wrap:focus-within .al-input-icon {
            color: #2F6FED;
        }

        .al-input-wrap:focus-within {
            border-color: #2F6FED;
        }
    </style>

    <div class="absolute inset-0 al-grid-bg-login pointer-events-none"></div>
    <div class="absolute top-1/4 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#FF9F45]/40 to-transparent login-pulse"></div>
    <div class="absolute top-3/4 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#2F6FED]/40 to-transparent login-pulse-delay"></div>

    <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#2F6FED]/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 left-1/4 w-[500px] h-[500px] bg-[#FF9F45]/10 rounded-full blur-3xl"></div>

    {{-- Logo --}}
    <a href="{{ route('home') }}"
        class="absolute top-5 left-5 sm:top-8 sm:left-8 al-font-display text-xl sm:text-2xl font-bold tracking-tight text-white z-30 hover:opacity-80 transition-opacity duration-300">
        AL<span class="text-[#FF9F45]">.</span>TECHNOLOGY
    </a>

    {{-- Sistem Durumu Badge --}}
    <div class="absolute top-5 right-5 sm:top-8 sm:right-8 z-30 hidden sm:flex items-center gap-2 bg-white/5 border border-white/10 backdrop-blur-md rounded-full pl-3 pr-4 py-1.5">
        <span class="w-2 h-2 rounded-full bg-emerald-400 al-live-dot"></span>
        <span class="al-font-mono text-[10px] tracking-widest text-blue-100/70">SİSTEM AKTİF</span>
    </div>

    <div class="relative max-w-6xl w-full flex items-center justify-between gap-16 z-20 my-auto pt-14 sm:pt-0">

        {{-- Left Hero (Desktop) --}}
        <div class="hidden lg:block text-white space-y-6 max-w-lg login-fade">
            <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45] uppercase">HESAP OLUŞTURUN</p>
            <h1 class="al-font-display text-6xl font-extrabold leading-[1.05]">
                Yenilikçi <br><span class="text-[#7CA9F5]">Çözümler.</span>
            </h1>
            <p class="text-blue-100/70 text-lg leading-relaxed">
                AL TECHNOLOGY platformuna katılarak kurumsal ürünlerimizi keşfedin, 
                hızlı teklifler alın ve sisteminizi geleceğe taşıyın.
            </p>
        </div>

        {{-- Register Card --}}
        <div class="w-full max-w-md login-fade login-fade-delay mx-auto" x-data="{ showPassword: false }">
            <div class="relative bg-white/95 backdrop-blur-md p-6 sm:p-10 rounded-2xl sm:rounded-3xl shadow-2xl shadow-black/30 text-[#0B2545] border border-white/50 overflow-hidden">

                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#2F6FED] via-[#FF9F45] to-[#2F6FED]"></div>

                <div class="text-center mb-6 sm:mb-8">
                    <h2 class="al-font-display text-base sm:text-lg font-bold tracking-[0.2em] text-[#0B2545]">KAYIT OL</h2>
                    <div class="w-12 h-1 bg-[#FF9F45] mx-auto mt-2 sm:mt-3 rounded-full"></div>
                </div>

                <form wire:submit="register" class="space-y-3.5 sm:space-y-4">

                    {{-- Ad & Soyad --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <div class="al-input-wrap flex items-center gap-2.5 border-2 border-[#0B2545]/10 rounded-xl px-3.5 py-2.5 sm:py-3 transition-colors duration-300">
                                <svg class="al-input-icon w-4 h-4 shrink-0 text-[#0B2545]/30 transition-colors duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <input wire:model="name" type="text" placeholder="Ad" required
                                    class="al-font-body w-full border-0 focus:ring-0 p-0 text-sm bg-transparent placeholder:text-[#0B2545]/40 outline-none">
                            </div>
                            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <div class="al-input-wrap flex items-center gap-2.5 border-2 border-[#0B2545]/10 rounded-xl px-3.5 py-2.5 sm:py-3 transition-colors duration-300">
                                <svg class="al-input-icon w-4 h-4 shrink-0 text-[#0B2545]/30 transition-colors duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <input wire:model="surname" type="text" placeholder="Soyad" required
                                    class="al-font-body w-full border-0 focus:ring-0 p-0 text-sm bg-transparent placeholder:text-[#0B2545]/40 outline-none">
                            </div>
                            @error('surname') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    {{-- E-posta --}}
                    <div>
                        <div class="al-input-wrap flex items-center gap-3 border-2 border-[#0B2545]/10 rounded-xl px-3.5 py-2.5 sm:py-3 transition-colors duration-300">
                            <svg class="al-input-icon w-5 h-5 shrink-0 text-[#0B2545]/30 transition-colors duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7l9 6 9-6M4 5h16a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V6a1 1 0 011-1z" />
                            </svg>
                            <input wire:model="email" type="email" placeholder="E-posta" required
                                class="al-font-body w-full border-0 focus:ring-0 p-0 text-sm sm:text-base bg-transparent placeholder:text-[#0B2545]/40 outline-none">
                        </div>
                        @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    {{-- Şifre --}}
                    <div>
                        <div class="al-input-wrap flex items-center gap-3 border-2 border-[#0B2545]/10 rounded-xl px-3.5 py-2.5 sm:py-3 transition-colors duration-300">
                            <svg class="al-input-icon w-5 h-5 shrink-0 text-[#0B2545]/30 transition-colors duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="4.5" y="10.5" width="15" height="9.5" rx="2" />
                                <path stroke-linecap="round" d="M7.5 10.5V7a4.5 4.5 0 019 0v3.5" />
                            </svg>
                            <input wire:model="password" :type="showPassword ? 'text' : 'password'" placeholder="Şifre" required
                                class="al-font-body w-full border-0 focus:ring-0 p-0 text-sm sm:text-base bg-transparent placeholder:text-[#0B2545]/40 outline-none">
                            <button type="button" @click="showPassword = !showPassword"
                                class="shrink-0 text-[#0B2545]/30 hover:text-[#2F6FED] transition-colors duration-300">
                                <svg x-show="!showPassword" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.5 12S6 5 12 5s9.5 7 9.5 7-3.5 7-9.5 7-9.5-7-9.5-7z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                                <svg x-show="showPassword" x-cloak class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M10.6 10.6a3 3 0 004.2 4.2M9.9 5.2A9.8 9.8 0 0112 5c6 0 9.5 7 9.5 7a13.2 13.2 0 01-3.1 3.9M6.4 6.4C4 8 2.5 12 2.5 12a13.3 13.3 0 003.4 4.2" />
                                </svg>
                            </button>
                        </div>
                        @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    {{-- Şifre Onay --}}
                    <div>
                        <div class="al-input-wrap flex items-center gap-3 border-2 border-[#0B2545]/10 rounded-xl px-3.5 py-2.5 sm:py-3 transition-colors duration-300">
                            <svg class="al-input-icon w-5 h-5 shrink-0 text-[#0B2545]/30 transition-colors duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="4.5" y="10.5" width="15" height="9.5" rx="2" />
                                <path stroke-linecap="round" d="M7.5 10.5V7a4.5 4.5 0 019 0v3.5" />
                            </svg>
                            <input wire:model="password_confirmation" :type="showPassword ? 'text' : 'password'" placeholder="Şifre Onayı" required
                                class="al-font-body w-full border-0 focus:ring-0 p-0 text-sm sm:text-base bg-transparent placeholder:text-[#0B2545]/40 outline-none">
                        </div>
                    </div>

                    <button type="submit"
                        class="al-font-display w-full bg-[#FF9F45] hover:bg-[#ffb066] hover:scale-[1.02] text-[#0A1830] font-bold py-3.5 sm:py-4 rounded-xl transition-all duration-300 text-base sm:text-lg shadow-lg shadow-[#FF9F45]/20 tracking-wide mt-2 cursor-pointer">
                        HESAP OLUŞTUR
                    </button>

                    <div class="text-center pt-2">
                        <span class="text-xs sm:text-sm text-[#0B2545]/60">Zaten hesabınız var mı?</span>
                        <a href="{{ route('login') }}" wire:navigate
                            class="text-xs sm:text-sm text-[#2F6FED] hover:underline font-semibold ml-1">
                            Giriş Yap
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>