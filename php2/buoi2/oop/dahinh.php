<?php
interface DiChuyen{
    //interface nó k p là 1 class
    //Vậy cho nên nó cx k có phương thức hay tuộc tính
    //Nhg nó vẫn giữ lại phương thức trừu tượng
    public function di();
}

class DTo implements DiChuyen{
    public function di(){
        echo "Đi bằng 4 chân";
    }
}
//interface hay abstract đều là bản thiết kế của dự án phần mềm
//interface là bản thiết kế cho các class có chung hành động nhg khác bản chất
//abstract là bản thiết kế cho các class có chung bản chất
//mức độ mở rộng dự án của interface lớn hơn 
?>