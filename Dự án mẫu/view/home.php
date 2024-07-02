<div class="main__content">
  <main class="main__menu">
    <section class="main__slide margin-box">
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="view/images/1.jpg" style="width:100%">
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="view/images/2.jpg" style="width:100%">
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="view/images/3.jpg" style="width:100%">
          <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </section>

    <section class="main__list_product">

      <?php
       $i = 0;
      foreach ($new_product as $product) {
        extract($product);
        $link_product="index.php?act=detail_product&id_product=".$id;
        $image_product = $image_path . $image;
        echo '  <article class="section__product">
        <figure class="article__image">
          <a href="'. $link_product.'"><img src="' . $image_product . '" alt="Test" /></a>
        </figure>

        <section class="article__detail">
          <h6>$ ' . $price . '</h6>
          <a href="'. $link_product.'">'.$name.'</a>
        </section>
      </article>';
        $i++;
      } ?>



    </section>
  </main>

  <aside>
    <?php
    include "aside.php"
    ?>
  </aside>
</div>