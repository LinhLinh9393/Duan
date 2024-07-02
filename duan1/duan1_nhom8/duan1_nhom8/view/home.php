<?php include "./view/banner.php"; ?>
<h1 style="text-align: center; padding-top: 15px; color: red;">Sản phẩm bán chạy</h1>
      <main class="catalog  mb ">
        <div class="items">
        <?php
          foreach($dstop6 as $sp){
            extract($sp);
            $linksp="index.php?act=sanphamct&idsp=".$id;
            $img=$img_path.$img;
            echo '<div class="box_items">
                  <div class="box_items_img">
                  <img src="'.$img.'" alt="">
                  <h3>'.$name.'</h3>
                  <p class="price">$'.$price.'</p>
              <a class="item_name" href="'. $linksp .'">Mua hàng</a> </div>
              
              </div>';
          }
          ?>
        </div>
      </main>
      <div class="boxleft" style="width: 100%;">
          <div class="banner">
              
            <div class="text-inner-text-center" >
              <h1 class="uppercase"><span style="font-size: 65%;"><strong>PETS MARK CUNG CẤP NHỮNG BÉ THÚ CƯNG THUẦN CHỦNG</strong></span></h1>
              <br><div id="text-681478046" class="text">
                <h3 class="alt-font"><span style="font-size: 85%;">Đảm bảo con giống có nguồn gen tốt, bố mẹ đẹp, thuần chủng, chế độ chăm sóc tốt, nơi ở sạch sẽ để tạo ra những bé thú cảnh đẹp nhất</span></h3>
              </div> <br>   
              <div class="fix">
                <ul style="display: -webkit-inline-box">
                  <li class="dropdown"><a href="index.php" target="_self" class="button white is-outline">
                    <span>Home</span>
                  <?php
                  foreach($dsdm as $danhmuc){
                    extract($danhmuc);
                    $linkdm="index.php?act=sanpham&iddm=".$id;
                    echo '<li><a href="'.$linkdm.'">'.$name.' </a></li>';

                   }
                ?>
                  <!-- <li class="dropdown"><a href="" target="_self" class="button white is-outline">
                  <span>Cửa hàng chó cảnh!</span>
                </a></li>
                  <li class="dropdown"><a href="" target="_self" class="button white is-outline">
                  <span>Cửa hàng mèo cảnh</span>
                </a></li>
                <li class="dropdown"><a href="" target="_self" class="button white is-outline">
                  <span>Cửa hàng chuột Hamter</span>
                </a></li>
                  <li class="dropdown"><a href="" target="_self" class="button white is-outline">
                  <span>Phụ kiện thú cưng</span>
                </a></li> -->
              </ul>
                
                
                
              </div>
            </div>
          </div>
        </div>
      <div class="banner-video" style="display: flex;padding: 15px;">
        <div id="video" style="width: 50%; padding: 10px;">
          <iframe src="img/video.mp4" style="width: 100%; height: 204px;" autoplay></iframe>
      </div>
      <div class="banner1">
        <div class="note">
        <br><h1 style="text-align: center; color: blanchedalmond;">BEE SHOP<br></h1>
         <h2 style="font-size: 18px;padding: 20px;text-align: center;font-weight: normal;color: whitesmoke;">Với sự đa dạng về các giống chó mèo cảnh, BEE SHOP đảm bảo chất lượng con giống, nguồn gen chuẩn cùng quy trình nhân giống chuyên nghiệp.<br><br>Tại BEE SHOP, các con giống đều là dòng thuần chủng, được chăm sóc kỹ lưỡng và có sức khỏe tốt, sẵn sàng về nhà mới.</h2>
        </div>
     </div> 
     </div><br>
     <h1 style="text-align: center; padding-top: 15px; color: red;">Sản phẩm khác</h1><br>
    <main class="catalog  mb ">
      <div class="items">
      <?php
        $i=0;
          foreach ($spnew as $sp){
              extract($sp);
              $img =  $img_path.$img;
              if(($i==2)||($i==5)||($i==8)){
                  $mr="";
              }else{
                  $mr="mr";
              }
              $linksp="index.php?act=sanphamct&idsp=".$id;
              echo '<div class="box_items">
              <div class="box_items_img">
              <img src="'.$img.'" alt="">
              <h3>'.$name.'</h3>
              <p class="price">$'.$price.'</p>
          <a class="item_name" href="'. $linksp .'">Mua hàng</a> </div>
          </div>';
            }
        ?>
      </div>
      </main>