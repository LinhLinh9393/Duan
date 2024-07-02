<form action="" method="post">
        <input type="number" name="sohang1" placeholder="Sohang1">
        <select name="pheptinh">
            <option selected>+</option>
            <option >-</option>
            <option >*</option>
            <option >/</option>
        </select>
        <input type="number" name="sohang2" placeholder="Sohang2">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
       if(isset($_POST['submit'])){
            $sohang1=$_POST['sohang1'];
            $sohang2=$_POST['sohang2'];
            $pheptinh=$_POST['pheptinh'];
            $ketqua;
            function pheptinh($sohang1,$sohang2,$pheptinh){
                global $ketqua;
                switch($pheptinh){
                    case "+":
                        $ketqua=$sohang1+$sohang2;
                        break;
                    case "-":
                        $ketqua=$sohang1-$sohang2;
                        break;
                    case "*":
                        $ketqua=$sohang1*$sohang2;
                        break;    
                    case "/":
                        $ketqua=$sohang1/$sohang2;
                        break;
                    default:
                        echo 'Không có giá trị tồn tại';
                }
                return $ketqua;
            }
            $ketqua = pheptinh($sohang1,$sohang2,$pheptinh);
                echo 'Số hạng 1: '.$sohang1.'<br>';
                echo 'Số hạng 2: '.$sohang2.'<br>';
                echo 'Kết quả: '.$ketqua;
        
       }
    ?>