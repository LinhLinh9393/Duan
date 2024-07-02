<?php
function insert_comment($content, $id_user, $id_product, $comment_day)
{
    $sql = "insert into comment (content,id_user,id_product,comment_day) values('$content','$id_user','$id_product','$comment_day')";
    pdo_execute($sql);
}
function load_all_list_comment($id_pro)
{
    $sql = "select * from comment where 1";
    if ($id_pro > 0) {
        $sql .= " and id_product='" . $id_pro . "'";
    }

    $sql .= " order by id desc";

    $list_comment = pdo_query($sql);
    return $list_comment;
}
function delete_list_comment($id)
{
    $sql = "delete from comment where id=" . $id;
    pdo_execute($sql);
}
