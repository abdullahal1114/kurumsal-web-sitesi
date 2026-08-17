<?php

use App\Models\QuoteRequest;
use Livewire\Attributes\On;
use Livewire\Volt\Component;

?>

<div x-data="{ open: <?php if ((object) ('showModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('showModal'->value()); ?>')<?php echo e('showModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('showModal'); ?>')<?php endif; ?> }" x-on:keydown.escape.window="$wire.closeModal()"
    x-effect="document.body.style.overflow = open ? 'hidden' : ''">

    

    <template x-teleport="body">
        <div>
            
            
            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 z-[90] bg-[#0B2545]/50 backdrop-blur-sm"
                wire:click="closeModal"></div>

            
            <div x-show="open" x-cloak
                class="fixed inset-0 z-[100] flex items-start md:items-center justify-center p-4 overflow-y-auto">
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2 scale-[0.98]"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                    x-transition:leave-end="opacity-0 -translate-y-2 scale-[0.98]" @click.stop
                    class="relative w-full max-w-md my-8 md:my-0" style="font-family:'Inter',sans-serif;">
                    <div
                        class="relative bg-white rounded-2xl shadow-[0_20px_60px_-15px_rgba(11,37,69,0.35)] ring-1 ring-[#0B2545]/5 overflow-hidden max-h-[calc(100vh-4rem)] overflow-y-auto">

                        
                        <div class="h-1 w-full bg-gradient-to-r from-[#FF9F45] via-[#ffcf9c] to-[#FF9F45]"></div>

                        <div class="p-6 md:p-7">
                            <button type="button" wire:click="closeModal"
                                class="absolute top-5 right-5 text-[#0B2545]/35 hover:text-[#0B2545] transition-colors">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.8">
                                    <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18" />
                                </svg>
                            </button>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php if($submitted): ?>
                            <div class="text-center py-8">
                                <div
                                    class="w-14 h-14 mx-auto mb-4 rounded-full bg-emerald-50 flex items-center justify-center">
                                    <svg class="w-7 h-7 text-emerald-500" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-[#0B2545] mb-1.5"
                                    style="font-family:'Space Grotesk',sans-serif;">Talebiniz alındı</h3>
                                <p class="text-[#0B2545]/55 text-sm mb-6 leading-relaxed">Ekibimiz en kısa sürede
                                    sizinle iletişime geçecek.</p>
                                <button type="button" wire:click="closeModal"
                                    class="bg-[#0B2545] text-white font-bold text-sm px-5 py-2.5 rounded-xl hover:bg-[#12315F] transition-colors">
                                    Kapat
                                </button>
                            </div>
                            <?php else: ?>
                            <h3 class="text-lg font-bold text-[#0B2545] mb-1 pr-6"
                                style="font-family:'Space Grotesk',sans-serif;">Fiyat teklifi alın</h3>
                            <p class="text-[#0B2545]/50 text-xs mb-5">Bilgilerinizi bırakın, size özel teklif
                                hazırlayalım.</p>

                            <form wire:submit="submitRequest" class="space-y-3">
                                <div class="relative">
                                    <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-[#0B2545]/30"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM4 21v-1a6 6 0 016-6h4a6 6 0 016 6v1" />
                                    </svg>
                                    <input wire:model="name" type="text" placeholder="Ad Soyad"
                                        class="w-full border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl pl-10 pr-3.5 py-2.5 text-sm outline-none transition-colors">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
                                </div>

                                <div class="grid grid-cols-2 gap-2.5">
                                    <div class="relative">
                                        <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-[#0B2545]/30"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 5c0 9.4 6.6 16 16 16l3-3-5-4-2 2c-2.5-1-4.5-3-5.5-5.5l2-2-4-5-3 3z" />
                                        </svg>
                                        <input wire:model="phone" type="text" placeholder="Telefon"
                                            class="w-full border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl pl-9 pr-3 py-2.5 text-sm outline-none transition-colors">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
                                    </div>
                                    <div class="relative">
                                        <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-[#0B2545]/30"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 21V7l8-4 8 4v14M9 21v-6h6v6" />
                                        </svg>
                                        <input wire:model="company" type="text" placeholder="Şirket"
                                            class="w-full border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl pl-9 pr-3 py-2.5 text-sm outline-none transition-colors">
                                    </div>
                                </div>

                                <div class="relative">
                                    <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-[#0B2545]/30"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 8l9 6 9-6M4 5h16a1 1 0 011 1v12a1 1 0 01-1 1H4a1 1 0 01-1-1V6a1 1 0 011-1z" />
                                    </svg>
                                    <input wire:model="email" type="email" placeholder="E-posta"
                                        class="w-full border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl pl-10 pr-3.5 py-2.5 text-sm outline-none transition-colors">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
                                </div>

                                <div class="relative">
                                    <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-[#0B2545]/30 pointer-events-none"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 6h16M4 12h16M4 18h7" />
                                    </svg>
                                    <select wire:model="service"
                                        class="w-full appearance-none border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl pl-10 pr-9 py-2.5 text-sm outline-none transition-colors text-[#0B2545]/80">
                                        <option value="">İlgilendiğiniz hizmet</option>
                                        <option value="Yazılım Çözümleri">Yazılım Çözümleri</option>
                                        <option value="Cloud Sistemler">Cloud Sistemler</option>
                                        <option value="Siber Güvenlik">Siber Güvenlik</option>
                                        <option value="Donanım">Donanım</option>
                                        <option value="Teknik Destek">Teknik Destek</option>
                                        <option value="Diğer">Diğer</option>
                                    </select>
                                    <svg class="absolute right-3.5 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-[#0B2545]/30 pointer-events-none"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                                    </svg>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php $__errorArgs = ['service'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
                                </div>

                                <textarea wire:model="message" rows="2" placeholder="Mesajınız (opsiyonel)"
                                    class="w-full border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl px-3.5 py-2.5 text-sm outline-none transition-colors resize-none"></textarea>

                                <button type="submit" wire:loading.attr="disabled" wire:target="submitRequest"
                                    class="w-full flex items-center justify-center gap-2 bg-[#0B2545] hover:bg-[#12315F] text-white font-bold text-sm py-3 rounded-xl transition-all duration-200 disabled:opacity-60 disabled:cursor-not-allowed">
                                    <span wire:loading.remove wire:target="submitRequest">Teklif İste</span>
                                    <span wire:loading wire:target="submitRequest" class="flex items-center gap-2">
                                        <svg class="animate-spin h-4 w-4" viewBox="0 0 24 24" fill="none">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                                stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                        </svg>
                                        Gönderiliyor...
                                    </span>
                                </button>
                            </form>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div><?php /**PATH C:\Users\apoca\Desktop\livewire-projem\resources\views\livewire/quote-request-modal.blade.php ENDPATH**/ ?>