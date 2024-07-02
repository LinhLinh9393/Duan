<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/anh2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner-desktop-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner-desktop-2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<div class="row ms-3 mt-3 mx-auto">
    <div class="col-3">
      <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Danh mục</li>
        <?php
            foreach($dsdm as $ds){
                extract($ds);
                $linkdm="index.php?act=sanpham&iddm=".$id;
                echo '<li class="list-group-item">
                            <a href="'.$linkdm.'">'.$name.'</a>
                        </li>';
            }
        ?>
        
      </ul><br><hr>
      <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Top 5 bán chạy</li>
        <li class="list-group-item">
            <?php
                 foreach($dstop5 as $ds){
                    extract($ds);
                    $hinh=$img_path.$img;
                    $linksp="index.php?act=chitietsp&idsp=".$id;
                    echo '<div class="row">
                            <div class="col-3">
                                <img src="'.$hinh.'" alt="" style="height: 60px;"  width="120%">
                            </div>
                            <div class="col-9">
                                <a href="'.$linksp.'">'.$name.'</a>
                            </div>
                        </div>';
                }
            ?>
      </ul>
    </div>

    <div class="col-9" >
      <h1 style="text-align: center; padding-top: 15px; color: red;">Sản phẩm </h1>
      <div class="row ms-3 mt-3 mx-auto">
  <?php
      foreach($dssp as $sp){
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
            <a class="item_name" href="'.$linksp.'"><button class="btn btn-primary">Mua hàng</button></a>
          </div><br><br>
        </div>
       ';

      }
    ?>
  </div>
  <img src="" alt="" width="50%">

    </div>
  </div>
