
<?php $__env->startSection('title', 'FPT Poly - Danh Mục'); ?>
<?php $__env->startSection('content'); ?>
    <form action=""method="get" class="form-inline mb-2">
        <div class="form-group">
            <label for=""> Tìm kiếm Từ Khóa</label>
            <input type="text" name="keyword" class="form-control">

        </div>

        <button type="submit" class="btn btn-primary btn-sm">Tìm kiếm</button>

    </form>
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Cate_ID</th>
            <th>Tên Danh Mục</th>
            <th>Xóa</th>
            <th>Sửa</th>
              
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th><?php echo e($cate->id); ?></th>
            <th><?php echo e($cate->cate_name); ?></th>
            <th>
                <a href="<?php echo e(getClientUrl('delete-category',['id'=>$cate->id])); ?>"class="btn btn-sm btn-danger">Xóa</a>
            </th>
            <th>
                <a href="<?php echo e(getClientUrl('edit-category',['id'=>$cate->id])); ?>"class="btn btn-sm btn-danger">Sửa</a>
           </th>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\MVC\app\views/home/category.blade.php ENDPATH**/ ?>