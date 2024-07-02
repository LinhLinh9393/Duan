<div class="row2">
    <div class="row2 font_title" style="background-color:#ff9191;
                                        border:1px #CCC solid;
                                        color:#fffefe;
                                        border-radius:5px;
                                        padding:10px ;
                                        text-align: center;">
        <h1>DANH SÁCH KHÁCH HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <table border="1" width="100%" style="margin: 0 auto;">
            <thead>
                <tr align="center">
                    
                    <th>ID Tài Khoản</th>
                    <th>Tên Tài Khoản</th>
                    <th>Email</th>
                    <th>Pass</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $xoatk="index.php?act=xoatk&id=".$id;
                
                    echo
                        '<tr align="center">
                            
                            <td>'.$id.'</td>
                            <td>'.$user.' </td>                  
                            <td>'.$email.' </td>
                            <td>'.$pass.' </td>
                            <td>'.$role.' </td>
                            <td> <a href="'.$xoatk.' "><button type="button" class="btn">Xóa</button></a></td>
                        </tr>';
                }?>   
            </tbody>
        </table><br><br>
    </div>
    <div class="row mb10 " style="text-align: center;">
            
            <a href="index.php?act=thongke"> <input  class="mr20" type="button" value="XEM THỐNG KÊ SẢN PHẨM"></a>
           </div>
</div>