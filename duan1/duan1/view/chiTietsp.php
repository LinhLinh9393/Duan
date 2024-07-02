
<?php
            extract($onesp);
        ?>
<div class="row g-0 mt-3">
    <div class="col-md-5 ms-3">
        <?php
             $img = $img_path . $img;
             echo '<img src="'.$img.'" class="img-fluid rounded-start" alt="..." width="80%" style="height: 425px;">';
        ?>
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h2 class="card-title"><?php echo $name; ?></h2>
        <p class="card-text mt-3">Mã sản phẩm: <?php echo $id; ?></p>
        <p class="card-text mt-3">Giá: <?php echo $price; ?> VNĐ</p>
        <p class="card-text">Mô tả: <small class="text-body-secondary"><?php echo $mota; ?></small></p>
        <p>Xuất sứ: Việt Nam</p>
        <form action="index.php?act=addtocart" method="post">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="name" value="<?=$name?>">
            <input type="hidden" name="img" value="<?=$img?>">
            <input type="hidden" name="price" value="<?=$price?>">
            <input type="submit" name="addtocart" value="Thêm giỏ hàng" class="btn btn-outline-danger">
        </form>
        <!-- <a href="#"><button class="btn btn-outline-danger" >Thêm giỏ hàng</button></a> -->
      </div>
    </div>
  </div>
<img src="" alt="" style="height: 225px;">
  <div class="row mt-5">
    <div class="box_title"><h3 class="text text-center">BÌNH LUẬN</h3></div>
    <div class="box_content2  product_portfolio binhluan ms-3">
        <table class="table border">
        <?php 
          foreach($binhluan as $value): ?>
            <tr>
                <td><?php echo $value['noidung']?></td>
                <td><?php echo $value['user']?></td>
                <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
    </div>
    <div class="box_search ms-3">
        <form action="index.php?act=chitietsp&idsp=<?=$id?>" method="POST">
            <input type="hidden" name="idpro" value="<?$idpro?>">
            <input type="text" name="noidung">
            <input type="submit" name="guibinhluan" value="Gửi bình luận">
        </form>
    </div>

</div>

  <h1 style="text-align: center; padding-top: 15px; color: red;" class="text mt-3">Sản phẩm cùng loại</h1>
  <div class="row ms-3 mt-3 mx-auto">
  <?php
      foreach($sanphamcl as $sp){
        extract($sp);
        $hinh=$img_path.$img;
        $linksp="index.php?act=chitietsp&idsp=".$id;
        echo '
        <div class="col-4 text-center">
          <div class="box_items">
            <div class="box_items_img">
              <img src="'.$hinh.'" alt="" style="height: 225px;">

            </div>
            <h3>'.$name.'</h3>
            <p class="price">'.$price.' VNĐ</p>
            <a class="item_name" href="'.$linksp.'"><button class="btn btn-primary" name="">Mua hàng</button></a>
          </div><br><br>
        </div>
       ';

      }
    ?>
  </div>