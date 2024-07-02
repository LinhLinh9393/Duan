<main>
    <article class="header__title margin-box text-center">
        <h1>Danh sách loại hàng</h1>
    </article>

    <a href="index.php?act=adddm"><button class="btn btn-primary">Thêm mới</button></a>
    <form class="form__admin mt-3 ms-3">
        <div class="form__table_content">
            <table class="table">
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên danh mục</th>
                    <th></th>
                </tr>
                <?php
                    foreach($dm as $listdm){
                        extract($listdm);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                        echo '
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td><a href="'.$suadm.'"><input type="button" class="btn btn-danger" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" class="btn btn-warning" value="Xoá"></a>
                                </td>
                            </tr>
                        ';
                    }
                ?>

            </table>

        </div>
        <div class="form__button">
            <input type="button" name="" value="Chọn tất cả" id="">
            <input type="button" name="" value="Bỏ chọn tất cả" id="">
            <input type="button" name="" value="Xóa các mục đã chọn" id="">
        </div>

    </form>

</main>