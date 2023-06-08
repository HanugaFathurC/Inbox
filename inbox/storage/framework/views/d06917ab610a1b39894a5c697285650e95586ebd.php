

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
        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
            <div class="col-6 col-lg-3">
                <?php if (isset($component)) { $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11 = $component; } ?>
<?php $component = App\View\Components\Widget::resolve(['title' => 'Kategori','subtitle' => ''.e($categories).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-azure']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category-2" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 4h6v6h-6z"></path>
                        <path d="M4 14h6v6h-6z"></path>
                        <circle cx="17" cy="17" r="3"></circle>
                        <circle cx="7" cy="7" r="3"></circle>
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11)): ?>
<?php $component = $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11; ?>
<?php unset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11); ?>
<?php endif; ?>
            </div>
            <div class="col-6 col-lg-3">
                <?php if (isset($component)) { $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11 = $component; } ?>
<?php $component = App\View\Components\Widget::resolve(['title' => 'Types','subtitle' => ''.e($types).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-azure']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category-2" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 4h6v6h-6z"></path>
                        <path d="M4 14h6v6h-6z"></path>
                        <circle cx="17" cy="17" r="3"></circle>
                        <circle cx="7" cy="7" r="3"></circle>
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11)): ?>
<?php $component = $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11; ?>
<?php unset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11); ?>
<?php endif; ?>
            </div>
            <div class="col-6 col-lg-3">
                <?php if (isset($component)) { $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11 = $component; } ?>
<?php $component = App\View\Components\Widget::resolve(['title' => 'Warehouses','subtitle' => ''.e($warehouses).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-red']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck-delivery" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="7" cy="17" r="2"></circle>
                        <circle cx="17" cy="17" r="2"></circle>
                        <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                        <line x1="3" y1="9" x2="7" y2="9"></line>
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11)): ?>
<?php $component = $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11; ?>
<?php unset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11); ?>
<?php endif; ?>
            </div>
            <div class="col-6 col-lg-3">
                <?php if (isset($component)) { $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11 = $component; } ?>
<?php $component = App\View\Components\Widget::resolve(['title' => 'Produk','subtitle' => ''.e($products).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-primary']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                        <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                        <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11)): ?>
<?php $component = $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11; ?>
<?php unset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11); ?>
<?php endif; ?>
            </div>
            <div class="col-6 col-lg-3">
                <?php if (isset($component)) { $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11 = $component; } ?>
<?php $component = App\View\Components\Widget::resolve(['title' => 'User','subtitle' => ''.e($users).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-cyan']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <circle cx="12" cy="10" r="3"></circle>
                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11)): ?>
<?php $component = $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11; ?>
<?php unset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11); ?>
<?php endif; ?>
            </div>
            <div class="col-6 col-lg-3">
                <?php if (isset($component)) { $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11 = $component; } ?>
<?php $component = App\View\Components\Widget::resolve(['title' => 'Permintaan Produk','subtitle' => ''.e($orders->count()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-indigo']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-database" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="12.75" rx="4" ry="1.75"></ellipse>
                        <path d="M8 12.5v3.75c0 .966 1.79 1.75 4 1.75s4 -.784 4 -1.75v-3.75"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11)): ?>
<?php $component = $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11; ?>
<?php unset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11); ?>
<?php endif; ?>
            </div>
            <div class="col-6 col-lg-3">
                <?php if (isset($component)) { $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11 = $component; } ?>
<?php $component = App\View\Components\Widget::resolve(['title' => 'Produk Masuk','subtitle' => ''.e($transactions).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-teal']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                        <path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6"></path>
                        <path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3"></path>
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11)): ?>
<?php $component = $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11; ?>
<?php unset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11); ?>
<?php endif; ?>
            </div>
            <div class="col-6 col-lg-3">
                <?php if (isset($component)) { $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11 = $component; } ?>
