

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.landing.partials.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="container my-4 mx-auto px-6 ">
        <?php if (isset($component)) { $__componentOriginal5e18b7a2867358fb31ce25fdbd94d125ffbfd2a2 = $component; } ?>
<?php $component = App\View\Components\Landing\SearchHeader::resolve(['title' => 'Daftar Produk','url' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('landing.search-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Landing\SearchHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e18b7a2867358fb31ce25fdbd94d125ffbfd2a2)): ?>
<?php $component = $__componentOriginal5e18b7a2867358fb31ce25fdbd94d125ffbfd2a2; ?>
<?php unset($__componentOriginal5e18b7a2867358fb31ce25fdbd94d125ffbfd2a2); ?>
<?php endif; ?>
        <div class="mt-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php if(count($products) == null): ?>
                <p class="my-3 font-semibold text-gray-700 text-center col-start-1 col-end-7 ">Produk tidak tersedia</p>
            <?php else: ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal32c32d9535472245ab05304038332a2ef63a3943 = $component; } ?>
<?php $component = App\View\Components\Landing\ProductItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('landing.product-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Landing\ProductItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal32c32d9535472245ab05304038332a2ef63a3943)): ?>
<?php $component = $__componentOriginal32c32d9535472245ab05304038332a2ef63a3943; ?>
<?php unset($__componentOriginal32c32d9535472245ab05304038332a2ef63a3943); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

        </div>
        <div class="flex justify-end mt-3">
            <?php echo e($products->links('pagination::tailwind')); ?></div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing.master', ['title' => 'Inbox'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/landing/type/show.blade.php ENDPATH**/ ?>