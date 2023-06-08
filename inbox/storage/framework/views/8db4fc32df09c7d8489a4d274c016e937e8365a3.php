

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
            <?php if (isset($component)) { $__componentOriginal3a46b586aa5738bc76b9655047abd89e9e427b31 = $component; } ?>
<?php $component = App\View\Components\CardAction::resolve(['title' => 'Daftar Transaksi','url' => ''.e(route('backoffice.transaction')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                            <th>Customer</th>
                            <th>Invoice</th>
                            <th>Nama Produk</th>
                            <th>Kuantitas Produk</th>
                            <th>Tanggal Transaksi</th>
                            <th colspan="2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i + $transactions->firstItem()); ?></td>
                                <td><?php echo e($transaction->user->name); ?></td>
                                <td><?php echo e($transaction->invoice); ?></td>
                                <td>
                                    <?php $__currentLoopData = $transaction->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($detail->product->name); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $transaction->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($detail->quantity); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <li><?php echo e($transaction->created_at->format('d-m-Y')); ?></li>
                                </td>
                                <td>
                                    <?php echo e($transaction->payment_status); ?>

                                </td>
                                <td>
                                    <?php if($transaction->payment_status == 'waiting'): ?>
                                        <a href="<?php echo e($transaction->midtrans_url); ?>">Bayar Sekarang</a>
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
            <div class="d-flex justify-content-end"><?php echo e($transactions->links()); ?></div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0295373298096193c2baee2164d0dc314888de)): ?>
<?php $component = $__componentOriginalce0295373298096193c2baee2164d0dc314888de; ?>
<?php unset($__componentOriginalce0295373298096193c2baee2164d0dc314888de); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backoffice.master', ['title' => 'Barang Masuk'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/backoffice/transaction/transaction.blade.php ENDPATH**/ ?>