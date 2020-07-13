
<?php $__env->startSection('title', 'FPT Poly - Trang chủ'); ?>
<?php $__env->startSection('content'); ?>

    <table class="table ">
        <thead>
        <tr>
           
            <th>Mã SP</th>   
            <th>Tên SP</th>  
            <th>Danh Mục</th> 
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Chi tiết</th>
            <th>Xóa</th>
            <th>Sửa</th>
            
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($pro->id); ?></td>
            <td><?php echo e($pro->name); ?></td>
            <td><?php echo e($pro->getCateName()); ?></td>
            
            <td>
                <img src="<?php echo e(getClientUrl($pro->image)); ?>" width="100">
            </td>
            <td><?php echo e(number_format($pro->price ,0,'.','.')."VND"); ?></td>
            <td>
                <a href="<?php echo e(getClientUrl('chi-tiet-product',['id'=>$pro->id])); ?>" class = "btn btn-sm btn-danger">Chi tiết</a>
            </td>
            <td>
                <a href="<?php echo e(getClientUrl('delete-product',['id'=>$pro->id])); ?>"class="btn btn-sm btn-danger" onclick ="return confirm('Bạn có muốn xóa sản phẩm??')" >Xóa</a>
           </td>
           <td>
                <a href="<?php echo e(getClientUrl('edit-product',['id'=>$pro->id])); ?>"class="btn btn-sm btn-warning">Sửa</a>
           </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\MVC\app\views/home/product.blade.php ENDPATH**/ ?>