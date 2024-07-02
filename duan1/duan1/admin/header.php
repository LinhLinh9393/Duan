<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dự án 1</title>
    <link rel="stylesheet" href="../lib/all.min.css">
    <link rel="stylesheet" href="../lib/bootstrap.min.css">
    <script src="../lib/all.min.js"></script>
    <script src="../lib/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="row bg-black text-light p-3 " ng-controller="header">
        <div class="col-1 ">
            <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars text-light "></i></button>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header bg-black text-light ">
                    <h2>Admin</h2>
                    <button type="button" class="btn-close bg-light " data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-black text-light ">
                    <div class="row">
                        <div class="col mb-3 ">
                            <p class="p-2" style="font-size: 0.75rem; font-weight: bold; text-transform: uppercase;">
                                HOME
                            </p>
                            <a href="index.php" class="nav-link ms-4 "><i class="fa-solid fa-house-chimney"></i> <span>Trang
                                    chủ</span></a>
                        </div>
                        <hr>
                        <div class="col mb-3 ">
                            <p class="p-2" style="font-size: 0.75rem; font-weight: bold; text-transform: uppercase;">
                                Điều hướng
                            </p>
                            <p class="d-inline-flex gap-1 ms-4 ">
                                <a class="btn text-light " data-bs-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fa-solid fa-table"></i> <span>Danh mục</span>
                                </a>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body bg-black">
                                    <a href="index.php?act=listdm" class="nav-link text-light ms-5 ">Quản lý danh mục</a>
                                </div>
                            </div>

                            <br>
                            <p class="d-inline-flex gap-1 ms-4">
                                <a class="btn text-light " data-bs-toggle="collapse" href="#collapseExample1"
                                    role="button" aria-expanded="false" aria-controls="collapseExample1">
                                    <i class="fa-solid fa-warehouse"></i> <span>Sản phẩm</span>
                                </a>
                            <div class="collapse" id="collapseExample1">
                                <div class="card card-body bg-black">
                                    <a href="index.php?act=listsp" class="nav-link text-light ms-5 ">Quản lý sản phẩm</a>
                                </div>
                            </div>
                            <br>
                            <p class="d-inline-flex gap-1 ms-4">
                                <a class="btn text-light " data-bs-toggle="collapse" href="#collapseBar" role="button"
                                    aria-expanded="false" aria-controls="collapseBar">
                                    <i class="fa-brands fa-readme"></i> <span>Thống kê</span>
                                </a>
                            <div class="collapse" id="collapseBar">
                                <div class="card card-body bg-black">
                                    <a href="" class="nav-link text-light ms-5 ">Biểu đồ tròn</a>
                                </div>
                                <div class="card card-body bg-black">
                                    <a href="" class="nav-link text-light ms-5 ">Biểu đồ cột</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col mb-3 ">
                            <p class="p-2" style="font-size: 0.75rem; font-weight: bold; text-transform: uppercase;">
                                ADDONS
                            </p>
                            <div class="quanly">
                                <a href="" class="nav-link ms-4 "><i class="fa-solid fa-dolly"></i> <span>Đơn hàng</span></a>
                            </div><br>
                            <div class="quanly">
                                <a href="" class="nav-link ms-4 "><i class="fa-solid fa-users"></i>
                                    <span>Tài khoản</span></a>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-11 ">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6 d-flex ">
                    <div class="input-group me-2 ">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                    <ul class="navbar-nav me-auto ms-md-0 me-3 me-lg-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw "></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!/login">Login</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#!/register">Logout</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#!/register">Đăng xuất</a></li>
                            </ul>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>