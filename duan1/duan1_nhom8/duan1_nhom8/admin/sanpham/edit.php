<div class="container">
  <h1>Sửa sản phẩm</h1>
  <?php if (!empty($thongtinsp)) : ?>
    <form action="" method="post" style="text-align: left;" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="name" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $thongtinsp['name'] ?>">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Giá sản phẩm</label>
        <input type="number" class="form-control" id="price" name="price" value="<?= $thongtinsp['price'] ?>">
      </div>
      <div class="mb-3">
        <label for="file" class="form-label">Hình ảnh</label>
        <input type="file" class="form-control" id="file" name="file">
        <img src="img/<?= $thongtinsp['img'] ?>" alt="<?= $thongtinsp['name'] ?>">
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Mô tả</label>
        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"><?= $thongtinsp['mota'] ?></textarea>
      </div>
      <div class="mb-3">
        <label for="amount" class="form-label">Lượt mua</label>
        <input type="number" class="form-control" id="amount" disabled value="<?= $thongtinsp['luotmua'] ?>">
      </div>
      <div class="mb-3">
        <label for="cate" class="form-label">Danh mục</label>
        <select name="cate" id="cate" class="form-control">
          <?php foreach ($listdanhmuc as $item) : ?>
            <option value="<?= $item['id'] ?>" <?php echo $select = (int)$item['id'] === (int)$thongtinsp['iddm'] ? "selected" : "" ?>><?= $item['name'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" name="btn-update">Cập nhật</button>
    </form>
  <?php endif; ?>
</div>