<?php
    if(is_array(($dm))){
        extract($dm);
    }
?>
<main>
      <article class="header__title margin-box text-center">
        <h1>Thêm mới loại hàng hóa</h1>
      </article>
      <nav class="form__admin mt-3 ms-3">
        <form action="index.php?act=editdm" method="post" class="nav__form_content">
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Id danh mục</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="iddm"  value="<?=$id ?>" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Tên danh mục</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" value="<?php if(isset($name)&&($name!= "")) echo $name; ?>">
                </div>
            </div>
            <div class="mb-3 row ">
               <div class="col-sm-9 mx-auto mt-auto">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                    <input type="submit" class="btn btn-primary" name="edit" value="Cập nhật">
                    <a href="index.php?act=listdm"><input type="button" class="btn btn-danger" value="Danh sách"></a>
                </div>
            </div>
        </form>

      </nav>
    </main>
