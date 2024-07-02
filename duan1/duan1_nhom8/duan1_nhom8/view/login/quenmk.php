<div class="login" style="width: 90%;">
    <div class="login__background">
        <img src="img/logo.jpg" alt="" width="40%">
        <p>Pets Mart</p>
        <p>Magical pets</p>
    </div>
    <div class="login__form" style="margin-right: 15px;">
        <h3>Quên mật khẩu</h3>
        <form action="index.php?act=quenmk" method="post">
            <input type="email" name="email" placeholder="Vui lòng nhập Email...." required>
            <input type="submit" value="Gửi" name="guiemail">
            <input type="reset" value="Nhập lại">
            <br>
            <?php if (isset($sendMailMess) && $sendMailMess != '') {
                    echo $sendMailMess;
            } ?>
        </form>
            
    </div>
</div>