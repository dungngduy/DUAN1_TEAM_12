<?php
    function loadall_donhang(){
        $sql = "SELECT *, trang_thai.name_tt
        FROM don_hang
        INNER JOIN trang_thai ON trang_thai.id = don_hang.id_trangthai
        ORDER BY trang_thai.name_tt";
        $dh = pdo_query($sql);
        return $dh;
    }
    function loadall_ctdonhang($id_dh){
        $sql = "SELECT *, san_pham.name, trang_thai.name_tt
        FROM chi_tiet_don_hang
        INNER JOIN san_pham ON san_pham.id = chi_tiet_don_hang.ma_sp
        INNER JOIN don_hang ON don_hang.id_dh = chi_tiet_don_hang.ma_dh
        INNER JOIN trang_thai ON trang_thai.id = don_hang.id_trangthai
        WHERE don_hang.id_dh = '$id_dh' ";
        $dh= pdo_query($sql);
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
?>