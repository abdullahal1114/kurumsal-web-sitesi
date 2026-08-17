<?php

use Livewire\Attributes\On;
use Livewire\Volt\Component;

new class extends Component
{
    public bool $showCart = false;

    public array $items = [];

    public function mount(): void
    {
        $this->refreshItems();
    }

    /** Sepet ikonuna tıklanınca çağrılır: dispatch('cart-open') */
    #[On('cart-open')]
    public function openCart(): void
    {
        $this->refreshItems();
        $this->showCart = true;
    }

    public function closeCart(): void
    {
        $this->showCart = false;
    }

    /**
     * Mağaza sayfasındaki "Sepete Ekle" butonlarından tetiklenir:
     * Livewire.dispatch('addToCart', { kod: 'SRV2', ad: 'AL.Edge Mini Sunucu', fiyat: 42500, renk: '#FF9F45' })
     *
     * NOT: Bilerek $showCart = true YAPMIYORUZ. Ürün eklerken sepeti otomatik açmak
     * kullanıcının art arda ürün seçmesini engelliyordu. Artık ekleme sessizce
     * gerçekleşiyor; sepet sadece kullanıcı ikona tıklayınca (veya zaten açıksa) görünüyor.
     */
    #[On('addToCart')]
    public function addToCart(string $kod, string $ad, float $fiyat, string $renk = '#FF9F45'): void
    {
        $sepet = session()->get('sepet', []);

        if (isset($sepet[$kod])) {
            $sepet[$kod]['adet']++;
        } else {
            $sepet[$kod] = [
                'kod' => $kod,
                'ad' => $ad,
                'fiyat' => $fiyat,
                'adet' => 1,
                'renk' => $renk,
            ];
        }

        session()->put('sepet', $sepet);
        $this->refreshItems();
        // $this->showCart kasıtlı olarak değiştirilmiyor: zaten açıksa açık kalır
        // (ve içerik anında güncellenir), kapalıysa kapalı kalır.
    }

    public function increment(string $kod): void
    {
        $sepet = session()->get('sepet', []);

        if (isset($sepet[$kod])) {
            $sepet[$kod]['adet']++;
            session()->put('sepet', $sepet);
            $this->refreshItems();
        }
    }

    public function decrement(string $kod): void
    {
        $sepet = session()->get('sepet', []);

        if (isset($sepet[$kod])) {
            $sepet[$kod]['adet']--;

            if ($sepet[$kod]['adet'] <= 0) {
                unset($sepet[$kod]);
            }

            session()->put('sepet', $sepet);
            $this->refreshItems();
        }
    }

    protected function refreshItems(): void
    {
        $this->items = session()->get('sepet', []);
    }

    public function getTotalProperty(): float
    {
        return collect($this->items)->sum(fn ($item) => $item['fiyat'] * $item['adet']);
    }

    /** SATIN AL butonu: sepeti korur, ödeme sayfasına yönlendirir */
    public function satinAl()
    {
        if (empty($this->items)) {
            return;
        }

        $this->showCart = false;

        return redirect()->route('odeme');
    }
}; ?>

<div>
    @if ($showCart)
    {{-- x-teleport ile paneli <body>'nin en altına taşıyoruz: böylece hiçbir navbar/parent
         (sticky, backdrop-filter, overflow vb. sebeplerle) sepet panelinin üstüne çıkamaz. --}}
    <template x-teleport="body">
    <div class="fixed inset-0 flex justify-end" style="z-index: 2147483647;" x-data x-on:keydown.escape.window="$wire.closeCart()">
        <div class="absolute inset-0 bg-[#0B2545]/40 backdrop-blur-sm" wire:click="closeCart"
             x-show="true" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"></div>

        <div
            x-show="true"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            @click.stop
            class="relative w-full max-w-md h-full bg-gradient-to-b from-[#EAF4FF] to-[#DCEEFF] shadow-2xl flex flex-col"
            style="font-family:'Inter',sans-serif;"
        >
            <div class="h-1 w-full bg-gradient-to-r from-[#FF9F45] via-[#ffcf9c] to-[#FF9F45] shrink-0"></div>

            <div class="flex items-center justify-between px-6 py-5 border-b border-[#0B2545]/10 shrink-0">
                <h2 class="text-xl font-bold text-[#0B2545]" style="font-family:'Space Grotesk',sans-serif;">Sepetiniz</h2>
                <button type="button" wire:click="closeCart" class="w-9 h-9 rounded-full bg-white flex items-center justify-center text-[#0B2545]/50 hover:text-[#0B2545] transition-colors">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18" />
                    </svg>
                </button>
            </div>

            <div class="flex-1 overflow-y-auto px-6 py-5 space-y-3">
                @forelse ($items as $item)
                <div class="bg-white/70 rounded-2xl p-3 flex items-center gap-3" wire:key="cart-{{ $item['kod'] }}">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center text-xs font-bold text-white shrink-0" style="background-color: {{ $item['renk'] }}; font-family:'JetBrains Mono',monospace;">
                        {{ $item['kod'] }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-bold text-[#0B2545] truncate">{{ $item['ad'] }}</p>
                        <p class="text-xs text-[#0B2545]/50" style="font-family:'JetBrains Mono',monospace;">{{ number_format($item['fiyat'], 0, ',', '.') }} ₺</p>
                    </div>
                    <div class="flex items-center gap-2 shrink-0">
                        <button type="button" wire:click="decrement('{{ $item['kod'] }}')" class="w-7 h-7 rounded-full bg-[#0B2545]/5 hover:bg-[#0B2545]/10 flex items-center justify-center text-[#0B2545] font-bold transition-colors">−</button>
                        <span class="w-4 text-center text-sm font-semibold text-[#0B2545]">{{ $item['adet'] }}</span>
                        <button type="button" wire:click="increment('{{ $item['kod'] }}')" class="w-7 h-7 rounded-full bg-[#0B2545]/5 hover:bg-[#0B2545]/10 flex items-center justify-center text-[#0B2545] font-bold transition-colors">+</button>
                    </div>
                </div>
                @empty
                <div class="flex flex-col items-center justify-center h-full text-center py-20">
                    <p class="text-[#0B2545]/40 text-sm">Sepetiniz boş.</p>
                </div>
                @endforelse
            </div>

            <div class="border-t border-[#0B2545]/10 px-6 py-5 shrink-0">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs tracking-widest text-[#0B2545]/40" style="font-family:'JetBrains Mono',monospace;">TOPLAM</span>
                    <span class="text-2xl font-bold text-[#0B2545]" style="font-family:'Space Grotesk',sans-serif;">{{ number_format($this->total, 0, ',', '.') }} ₺</span>
                </div>
                <button
                    type="button"
                    wire:click="satinAl"
                    @if(empty($items)) disabled @endif
                    class="w-full bg-[#FF9F45] hover:bg-[#ffb066] hover:scale-[1.01] disabled:opacity-40 disabled:cursor-not-allowed disabled:hover:scale-100 text-[#0A1830] font-bold text-sm py-3.5 rounded-full transition-all duration-300 tracking-wide"
                    style="font-family:'JetBrains Mono',monospace;"
                >
                    SATIN AL
                </button>
            </div>
        </div>
    </div>
    </template>
    @endif
</div>
