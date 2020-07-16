<?php $__env->startSection('title', "Fpoly - Demo page"); ?>
<?php $__env->startSection('content'); ?>
hello, mr.<?php echo e($name); ?> -- <?php echo e($age); ?>

    <h2 id="demo"></h2>
<script>
    $('#demo').text('Nội dung được sinh ra bằng jquery');
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Library/WebServer/Documents/pt14314-web/lesson4-mvc/views/home/test-content.blade.php ENDPATH**/ ?>