@extends('layouts.main')
@section('content')
<form id="add-product-form" action="<?= getClientUrl('save-edit', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" 
                        value="<?php echo $model->name ?>" 
                        placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Danh mục sản phẩm</label>
                    <select name="cate_id" class="form-control">
                    <?php foreach ($categories as $cate):?>
                        <option 
                            <?php if ($cate->id == $model->cate_id): ?>
                                selected
                            <?php endif ?>
                            value="<?= $cate->id ?>"><?= $cate->cate_name?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm<span class="text-danger">*</span></label>
                    <input type="number" name="price" 
                        value="<?php echo $model->price ?>" 
                        class="form-control" placeholder="Nhập giá sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Số lượng views</label>
                    <input type="number" name="views" class="form-control" 
                        value="<?php echo $model->views ?>" 
                        placeholder="Nhập số lượt xem sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <textarea name="short_desc" class="form-control" rows="5"><?php echo $model->short_desc ?></textarea>
                </div>
            </div>
            <div class="col-md-6">
               <!--  <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <img src="<?= DEFAULT_IMAGE ?>" class="img-fluid" id="img-preview">
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="">Ảnh sản phẩm<span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Số sao</label>
                    <input type="number" step="0.1" value="<?php echo $model->star?>" name="star" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <textarea name="detail" class="form-control" rows="7"><?php echo $model->detail ?></textarea>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>&nbsp;
                <a href="<?= BASE_URL ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
@endsection
    