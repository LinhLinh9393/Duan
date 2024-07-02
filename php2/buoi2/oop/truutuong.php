<?php
//Khai báo class trừu tượng
abstract class DongVat{
    //1 class dc gọi là class trừu tượng là khi nó chứa phương thức trừu tượng
    //class trừu tượng thì k thể khởi tạo nhưng vẫn có phuowng thức và thuộc tính như những class bth

    //Phương thức trừu tượng 
    abstract public function di();
}
class ConNguoi extends DongVat{
    public function di(){
        echo "Đi bằng 2 chân";
    }
}

$cn= new ConNguoi();
$cn->di();
echo "<pre>";

// Có hình tròn, hình vuong, hinh chữ nhật 
// hay tạo ra 1 class truu tuong
// Để tính chu vi va dien tich cua moi hinh

abstract class Hinh{
    abstract public function DienTich();
    abstract public function ChuVi();
}
class HinhTron extends Hinh{
    private $bankinh;
    public function __construct($bankinh){
        $this->bankinh=$bankinh;
    }

    public function DienTich(){
        return M_PI * $this->bankinh * $this->bankinh; 
    }
    public function ChuVi(){
        return 2 * M_PI * $this->bankinh;
    }

    public function HienThi(){
        echo "Diện tích hình tròn là: ".$this->DienTich(). "<pre>";
        echo "Chu vi hình tròn là: ".$this->ChuVi(). "<pre>";
    }
}

$htron= new HinhTron(bankinh: 5);
$htron->HienThi();

class HinhVuong extends Hinh{
    private $chieudai;
    public function __construct($chieudai){
        $this->chieudai=$chieudai;
    }

    public function DienTich(){
        return $this->chieudai * $this->chieudai; 
    }
    public function ChuVi(){
        return 4 * $this->chieudai;
    }

    public function HienThi(){
        echo "Diện tích hình vuông là: ".$this->DienTich(). "<pre>";
        echo "Chu vi hình vuông là: ".$this->ChuVi(). "<pre>";
    }
}
$hv= new HinhVuong(chieudai: 5);
$hv->HienThi();

class HinhCN extends Hinh{
    private $chieudai;
    private $chieurong;
    public function __construct($chieudai, $chieurong){
       $this->chieudai= $chieudai;
        $this->chieurong=$chieurong;
    }

    public function DienTich(){
        return $this->chieudai * $this->chieurong; 
    }
    public function ChuVi(){
        return ($this->chieudai + $this->chieurong)* 2;
    }

    public function HienThi(){
        echo "Diện tích hình cn là: ".$this->DienTich(). "<pre>";
        echo "Chu vi hình cn là: ".$this->ChuVi(). "<pre>";
    }
}
$hcn= new HinhCN(chieudai: 7, chieurong: 4);
$hcn->HienThi();
?>