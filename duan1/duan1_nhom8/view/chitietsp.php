<main class="spct">
      <div class="ct">
        <section class="product">
        <?php extract($sanpham);?>
          <div class="product__detail"> 
              <div class="product__content" style="margin-top: 20px;">
                  <?php 
                    $img =  $img_path.$img; 
                    echo "<img src='$img' width=50%>";
                  ?>
                  <div class="product__text" style="padding: 0;text-align: justify;">
                      <h1 style="font-size: 38px;padding-left: 10px;border-left: 4px #FF9900 solid;"><?php echo $name; ?></h1><br>
                      <h3 class="money">Giá sản phẩm: <?php echo $price; ?>đ</h3><br>
                      <h3>Mô tả sản phẩm: <br></h3>
                      <p><?php echo $mota; ?></p><br>
                      <h3>Lượt mua: <?php echo $luotmua; ?></h3>
                    
                      <button data-id="<?= $id ?>" class="buyNow" onclick="addGioHang(<?= $id ?>,'<?= $name ?>',<?= $price ?>)" style="text-decoration: double;color: white; font-size: 26px;">Thêm giỏ hàng</button>
                  </div>
              </div>
          </div>
          </section>
        </div><br><br>
        <div class="br" style="width: 95%;margin-left: 37px;">
        <div class="mb">
          <div class="box_title">BÌNH LUẬN</div>
          <div class="box_content2  product_portfolio binhluan ">
            <table>
            <?php foreach($binhluan as $value): ?>
                    <tr>
                        <td><?php echo $value['noidung']?></td>
                        <td><?php echo $value['user']?></td>
                        <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
            </table>
          
          <div class="box_search" style="text-align: center; margin-top: 70px;">
            <form action="" method="POST">
              <input type="hidden" name="id" value="">
              <input type="text" name="noidung"  >
              <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
          </div>
        </div>
        </div>
    </main>
     <h1 style="text-align: center; color:red;">SẢN PHẨM LIÊN QUAN</h1><br>
    <main class="catalog  mb ">
     
      <div class="items">
      <?php
          foreach($sanphamcl as $sp){
            extract($sp);
            $linksp="index.php?act=sanphamct&idsp=".$id;
            $img=$img_path.$img;
            echo '<div class="box_items">
                  <div class="box_items_img">
                  <img src="'.$img.'" alt="">
                  <h3>'.$name.'</h3>
                  <p class="price">$'.$price.'</p>
              <a class="item_name" href="'. $linksp .'">Xem sản phẩm</a> </div>
              </div>';
          }
          ?>
        
      </div>
      </main>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct=document.getElementById('totalProduct');
    function addGioHang(productId,productName,productPrice){
        // console.log(productId,productName,productPrice);
        //sd jQuery
        $.ajax({
            type: 'POST',
            url: './view/giohang.php',
            data: {
              id:productId,
              name:productName,
              price:productPrice
            },
            success:function(response){
              totalProduct.innerText = response;
              alert('Bạn dã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error:function(error){
              console.log(error);
            }
        });
    }
</script>


      