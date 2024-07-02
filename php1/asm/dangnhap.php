<?php 
    session_start();
    if(isset($_COOKIE['remember'])){

        $id = $_COOKIE['remember'];
        require_once 'connect.php';
        $sql = "select * from user where id =$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $each = $stmt->fetch();
      
        $_SESSION['id'] = $each['id'];
        $_SESSION['name'] = $each['name'];
    }

    if (isset($_SESSION['id'])){
        header('location: user.php');
        exit();
    }

?>

<?php 
    if(isset($_GET['suss'])){
        echo $_GET['suss'];
    }
    if(isset($_GET['error'])){
        echo $_GET['error'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check_dangnhap.php" method="post">   
    Email: <input type="email" name="email"><br>
    Mật khẩu: <input type="text" name="password"><br>
    Ghi nhớ đăng nhập: <input type="checkbox" name="remember" id=""><br>
    <input type="submit" value="Đăng nhập" name="submit">
    </form> 
</body>
</html>