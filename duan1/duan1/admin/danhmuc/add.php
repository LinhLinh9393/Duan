<main>
      <article class="header__title margin-box text-center">
        <h1>Thêm mới danh mục</h1>
      </article>
      <nav class="form__admin mt-3 ms-3">
        <form action="index.php?act=adddm" method="post" class="nav__form_content">
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Id danh mục</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="iddm" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Tên danh mục</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" >
                </div>
            </div>
            <div class="mb-3 row ">
               <div class="col-sm-9 mx-auto mt-auto">
                  <!-- <button class="btn btn-primary" name="themmoi">Thêm mới</button> -->
                  <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
                  <a href="index.php?act=listdm"><input type="button" class="btn btn-danger" value="Danh sách"></a>
                </div>
            </div>
            <?php
              if(isset($thongbao)&&($thongbao!= "")) echo $thongbao;
            ?>
        </form>

      </nav>
    </main>
