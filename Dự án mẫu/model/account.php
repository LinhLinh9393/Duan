<?php
 function load_all_list_account(){
    $sql = "select * from account order by id desc";
    $list_account = pdo_query($sql);
    return $list_account;
}
function insert_account($email, $user, $pass)
{
    $sql = "insert into account (email,username,password) values('$email','$user','$pass')";
    pdo_execute($sql);
}

function check_user($user, $pass)
{
    $sql = "select * from account where username='" . $user . "' and password='" . $pass . "' ";
    $login = pdo_query_one($sql);
    return $login;
}
function check_email($email)
{
    $sql = "select * from account where email='" . $email . "'  ";
    $check = pdo_query_one($sql);
    return $check;
}
function  update_account($user, $pass, $email, $address, $tel, $id)
{
    $sql = "update account set username='" . $user . "',password='" . $pass . "',email='" . $email . "', address='" . $address . "', tel='" . $tel . "' where id=" . $id;
    pdo_execute($sql);
}
