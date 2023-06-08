

<?php $__env->startSection('content'); ?>
    <div class="container my-4 px-6 mx-auto">
        <h1 class="text-2xl font-extrabold mb-5 ml-28 pt-7">Keranjang</h1>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <div class="lg:col-span-8">
                <?php if (isset($component)) { $__componentOriginal912495da29f417cab7a2d5a3f927ad344141635e = $component; } ?>
<?php $component = App\View\Components\Landing\CartTable::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('landing.cart-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Landing\CartTable::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['carts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($carts),'grandQuantity' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($grandQuantity)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal912495da29f417cab7a2d5a3f927ad344141635e)): ?>
<?php $component = $__componentOriginal912495da29f417cab7a2d5a3f927ad344141635e; ?>
<?php unset($__componentOriginal912495da29f417cab7a2d5a3f927ad344141635e); ?>
<?php endif; ?>
            </div>
            <div class="lg:col-span-4">
                <?php if (isset($component)) { $__componentOriginalfbed1160c160159f05f7e2a1fd3a3b22ea92c7fb = $component; } ?>
<?php $component = App\View\Components\Landing\CartForm::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('landing.cart-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Landing\CartForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['carts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($carts),'grandPrice' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($grandPrice)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbed1160c160159f05f7e2a1fd3a3b22ea92c7fb)): ?>
<?php $component = $__componentOriginalfbed1160c160159f05f7e2a1fd3a3b22ea92c7fb; ?>
<?php unset($__componentOriginalfbed1160c160159f05f7e2a1fd3a3b22ea92c7fb); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing.master', ['title' => 'Keranjang'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/landing/cart/index.blade.php ENDPATH**/ ?>