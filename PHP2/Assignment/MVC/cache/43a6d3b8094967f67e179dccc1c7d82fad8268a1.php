

<?php $__env->startSection('content'); ?>
<form id="add-product-form" action="<?php echo e(getClientUrl('saveEditCate', ['id' => $model->id])); ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên Danh Mục<span class="text-danger">*</span></label>
                    <input type="text" name="cate_name" class="form-control" 
                    value = "<?php echo e($model->cate_name); ?>">
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Lưu Thay đổi</button>&nbsp;
                <a href="<?= BASE_URL . 'category' ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\MVC\app\views/home/edit-category.blade.php ENDPATH**/ ?>