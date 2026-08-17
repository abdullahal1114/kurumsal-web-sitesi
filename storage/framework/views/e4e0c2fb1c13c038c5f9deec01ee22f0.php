<!DOCTYPE html>
<html lang="tr">
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'AL.TECHNOLOGY')); ?> — Kurumsal</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

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

        .al-navbar {
            background: rgba(255, 255, 255, 0.55);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transition: background 0.4s ease, box-shadow 0.4s ease;
        }

        .al-navbar:hover {
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 30px -12px rgba(11, 37, 69, 0.15);
        }

        @keyframes fadeInAnim {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-in {
            animation: fadeInAnim 0.8s ease-out forwards;
        }
    </style>
</head>

<body class="al-font-body antialiased">

    <div class="min-h-screen bg-gradient-to-b from-[#EAF4FF] via-[#DCEEFF] to-[#EAF4FF] text-[#0B2545]">
        <?php echo e($slot); ?>

    </div>

    <?php echo $__env->yieldPushContent('modals'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('quote-request-modal', []);

$__key = null;

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-3822369104-0', $__key);

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


</body>

</html><?php /**PATH C:\Users\apoca\Desktop\livewire-projem\resources\views/layouts/kurumsal.blade.php ENDPATH**/ ?>