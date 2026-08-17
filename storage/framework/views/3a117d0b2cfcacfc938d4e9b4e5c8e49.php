<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>

<body class="font-sans antialiased">
    <?php if (isset($component)) { $__componentOriginalff9615640ecc9fe720b9f7641382872b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff9615640ecc9fe720b9f7641382872b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff9615640ecc9fe720b9f7641382872b)): ?>
<?php $attributes = $__attributesOriginalff9615640ecc9fe720b9f7641382872b; ?>
<?php unset($__attributesOriginalff9615640ecc9fe720b9f7641382872b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff9615640ecc9fe720b9f7641382872b)): ?>
<?php $component = $__componentOriginalff9615640ecc9fe720b9f7641382872b; ?>
<?php unset($__componentOriginalff9615640ecc9fe720b9f7641382872b); ?>
<?php endif; ?>

    <div class="min-h-screen bg-gray-100">
        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php if(!request()->routeIs('referanslar')): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('navigation-menu');

$__key = null;

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-3089462008-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key);

echo $__html;

unset($__html);
unset($__key);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if BLOCK]><![endif]<?php endif; ?><?php if(isset($header)): ?>
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <?php echo e($header); ?>

            </div>
        </header>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?>[if ENDBLOCK]><![endif]<?php endif; ?>

        <main>
            <?php echo e($slot); ?>

        </main>
    </div>

    <?php echo $__env->yieldPushContent('modals'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('quote-request-modal', []);

$__key = null;

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-3089462008-1', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key);

echo $__html;

unset($__html);
unset($__key);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
                const counters = document.querySelectorAll('.counter');
                const speed = 200; 

                const animateCounter = (counter) => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(() => animateCounter(counter), 1);
                    } else {
                        counter.innerText = target + "+"; 
                    }
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateCounter(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });

                counters.forEach(counter => observer.observe(counter));
            });
    </script>
</body>

</html><?php /**PATH C:\Users\apoca\Desktop\livewire-projem\resources\views/layouts/app.blade.php ENDPATH**/ ?>