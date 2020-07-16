1. Cài thư viện `"jenssegers/blade": "*"`
2. Tạo ra **BaseController** trong thư mục **controllers** 
    use `use Jenssegers\Blade\Blade;` cho class **BaseController**
    Thêm hàm render cho class BaseController
   protected function render($viewPath, $dataArr = []){
     $blade = new Blade('views', 'storage');
     echo $blade->make($viewPath, $dataArr)->render();
   }
   Tạo thư mục `storage` trong project (nếu dùng linux thì phải phân quyền cho thư mục này)

3. Các class Controller trong project sẽ kế thừa BaseController để sử dụng được hàm render
