<?php 

require_once './Product.php';
$id = $_GET['id'];
$products = Product::where('id',"=", $id);


?>

<table>
<thead>
    <th>Mã SP</th>
    <th>Tên SP</th>
    <th>Danh Mục</th>

    <th>Giá</th>
    <th>Ảnh</th>
    <th>Detail</th>
</thead>
<tbody>
    <?php foreach ($products as $pro):?>
        <tr>
            <td><?php echo $pro->id ?></td>
            <td><?php echo $pro->name ?></td>
            <td>
                <a href="./ds-san-pham.php?id=<?php echo $pro->id?>"><?php echo $pro->getCateName()?>
                </a>
            </td>
            <td><?php echo $pro->price ?></td>
            <td><?php echo $pro->image ?></td>
            <td><?php echo $pro->detail ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>