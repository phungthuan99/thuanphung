
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
            <th>Ảnh</th>
            <th>Số lượng</th> 
            <th>Đơn giá</th>
            <th>Tổng giá</th>
            <th>Chi tiết</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $invoice_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($ind->invoice_id); ?></td>
            <td><?php echo e($ind->getInvoiceName()); ?></td>
            <td><?php echo e($ind->getInvoicePhone()); ?></td>
            <td><?php echo e($ind->getInvoiceEmail()); ?></td>
            <td><?php echo e($ind->getInvoiceAddress()); ?></td>
            <td><?php echo e($ind->getProductName()); ?></td>
            <td><?php echo e($ind->quantity); ?></td>
            <td><?php echo e($ind->unit_price); ?></td>
            <td><?php echo e($ind->getInvoiceUP()); ?></td>
            <td>
                <a href="<?php echo e(getClientUrl('product-detail',['id'=>$ind->id])); ?>"class="btn btn-sm btn-danger btn-remove">Chi tiết</a>
           </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\MVC\app\views/home/invoice-detail.blade.php ENDPATH**/ ?>