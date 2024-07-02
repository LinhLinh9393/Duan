<div class="main__content">
    <main class="main__menu">
        <nav class="aside__list_category margin-box">
            <?php
            extract($load_detail_once);

            ?>
            <div class="nav__title"><?= $name ?></div>
            <div class="nav__content">
                <?php

                $image_product = $image_path . $image;
                echo '
                
                <figure class="article_image">
                <img width="360px" src="' . $image_product . '">
                </figure>
                ';
                echo $description;

                ?>

            </div>

        </nav>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#comment").load("view/comment/comment_form.php", {
                    id_pro: <?=$id?>
                });
            });
        </script>

        <nav class="aside__list_category margin-box">
            <div class="nav__title" id="comment">Bình luận</div>
            <div class="nav__content">
            </div>

        </nav>
        <nav class="aside__list_category margin-box">
            <div class="nav__title">Sản phẩm cùng loại</div>
            <div class="nav__content">
                <?php
                foreach ($same_product as $same_product) {
                    extract($same_product);
                    $link_product = "index.php?act=detail_product&id_product=" . $id;
                    echo '<li><a href="' . $link_product . '">' . $name . '</a></li>';
                }
                ?>
            </div>

        </nav>
    </main>

    <aside>
        <?php
        include "aside.php";
        ?>

    </aside>
</div>