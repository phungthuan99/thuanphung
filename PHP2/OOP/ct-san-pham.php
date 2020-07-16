<?php 

require_once './Product.php';
$id = $_GET['cate_id'];
$products = Product::where('cate_id',"=", $id);


?>

<table>
<thead>
    <th>Mã SP</th>
    <th>Tên SP</th>
    <th>Danh Mục</th>
    <th>Giá</th>
</thead>
<tbody>
    <?php foreach ($products as $pro):?>
        <tr>
            <td><?php echo $pro->id ?></td>
            <td><?php echo $pro->name ?></td>
            <td>
                <a href="./ds-san-pham.php?cate_id=<?php echo $pro->cate_id?>"><?php echo $pro->getCateName()?>
                </a>
            </td>
            <td><?php echo $pro->price ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>