
<?php $__env->startSection('title', 'FPT Poly - Trang chủ'); ?>
<?php $__env->startSection('content'); ?>

    <table class="table table-dark">
        <thead>
        <tr>
           
            <th>Mã SP</th>   
            <th>Tên SP</th>  
            <th>Danh Mục</th> 
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Xóa - Sửa</th>
            
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
            <td><?php echo e($pro->price); ?></td>
            <td>
                <a href="<?php echo e(getClientUrl('delete-product',['id'=>$pro->id])); ?>"class="btn btn-sm btn-danger btn-remove">Xóa</a>
                <a href="<?php echo e(getClientUrl('edit-product',['id'=>$pro->id])); ?>"class="btn btn-sm btn-danger">Sửa</a>
           </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function(){
            $('.btn-remove').on('click', function(){
                Swal.fire({
                    title: 'Cảnh báo!',
                    text: "Bạn chắc chắn muốn xóa sản phẩm này?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Đồng ý!'
                }).then((result) => {
                    if (result.value) {
                        var url = $(this).attr('href');
                        window.location.href = url;
                    }
                })
                return false;
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\MVC\app\views/home/product.blade.php ENDPATH**/ ?>