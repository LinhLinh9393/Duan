<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dự án 1</title>
  <link rel="stylesheet" href="lib/all.min.css">
  <link rel="stylesheet" href="lib/bootstrap.min.css">
  <script src="lib/all.min.js"></script>
  <script src="lib/bootstrap.bundle.min.js"></script>
  
</head>

<body>
  <header>
    <div class="row" style="background-color: #eca1a1;">
      <div class="col-12 text-center">
        <div class="logo">
          <img src="img/logo.jpg" alt="" width="15%">
        </div>
      </div>
      <div class="col-12 text-center">
        <h1>Pets Mart</h1>
        <p>Magical pets</p>
      </div>
    </div>
    <div class="row menu mt-3">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ms-3">
          <a class="navbar-brand" href="index.php">Trang chủ</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php?act=sanpham" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Sản phẩm
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="index.php?act=sanpham">Chó cảnh</a></li>
                  <li><a class="dropdown-item" href="index.php?act=sanpham">Mèo cảnh</a></li>
                  <li><a class="dropdown-item" href="index.php?act=sanpham">Chuột hamster</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="index.php?act=sanpham">Phụ kiện thú cưng</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?act=viewcart">Giỏ hàng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" aria-disabled="true">Đăng nhập</a>
              </li>
            </ul>
            <form class="d-flex" role="search" action="index.php?act=sanpham" method="post">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
              <button class="btn btn-outline-success" type="submit" name="timkiem">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </header>