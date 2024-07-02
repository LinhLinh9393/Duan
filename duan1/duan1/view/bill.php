<h1 class="text text-center mt-3">Tiến hành đặt hàng</h1>
  <div class="row mt-3">
    <div class="col-12 ms-3">
      <h2>Sản phẩm</h2>
      <table class="table border">
        <tr>
          <th>Hình</th>
          <th>Tên sản phẩm</th>
          <th>Đơn giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>
        </tr>
        <?php
        $tong=0;
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
                echo '
                    <tr>
                        <td>'.$anh.'</td>
                        <td>'.$name.'</td>
                        <td>'.$price.'</td>
                        <td>'.$soluong.'</td>
                        <td>'.$ttien.'</td>
                    </tr>
                ';
                
            }

            echo '<tr>
                <td colspan="4"><h3>Tổng đơn hàng</h3></td>

                <td>'.$tong.'</td>
                </tr>
            ';

        ?>
      </table>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-12 ms-3">
      <h2>Phương thức thanh toán</h2>
      <div class="table">
        <table class="table text-center">
          <tr>
            <td><input type="radio" name="pttn" checked>Trả tiền khi nhận hàng</td>
            <td><input type="radio" name="pttn" >Chuyển khoản</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-12 ms-3">
      <h2>Thông tin đặt hàng</h2>
      <div class="thongtin__form ">
        <table >
            <?php
                
            ?>
          <tr>
            <td>Người đặt hàng</td>
            <td><input type="text" class="form-control ms-5" name="name" id=""></td>
          </tr>
          <tr>
            <td>Địa chỉ</td>
            <td><input type="text" class="form-control ms-5" name="address" id=""></td>
          </tr>
          <tr>
            <td>Số điện thoại</td>
            <td><input type="text" class="form-control ms-5" name="tel" id=""></td>
          </tr>

        </table>
      </div><br>
      <div class="dathang ms-5">
        <input type="submit" name="bill" value="Đặt hàng" class="btn btn-primary">
      </div>
    </div>
  </div>