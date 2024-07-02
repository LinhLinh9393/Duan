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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 1440px;
            margin: 0 auto;
            /* border: 1px solid red; */
        }
        .product{            
            display: flex;
            justify-content: space-evenly;
        }
        button{
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="signin.php">Đăng nhập</a>
        <a href="signup.php">Đăng ký</a>
        <h1>Danh sách sản phẩm</h1> 
        <a href="add_product.php">Thêm Mới</a>
        <div class="product">
            <?php foreach ($row as $pd){ ?>
            <div class="box">
                <img height= 200px src="img/<?php echo $pd['2']; ?>" alt="">
                <p><?php echo $pd['1']; ?></p>
                <p><?php echo $pd['3']; ?></p>
                <a href="cart.php?id=<?php echo $pd['0']; ?>">Mua</a>
            </div>
            <?php }?>
        </div>
        

    </div>
</body>
</html>