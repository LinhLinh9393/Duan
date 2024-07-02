<?php
class ConNguoi{
    public $hoten;
    public $diachi;
    public $namsinh;
    public $email;
    public $sdt;

    public function setHoTen($hoten){
        $this->hoten=$hoten;
    }

    public function setDiaChi($diachi){
        $this->diachi=$diachi;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function setSDT($sdt){
        $this->sdt=$sdt;
    }

    public function setNamSinh($namsinh){
        $this->namsinh=$namsinh;
    }

    public function TinhTuoi(){
        return Date(format: "Y") - $this->namsinh;
    }

    public function __construct($ten,$diachi,$namSinh,$email,$sdt){
        $this->hoten = $ten;
        $this->diachi= $diachi;
        $this->namsinh = $namSinh;
        $this->email = $email;
        $this->sdt = $sdt;
    }

    public function HienThi(){
        echo "Họ và tên: ". $this->hoten . "<br>";
        echo "Địa chỉ: ". $this->diachi . "<br>";
        echo "Tuổi: ". $this->TinhTuoi() . "<br>";
        echo "Email: ". $this->email . "<br>";
        echo "SĐT: ". $this->sdt . "<br>";
    }
}

$cn= new ConNguoi(ten: "Đào Thị Thuỳ Linh", diachi:"Hà Nội", namSinh: "2004", email: "linhdttph43993@fpt.edu.vn", sdt: "0971964244");
$cn->HienThi();
echo "<br>";

class HocSinh extends ConNguoi{
    public $diemToan;
    public $diemLy;
    public $diemHoa;

    public function setDiemToan($diemToan){
        $this->diemToan=$diemToan;
    }

    public function setDiemLy($diemLy){
        $this->diemLy=$diemLy;
    }

    public function setDiemHoa($diemHoa){
        $this->diemHoa=$diemHoa;
    }

    public function DiemTB(){
        return ($this->diemToan + $this->diemLy + $this->diemHoa)/3;
    }

    public function __construct($ten,$diachi,$namSinh,$email,$sdt,$diemToan,$diemLy,$diemHoa){
        $this->hoten = $ten;
        $this->diachi= $diachi;
        $this->namsinh = $namSinh;
        $this->email = $email;
        $this->sdt = $sdt;
        $this->diemToan = $diemToan;
        $this->diemLy= $diemLy;
        $this->diemHoa = $diemHoa;
    }

    public function HienThiHS(){
        echo "Điểm TB: ". $this->DiemTB() . "<br>";
    }

}
$hs= new HocSinh(ten: "Đào Thị Thuỳ Linh", diachi:"Hà Nội", namSinh: "2004", email: "linhdttph43993@fpt.edu.vn", sdt: "0971964244",diemToan: "9" ,diemLy: "7", diemHoa: "8");
$hs->HienThi();
$hs->HienThiHS();

echo "<br>";

class GiangVien extends ConNguoi{
    public $luongCB;
    public $soGioDay;
   
    public function setLuongCB($luongCB){
        $this->luongCB=$luongCB;
    }

    public function setSoGioDay($soGioDay){
        $this->soGioDay=$soGioDay;
    }

    public function TongLuong(){
        return $this->luongCB * $this->soGioDay;
    }

    public function __construct($ten,$diachi,$namSinh,$email,$sdt,$luongCB,$soGioDay){
        $this->hoten = $ten;
        $this->diachi= $diachi;
        $this->namsinh = $namSinh;
        $this->email = $email;
        $this->sdt = $sdt;
        $this->luongCB= $luongCB;
        $this->soGioDay=$soGioDay;
    }

    public function HTLuong(){
        echo "Tổng lương: ". $this->TongLuong() . "<br>";
    }
}
$gv= new GiangVien(ten: "Nguyễn Văn A", diachi:"Hà Nội", namSinh: "2000", email: "linhdttph43993@fpt.edu.vn", sdt: "0971964244",luongCB: "8000000",soGioDay: "7");
$gv->HienThi();
$gv->HTLuong();
?>