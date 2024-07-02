<?php include "./view/banner.php"; ?>
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
          </ul>
        </div>
      </div>
    </div>
  </div>
<main class="catalog  mb ">
      <div class="items">
      <?php
        $i=0;
          foreach ($dssp as $sp){
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
     