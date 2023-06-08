<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pendapatan</title>
    <style>
        table {
            width: 100%;
            color: rgb(107 114 128);
            border-top-width: 1px;
            border-bottom-width: 0px;
            border-color: rgb(229 231 235);
            font-family: Arial, Helvetica, sans-serif;
        }

        thead {
            color: #374151;
            background-color: #d1d5db;
            text-transform: uppercase;
            font-size: 0.75rem;
            line-height: 1rem;
        }

        th {
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        tbody {
            border-top-width: 1px;
            border-bottom-width: 0px;
            border-color: rgb(229 231 235);
        }

        td {
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            white-space: nowrap;
            border-bottom: 1px solid rgb(229 231 235);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 500;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        Laporan Data Pendapatan
        <br>
        <div style="margin-top:10px">
            <?php echo e(Carbon\Carbon::parse($fromDate)->format('d M Y')); ?>

            -
            <?php echo e(Carbon\Carbon::parse($toDate)->format('d M Y')); ?>

        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th scope="col" style="width: 0px;">No</th>
                <th scope="col" style="text-align: left;">Produk</th>
                <th scope="col" style="text-align: right; width:0px">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i + 1); ?></td>
                    <td>
                        <?php $__currentLoopData = $report->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <ol style="padding: 0px;">
                                <?php echo e($detail->product->name); ?>

                            </ol>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td style="text-align: right">
                        <?php $__currentLoopData = $report->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <ol style="padding: 0px;">
                                <?php echo e($detail->grand_price); ?> Rupiah
                            </ol>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="color: rgb(17 24 39);">Total</td>
                <td></td>
                <td style="text-align: right; color: rgb(17 24 39);">
                    <?php echo e($grandTotal); ?> Rupiah
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/backoffice/report-income/reportIncome.blade.php ENDPATH**/ ?>