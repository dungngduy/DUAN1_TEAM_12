<?php
    $gia = 100000;

    // Sử dụng number_format để định dạng giá
    $gia_dinh_dang = number_format($gia, 0, ',', '.');
    
    // In giá đã được định dạng
    echo "Giá: " . $gia_dinh_dang;
?>