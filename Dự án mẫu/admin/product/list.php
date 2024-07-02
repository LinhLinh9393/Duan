<main>
    <article class="header__title margin-box">
        <h1>Danh sách loại hàng</h1>
    </article>
    <form action="index.php?act=list_product" method="post">
        <input type="text" name="keyword" id="">
        <select name="id_category">
            <option value="0" selected>All</option>
            <?php
            foreach ($list_category as $list) {
                extract($list);
                echo ' <option value=' . $id . ' >' . $name. '</option> ';
            }
            ?>
            <option value=""></option>
        </select>
        <input type="submit" name="list_submit" value="Go">
    </form>
    <form class="form__admin">

        <div class="form__table_content">
            <table class="table_content">
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình</th>
                    <th>Lượt xem</th>
                    <th></th>
                </tr>
                <?php
                foreach ($list_product as $list_pro) {
                    extract($list_pro);
                    $name_product=$name;
                    $edit = "index.php?act=edit_product&id=" . $id;
                    $delete = "index.php?act=delete_product&id=" . $id;
                    $image_path = "../upload/" . $image;
                    if (is_file($image_path)) {
                        $img = "<img src='" . $image_path . "' height='80px'>";
                    } else {
                        $img = "Not exist";
                    }
                    echo ' <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id . '</td>
                <td>' . $name_product . '</td>
                <td>' . $price . '</td>
                <td>' . $img . '</td>
                <td>' . $view . '</td>
                <td><a href="' . $edit . '"><input type="button" value="Sửa"></a>
                    <a href="' . $delete . '"><input type="button" value="Xóa"></a>
                </td>
                           </tr>';
                }
           
                ?>

            </table>

        </div>
        <div class="form__button">
            <input type="button" name="" value="Chọn tất cả" id="">
            <input type="button" name="" value="Bỏ chọn tất cả" id="">
            <input type="button" name="" value="Xóa các mục đã chọn" id="">
            <a href="index.php?act=add_product"><input type="button" name="" value="Nhập thêm" id=""></a>
        </div>

    </form>

</main>