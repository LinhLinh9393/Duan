<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'connect.php';
    $sql = "select * from user where email = '$email'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $num_rows = $stmt->rowCount(); 

    
    if ($num_rows > 0){
        header('location: dangky.php?error=Trùng email rồi, bạn cần đăng ký email khác!');
        exit();
    }

    $sql1 = "insert into user(name,email,password) values('$name','$email','$password')";
    
    $stmt = $conn->prepare($sql1);
    $stmt->execute();
    header('location: dangnhap.php?suss=Bạn đã đăng ký thành công, vui lòng đăng nhập!');

?>

<a href="dangnhap.php"></a>