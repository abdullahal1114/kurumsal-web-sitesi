<?php

use Livewire\Attributes\On;
use Livewire\Volt\Component;

?>

<div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php if($showCart): ?>
    
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
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white/70 rounded-2xl p-3 flex items-center gap-3" wire:key="cart-<?php echo e($item['kod']); ?>">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center text-xs font-bold text-white shrink-0" style="background-color: <?php echo e($item['renk']); ?>; font-family:'JetBrains Mono',monospace;">
                        <?php echo e($item['kod']); ?>

                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-bold text-[#0B2545] truncate"><?php echo e($item['ad']); ?></p>
                        <p class="text-xs text-[#0B2545]/50" style="font-family:'JetBrains Mono',monospace;"><?php echo e(number_format($item['fiyat'], 0, ',', '.')); ?> ₺</p>
                    </div>
                    <div class="flex items-center gap-2 shrink-0">
                        <button type="button" wire:click="decrement('<?php echo e($item['kod']); ?>')" class="w-7 h-7 rounded-full bg-[#0B2545]/5 hover:bg-[#0B2545]/10 flex items-center justify-center text-[#0B2545] font-bold transition-colors">−</button>
                        <span class="w-4 text-center text-sm font-semibold text-[#0B2545]"><?php echo e($item['adet']); ?></span>
                        <button type="button" wire:click="increment('<?php echo e($item['kod']); ?>')" class="w-7 h-7 rounded-full bg-[#0B2545]/5 hover:bg-[#0B2545]/10 flex items-center justify-center text-[#0B2545] font-bold transition-colors">+</button>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="flex flex-col items-center justify-center h-full text-center py-20">
                    <p class="text-[#0B2545]/40 text-sm">Sepetiniz boş.</p>
                </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
            </div>

            <div class="border-t border-[#0B2545]/10 px-6 py-5 shrink-0">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs tracking-widest text-[#0B2545]/40" style="font-family:'JetBrains Mono',monospace;">TOPLAM</span>
                    <span class="text-2xl font-bold text-[#0B2545]" style="font-family:'Space Grotesk',sans-serif;"><?php echo e(number_format($this->total, 0, ',', '.')); ?> ₺</span>
                </div>
                <button
                    type="button"
                    wire:click="satinAl"
                    <?php if(empty($items)): ?> disabled <?php endif; ?>
                    class="w-full bg-[#FF9F45] hover:bg-[#ffb066] hover:scale-[1.01] disabled:opacity-40 disabled:cursor-not-allowed disabled:hover:scale-100 text-[#0A1830] font-bold text-sm py-3.5 rounded-full transition-all duration-300 tracking-wide"
                    style="font-family:'JetBrains Mono',monospace;"
                >
                    SATIN AL
                </button>
            </div>
        </div>
    </div>
    </template>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
</div><?php /**PATH C:\Users\apoca\Desktop\livewire-projem\resources\views\livewire/cart-drawer.blade.php ENDPATH**/ ?>