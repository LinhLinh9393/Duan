<?php 
    if(is_array($list)){
        extract($list);
    }
?>
<main>
      <article class="header__title margin-box">
        <h1>Cập nhật loại hàng hóa</h1>
      </article>
      <nav class="form__admin">
        <form action="index.php?act=update_category" method="post" class="nav__form_content">
            <div class="form__content_input">Mã loại
                <input type="text" name="maloai" id="disabled">
            </div>
            <div class="form__content_input">Tên loại
                <input type="text" name="tenloai" id="" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
            </div>
            <div class="">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                <input type="submit" name="update" value="Cập nhật" id="">
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