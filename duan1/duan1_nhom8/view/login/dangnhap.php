<div class="login">
        <div class="login__background">
            <img src="img/logo.jpg" alt="" width="40%">
            <p>Pets Mart</p>
            <p>Magical pets</p>
        </div>
        <div class="login">
          <div class="login__form">
              <h3>ĐĂNG NHẬP</h3>
              <?php if (!$_SESSION) { ?>
              <form action="index.php?act=dangnhap" method="POST">
                  <input type="text" name="email" placeholder="Email...." required>
                  <input type="password" name="pass" placeholder="Password..." required>
              
                  <input type="submit" value="ĐĂNG NHẬP" name="dangnhap" style="    background-color: red; color: aliceblue; font-size: 20px;">
                  
                  <?php if (isset($loginMess)&&$loginMess != '') {
                        echo $loginMess;
                    } ?>
                  <div class="login__action">
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                    <p class="signin">Bạn chưa đăng ký? <a href="index.php?act=dangky">Đăng ký ngay</a></p>
                  </div>
                
              <div class="tb" style="color: aliceblue; font-size: 20px">
              <?php } else { ?>
            <p style="color: aliceblue; font-size: 20px">Hello <?=$_SESSION['email']?></p><br>
                <button><a href="index.php">Xem sản phẩm ngay</a></button>
                <button><a href="index.php?act=dangxuat">Đăng xuất</a></button>
            <?php } ?></div>
        </form>
            </div>
      </div>
    </div>