<main>
    <article class="header__title margin-box text-center">
        <h1>Danh sách loại hàng</h1>
    </article>
    
    <div class="row">
        <div class="col-2 ms-2">
            <a href="index.php?act=addsp"><button class="btn btn-primary">Thêm mới</button></a>
        </div>
        <div class="col-4"></div>
        <!-- <div class="col-5 ms-auto">
            <form class="form__admin mt-3 ms-3">
                <div class="form__table_content">
                    
                    </div>
            </form>
        </div> -->
    </div>
            <table class="table">
                <tr>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh </th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th>Danh mục</th>
                    <th></th>
                </tr>
                <?php
                    foreach($sp as $listsp){
                        extract($listsp);
                        $suasp="index.php?act=suasp&id=".$id;
                        $xoasp="index.php?act=xoasp&id=".$id;
                        $anhpath="../img/".$img;
                        if(is_file($anhpath)){
                            $anh="<img src='".$anhpath."' height='80'";
                        }else{
                            $anh="Không có ảnh";
                        }
                        echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$anh.'</td>
                                <td>'.$price.'</td>
                                <td>'.$luotmua.'</td>
                                <td>'.$iddm.'</td>
                                <td><a href="'.$suasp.'"><input type="button" class="btn btn-danger" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" class="btn btn-warning" value="Xoá"></a>
                                </td>
                            </tr>
                        ';
                    }
                ?>

            </table>

        </div>
        

    </form>

</main>