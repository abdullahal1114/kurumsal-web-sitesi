<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest-plain')] class extends Component
{
    public LoginForm $form;

    public function login(): void
    {
        $this->validate();

        try {
            $this->form->authenticate();
            Session::regenerate();

            session()->flash('status', 'Giriş başarılı! Yönlendiriliyorsunuz...');

            $this->redirect(route('dashboard', absolute: false), navigate: true);
        } catch (\Illuminate\Validation\ValidationException $e) {
            throw $e;
        }
    }
}; ?>

<div
    class="al-font-body min-h-screen w-full relative overflow-hidden bg-gradient-to-br from-[#0B2545] via-[#12315F] to-[#0B2545] flex items-center justify-center p-6">

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

            0%,
            100% {
                opacity: 0.15;
            }

            50% {
                opacity: 0.5;
            }
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

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(52, 211, 153, 0.55);
            }

            50% {
                box-shadow: 0 0 0 5px rgba(52, 211, 153, 0);
            }
        }

        .al-live-dot {
            animation: alLiveDot 2.2s ease-in-out infinite;
        }

        .al-social-icon {
            transition: all 0.3s ease;
        }

        .al-social-icon:hover {
            background-color: rgba(255, 159, 69, 0.14);
            border-color: rgba(255, 159, 69, 0.5);
            transform: translateY(-2px);
        }

        .al-input-wrap:focus-within .al-input-icon {
            color: #2F6FED;
        }

        .al-input-wrap:focus-within {
            border-color: #2F6FED;
        }
    </style>


    <div class="absolute inset-0 al-grid-bg-login pointer-events-none"></div>
    <div
        class="absolute top-1/4 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#FF9F45]/40 to-transparent login-pulse">
    </div>
    <div
        class="absolute top-3/4 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#2F6FED]/40 to-transparent login-pulse-delay">
    </div>


    <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#2F6FED]/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 left-1/4 w-[500px] h-[500px] bg-[#FF9F45]/10 rounded-full blur-3xl"></div>


    <a href="{{ route('home') }}"
        class="absolute top-8 left-8 al-font-display text-2xl font-bold tracking-tight text-white z-30 hover:opacity-80 transition-opacity duration-300">
        AL<span class="text-[#FF9F45]">.</span>TECHNOLOGY
    </a>


    <div
        class="absolute top-8 right-8 z-30 hidden sm:flex items-center gap-2 bg-white/5 border border-white/10 backdrop-blur-md rounded-full pl-3 pr-4 py-1.5">
        <span class="w-2 h-2 rounded-full bg-emerald-400 al-live-dot"></span>
        <span class="al-font-mono text-[10px] tracking-widest text-blue-100/70">SİSTEM AKTİF</span>
    </div>


    <div class="absolute bottom-8 left-8 z-30 hidden md:flex items-center gap-3">
        <a href="https://instagram.com/altechnology5858" target="_blank"
            class="al-social-icon w-11 h-11 rounded-full border border-white/15 bg-white/5 backdrop-blur-md flex items-center justify-center text-white/70 hover:text-[#FF9F45]">
            <svg class="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <rect x="3" y="3" width="18" height="18" rx="5" />
                <circle cx="12" cy="12" r="4" />
                <circle cx="17.2" cy="6.8" r="1" fill="currentColor" stroke="none" />
            </svg>
        </a>
        <a href="https://twitter.com/altechnology58" target="_blank"
            class="al-social-icon w-11 h-11 rounded-full border border-white/15 bg-white/5 backdrop-blur-md flex items-center justify-center text-white/70 hover:text-[#FF9F45]">
            <svg class="w-[16px] h-[16px]" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M18.9 2.6h3.4l-7.5 8.5 8.8 11.6h-6.9l-5.4-7.1-6.2 7.1H1.6l8-9.1L1.2 2.6h7l4.9 6.5 5.8-6.5Zm-1.2 18.1h1.9L7.4 4.6H5.4l12.3 16.1Z" />
            </svg>
        </a>
    </div>


    <div class="relative max-w-6xl w-full flex items-center justify-between gap-16 z-20">

        <div class="hidden lg:block text-white space-y-6 max-w-lg login-fade">
            <p class="al-font-mono text-xs tracking-[0.3em] text-[#FF9F45]">HOŞ GELDİNİZ</p>
            <h1 class="al-font-display text-6xl font-extrabold leading-[1.05]">
                Geleceği <br><span class="text-[#7CA9F5]">Kodluyoruz.</span>
            </h1>
            <p class="text-blue-100/70 text-lg leading-relaxed">
                AL TECHNOLOGY olarak, dijital dünyadaki ihtiyaçlarınıza en profesyonel
                çözümleri sunuyoruz. Hesabınıza giriş yaparak projelerinizi yönetmeye devam edin.
            </p>
        </div>

        <div class="w-full max-w-md login-fade login-fade-delay" x-data="{ showPassword: false }">
            <div
                class="relative bg-white/95 backdrop-blur-md p-10 rounded-3xl shadow-2xl shadow-black/30 text-[#0B2545] border border-white/50 overflow-hidden">

                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-[#2F6FED] via-[#FF9F45] to-[#2F6FED]">
                </div>


                @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 text-red-700 text-sm rounded-xl border border-red-200 text-center">
                    {{ $errors->first() }}
                </div>
                @endif


                @if (session('status'))
                <div class="mb-6 text-sm text-green-700 bg-green-50 p-4 rounded-xl text-center border border-green-200">
                    {{ session('status') }}
                </div>
                @endif

                <div class="text-center mb-8">
                    <h2 class="al-font-display text-lg font-bold tracking-[0.2em] text-[#0B2545]">AL TECHNOLOGY</h2>
                    <div class="w-12 h-1 bg-[#FF9F45] mx-auto mt-3 rounded-full"></div>
                </div>

                <form wire:submit="login" class="space-y-5">

                    <div
                        class="al-input-wrap flex items-center gap-3 border-2 border-[#0B2545]/10 rounded-xl px-4 py-3 transition-colors duration-300">
                        <svg class="al-input-icon w-5 h-5 shrink-0 text-[#0B2545]/30 transition-colors duration-300"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 7l9 6 9-6M4 5h16a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V6a1 1 0 011-1z" />
                        </svg>
                        <input wire:model="form.email" type="email" required placeholder="E-posta adresiniz"
                            class="al-font-body w-full border-0 focus:ring-0 p-0 text-base bg-transparent placeholder:text-[#0B2545]/40">
                    </div>

                    <div
                        class="al-input-wrap flex items-center gap-3 border-2 border-[#0B2545]/10 rounded-xl px-4 py-3 transition-colors duration-300">
                        <svg class="al-input-icon w-5 h-5 shrink-0 text-[#0B2545]/30 transition-colors duration-300"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="4.5" y="10.5" width="15" height="9.5" rx="2" />
                            <path stroke-linecap="round" d="M7.5 10.5V7a4.5 4.5 0 019 0v3.5" />
                        </svg>
                        <input wire:model="form.password" :type="showPassword ? 'text' : 'password'" required
                            placeholder="Şifreniz"
                            class="al-font-body w-full border-0 focus:ring-0 p-0 text-base bg-transparent placeholder:text-[#0B2545]/40">
                        <button type="button" @click="showPassword = !showPassword"
                            class="shrink-0 text-[#0B2545]/30 hover:text-[#2F6FED] transition-colors duration-300">
                            <svg x-show="!showPassword" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.5 12S6 5 12 5s9.5 7 9.5 7-3.5 7-9.5 7-9.5-7-9.5-7z" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                            <svg x-show="showPassword" x-cloak class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3l18 18M10.6 10.6a3 3 0 004.2 4.2M9.9 5.2A9.8 9.8 0 0112 5c6 0 9.5 7 9.5 7a13.2 13.2 0 01-3.1 3.9M6.4 6.4C4 8 2.5 12 2.5 12a13.3 13.3 0 003.4 4.2" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center justify-between text-sm pt-1">
                        <label class="flex items-center gap-2 text-[#0B2545]/60 cursor-pointer select-none">
                            <input wire:model="form.remember" type="checkbox"
                                class="rounded border-[#0B2545]/20 text-[#2F6FED] focus:ring-[#2F6FED]/40">
                            Beni hatırla
                        </label>
                        <a href="{{ route('password.request') }}" wire:navigate
                            class="text-[#2F6FED] hover:text-[#0B2545] font-medium transition-colors duration-300">
                            Şifremi unuttum
                        </a>
                    </div>

                    <button type="submit"
                        class="al-font-display w-full bg-[#FF9F45] hover:bg-[#ffb066] hover:scale-[1.02] text-[#0A1830] font-bold py-4 rounded-xl transition-all duration-300 text-lg shadow-lg shadow-[#FF9F45]/20 tracking-wide">
                        GİRİŞ YAP
                    </button>

                    <a href="{{ route('register') }}" wire:navigate
                        class="al-font-display block w-full text-center border-2 border-[#0B2545] text-[#0B2545] hover:bg-[#0B2545] hover:text-white font-bold py-4 rounded-xl transition-all duration-300 text-lg tracking-wide">
                        KAYIT OL
                    </a>
                </form>
            </div>


            <div class="flex md:hidden items-center justify-center gap-3 mt-6">
                <a href="https://instagram.com/altechnology5858" target="_blank"
                    class="al-social-icon w-10 h-10 rounded-full border border-white/15 bg-white/5 backdrop-blur-md flex items-center justify-center text-white/70 hover:text-[#FF9F45]">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="5" />
                        <circle cx="12" cy="12" r="4" />
                        <circle cx="17.2" cy="6.8" r="1" fill="currentColor" stroke="none" />
                    </svg>
                </a>
                <a href="https://twitter.com/altechnology58" target="_blank"
                    class="al-social-icon w-10 h-10 rounded-full border border-white/15 bg-white/5 backdrop-blur-md flex items-center justify-center text-white/70 hover:text-[#FF9F45]">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M18.9 2.6h3.4l-7.5 8.5 8.8 11.6h-6.9l-5.4-7.1-6.2 7.1H1.6l8-9.1L1.2 2.6h7l4.9 6.5 5.8-6.5Zm-1.2 18.1h1.9L7.4 4.6H5.4l12.3 16.1Z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>