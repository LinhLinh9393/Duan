<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Thêm Khoá Học</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Thêm Khoá Học</h2>
    <form action="index.php?url=add_product" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="tenkhoahoc" class="form-label">Tên Khoá Học</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm">
        </div>

        <div class="mb-3">
            <label for="gia" class="form-label">Giá</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm">
        </div>

        <div class="mb-3">
            <label for="hinhAnh" class="form-label">Hình Ảnh</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>

        <div class="mb-3">
            <label for="danhMuc" class="form-label">Danh Mục</label>
            <select class="form-select" id="iddm" name="iddm">
                <?php foreach ($listDanhMuc as $valueCT){ ?>
                <option value="<?php echo $valueCT["id"] ?>"><?php echo $valueCT["namedm"] ?></option>
                <?php } ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="Save">Lưu</button>
        <a href="index.php?url=home"><button type="button" class="btn btn-warning">Quay lại</button></a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
