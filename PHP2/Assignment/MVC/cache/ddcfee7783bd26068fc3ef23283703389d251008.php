
<?php $__env->startSection('title', 'FPT Poly - Trang chủ'); ?>
<?php $__env->startSection('content'); ?>
<form id="add-product-form" action="<?= getClientUrl('saveAdd-user')?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6" style = "border:1px solid #909;">
                <div class="form-group">
                    <label for="">Name<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập Tên">
                </div>
                
                <div class="form-group">
                    <label for="">Avatar<span class="text-danger">*</span></label>
                    <input type="file" name="avatar" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="">Email<span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập Email">
                </div>
                
                <div class="form-group">
                    <label for="">PassWord</label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập Password">
                </div>
                
                <div class="form-group">
                    <disable hidden input type="number" name="role" class="form-control" >
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember_token" id="">
                    <label for="">Remember token</label>
                </div>
                
                <div class="col-6 d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary">Đăng Ký</button>&nbsp;
                    <a href="<?= BASE_URL ?>" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </div>
           
            
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\MVC\app\views/home/add-user.blade.php ENDPATH**/ ?>