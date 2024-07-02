<main>
  <article class="header__title margin-box">
    <h1>Thêm mới sản phẩm</h1>
  </article>
  <nav class="form__admin">
    <form action="index.php?act=add_product" method="post" class="nav__form_content" enctype="multipart/form-data">
      <div class="form__content_input">Danh mục
        <select name="id_category">
          <?php
          foreach ($list_category as $list) {
            extract($list);
            echo ' <option value='.$id.' >'.$name.'</option> ';
          }
          ?>
          <option value=""></option>
        </select>
      </div>
      <div class="form__content_input">Tên loại
        <input type="text" name="name">
      </div>
      <div class="form__content_input">Giá
        <input type="text" name="price">
      </div>
      <div class="form__content_input">Hình
        <input type="file" name="image">
      </div>
      <div class="form__content_input">Mô tả
        <textarea name="description" cols="30" rows="10"></textarea>
      </div>
      <div class="">
        <input type="submit" name="add_new" value="Thêm mới" id="">
        <input type="reset" name="" value="Nhập lại" id="">
        <a href="index.php?act=list_product"><input type="button" name="" value="Danh sách" id=""></a>
      </div>
      <?php
      if (isset($notifi) && ($notifi != "")) {
        echo $notifi;
      }
      ?>
    </form>
  </nav>
</main>