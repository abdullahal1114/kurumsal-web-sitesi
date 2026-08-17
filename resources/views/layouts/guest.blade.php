@props(['fullWidth' => false])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

         Fonts 
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         Scripts 
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        
        @if($fullWidth)
             Tam Ekran İstenirse Sadece İçeriği Bas 
            {{ $slot }}
        @else
             Orijinal Yapın: Diğer sayfalar için daraltılmış arka planlı kutu 
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-tr from-slate-900 via-indigo-950 to-slate-900">
                
                 Projenin Başlığı / Logosu 
                <div class="mb-4 text-center">
                    <a href="/" class="text-3xl font-extrabold tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-300 drop-shadow-md">
                        LIVEWIRE PROJEM
                    </a>
                </div>

                 Giriş / Kayıt Kutusu (Card) 
                <div class="w-full sm:max-w-md mt-2 px-8 py-8 bg-white/90 dark:bg-slate-900/80 backdrop-blur-md shadow-2xl border border-slate-700/50 overflow-hidden sm:rounded-2xl">
                    {{ $slot }}
                </div>
                
            </div>
        @endif

    </body>
</html>