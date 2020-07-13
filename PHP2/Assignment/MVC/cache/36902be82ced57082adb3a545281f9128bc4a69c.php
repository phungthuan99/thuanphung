
<?php $__env->startSection('title', 'FPT Poly - Trang chủ'); ?>
<?php $__env->startSection('content'); ?>
    <table class="table ">
        <thead>
        <tr>
            <th>ID</th>   
            <th>Số điện thoại</th> 
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Giá</th>
            <th>Phương thức Thanh toán</th>
            <th>Chi tiết</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($in->id); ?></td>
            <td><?php echo e($in->customer_phone_number); ?></td>
            <td><?php echo e($in->customer_email); ?></td>
            <td><?php echo e($in->customer_address); ?></td>
            <td><?php echo e($in->total_price); ?></td>
            <td><?php echo e($in->phuongTTT()); ?></td>
            <td>
                <a href="<?php echo e(getClientUrl('chi-tiet-hoa-don',['id'=>$in->id])); ?>"class="btn btn-sm btn-danger btn-remove">Chi tiết</a>
           </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\MVC\app\views/home/invoice.blade.php ENDPATH**/ ?>