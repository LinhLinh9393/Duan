<section class="containerfull">
    <div class="col9 viewcart">
      <h2>ĐƠN HÀNG</h2><br>
      <table class="table border">
        <tr>
          <th>Hình</th>
          <th>Tên sản phẩm</th>
          <th>Đơn giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>
          <th>Thao tác</th>
        </tr>

        <?php
        $tong=0;
        $i=0;
            foreach($listcart as $cart){
                extract($cart);
                $anhpath=$img;
                if(is_file($anhpath)){
                    $anh="<img src='".$anhpath."' height='80'";
                }else{
                    $anh="Không có ảnh";
                }
                $ttien=$soluong * $price;
                $tong=$tong+$ttien;
    
                $xoasp="index.php?act=delcart&id=".$id;
                $bill="index.php?act=bill";

                echo '
                    <tr>
                        <td>'.$anh.'</td>
                        <td>'.$name.'</td>
                        <td>'.$price.'</td>
                        <td>'.$soluong.'</td>
                        <td>'.$ttien.'</td>
                        <td><a href="'.$xoasp.'"><input type="button" class="btn btn-warning" value="Xoá"></a></td>
                    </tr>
                ';
                $i+=1;
                
            }

            echo '<tr>
                <td colspan="4"><h3>Tổng đơn hàng</h3></td>

                <td>'.$tong.'</td>
                <td><a href="'. $bill.'"><input type="button" class="btn btn-warning" value="Tiến hành đặt hàng"></a></td>
                </tr>
            ';

        ?>
      </table>
    </div>

  </section>