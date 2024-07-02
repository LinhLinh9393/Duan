<?php
    $gioBatDau = 13; 
    $gioKetThuc = 23; 
    echo 'Giờ bắt đầu là: '.$gioBatDau.'<br>';
    echo 'Giờ kết thúc là: '.$gioKetThuc.'<br>';
    function tinhTongTien($gioBatDau, $gioKetThuc) {
        $gia3GioDau = 150000;
        $giamGiaTiep = 0.3;
        $giamGiaGioSau = 0.1;
      
        $tongTien = 0;
      
        if ($gioBatDau >= 12 && $gioBatDau  <= 23 && $gioKetThuc >= 12  && $gioKetThuc <= 23) {
          $gioLamViec = $gioKetThuc - $gioBatDau;
          if ($gioLamViec <= 3) {
            $tongTien = $gioLamViec * $gia3GioDau;
          } else {
            if ($gioLamViec > 3 && $gioBatDau < 16 && $gioKetThuc > 17) {
              $tongTien = (3 * $gia3GioDau) + (($gioLamViec - 3) * $gia3GioDau * (1 - $giamGiaTiep - $giamGiaGioSau));
            } else if ($gioBatDau < 16) {
              $tongTien = (3 * $gia3GioDau) + (($gioLamViec - 3) * $gia3GioDau * (1 - $giamGiaTiep));
            } else {
              $tongTien = $gioLamViec * $gia3GioDau * (1 - $giamGiaTiep);
            }
          }  
        }
      
        return $tongTien;
      }
      $tongTien = tinhTongTien($gioBatDau, $gioKetThuc);
      echo 'Tổng tiền cần trả là: '.$tongTien;
      

?>