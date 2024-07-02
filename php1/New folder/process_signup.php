<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once 'connect.php';
    $sql = "select * from user where email = '$email'";
    // $result = mysqli_query($conn,$sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // var_dump($result);
    $num_rows = $stmt->rowCount(); // đếm số dòng 1

    
    if ($num_rows > 0){
        header('location: signup.php?error=Trùng email rồi, bạn cần đăng ký email khác!');
        exit();
    }

    $sql1 = "insert into user(name,email,password) values('$name','$email','$password')";
    // mysqli_query($conn,$sql1);
    $stmt = $conn->prepare($sql1);
    $stmt->execute();
    header('location: signin.php?gsuss=Bạn đã đăng ký thành côn, vui lòng đăng nhập!');

    


    
    // mysqli_close($conn);

?>