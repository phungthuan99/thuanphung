

<?php $__env->startSection('content'); ?>
<form id="add-product-form" action="<?= getClientUrl('saveAdd-product')?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Danh mục sản phẩm</label>
                    <select name="cate_id" class="form-control">
                        <?php foreach ($categories as $ca):?>
                        <option value="<?= $ca->id ?>"><?= $ca->cate_name?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm<span class="text-danger">*</span></label>
                    <input type="number" name="price" class="form-control" placeholder="Nhập giá sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Số lượng views</label>
                    <input type="number" name="views" class="form-control" placeholder="Nhập số lượt xem sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <textarea name="short_desc" class="form-control" rows="5"></textarea>
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
                    <input type="number" step="0.1" name="star" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <textarea name="detail" class="form-control" rows="7"></textarea>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                <a href="<?= BASE_URL ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\MVC\app\views/home/add-product.blade.php ENDPATH**/ ?>