<main>
      <article class="header__title margin-box text-center">
        <h1>Thêm mới sản phẩm</h1>
      </article>
      <nav class="form__admin mt-3 ms-3">
        <form action="index.php?act=addsp" method="post" class="nav__form_content" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Id sản phẩm</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="idsp" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Giá sản phẩm</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="giasp" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Ảnh sản phẩm</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name="anh" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Mô tả sản phẩm</label>
                <div class="col-sm-9">
                    <textarea name="mota" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Danh mục</label>
                <div class="col-sm-9">
                   <select name="iddm" id="">
                        <?php
                            foreach ($dm as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">"'.$name.'"</option>';
                            }
                        ?>
                   </select>
                </div>
            </div>
            <div class="mb-3 row ">
               <div class="col-sm-9 mx-auto mt-auto">
                  <!-- <button class="btn btn-primary" name="themmoi">Thêm mới</button> -->
                  <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
                  <a href="index.php?act=listsp"><input type="button" class="btn btn-danger" value="Danh sách"></a>
                </div>
            </div>
        </form>

      </nav>
    </main>
