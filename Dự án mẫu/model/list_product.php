<?php
function insert_list_product($name_product, $price, $image, $description, $id)
{
    $sql = "insert into product (name,price,image,description,id_category) values('$name_product','$price','$image','$description','$id')";
    pdo_execute($sql);
}
function delete_list_product($id)
{
    $sql = "delete from product where id=" . $id;
    pdo_execute($sql);
}

function load_all_list_product($keyword = "", $id_category = 0)
{
    $sql = "select * from product where 1";
    if ($keyword != "") {
        $sql .= " and name like '%" . $keyword . "%'";
    }
    if ($id_category > 0) {
        $sql .= " and id_category ='" . $id_category . "'";
    } else {
        $sql .= " order by id desc";
    }
    $list_product = pdo_query($sql);
    return $list_product;
}

function load_all_list_home_product()
{
    $sql = "select * from product where 1 order by id desc limit 0,9";
    $list_product = pdo_query($sql);
    return $list_product;
}

function load_all_list_home_top10()
{
    $sql = "select * from product where 1 order by view desc limit 0,10";
    $list_product = pdo_query($sql);
    return $list_product;
}

function load_once_list_product($id)
{
    $sql = "select * from product where id=" . $id;
    $product = pdo_query_one($sql);
    return $product;
}
function load_name_list_category($id_category)
{
    if ($id_category > 0) {
        $sql = "select * from categories where id=" . $id_category;
        $category = pdo_query_one($sql);
        extract($category);
        return $name;
    }else{
        return "";
    }
}
function load_once_same_product($id, $id_category)
{
    $sql = "select * from product where id_category=" . $id_category . " and id<>" . $id;
    $list_product = pdo_query($sql);
    return $list_product;
}

function  update_list_product($id, $name_product, $price, $image, $description, $id_category)
{
    var_dump($id);
    if ($image != "") {

        $sql = "update product set name='" . $name_product . "',price='" .  $price . "', image='" . $image . "', description='" . $description . "', id_category='" . $id_category . "' where id=" . $id;
    } else {
        $sql = "update product set name='" . $name_product . "',price='" . $price . "',description='" . $description . "', id_category='" . $id_category . "' where id=" . $id;
    }
    pdo_execute($sql);
}
