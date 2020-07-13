@extends('layouts.main')
@section('content')

<form id="add-product-form" action="<?= getClientUrl('saveEdit-category', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6 offset-md-3 center">
            <div class="form-group">
                <label for="">Tên Danh Mục<span class="text-danger">*</span></label>
                <input type="text" name="cate_name" class="form-control" 
                value = "<?php echo $model->cate_name?>" placeholder = "Nhập tên danh mục">
            </div>
        </div>
        <div class="col-md-6 offset-md-5 center">
            <button type="submit" class="btn btn-sm btn-primary">Lưu Thay đổi</button>&nbsp;
            <a href="<?= BASE_URL . 'category' ?>" class="btn btn-sm btn-danger">Hủy</a>
        </div>
    </div>
</form>
@endsection
