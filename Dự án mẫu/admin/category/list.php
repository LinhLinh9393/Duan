<main>
    <article class="header__title margin-box">
        <h1>Danh sách loại hàng</h1>
    </article>
    <form class="form__admin">

        <div class="form__table_content">
            <table class="table_content">
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                </tr>
                <?php
                foreach ($list_category as $list) {
                    extract($list);
                    $edit = "index.php?act=edit_category&id=" . $id;
                    $delete = "index.php?act=delete_category&id=" . $id;
                    echo ' <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id . '</td>
                <td>' . $name. '</td>
                <td><a href="'.$edit.'"><input type="button" value="Sửa"></a>
                    <a href="'.$delete.'"><input type="button" value="Xóa"></a>
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
            <a href="index.php?act=add_category"><input type="button" name="" value="Nhập thêm" id=""></a>
        </div>

    </form>

</main>