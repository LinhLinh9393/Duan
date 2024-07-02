<div class="main__content">
    <main class="main__menu">
        <nav class="aside__list_category margin-box">

            <div class="nav__title">Quên mật khẩu</div>
            <div class="nav__content ">
                <form action="index.php?act=forget_pass" method="post" class="nav__content_form">
                    <label for="">Email
                        <input type="email" name="email">
                        <br>
                    </label>
                    <br>
                    <input type="submit" value="Gửi" name="send_email">
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