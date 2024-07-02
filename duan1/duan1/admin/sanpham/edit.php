<?php
    if(is_array(($sp))){
        extract($sp);
    }
    $anhpath="../img/".$img;
    if(is_file($anhpath)){
        $anh="<img src='".$anhpath."' height='80'";
    }else{
        $anh="Không có ảnh";
    }
?>

<main>
      <article class="header__title margin-box text-center">
        <h1>Cập nhật sản phẩm</h1>
      </article>
      <nav class="form__admin mt-3 ms-3">
        <form action="index.php?act=editsp" method="post" class="nav__form_content" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Id sản phẩm</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="idsp" value="<?=$id ?>" disabled>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" value="<?php if(isset($name)&&($name!= "")) echo $name; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Ảnh sản phẩm</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name="anh" ><?=$anh?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Giá sản phẩm</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="giasp" value="<?php if(isset($price)&&($price!= "")) echo $price;?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Mô tả sản phẩm</label>
                <div class="col-sm-9">
                    <textarea name="mota" cols="30" rows="10"><?php if(isset($mota)&&($mota!= "")) echo $mota;?></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="static" class="col-sm-2 col-form-label">Danh mục</label>
                <div class="col-sm-9">
                   <select name="iddm" id="">
                        <?php
                            foreach ($dm as $danhmuc){
                                extract($danhmuc);
                                if($iddm==$id){
                                    echo '<option value="'.$id.'" selected>"'.$name.'"</option>';
                                }else{
                                    echo '<option value="'.$id.'">"'.$name.'"</option>';
                                }
                            }
                        ?>
                   </select>
                </div>
            </div>
            <div class="mb-3 row ">
               <div class="col-sm-9 mx-auto mt-auto">
               <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
               <input type="submit" class="btn btn-primary" name="edit" value="Cập nhật">
                  <a href="index.php?act=listsp"><input type="button" class="btn btn-danger" value="Danh sách"></a>
                </div>
            </div>
        </form>

      </nav>
    </main>
