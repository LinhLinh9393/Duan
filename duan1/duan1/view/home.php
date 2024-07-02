<div class="row">
    <div class="col-8">
      <img src="img/anh2.jpg" alt="" width="100%">
    </div>
    <div class="col-4">
      <img src="img/banner-desktop-1.jpg" alt="" width="100%"><br><br>
      <img src="img/banner-desktop-2.jpg" alt="" width="100%">
    </div>
  </div>

  <h1 style="text-align: center; padding-top: 15px; color: red;">Sản phẩm bán chạy</h1>
  <div class="row ms-3 mt-3 mx-auto">
  <?php
      foreach($dstop8 as $sp){
        extract($sp);
        $hinh=$img_path.$img;
        $linksp="index.php?act=chitietsp&idsp=".$id;
        $linkcart="";
        echo '
        <div class="col-3 text-center">
          <div class="box_items">
            <div class="box_items_img">
              <img src="'.$hinh.'" alt="" style="height: 225px;">

            </div>
            <h3>'.$name.'</h3>
            <p class="price">'.$price.' VNĐ</p>
            <a class="item_name" href="'.$linksp.'"><button class="btn btn-primary">Mua hàng</button></a>
          </div><br><br>
        </div>
       ';

      }
    ?>

  <div class="boxleft mt-4" style="width: 100%; background-image: url(img/banner-desktop-1.jpg); opacity: 0.8;">
    <div class="banner">

      <div class="text-inner text-center">
        <h1 class="uppercase "><span style="font-size: 65%;"><strong>PETS MARK CUNG CẤP NHỮNG BÉ THÚ CƯNG THUẦN
              CHỦNG</strong></span></h1>
        <br>
        <div id="text-681478046" class="text">
          <h3 class="alt-font"><span style="font-size: 85%;">Đảm bảo con giống có nguồn gen tốt, bố mẹ đẹp, thuần chủng,
              chế độ chăm sóc tốt, nơi ở sạch sẽ để tạo ra những bé thú cảnh đẹp nhất</span></h3>
        </div> <br>
      </div>
    </div>
  </div>
  <div class="banner-video mt-3" style="display: flex;padding: 15px;background-color: black;">
    <div id="video" style="width: 50%; padding: 10px;">
      <iframe src="img/video.mp4" style="width: 100%; height: 204px;" autoplay></iframe>
    </div>
    <div class="banner1">
      <div class="note">
        <br>
        <h1 style="text-align: center; color: rgb(241, 12, 12);">BEE SHOP<br></h1>
        <h2 style="font-size: 18px;padding: 20px;text-align: center;font-weight: normal;color: whitesmoke;">Với sự đa
          dạng về các giống chó mèo cảnh, BEE SHOP đảm bảo chất lượng con giống, nguồn gen chuẩn cùng quy trình nhân
          giống chuyên nghiệp.<br><br>Tại BEE SHOP, các con giống đều là dòng thuần chủng, được chăm sóc kỹ lưỡng và có
          sức khỏe tốt, sẵn sàng về nhà mới.</h2>
      </div>
    </div>
  </div>

  <div class="row ms-3 mt-3 mx-auto">
  <?php
      foreach($spnew as $sp){
        extract($sp);
        $hinh=$img_path.$img;
        $linksp="index.php?act=chitietsp&idsp=".$id;
        echo '
        <div class="col-3 text-center">
          <div class="box_items">
            <div class="box_items_img">
              <img src="'.$hinh.'" alt="" style="height: 225px;">

            </div>
            <h3>'.$name.'</h3>
            <p class="price">'.$price.' VNĐ</p>
            <a class="item_name" href="'.$linksp.'"><button class="btn btn-primary">Mua hàng</button></a>
          </div><br><br>
        </div>
       ';

      }
    ?>
  </div>
