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

<div class="min-h-screen flex items-center justify-center bg-blue-600 p-6">
    <div class="w-full max-w-md bg-white p-10 rounded-3xl shadow-2xl">
        <h2 class="text-center text-2xl font-bold text-blue-600 mb-8">KAYIT OL</h2>
        
        <form wire:submit="register" class="space-y-4">
             Ad 
            <div>
                <input wire:model="name" type="text" placeholder="Ad" required class="w-full p-3 border-b-2 border-gray-200 focus:border-blue-600 outline-none">
                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

             Soyad 
            <div>
                <input wire:model="surname" type="text" placeholder="Soyad" required class="w-full p-3 border-b-2 border-gray-200 focus:border-blue-600 outline-none">
                @error('surname') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            
             E-posta 
            <div>
                <input wire:model="email" type="email" placeholder="E-posta" required class="w-full p-3 border-b-2 border-gray-200 focus:border-blue-600 outline-none">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            
             Şifre 
            <div>
                <input wire:model="password" type="password" placeholder="Şifre" required class="w-full p-3 border-b-2 border-gray-200 focus:border-blue-600 outline-none">
                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            
             Şifre Onay 
            <div>
                <input wire:model="password_confirmation" type="password" placeholder="Şifre Onayı" required class="w-full p-3 border-b-2 border-gray-200 focus:border-blue-600 outline-none">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-4 rounded-xl mt-4 hover:bg-blue-700 transition">
                KAYIT OL
            </button>
        </form>
    </div>
</div>