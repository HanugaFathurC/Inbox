

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalce0295373298096193c2baee2164d0dc314888de = $component; } ?>
<?php $component = App\View\Components\Container::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Container::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="col-12">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-create')): ?>
                <a href="<?php echo e(route('backoffice.product.create')); ?>" class="btn btn-dark mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-plus" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                        <line x1="9" y1="12" x2="15" y2="12"></line>
                        <line x1="12" y1="9" x2="12" y2="15"></line>
                    </svg>
                    Tambah Produk
                </a>
            <?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal3a46b586aa5738bc76b9655047abd89e9e427b31 = $component; } ?>
<?php $component = App\View\Components\CardAction::resolve(['title' => 'Daftar Produk','url' => ''.e(route('backoffice.product.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CardAction::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6 = $component; } ?>
<?php $component = App\View\Components\Table::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Gudang</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i + $products->firstItem()); ?></td>
                                <td>
                                    <span class="avatar rounded avatar-md"
                                        style="background-image: url(<?php echo e($product->image); ?>)"></span>
                                </td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->category->name); ?></td>
                                <td><?php echo e($product->warehouse->name); ?></td>
                                <td><?php echo e($product->unit); ?></td>
                                <td><?php echo e($product->price); ?></td>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-update')): ?>
                                        <a href="<?php echo e(route('backoffice.product.edit', $product->id)); ?>"
                                            class="btn btn-info btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                <path
                                                    d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                </path>
                                                <path d="M16 5l3 3"></path>
                                            </svg>
                                            Ubah Data
                                        </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-delete')): ?>
                                        <?php if (isset($component)) { $__componentOriginalc82eaddaef5db682d36356a1ab70f5eabde644c5 = $component; } ?>
<?php $component = App\View\Components\ButtonDelete::resolve(['id' => ''.e($product->id).'','title' => 'Hapus Data','url' => ''.e(route('backoffice.product.destroy', $product->id)).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button-delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ButtonDelete::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc82eaddaef5db682d36356a1ab70f5eabde644c5)): ?>
<?php $component = $__componentOriginalc82eaddaef5db682d36356a1ab70f5eabde644c5; ?>
<?php unset($__componentOriginalc82eaddaef5db682d36356a1ab70f5eabde644c5); ?>
<?php endif; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6)): ?>
<?php $component = $__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6; ?>
<?php unset($__componentOriginale53a9d2e6d6c51019138cc2fcd3ba8ac893391c6); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3a46b586aa5738bc76b9655047abd89e9e427b31)): ?>
<?php $component = $__componentOriginal3a46b586aa5738bc76b9655047abd89e9e427b31; ?>
<?php unset($__componentOriginal3a46b586aa5738bc76b9655047abd89e9e427b31); ?>
<?php endif; ?>
            <div class="d-flex justify-content-end"><?php echo e($products->links()); ?></div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0295373298096193c2baee2164d0dc314888de)): ?>
<?php $component = $__componentOriginalce0295373298096193c2baee2164d0dc314888de; ?>
<?php unset($__componentOriginalce0295373298096193c2baee2164d0dc314888de); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backoffice.master', ['title' => 'Produk'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/backoffice/product/index.blade.php ENDPATH**/ ?>