<?php $component = App\View\Components\Widget::resolve(['title' => 'Produk Masuk Bulan Ini','subtitle' => ''.e($transactionThisMonth).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-dark']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-export"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                        <path d="M4 6v6c0 1.657 3.582 3 8 3a19.84 19.84 0 0 0 3.302 -.267m4.698 -2.733v-6"></path>
                        <path d="M4 12v6c0 1.599 3.335 2.905 7.538 2.995m8.462 -6.995v-2m-6 7h7m-3 -3l3 3l-3 3"></path>
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11)): ?>
<?php $component = $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11; ?>
<?php unset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11); ?>
<?php endif; ?>
            </div>
            <div class="col-12">
                <?php if($orders->count() == 0): ?>
                    <div class="alert alert-info d-flex align-items-center" role="alert">
                        <i class="fas fa-info-circle mr-2 fa-lg"></i>
                        Saat ini belum ada permintaan produk
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="fas fa-info-circle mr-2 fa-lg"></i>
                        Saat ini terdapat <?php echo e($orders->count()); ?> permintaan barang menunggu konfirmasi.
                        <a href="<?php echo e(route('backoffice.order.index')); ?>" class="ml-1">Lihat Detail Permintaan</a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole('customer')): ?>
            <div class="col-6">
                <?php if (isset($component)) { $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11 = $component; } ?>
<?php $component = App\View\Components\Widget::resolve(['title' => 'Permintaan Produk','subtitle' => ''.e($orders->count()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-indigo']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-database" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="12.75" rx="4" ry="1.75"></ellipse>
                        <path d="M8 12.5v3.75c0 .966 1.79 1.75 4 1.75s4 -.784 4 -1.75v-3.75"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11)): ?>
<?php $component = $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11; ?>
<?php unset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11); ?>
<?php endif; ?>
            </div>
            <div class="col-6">
                <?php if (isset($component)) { $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11 = $component; } ?>
