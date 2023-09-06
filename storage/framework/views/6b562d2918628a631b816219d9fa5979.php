<!DOCTYPE html> <html lang="en"> <head>
<Link href=
"https://fonts.googleapis.com/css?family-Nunito: 200,600" rel="stylesheet">
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo e(asset ('css/app.css')); ?>">
<!-- Scripts-->
<link href="<?php echo e(asset('bootstrap-5.3.1-dist/css/bootstrap.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('bootstrap-5.3.1-dist/js/bootstrap.js')); ?>"></script> <meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<title>PlanetExtra</title>
</head> 
<body> 
    <?php echo $__env->make('components/meldingen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
    <div class="text-center container mt-5" >
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</body> 
</html><?php /**PATH C:\xampp\htdocs\2023-2024\PGB\Laravel\project-13-CRUD\planetextra\resources\views/layouts/app.blade.php ENDPATH**/ ?>