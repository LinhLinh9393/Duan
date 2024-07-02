<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember'])){
        $remember = true;
    }else $remember = false;

    // $remember = isset($_POST['remember'])?true:false;
    require_once 'connect.php';
    $sql = "select * from user where email='$email' and password='$password'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $num_rows = $stmt->rowCount(); //1
    // $result = mysqli_query($conn,$sql);
    // $num_rows = mysqli_num_rows($result);
    if ($num_rows >0 ){
        session_start();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch($result);
        // $row = mysqli_fetch_array($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        if($remember){
            setcookie('remember', $row['id'], time() + 60*60*24*30);//cookie ton tai 1 thang
        }
        

        header('location: user.php');
        exit();
    }

    // header('location: signin.php?error=Vui lòng nhập đúng thông tin!');
?>