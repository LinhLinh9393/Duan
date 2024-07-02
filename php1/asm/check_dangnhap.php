<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember'])){
        $remember = true;
    }else $remember = false;

    
    require_once 'connect.php';
    $sql = "select * from user where email='$email' and password='$password'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $num_rows = $stmt->rowCount(); 
    
    if ($num_rows >0 ){
        session_start();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch($result);
       
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
       
        
        header('location: user.php');
        exit();
        
    }

    header('location: user.php?suss=Bạn đã đăng nhập thành công, quay lại trang chủ');
?>