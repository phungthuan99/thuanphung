
<?php $__env->startSection('title', 'FPT Poly - Trang chủ'); ?>
<?php $__env->startSection('content'); ?>

    </form>
    <table class="table ">
        <thead>
        <tr>
            <th>ID</th>  
            <th>Tên Sản Phẩm</th> 
            <th>Danh mục</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Mô tả ngắn</th>  
            <th>Chi tiết</th> 
            <th>Số sao</th>
            <th>Lượt xem</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo e($product->id); ?></td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->getCateName()); ?></td>
            <td>
                <img src="<?php echo e(getClientUrl($product->image)); ?>" width="100">
            </td>
            <td><?php echo e($product->price); ?></td>
            <td><?php echo e($product->short_desc); ?></td>
            <td><?php echo e($product->detail); ?></td>
            <td><?php echo e($product->star); ?></td>
            <td><?php echo e($product->views); ?></td>
            
        </tr>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\MVC\app\views/home/chi-tiet-product.blade.php ENDPATH**/ ?>