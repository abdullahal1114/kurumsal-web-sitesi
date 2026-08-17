<?php

use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

?>

<div class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF]" style="font-family:'Inter',sans-serif;">
    <div class="max-w-3xl mx-auto px-6 py-16">

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php if($completed): ?>
            <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-10 text-center shadow-sm border border-[#0B2545]/10">
                <div class="w-16 h-16 mx-auto mb-5 rounded-full bg-emerald-50 flex items-center justify-center">
                    <svg class="w-8 h-8 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-[#0B2545] mb-2" style="font-family:'Space Grotesk',sans-serif;">Siparişiniz alındı</h1>
                <p class="text-[#0B2545]/60 mb-1">Sipariş numaranız: <span class="font-bold text-[#0B2545]"><?php echo e($orderNumber); ?></span></p>
                <p class="text-[#0B2545]/50 text-sm mb-8">Ekibimiz en kısa sürede sizinle iletişime geçerek siparişinizi onaylayacak.</p>
                <a href="<?php echo e(route('home')); ?>" class="inline-block bg-[#0B2545] hover:bg-[#12315F] text-white font-bold text-sm px-6 py-3 rounded-full transition-colors">
                    Ana Sayfaya Dön
                </a>
            </div>
        <?php else: ?>
            <p class="text-xs tracking-[0.3em] text-[#FF9F45] mb-3" style="font-family:'JetBrains Mono',monospace;">ÖDEME</p>
            <h1 class="text-3xl md:text-4xl font-extrabold text-[#0B2545] mb-10" style="font-family:'Space Grotesk',sans-serif;">Siparişi tamamlayın</h1>

            <div class="grid md:grid-cols-5 gap-8">
                
                <div class="md:col-span-2 order-2 md:order-1">
                    <div class="bg-white/70 backdrop-blur-sm rounded-2xl border border-[#0B2545]/10 p-5 sticky top-8">
                        <h2 class="text-sm font-bold text-[#0B2545] mb-4 tracking-wide">SİPARİŞ ÖZETİ</h2>
                        <div class="space-y-3 mb-5">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg flex items-center justify-center text-[10px] font-bold text-white shrink-0" style="background-color: <?php echo e($item['renk']); ?>; font-family:'JetBrains Mono',monospace;">
                                    <?php echo e($item['kod']); ?>

                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-bold text-[#0B2545] truncate"><?php echo e($item['ad']); ?></p>
                                    <p class="text-[11px] text-[#0B2545]/45" style="font-family:'JetBrains Mono',monospace;"><?php echo e($item['adet']); ?> adet × <?php echo e(number_format($item['fiyat'], 0, ',', '.')); ?> ₺</p>
                                </div>
                                <p class="text-xs font-bold text-[#0B2545] shrink-0" style="font-family:'JetBrains Mono',monospace;"><?php echo e(number_format($item['fiyat'] * $item['adet'], 0, ',', '.')); ?> ₺</p>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
                        </div>
                        <div class="pt-4 border-t border-[#0B2545]/10 flex items-center justify-between">
                            <span class="text-xs tracking-widest text-[#0B2545]/40" style="font-family:'JetBrains Mono',monospace;">TOPLAM</span>
                            <span class="text-xl font-bold text-[#0B2545]" style="font-family:'Space Grotesk',sans-serif;"><?php echo e(number_format($this->total, 0, ',', '.')); ?> ₺</span>
                        </div>
                    </div>
                </div>

                
                <div class="md:col-span-3 order-1 md:order-2">
                    <form wire:submit="tamamla" class="bg-white/70 backdrop-blur-sm rounded-2xl border border-[#0B2545]/10 p-6 space-y-4">
                        <div>
                            <input wire:model="name" type="text" placeholder="Ad Soyad"
                                   class="w-full border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl px-4 py-3 text-sm outline-none transition-colors">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <input wire:model="phone" type="text" placeholder="Telefon"
                                       class="w-full border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl px-4 py-3 text-sm outline-none transition-colors">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
                            </div>
                            <div>
                                <input wire:model="company" type="text" placeholder="Şirket (opsiyonel)"
                                       class="w-full border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl px-4 py-3 text-sm outline-none transition-colors">
                            </div>
                        </div>

                        <div>
                            <input wire:model="email" type="email" placeholder="E-posta"
                                   class="w-full border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl px-4 py-3 text-sm outline-none transition-colors">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
                        </div>

                        <div>
                            <textarea wire:model="address" rows="3" placeholder="Teslimat / fatura adresi"
                                      class="w-full border border-[#0B2545]/10 focus:border-[#2F6FED] bg-[#F7F9FC] focus:bg-white rounded-xl px-4 py-3 text-sm outline-none transition-colors resize-none"></textarea>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
                        </div>

                        <button type="submit" wire:loading.attr="disabled" wire:target="tamamla"
                                class="w-full flex items-center justify-center gap-2 bg-[#FF9F45] hover:bg-[#ffb066] disabled:opacity-60 text-[#0A1830] font-bold text-sm py-3.5 rounded-xl transition-all duration-200"
                                style="font-family:'JetBrains Mono',monospace;">
                            <span wire:loading.remove wire:target="tamamla">SİPARİŞİ TAMAMLA</span>
                            <span wire:loading wire:target="tamamla">Gönderiliyor...</span>
                        </button>
                    </form>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>
    </div>
</div><?php /**PATH C:\Users\apoca\Desktop\livewire-projem\resources\views\livewire/checkout.blade.php ENDPATH**/ ?>