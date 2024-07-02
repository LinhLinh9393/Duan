<?php
include "nsp.php";
include "nsp1.php";
$sv= new NSP\SinhVien(ma: "PH43993",ten: "Đào Thị Thuỳ Linh");
$sv->HienThi();

$SV= new NSP1\SinhVien(ma: "PH43993",ten: "Đào Thị Thuỳ Linh");
$SV->HienThi();

//Vị trí đặt tên namesapce: namespace luôn dc đặt trên đầu file PHP
//namespace đóng vai trò làm đại diện cho không gian đại diện cho class, function, biến 
//nhằm mục đích giải quyết vấn đề nhiều file có chung tên class hoặc fun hoặc biến