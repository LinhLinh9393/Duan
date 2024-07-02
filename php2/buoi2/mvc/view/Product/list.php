<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Xin chào</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
        </tr>
        <?php foreach ($product as $key => $value){ ?>
        <tr>
            <td><?php echo $value["id"] ?></td>
            <td><?php echo $value["tensanpham"] ?></td>
            <td><?php echo $value["gia"] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>