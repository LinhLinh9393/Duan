<div class="row2">
    <div class="row2 font_title" style="background-color:#ff9191;
                                        border:1px #CCC solid;
                                        color:#fffefe;
                                        border-radius:5px;
                                        padding:10px ;
                                        text-align: center;">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <form action="index.php?act=listsp" method="post">
                    <input type="text" name="keyw">
                    <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $id . '">' . $name . '</option>';
                        }
                        ?>
                    </select>
                    <input type="submit" name="clickOK" value="GO"><br>
                </form><br>
                <table style="background-color: #f0bfbf;">
                    <tr>

                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ</th>
                        <th>HÌNH</th>
                        <th>LƯỢT MUA</th>

                        <th></th>
                    </tr>

                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $hinhpath = "img/" . $img;

                        $suasp = "index.php?act=suasp&idsp=" . $id;
                        $hard_delete = "index.php?act=delete&idsp=" . $id;
                        if (is_file($hinhpath)) {
                            $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
                        } else {
                            $hinhpath = "No file img!";
                        }
                        echo '<tr>
                           
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>$' . $price . '</td>
                            <td>' . $hinhpath . '</td>
                            <td>' . $luotmua . '</td>
                            
                            <td>
                                <a href="' . $suasp . '"><input type="button" value="Sửa"> </a>  
                                <a href="' . $hard_delete . '"><input type ="button" value="Xóa"></a>
                               
                            </td>
                    </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10 ">
                <!-- <input class="mr20" type="button" value="CHỌN TẤT CẢ"> -->
                <!-- <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ"> -->
                <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
                <a href="index.php?act=thongke"> <input class="mr20" type="button" value="THỐNG KÊ THEO SP"></a>
            </div>
        </form>
    </div>
</div>




</div>