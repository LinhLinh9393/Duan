<?php
namespace NSP1;
class SinhVien{
    public $ma;
    public $ten;
    public function __construct($ma,$ten){
        $this->ma = $ma;
        $this->ten = $ten;
    }
    public function HienThi(){
        echo "Mã: " . $this->ma . "<br>";
        echo "Tên: " . $this->ten . "<br>";
    }
}

?>