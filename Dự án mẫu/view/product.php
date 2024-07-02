<div class="main__content">
    <main class="main__menu">
     
        <nav class="aside__list_category margin-box">
            <div class="nav__title">Sản phẩm <strong><?=$name_category ?></strong></div>
            <div class="nav__content">
                <?php 
                   $i = 0;
                   foreach ($list_product as $product) {
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
                    }
                ?>
            </div>

        </nav>

    </main>

    <aside>
        <?php
        include "aside.php";
        ?>

    </aside>
</div>