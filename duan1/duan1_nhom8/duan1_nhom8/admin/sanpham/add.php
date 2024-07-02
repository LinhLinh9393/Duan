<div class="container" style="max-width: 1111px;
    margin-left: 274px;
    margin-top: 78px;">
  <h1>Thêm sản phẩm</h1>
  <form action="" method="post" style="text-align: left;" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="name" class="form-label">Tên sản phẩm</label>
      <input type="text" class="form-control" id="name" name="name" value="">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Giá sản phẩm</label>
      <input type="number" class="form-control" id="price" name="price" value="">
    </div>
    <div class="mb-3">
      <label for="file" class="form-label">Hình ảnh</label>
      <input type="file" class="form-control" id="file" name="file">
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label">Mô tả</label>
      <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label for="cate" class="form-label">Danh mục</label>
      <select name="cate" id="cate" class="form-control">
        <?php foreach ($listdanhmuc as $item) : ?>
          <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btn-add">Thêm mới</button>
    <button type="submit" class="btn btn-primary" name="btn-add"><a href="?act=list-sp" style="color:aliceblue;">Danh sách sản phẩm</a></button>
  </form>
</div>