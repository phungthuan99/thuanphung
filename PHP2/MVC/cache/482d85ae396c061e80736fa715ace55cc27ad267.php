<?php

namespace App\Controllers;
use App\Models\Product;

?>
<table>
    <thead>
        <th>Mã sp</th>
        <th>Tên</th>
        <th>Chi tiết</th>
        <th>Giá</th>
    </thead>
    <tbody>
        <?php foreach ($products as $pro): ?>
        <tr>
            <th><?php echo $id ?></th>
            <th><?php echo $pro->name ?></th>
            <th>
            </th>
            <th><?php echo $pro->price ?></th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\PHP2\MVC\app\views/home/chi-tiet.blade.php ENDPATH**/ ?>