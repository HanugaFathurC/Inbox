<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link rel="icon" href="<?php echo e(asset('resources/Image/Logo.png')); ?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo e(asset('resources/Image/Logo.png')); ?>" type="image/x-icon" />
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body>
    <div class="flex flex-col justify-center px-6 h-screen mx-auto  lg:px-8 bg-neutral-50">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</body>

</html>
<?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/layouts/auth/master.blade.php ENDPATH**/ ?>