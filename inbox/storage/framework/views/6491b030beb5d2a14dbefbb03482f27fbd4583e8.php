<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title); ?></title>
    <link rel="icon" href="<?php echo e(asset('resources/Image/Logo.png')); ?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo e(asset('resources/Image/Logo.png')); ?>" type="image/x-icon" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Tabler Core -->
    <link href="<?php echo e(asset('dist/css/tabler.min.css')); ?>" rel="stylesheet" />

    <!-- Tabler Plugins -->
    <link href="<?php echo e(asset('dist/css/demo.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('dist/libs/selectize/dist/css/selectize.css')); ?>" rel="stylesheet" />

    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body class="antialiased">

    <!-- Sidebar -->
    <?php echo $__env->make('layouts.backoffice.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page">
        <!-- Navbar -->
        <?php echo $__env->make('layouts.backoffice.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="content">
            <!-- Content -->
            <?php echo $__env->yieldContent('content'); ?>

            <!-- Footer -->
            <?php echo $__env->make('layouts.backoffice.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- alert -->
            <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <!-- Library JS -->
    <script src="<?php echo e(asset('dist/libs/jquery/dist/jquery.slim.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('dist/libs/selectize/dist/js/standalone/selectize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/libs/apexcharts/dist/apexcharts.min.js')); ?>"></script>
    <!-- Tabler Core -->
    <script src="<?php echo e(asset('dist/js/tabler.min.js')); ?>"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function deleteData(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true
            })

            swalWithBootstrapButtons.fire({
                title: 'Apakah kamu yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Tolong Hapus!',
                cancelButtonText: 'Tidak!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();

                } else if (

                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Data kamu tetap aman !',
                        '',
                        'error'
                    )
                }
            })
        }
    </script>

    <!-- Advance tag select -->
    <script>
        $(document).ready(function() {
            $('#select-tags-advanced').selectize({
                maxItems: 15,
                plugins: ['remove_button'],
            });
        });
    </script>
    <?php echo $__env->yieldPushContent('js'); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>

</html>
<?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/layouts/backoffice/master.blade.php ENDPATH**/ ?>