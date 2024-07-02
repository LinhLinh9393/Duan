<?php
if (is_array($product)) {
    extract($product);
}
$image_path = "../upload/" . $image;
if (is_file($image_path)) {
    $img = "<img src='" . $image_path . "' height='80px'>";
} else {
    $img = "Not exist";
}
?>
<main>
    <article class="header__title margin-box">
        <h1>Cập nhật loại hàng hóa</h1>
    </article>
    <nav class="form__admin">
        <form action="index.php?act=update_product" method="post" class="nav__form_content" enctype="multipart/form-data">
            <div class="form__content_input">Mã sản phẩm
                <select name="id_category">
                    <option value="0" selected>All</option>
                    <?php
                    foreach ($list_category as $list) {

                        $id_cate = $list['id'];
                        $name_category = $list['name'];
                        if ($id_category == $id_cate) {
                            echo ' <option value=' . $id_categ . '   >selected '. $name_category.'</option> ';
                        }
                        echo ' <option value=' . $id_categ . ' >' . $name_category. '</option> ';
                    }
                    ?>

                </select>
            </div>
            <div class="form__content_input">Tên sản phẩm
                <input type="text" name="name" value="<?= $name ?>">
            </div>
            <div class="form__content_input">Giá
                <input type="text" name="price" value="<?= $price ?>">
            </div>
            <div class="form__content_input">Hình
                <input type="file" name="image" value="<?= $img ?>">
                <?= $img ?>
            </div>
            <div class="form__content_input">Mô tả
                <textarea name="description" cols="30" rows="10" value=""><?= $description ?></textarea>
            </div>
            <div class="form__content_input">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="update" value="Cập nhật" id="">
                <input type="reset" name="" value="Nhập lại" id="">
                <a href="index.php?act=list_product"><input type="button" name="" value="Danh sách" id=""></a>
            </div>

            <?php

            if (isset($notifi) && ($notifi != "")) {
                echo $notifi;
            }
            ?>
        </form>
    </nav>
</main>