
<?php $__env->startSection('title', 'FPT Poly - Trang chủ'); ?>
<?php $__env->startSection('content'); ?>

    </form>
    <table class="table ">
        <thead>
        <tr>
            <th>ID</th>  
            <th>Khách hàng</th> 
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Tên SP</th>  
            <th>Số lượng</th> 
            <th>Đơn giá</th>
            <th>Tổng giá</th>
            <th>Phương thức thanh toán</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo e($invoices->id); ?></td>
            <td><?php echo e($invoices->customer_name); ?></td>
            <td><?php echo e($invoices->customer_phone_number); ?></td>
            <td><?php echo e($invoices->customer_email); ?></td>
            <td><?php echo e($invoices->customer_address); ?></td>
            <td><?php echo e($invoices->getProductName()); ?></td>
            <td><?php echo e($invoices->quantity); ?></td>
            <td><?php echo e($invoices->unit_price); ?></td>
            <td><?php echo e($invoices->total_price); ?></td>
            <td><?php echo e($invoices->phuongTTT()); ?></td>

        </tr>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\MVC\app\views/home/chi-tiet-hoa-don.blade.php ENDPATH**/ ?>