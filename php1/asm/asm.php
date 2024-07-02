<?php  include 'connect.php'; ?>
<?php 
    $sql = "select * from product";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetchAll();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asm</title>
    <style>
        body{
            padding: 0;
            width: 100%;
        }
        .container{
            padding: 0 auto;
        }
        .header-top{
            background-color: white;
            display: flex;
            justify-content: space-between;
            padding: 15px;
        }
        .header-top form{
            padding: 60px;
        }
        .header-main{
            padding: 10px;
            background-color:orangered;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .menu{
            list-style: none;
            padding: 5px;
            margin: 5px;
        }
        .menu>li{
            display: inline-block;
            text-transform: uppercase;
        }
        .menu>li>a{
            color: white;
            text-decoration: none;
            padding: 0 10px;
        }
        .menu-right{
            list-style: none;
            padding: 5px;
            margin: 5px;
        }
        .menu-right>a{
            color: white;
            text-decoration: none;
            padding: 0 10px;
        }
        .product{           
            display: flex;
            justify-content: space-evenly;
        }
        .product p{
            text-align: center;
            font-size: 30px;
        }  
        .product a{
            justify-items:center;
            background-color: orangered;
            color: aliceblue;
            font-size: 24px;
            padding: 10px 178px;
        }  
        footer{
            background-color: orangered;
            padding: 15px;
            text-align: center;
            height: 30px;
        }
        footer span{
            color: white;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-top">
                <img src="img/tải xuống.jpg" alt="">
                <form action="" class="form-menu">
                    <input type="text">
                    <button type="submit" class="form-btn">Tìm kiếm</button>
                </form>
            </div>
            <div class="header-main">
               <ul class="menu">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Giỏ hàng</a></li>
               </ul>
                <ul class="menu-right">
                    <a href="dangnhap.php">Đăng nhập</a>
                    <a href="dangky.php">Đăng ký</a>
                </ul>
            </div>
        </header>
    </div>
    <div class="banner">
        <img src="img/images.jpg" alt="" width="100%">
    </div>
    <h3 style="color: red; text-align:center; font-size: 30px">SẢN PHẨM HOT</h3><br>
    <div class="product">
        <?php foreach ($row as $pd){ ?>
        <div class="box">
            <img height= 400px src="img/<?php echo $pd['image']; ?>" alt="">
            <p><?php echo $pd['name']; ?></p></p><p style="color: red; font-size: 20px"><?php echo $pd['giatien']; ?>đ</p>
            <a href="sanpham.php?id=<?php echo $pd['id']; ?>">Mua</a>
        </div>
        <?php }?>
    </div><br><br>
    <div class="product">
        <?php foreach ($row as $pd){ ?>
        <div class="box">
            <img height= 400px src="img/<?php echo $pd['image']; ?>" alt="">
            <p><?php echo $pd['name']; ?></p><p style="color: red; font-size: 20px"><?php echo $pd['giatien']; ?>đ</p>
            <a href="sanpham.php?id=<?php echo $pd['id']; ?>">Mua</a>
        </div>
        <?php }?>
    </div><br>
    <div class="banner">
        <img src="img/images (1).jpg" alt="" width="100%">
    </div><br>
    <footer>
        <span>@FPT Polytechnic</span>
    </footer>
</body>
</html>