<div class="min-h-screen flex items-center justify-center bg-blue-600 p-6">
     Ana Konteyner 
    <div class="max-w-4xl w-full flex flex-col md:flex-row items-center gap-12 text-white">
        
         Sol Taraf: Metin ve Başlık 
        <div class="flex-1 space-y-4">
            <h1 class="text-5xl font-bold">Hoş Geldiniz</h1>
            <p class="text-blue-100 text-lg">
                Projenize giriş yapmak için bilgilerinizi kullanın. Modern ve güvenli giriş paneline hoş geldiniz.
            </p>
            <button class="border border-white px-6 py-2 rounded-full hover:bg-white hover:text-blue-600 transition">
                Daha Fazla Bilgi
            </button>
        </div>

         Sağ Taraf: Giriş Kartı 
        <div class="bg-white p-8 rounded-2xl shadow-2xl w-full md:w-96 text-gray-800">
            <h2 class="text-xl font-semibold mb-6 text-center">Giriş Yap</h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                 Email 
                <div class="mb-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus />
                </div>
                 Password 
                <div class="mb-6">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                </div>
                 Buton 
                <x-button class="w-full justify-center bg-blue-600">
                    {{ __('Giriş Yap') }}
                </x-button>
            </form>
        </div>

    </div>
</div>