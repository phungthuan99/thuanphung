
@extends('layouts.main')
@section('content')
<form id="add-product-form" action="<?= getClientUrl('saveAdd-category')?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên Danh Mục<span class="text-danger">*</span></label>
                    <input type="text" name="cate_name" class="form-control" placeholder="Nhập tên danh mục">
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                <a href="<?= BASE_URL . 'category' ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
@endsection