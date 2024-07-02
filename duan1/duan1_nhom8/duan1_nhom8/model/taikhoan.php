<?php
    // session_start();
    
    //dang ky
    function update_taikhoan($id, $user, $hoten, $email, $pass, $sdt, $diachi)
{
    $sql = "UPDATE taikhoan SET user='" . $user . "', hoten = '" . $hoten . "', pass='" . $pass . "', email='" . $email . "', sdt='" . $sdt . "', diachi='" . $diachi . "' WHERE  id_tk=" . $id;
    pdo_execute($sql);
}


    function insert_taikhoan($email,$user,$pass){
        $sql="INSERT INTO `taikhoan` ( `email`, `user`, `pass`) VALUES ( '$email', '$user','$pass'); ";
        pdo_execute($sql);
    }
    function loadall_taikhoan(){
    $sql = "SELECT * FROM taikhoan ORDER BY id desc";
    $listkhachhang = pdo_query($sql);
    return $listkhachhang;
    }
    function loadone_khachhang($id)
{
    $sql = "SELECT * FROM taikhoan WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
    function checkuser($email,$pass){
        $sql="Select * from user where email=? and pass=?";
        return pdo_query_one($sql, $email,$pass);
        // if(is_array($kq)&&(count($kq))){
        //     return $kq["id"];
        // }else{
        //     return 0;
        // }
    }
    function delete_taikhoan($id){
    $sql = "DELETE  FROM taikhoan WHERE id=" . $id;
    pdo_execute($sql);
    }

    function dangnhap($email,$pass) {
        $sql="SELECT * FROM taikhoan WHERE email='$email' and pass='$pass'";
        $taikhoan = pdo_query_one($sql);

        if ($taikhoan != false) {
            $_SESSION['email'] = $email;
        } else {
            return "Thông tin tài khoản sai";
        }
    }

    function dangxuat() {
        if (isset($_SESSION['email'])) {
            unset($_SESSION['email']);
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

            
            $mail->setFrom('duan1@example.com', 'DuAn1');
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
