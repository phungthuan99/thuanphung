
<?php $__env->startSection('title', 'FPT Poly - Product-Galleries'); ?>
<?php $__env->startSection('content'); ?>

    <table class="table ">
        <thead>
        <tr>
           
            <th>ID</th>   
            <th>Tên SP</th>  
            <th>Ảnh</th>
            <th>Chi tiết</th>
            
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $product_galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proG): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($proG->id); ?></td>
            <td><?php echo e($proG->getProductId()); ?></td>
            
            <td>
                <img src="<?php echo e(getClientUrl($proG->img_url)); ?>" width="100">
            </td>
            <td>
                <a href="<?php echo e(getClientUrl('chi-tiet',['id'=>$proG->id])); ?>"class="btn btn-sm btn-danger btn-remove">Chi tiết</a>
           </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
    <?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\MVC\app\views/home/product-galleries.blade.php ENDPATH**/ ?>