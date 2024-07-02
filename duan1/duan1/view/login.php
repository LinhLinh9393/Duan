<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="../lib/all.min.css">
  <link rel="stylesheet" href="../lib/bootstrap.min.css">
  <script src="../lib/all.min.js"></script>
  <script src="../lib/bootstrap.bundle.min.js"></script>
</head>

<body>
  <header>
    <div class="row" style="background-color: #eca1a1;">
      <div class="col-12 text-center">
        <div class="logo">
          <img src="../img/logo.jpg" alt="" width="15%">
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
          <a class="navbar-brand" href="#">Trang chủ</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Sản phẩm
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Giỏ hàng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" aria-disabled="true">Đăng nhập</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="row mt-3">
    <div class="col-12 ms-3">
      <h3 class="text text-center">ĐĂNG NHẬP</h3>
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-9">
          <input type="password" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button">Đăng nhập</button>
      </div>

      <p class="signin text-center mt-2">Bạn chưa đăng ký? <a href="./register.html">Đăng ký ngay</a></p>
    </div>
  </div>

  </div>
  <footer class="box_footer row mb demo ms-3 mt-4">
    <div class="row" style="background-image: url(../img/anh2.jpg); color: rgb(0, 0, 0);">
      <!-- <div class="image_3 image">
        <img src="../img/anh2.jpg" alt="" />
      </div> -->
      <div class="col-4 mt-3 footer-left">
        <div class="footer-logo">
          <img src="../img/logo.jpg" alt="" width="25%" />
        </div>
        <div class="card_1">
          <h3>WEBSITE BÁN, CHĂM SÓC THÚ CƯNG </h3>
          <div class="row">
            <div class="col-1"><i class="fa-sharp fa-solid fa-location-pin"></i></div>
            <div class="col-10">
              <p>
                Tầng 2 tòa nhà T10, Times City Vĩnh Tuy, Hai Bà Trưng, Hà Nội.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-1"><i class="fa-solid fa-phone-flip"></i></div>
            <div class="col-10">
              <p>
                0958144592
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-1"><i class="fa-solid fa-envelope"></i></div>
            <div class="col-10">
              <p>beeshop@gmail.com</p>
            </div>
          </div>

          <div class="icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-square-instagram ms-2"></i>
            <i class="fa-brands fa-youtube ms-2"></i>
            <i class="fa-brands fa-square-twitter ms-2"></i>
            <i class="fa-brands fa-google-plus ms-2"></i>
          </div>
        </div>
      </div>

      <div class="col-4 mt-3">
        <div class="images">
          <div class="image">
            <img src="../img/anh4.jpg" alt="" />
          </div><br>
          <div class="image">
            <img src="../img/anh1.jpg" alt="" />
          </div>
        </div>
      </div>

      <div class="col-4 mt-3">
        <div class="footer-right">
          <div class="card_2">
            <h3>VỀ CHÚNG TÔI</h3>
            <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">Tin tức khuyến mại</a></p>
            <p><a class="link-offset-2 link-underline link-underline-opacity-10" href="#">Cửa hàng</a></p>
            <p><a class="link-offset-2 link-underline link-underline-opacity-25" href="#">Quy định chung</a>
            <p><a class="link-offset-2 link-underline link-underline-opacity-50" href="#">TT liên hệ 0958144592</a></p>
          </div>
          <div class="card_3">
            <h3>CHÍNH SÁCH</h3>
            <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">Chính sách thành viên</a></p>
            <p><a class="link-offset-2 link-underline link-underline-opacity-10" href="#">Hình thức thanh toán</a></p>
            <p><a class="link-offset-2 link-underline link-underline-opacity-25" href="#">Vận chuyển giao nhận</a></p>
            <p><a class="link-offset-2 link-underline link-underline-opacity-50" href="#">Đổi trả và hoàn tiền</a></p>
            <p><a class="link-offset-2 link-underline link-underline-opacity-75" href="#">Bảo vệ thông tin cá nhân</a>
            </p>
            <p><a class="link-offset-2 link-underline link-underline-opacity-100" href="#">Bảo trì, bảo hành</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section ends -->
  </footer>
</body>

</html>