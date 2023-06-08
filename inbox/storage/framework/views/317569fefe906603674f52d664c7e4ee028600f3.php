<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['product']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['product']); ?>
<?php foreach (array_filter((['product']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class=" bg-white border border-gray-200 justify-center rounded-lg shadow">
    <div class="w-13 h-64">
        <img class="rounded-t-lg w-full h-full object-cover mx-18" src="<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" />
    </div>
    <div class="p-5">
        <a href="<?php echo e(route('product.show', $product->slug)); ?>">
            <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo e($product->name); ?></h4>
        </a>
        <p class="text-gray-800">
            Rp <?php echo e(number_format($product->price, 2, ',', '.')); ?>/Bulan
        </p>
        <?php if($product->quantity > 0): ?>
        <p class="mb-3 font-bold text-orange-600">Stok tersedia: <?php echo e($product->quantity); ?></p>
        <div class="flex justify-between  items-center">
            <p class="font-light"><?php echo e($product->warehouse->type->name); ?></p>
            <form action="<?php echo e(route('cart.store', $product->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300" type="submit">
                    <img src="<?php echo e(asset('resources/Image/add-shopping-cart.svg')); ?>" alt="icon-add-chart">

                    Pilih Produk
                </button>
            </form>
        </div>
        <?php else: ?>
        <p class="mb-3 font-semibold text-gray-700 ">Stok tidak tersedia</p>
        <div class="flex justify-between  items-center">
            <p class="font-light"><?php echo e($product->warehouse->type->name); ?></p>
            <a href="#" style="pointer-events: none" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300">
                <img src="<?php echo e(asset('resources/Image/add-shopping-cart.svg')); ?>" alt="icon-add-chart">
                Pilih Produk
            </a>
        </div>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/components/landing/product-item.blade.php ENDPATH**/ ?>