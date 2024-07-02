<?php
class SinhVien{ 
    //Khai báo thuộc tính -> biến
    //Tên, năm sinh, mã SV ,CCCD
    public $tenSinhVien;
    public $namSinh;
    public $maSV;
    public $cancuocCD;
   
    //Khai báo phương thức -> Hàm
    //Hàm get dùng để trả dữ liệu thuộc tính
    public function getTenSV(){
        //muốn gọi đến thuộc tính hay phương thức của đối tượng nhớ đến từ khoá $this
        return $this->tenSinhVien;
    }
    //Hàm set là hàm truyền dữ liệu vào cho thuộc tính
    public function setTenSV($tenSinhVien){
        $this->tenSinhVien=$tenSinhVien;
    }
    

    public function getNamSinh(){
        return $this->namSinh;
    }
    public function setNamSinh($namSinh){
        $this->namSinh=$namSinh;
    }
    
    public function getMaSV(){
        return $this->maSV;
    }
    public function setMaSV($maSV){
        $this->maSV=$maSV;
    }

    public function getCanCuocCD(){ 
        return $this->cancuocCD;
    }
    public function setCanCuocCD($cancuocCD){
        $this->cancuocCD=$cancuocCD;
    }
}

// Viết 2 phương thức
//     Dựa trên năm sinh hãy tính tuổi(hàm k tham số và có trả về)
//     Viết hàm hiển thị tất cả thông tin sau:
//         Tên, tuổi, mã sv, số cccd

class BaiTap{
    public $ten;
    public $namSinh;
    public $maSV;
    public $soCCCD;
//Hàm Magic function
    //1. Đây là 1 phương thức đặc biệt 
    //Không giống những hàm khác cần p gọi mới hoạt động mà phương thức này dc hoạt động ngay khi đối tượng dc khởi tạo
    //Dc gọi là phương thức khởi tạo
        //Có tham số
            //Class có bn thuộc tính thì phải khởi tạo vào phương thức khởi tạo
        public function __construct($ten,$namSinh,$maSV,$cancuocCD){
            $this->ten = $ten;
            $this->namSinh = $namSinh;
            $this->maSV = $maSV;
            $this->soCCCD = $cancuocCD;
        }



    public function setTenSV($ten){
        $this->ten=$ten;
    }
    


    public function TinhTuoi(){
        return Date(format:"Y") - $this->namSinh;
    }

    public function HienThi(){
        echo "Tên: " . $this->ten . "<br>";
        echo "Tuổi: " . $this->TinhTuoi() . "<br>";
        echo "Mã SV: " . $this->maSV . "<br>";
        echo "Số CCCD: " . $this->soCCCD . "<br>";
    }
  


}
//Khởi tạo 1 đối tượng
$SV = new BaiTap(ten: "Đào Thị Thuỳ Linh", namSinh: "2004", maSV: "Ph43993", cancuocCD: "001304010767");
// $SV->setTenSV(ten: "Đào Thị Thuỳ Linh");

$SV->namSinh = 2004;
$SV->maSV = "PH43993";
$SV->soCCCD = "001304010767";

$SV->HienThi();



?>