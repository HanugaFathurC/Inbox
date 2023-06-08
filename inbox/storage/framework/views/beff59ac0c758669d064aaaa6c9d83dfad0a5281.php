<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['type']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['type']); ?>
<?php foreach (array_filter((['type']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<a href="<?php echo e(route('type.show', $type->slug)); ?>"
    class="min-w-full p-2 flex flex-row items-center gap-4 rounded-lg bg-white border border-l-4 border-l-sky-700 lg:hover:scale-105 duration-100 lg:transition-transform  hover:border-l-sky-400 transition-colors group shadow-md">
    <img src="<?php echo e($type->image); ?>" alt="<?php echo e($type->name); ?>" class="object-cover w-10 rounded-lg">
    <div>
        <h2 class="text-base text-gray-700 "><?php echo e($type->name); ?></h2>
    </div>
</a>
<?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/components/landing/type-item.blade.php ENDPATH**/ ?>