<?php $component = App\View\Components\Widget::resolve(['title' => 'Total Transaksi','subtitle' => ''.e($transactions->count()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-indigo']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-database" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="12.75" rx="4" ry="1.75"></ellipse>
                        <path d="M8 12.5v3.75c0 .966 1.79 1.75 4 1.75s4 -.784 4 -1.75v-3.75"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                    </svg>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11)): ?>
<?php $component = $__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11; ?>
<?php unset($__componentOriginal6ed78e464a5cbaed4dde2f256818db4998df7a11); ?>
<?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
            <div class="col-12">
                <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = App\View\Components\Card::resolve(['title' => 'Daftar produk degan stok kurang dari 10'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <div class="list list-row list-hoverable">
                        <?php $__currentLoopData = $productsOutStock; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="list-item">
                                <div>
                                    <span class="badge bg-danger"><?php echo e($product->quantity); ?></span>
                                </div>
                                <div class="text-truncate">
                                    <a href="<?php echo e(route('backoffice.product-stock.index')); ?>"
                                        class="text-body d-block"><?php echo e($product->name); ?></a>
                                    <small class="d-block text-muted  mt-n1">
                                        Kategori : <?php echo e($product->category->name); ?>

                                    </small>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
                <div class="d-flex justify-content-end"><?php echo e($productsOutStock->links()); ?></div>
            </div>

            <div class="col-lg-6">
                <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = App\View\Components\Card::resolve(['title' => 'Chart barang paling populer'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <div id="chart-total-best" class="my-3"></div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
            </div>

            <div class="col-lg-6">
                <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = App\View\Components\Card::resolve(['title' => 'Chart barang tidak paling populer'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <div id="chart-total-poor" class="my-3"></div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
            </div>
            <div class="col-lg-6">
                <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = App\View\Components\Card::resolve(['title' => 'Pendapatan Gudang per Tipe'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <div id="chart-type" class="my-3"></div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
            </div>

            <div class="col-lg-6">
                <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = App\View\Components\Card::resolve(['title' => 'Pendapatan per Gudang'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <div id="chart-warehouse-income" class="my-3"></div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
            </div>
            <div class="col-lg-6">
                <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = App\View\Components\Card::resolve(['title' => 'Traffic Pendapatan'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <div id="chart-allTimeIncome" class="my-3"></div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
            </div>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0295373298096193c2baee2164d0dc314888de)): ?>
<?php $component = $__componentOriginalce0295373298096193c2baee2164d0dc314888de; ?>
<?php unset($__componentOriginalce0295373298096193c2baee2164d0dc314888de); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>

        <script>
            (function() {
            var options = {
                chart: {
                    type: 'area',
                    height: 350,
                },
                series: [{
                    name: 'Income',
                    data: <?php echo json_encode(array_values($allTimeIncome_incomeData), 15, 512) ?>
                }],
                xaxis: {
                    categories: <?php echo json_encode(array_keys($allTimeIncome_incomeData), 15, 512) ?>
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart-allTimeIncome"), options);
            chart.render();
        })();

              var options = {
        chart: {
            type: 'bar',
            height: 350,
            stacked: false,
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '50%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        series: [
            <?php $__currentLoopData = $warehouseIncome_chartData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                {
                    name: '<?php echo e($data['name']); ?>',
                    data: [<?php echo e(implode(',', $data['data'])); ?>]
                },
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
        xaxis: {
            categories: [<?php echo implode(',', $warehouseIncome_month); ?>],
        },
        legend: {
            position: 'top',
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "$" + val;
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector('#chart-warehouse-income'), options);
    chart.render();

    

            var warehouseData = <?php echo json_encode($warehouseByType, 15, 512) ?>;

var months = Object.keys(warehouseData);
var categories = Object.keys(warehouseData[months[0]]);
var seriesData = [];

categories.forEach(function (category) {
    var data = months.map(function (month) {
        return warehouseData[month][category] || 0;
    });

    seriesData.push({
        name: category,
        data: data,
    });
});

var options = {
    chart: {
        type: 'bar',
        height: 350,
    },
    series: seriesData,
    xaxis: {
        categories: months,
    },
};

var chart = new ApexCharts(document.querySelector('#chart-type'), options);
chart.render();

            document.addEventListener("DOMContentLoaded", function() {
                window.ApexCharts && (new ApexCharts(document.getElementById('chart-total-best'), {
                    chart: {
                        type: "donut",
                        fontFamily: 'inherit',
                        height: 400,
                        sparkline: {
                            enabled: true
                        },
                        animations: {
                            enabled: true
                        },
                    },
                    fill: {
                        opacity: 1,
                    },
                    series: <?php echo json_encode($totalBest, 15, 512) ?>,
                    labels: <?php echo json_encode($labelBest, 15, 512) ?>,
                    grid: {
                        strokeDashArray: 4,
                    },
                    colors: ["#206bc4", "#79a6dc", "#bfe399", "#7891b3", "#2596be"],
                    legend: {
                        show: true,
                        position: 'top'
                    },
                    tooltip: {
                        fillSeriesColor: true
                    },
                    dataLabels: {
                        enabled: true,
                    },
                    animations: {
                        enabled: true,
                        easing: 'easeinout',
                        speed: 800,
                        animateGradually: {
                            enabled: true,
                            delay: 150
                        },
                        dynamicAnimation: {
                            enabled: true,
                            speed: 350
                        }
                    }
                })).render();
            });

            document.addEventListener("DOMContentLoaded", function() {
                window.ApexCharts && (new ApexCharts(document.getElementById('chart-total-poor'), {
                    chart: {
                        type: "donut",
                        fontFamily: 'inherit',
                        height: 400,
                        sparkline: {
                            enabled: true
                        },
                        animations: {
                            enabled: true
                        },
                    },
                    fill: {
                        opacity: 1,
                    },
                    series: <?php echo json_encode($totalPoor, 15, 512) ?>,
                    labels: <?php echo json_encode($labelPoor, 15, 512) ?>,
                    grid: {
                        strokeDashArray: 4,
                    },
                    colors: ["#206bc4", "#79a6dc", "#bfe399", "#7891b3", "#2596be"],
                    legend: {
                        show: true,
                        position: 'top'
                    },
                    tooltip: {
                        fillSeriesColor: true
                    },
                    dataLabels: {
                        enabled: true,
                    },
                    animations: {
                        enabled: true,
                        easing: 'easeinout',
                        speed: 800,
                        animateGradually: {
                            enabled: true,
                            delay: 150
                        },
                        dynamicAnimation: {
                            enabled: true,
                            speed: 350
                        }
                    }
                })).render();
            });
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backoffice.master', ['title' => 'Dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/backoffice/dashboard.blade.php ENDPATH**/ ?>