<?php
    //Hàm dùng để chứa 1 đoạn code, thực hiện 1 chức năng nhằm giúp tái tạo code và sử dụng
    //Hàm có 3 loại (có trả về(có tham số, k có tham số) và k có trả về)
    
    //Khai báo hàm
    //function tên hàm(){
        //
    //}

    //nếu trong {} có biến thì biến đó được gọi là tham số
    // Và hàm đó gọi là hàm có chứa tham số
    //Hàm có chứa retunr thì hàm đó được gọi là hàm có trả về
    //Hàm k chứa retunr thì gọi là hàm không trả về
    //Hàm không trả về sẽ phải tự xử lý đầu ra
    // $a=5;
    // $b=6;
    // function ktSochan($a){
    //     //Khai báo nhiều tham số sao mỗi mỗi tham số cách 1 dấu , 
    //     //và nó phải nằm trong dấu ngoặc
    //     if($a%2==0){
    //         echo "Đây là số chẵn";
    //     }else{
    //         echo "Đây là số lẻ";
    //     }
    // }

    //muốn sử dụng hàm -> gọi hàm
    //nếu hàm không trả về thì gọi thẳng ra
    //nếu hàm có giá trị trả về thì cần thêm biến để lưu trữ hoặc phải sử dụng luôn
    //Hàm có bn tham số thì truyền vào đó bấy nhiêu gtri
    // ktSochan($a);

    //xây dựng 1 hàm có tham số và k trả về 
    //truyền vào hàm những tham số sau
    //Tên, năm sinh, quê quán, số cmt, sđt
    //Hiển thị những thông tin sau
    //Tên, tuổi, quê quán, số chứng minh thư, sđt
    //     $ten='Linh';
    //     $tuoi="19";
    //     $quequan="HaNoi";
    //     $scmt="00139235";
    //     $sdt="0971923";
    // function baitap($ten, $tuoi, $quequan, $scmt, $sdt){
       
    //     echo $ten;echo "<pre>";
    //     echo $tuoi;echo "<pre>";
    //     echo $quequan;echo "<pre>";
    //     echo $scmt;echo "<pre>";
    //     echo $sdt;echo "<pre>";
    // } 
    // baitap($ten, $tuoi, $quequan, $scmt, $sdt);


    //OOP
    //Đóng gói, kế thừa, đa hình, trừu tượng

    //Đối tượng là những gì cầm dc, nắm dc, ôm dc,...
    //VD:chó, mèo, bút, học sinh, giáo viên 
    //Đối tượng tách thành 2 phần đặc điểm(màu tóc, chiều cao, cân nặng, tên, ngày sinh) và hành động(nói, di chuyển, ăn, ngủ,...)
    //Đặc điểm của đối tượng là những gì góp phần tạo nên đối tượng hướng tới đối tượng(Thuộc tính)
    //Hành động của đối tượng là những gì mà đối tượng ấy có thể thực hiện dc(Phương thức)

    //Class là khuôn mẫu để tạo ra đối tượng có nhiều đặc điểm và hành động


//Kế thừa
    //Phạm vi truy cập
        //Public: công khai
        //pra
        //pro
    
//ASM
//danh mục: int tên dmuc khoa hoc
//Khoá học: id tên kh, ảnh, giá, id danh mục
//Yêu cầu : dựa trên base MVC k class
//Từ k class sang có class
//Thuẹc hiện đầy đủ tính năng CRUD cho bảng KH
//hạn: T3 ngày 16/1/2024   



//Trừu tượng
    //Trừu tượng là những cái cta không cầm dc sờ dc nắm dc mà khi nào đấy não bộ tự hình dung ra
    

?>