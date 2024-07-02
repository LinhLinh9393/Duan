<main>
      <article class="header__title margin-box">
        <h1>Thêm mới loại hàng hóa</h1>
      </article>
      <nav class="form__admin">
        <form action="index.php?act=add_category" method="post" class="nav__form_content">
            <div class="form__content_input">Mã loại
                <input type="text" name="maloai" disabled>
            </div>
            <div class="form__content_input">Tên loại
                <input type="text" name="tenloai" id="">
            </div>
            <div class="">
                <input type="submit" name="add_new" value="Thêm mới" id="">
                <input type="reset" name="" value="Nhập lại" id="">
                <a href="index.php?act=list_category"><input type="button" name="" value="Danh sách" id=""></a>
            </div>
            <?php 
            if (isset($notifi)&&($notifi!="")) {
              echo $notifi;
            }
            ?>
        </form>
      </nav>
    </main>