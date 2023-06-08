<a href="#" onclick="deleteData(<?php echo e($id); ?>)"
    <?php echo e($attributes->merge(['class' => 'btn btn-danger btn-sm'])); ?>>
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eraser" width="24" height="24"
        viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round"
        stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M19 20h-10.5l-4.21 -4.3a1 1 0 0 1 0 -1.41l10 -10a1 1 0 0 1 1.41 0l5 5a1 1 0 0 1 0 1.41l-9.2 9.3">
        </path>
        <path d="M18 13.3l-6.3 -6.3"></path>
    </svg>
    <?php echo e($title); ?>

</a>
<form id="delete-form-<?php echo e($id); ?>" action="<?php echo e($url); ?>" method="POST" style="display:none;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
</form>
<?php /**PATH C:\Users\HP\OneDrive\Dokumen\GitHub\IjoLumut\inbox\resources\views/components/button-delete.blade.php ENDPATH**/ ?>