<div class="main__content">
    <main class="main__menu">
        <nav class="aside__list_category margin-box">

            <div class="nav__title">Cập nhật</div>
            <div class="nav__content ">
            <?php 
            if(isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
                extract($_SESSION['username']);
            }
            ?>    
            <form action="index.php?act=edit_account" method="post" class="nav__content_form">
                    <label for="">Email
                        <input type="email" name="email" value="<?=$email ?>">
                        <br>
                    </label>
                    <label for="">Tên tài khoản
                        <input type="text" name="user" value="<?=$username ?>">
                        <br>
                    </label>
                    <label for="">Mật khẩu
                        <input type="password" name="pass" value="<?=$password ?>">
                        <br>
                    </label>
                    <label for="">Địa chỉ
                        <input type="text" name="address" value="<?=$address ?>">
                        <br>
                    </label>
                    <label for="">SĐT
                        <input type="text" name="tel" value="<?=$tel ?>">
                        <br>
                    </label>
                    <br>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="Cập nhật" name="update">
                    <input type="reset" value="Nhập lại">


                </form>
                <h2 class="notifi">


                    <?php
                    if (isset($notifi) && ($notifi != "")) {
                        echo $notifi;
                    }
                    ?>
                </h2>
            </div>

        </nav>

    </main>

    <aside>
        <?php include "view/aside.php"; ?>
    </aside>
</div>