<div class="login" style="width: 90%;">
        <div class="login__background">
            <img src="img/logo.jpg" alt="" width="40%">
            <p>Pets Mart</p>
            <p>Magical pets</p>
        </div>
        <div class="login__form" style="margin-right: 15px;">
            <h3>Đăng ký</h3>
            <form action="index.php?act=dangky" method="post">
                <input type="email" name="email" placeholder="Vui lòng nhập Email...." required>
                <input type="text" name="user" placeholder="họ và tên..." required>
                <input type="password" name="pass"  placeholder="Mật khẩu..." required>
                <input type="submit" value="Đăng ký" name="dangky">
            </form><br>
            <div class="thongbao" style="color: aliceblue;font-size: 23px; border-bottom-style: ridge;">
            <?php 
                if(isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
            ?>
        </div>
            <p class="signin" style="margin-top: 10px;">Bạn đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập ngay</a></p>
        </div>
    </div>