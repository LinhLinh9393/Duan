<?php
    session_start();
    
    function insert_taikhoan($email,$user,$pass){
        $sql="INSERT INTO `taikhoan` ( `email`, `user`, `pass`) VALUES ( '$email', '$user','$pass'); ";
        pdo_execute($sql);
    }

    function dangnhap($user,$pass) {
        $sql="SELECT * FROM taikhoan WHERE user='$user' and pass='$pass'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            $_SESSION['user'] = $user;
        } else {
            return "Thông tin tài khoản sai";
        }
    }

    function dangxuat() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
    }

    function sendMail($email) {
        $sql="SELECT * FROM taikhoan WHERE email='$email'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
            
            return "gui email thanh cong";
        } else {
            return "Email bạn nhập ko có trong hệ thống";
        }
    }

    function sendMailPass($email, $username, $pass) {
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
           
            $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                     
            $mail->isSMTP();                                          
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                    
            $mail->SMTPAuth   = true;                                 
            $mail->Username   = '6bda0a4c1abcfc';                     
            $mail->Password   = '4430da6c8b9967';                               
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;           
            $mail->Port       = 587;                                  

            
            $mail->setFrom('duanmau@example.com', 'DuAnMau');
            $mail->addAddress($email, $username);     
            
            $mail->isHTML(true);                                  
            $mail->Subject = 'Nguoi dung quen mat khau';
            $mail->Body    = 'Mau khau cua ban la' .$pass;

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>
