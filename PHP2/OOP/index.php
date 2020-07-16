<?php

require_once './Product.php';
$products = Product::all();

?>

<table>
<thead>
    <th>Mã SP</th>
    <th>Tên SP</th>
    <th>Danh Mục</th>
    <th>Giá</th>
    <th>Delete</th>
</thead>
<tbody>
    <?php foreach ($products as $pro):?>
        <tr>
            <td><?php echo $pro->id ?></td>
           <td>
                <a href="./detail-product.php?id=<?php echo $pro->id?>"><?php echo $pro->name?></a>
            </td>
            <td>
                <a href="./ct-san-pham.php?cate_id=<?php echo $pro->cate_id?>">
                <?php echo $pro->getCateName()?>
                </a>
            </td>
            <td><?php echo $pro->price ?></td>
            <td>
                <a href = "./remove-product.php?id=<?php echo $pro->id ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>