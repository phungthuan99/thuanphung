
<?php $__env->startSection('title', 'FPT Poly - User'); ?>
<?php $__env->startSection('content'); ?>

    <table class="table ">
        <thead>
        <tr>
           
            <th>ID</th>   
            <th>Name</th>  
            <th>Avatar</th> 
            <th>Role</th>
            <th>Phân Quyền</th>
            
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($us->id); ?></td>
            <td><?php echo e($us->name); ?></td>
            
            <td>
                <img src="<?php echo e(getClientUrl($us->avatar)); ?>" width="100">
            </td>
            <td><?php echo e($us->role); ?></td>
            <td>
                <a href="<?php echo e(getClientUrl('role',['id'=>$us->id])); ?>"class="btn btn-success">Phân Quyền</a>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\MVC\app\views/home/user.blade.php ENDPATH**/ ?>