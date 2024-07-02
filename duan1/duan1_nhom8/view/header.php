<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dự án 1</title>
  <link rel="stylesheet" href="css.css">
  <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="row mb header" style="background: rgb(239 93 93);border: 1px solid #fff;">
      <div class="logo" style="padding-left: 25px; width: 50%;"><img src="img/logo.jpg" alt="" width="25%"></div>
      <div class="row mb menu">
        <ul>
          <li class="dropdown"><a class="dropdownbtn" href="index.php">Trang chủ</a></li>
          <!-- <li class="dropdown"><a class="dropdownbtn" href="">Danh mục</a> -->
          <!-- <div class="dropdown_content">
                <a href="">Chó</a>
                <a href="">Mèo</a>
                <a href="">Chuột Hamter</a>
                <a href="">Phụ kiện chăm sóc thú cưng</a>
             </div></li> -->
          <li class="dropdown"><a class="dropdownbtn" href="index.php?act=listCart">Giỏ hàng</a><span id="totalProduct" style="margin-left: 7px;color: aliceblue;background-color: brown;padding: 5px;border-radius: 16px;"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span></li>
          <li class="dropdown"><a class="dropdownbtn" href="index.php?act=dangky">Đăng ký</a></li>
          <li class="dropdown"><a class="dropdownbtn" href="index.php?act=dangnhap">Đăng nhập</a></li>
        </ul>
      </div>
      <!-- <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" id="" placeholder="Từ khóa tìm kiếm" name="keyword">
            </form>
        </div> -->

    </div>
  </header>