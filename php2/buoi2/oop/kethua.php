<?php
class ConNguoi{
     public $chan;
    public $tay;
    public $mat; //private $mat //chỉ class dc dùng
    public $mui;

    public function an(){
        echo $this->mat;
    }
}
class NguoiLon extends ConNguoi{
    //Thuộc tính
   
    public $long;

    

    public function di(){
        echo "Đi bằng chân";
    }

}
class TreCon extends NguoiLon{
    public function bo(){
        echo $this->mat;
        $this->an();
    }
}

//Khởi tạo đối tượng
$nl = new NguoiLon();
$nl->mat = "Hai mí";
$tc = new TreCon();
$tc->mat = "Một mí";
$tc->bo();

?>