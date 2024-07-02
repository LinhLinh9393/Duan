<nav class="aside__list_category">
  <div class="nav__title">Tài khoản</div>
  <div class="nav__content nav__content_form">
    <?php
    if (isset($_SESSION['username'])) {
      extract($_SESSION['username']);
    ?>
      <label for="">
        Hello
        <?=$username ?>
      </label>
      <br />
      <li><a href="index.php?act=forget_pass">Quên mật khẩu</a></li>
      <li><a href="index.php?act=edit_account">Cập nhật</a></li>
      <?php if($role==1){ ?>
      <li><a href="admin/index.php">Đăng nhập admin</a></li>
      <?php } ?>
      <li><a href="index.php?act=out">Logout</a></li>
    <?php
    } else {
    ?>
      <form action="index.php?act=login" method="post">
        <label for="">
          Tên đăng nhập
          <input type="text" name="user" />
        </label>
        <br />
        <label for="">
          Mật khẩu
          <input type="password" name="pass" />
        </label>
        <br />
        <label for="">
          <input type="checkbox" name="" id="" />
          Ghi nhớ tài khoản ?
        </label>
        <br />
        <input type="submit" value="Đăng nhập" name="login" />
      </form>
      <li><a href="#">Quên mật khẩu</a></li>
      <li><a href="index.php?act=register">Đăng ký thành viên</a></li>
    <?php
    }
    ?>
  </div>
</nav>

<nav class="aside__list_category">
  <div class="nav__title">Danh mục</div>
  <div class="nav__content_other nav__content_list">
    <ul>
      <?php
      foreach ($list_category as $list) {
        extract($list);
        $link_category = "index.php?act=product&id_category=" . $id;
        echo '<li>
            <a href="' . $link_category . '">' . $name . '</a>
                  </li>';
      }
      ?>
      <!-- <li><a href="#">Đồng hồ</a></li>
          <li><a href="#">Laptop</a></li>
          <li><a href="#">Điện thoại</a></li>
          <li><a href="#">Ba lô</a></li>
          <li><a href="#">Đồng hồ</a></li>
          <li><a href="#">Laptop</a></li>
          <li><a href="#">Điện thoại</a></li>
          <li><a href="#">Ba lô</a></li> -->
    </ul>
  </div>
  <div class="nav__footer nav__footer_searchbox">
    <form action="index.php?act=product" method="post">
      <input type="text" name="keyword" placeholder="Từ khóa tìm kiếm">
      <input type="submit" value="Tìm kiếm" name="search">
    </form>
  </div>
</nav>

<nav class="aside__list_category">
  <div class="nav__title">Top 10 yêu thích</div>
  <div class="nav__content">
    <?php
    foreach ($list_top10 as $product) {
      extract($product);
      $link_product = "index.php?act=detail_product&id_product=" . $id;
      $image_product = $image_path . $image;
      echo '<div class="nav__content_top10  ">

            <figure class="article_image">
              <img src="' . $image_product . '" alt="">
            </figure>

            <a href="' . $link_product . '">' . $name . '</a>

          </div>';
    }
    ?>
    <!-- <div class="nav__content_top10 ">
          <figure class="article_image">
            <img src="view/images/1.jpg" alt="">

          </figure>
          <a href="#">How </a>
        </div>
        <div class="nav__content_top10  ">
          <figure class="article_image">
            <img src="view/images/2.jpg" alt="">

          </figure>
          <a href="#">How to drive a car </a>
        </div>
        <div class="nav__content_top10  ">
          <figure class="article_image">
            <img src="view/images/2.jpg" alt="">

          </figure>
          <a href="#">How to drive a car </a>
        </div>
        <div class="nav__content_top10  ">
          <figure class="article_image">
            <img src="view/images/2.jpg" alt="">

          </figure>
          <a href="#">How to drive a car </a>
        </div> -->
  </div>
</nav>