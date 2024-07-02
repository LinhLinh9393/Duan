<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Khoá Học</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Danh sách khoá học</h2>

    <!-- Nút Thêm -->
    <a href="index.php?url=add_product" class="btn btn-primary mb-3">Thêm</a>

    <!-- Bảng Bootstrap -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Khoá học</th>
            <th scope="col">Giá</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Danh Mục</th>
            <th scope="col">Thao Tác</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($istKhoaHoc as  $key => $value){?>
        <tr>
            <th scope="row"><?php echo $value["id"] ?></th>
            <td><?php echo $value["name"] ?></td>
            <td><?php echo $value["price"] ?></td>
            <td><img src="<?php echo $value["image"] ?>"style="max-width: 100px;"></td>
            <td><?php echo $value["namedm"] ?></td>
            <td><a href="index.php?url=update-product&product_id=<?php echo $value["id"] ?>" class="btn btn-warning">Sửa</a><a href="index.php?url=delete-product&product_id=<?php echo $value["id"] ?>" class="btn btn-danger">Xóa</a></button></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <!-- Kết thúc Bảng Bootstrap -->
</div>

<!-- Bao gồm Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
