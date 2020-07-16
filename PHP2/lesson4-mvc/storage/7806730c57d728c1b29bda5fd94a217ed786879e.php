<?php $__env->startSection('content'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if(file === undefined){
            $("#img-preview").attr("src", "<?= DEFAULT_IMAGE ?>");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $("#img-preview").attr("src", reader.result);
        }
        reader.readAsDataURL(file);
    }
    $(document).ready(function(){

        // tên: bắt buộc nhập, tối thiểu 2 ký tự
        // giá: bắt buộc nhập, phải là số, không âm
        // views: ko bắt buộc nhập, phải là số, không âm
        // star: ko bắt buộc nhập, phải là số, không âm, nằm trong khoảng 0-5
        // ảnh sản phẩm: bắt buộc nhập, chỉ chấp nhận định dạng ảnh
        $('#add-product-form').validate({
            rules:{
                name: {
                    required: true,
                    minlength: 2,
                    remote: {
                        url: "<?= BASE_URL . 'products/check-name'?>",
                        type: "post",
                        data: {
                            name: function() {
                                return $( "input[name='name']" ).val();
                            }
                        }
                    }
                },
                price: {
                    required: true,
                    number: true,
                    min: 1
                },
                views: {
                    number: true,
                    min: 0
                },
                star: {
                    number: true,
                    min: 0
                },
                image: {
                    required: true,
                    extension: "jpg|png|jpeg|gif"
                }
            },
            messages:{
                name: {
                    required: "Nhập tên sản phẩm",
                    minlength: "Tối thiểu 2 ký tự",
                    remote: "Tên sản phẩm đã tồn tại, vui lòng chọn tên khác"
                },
                price: {
                    required: "Nhập giá sản phẩm",
                    number: "Yêu cầu nhập số",
                    min: "Giá trị nhỏ nhất là 1"
                },
                views: {
                    number: "Yêu cầu nhập số",
                    min: "Không nhập số âm"
                },
                star: {
                    number: "Yêu cầu nhập số",
                    min: "Không nhập số âm"
                },
                image: {
                    required: "Hãy chọn ảnh sản phẩm",
                    extension: "Hãy chọn file định dạng ảnh (jpg|png|jpeg|gif)"
                }
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> ?><?php /**PATH /Library/WebServer/Documents/pt14314-web/lesson4-mvc/views/product/add-product.blade.php ENDPATH**/ ?>