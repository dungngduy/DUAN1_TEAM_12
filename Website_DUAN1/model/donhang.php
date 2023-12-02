<?php
    function loadall_donhang(){
        $sql = "SELECT *, trang_thai.name_tt
        FROM don_hang
        INNER JOIN trang_thai ON trang_thai.id = don_hang.id_trangthai
        ORDER BY trang_thai.name_tt";
        $dh = pdo_query($sql);
        return $dh;
    }

    function delete_donhang($id_dh){
        $sql = "DELETE FROM don_hang WHERE id=".$id_dh;
        pdo_execute($sql);
    }

    function loadone_donhang($id_dh){
        $sql = "SELECT * FROM don_hang WHERE id_dh=".$id_dh;
        $dh = pdo_query_one($sql);
        return $dh;
    }

    function loadall_trangthai(){ 
        $sql = "SELECT * FROM trang_thai ORDER BY id DESC";
        $listctdh = pdo_query($sql);
        return $listctdh;
    }

    function update_donhang($id_dh, $id_trangthai){
        $sql = "UPDATE `don_hang` SET `id_trangthai` = '$id_trangthai' WHERE id_dh = '$id_dh'";
        pdo_execute($sql);
    }
    
    function follow_order($id_user){
        $sql = "SELECT *, san_pham.name, trang_thai.name_tt, don_hang.id_user
        FROM chi_tiet_don_hang
        INNER JOIN san_pham ON san_pham.id = chi_tiet_don_hang.ma_sp
        INNER JOIN don_hang ON don_hang.id_dh = chi_tiet_don_hang.ma_dh
        INNER JOIN trang_thai ON trang_thai.id = don_hang.id_trangthai
        WHERE don_hang.id_user = '$id_user'";
        $ctdh = pdo_query($sql);
        return $ctdh;
    }

    function ctdh($id_dh){
        $sql = "SELECT chi_tiet_don_hang.soluong, chi_tiet_don_hang.thanh_tien, san_pham.name
        FROM don_hang 
        INNER JOIN chi_tiet_don_hang ON don_hang.id_dh = chi_tiet_don_hang.ma_dh 
        INNER JOIN san_pham ON san_pham.id = chi_tiet_don_hang.ma_sp 
        WHERE id_dh = '$id_dh'";
        return pdo_query($sql);
    }

    function cart_status($id_status, $id_dh){
        $sql = "UPDATE don_hang SET cart_status = '$id_status' WHERE id_dh = '$id_dh'";
        pdo_execute($sql);
    }

    function tk_donhang($ma_dh){
        $sql = "SELECT * FROM `chi_tiet_don_hang`, `san_pham` 
        WHERE chi_tiet_don_hang.ma_sp = san_pham.id AND chi_tiet_don_hang.ma_dh = ".$ma_dh."
        ORDER BY chi_tiet_don_hang.id_ctdh DESC";
        return pdo_query($sql);
    }

    function tk_ngaydat($now){
        $sql = "SELECT * FROM thong_ke WHERE ngaydat = '$now'";
        return pdo_query($sql);
    }

    function insert_thongke($ngaydat, $donhang, $doanhthu, $soluongban){
        $sql = "INSERT INTO thong_ke(ngaydat, donhang, doanhthu, soluongban) VALUES ('$ngaydat', '$donhang', '$doanhthu', '$soluongban')";
        pdo_execute($sql);
    }

    function update_thongke($donhang, $doanhthu, $soluongban, $now){
        $sql = "UPDATE `thong_ke` SET `donhang` = '$donhang', `doanhthu` = '$doanhthu', `soluongban` = '$soluongban' WHERE ngaydat = '$now'";
        pdo_execute($sql);
        var_dump($sql);
    }
?>