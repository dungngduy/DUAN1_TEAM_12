<?php
    function loadall_donhang(){
        $sql = "SELECT *, trang_thai.name
        FROM don_hang
        INNER JOIN trang_thai ON trang_thai.id = don_hang.id_trangthai
        ORDER BY trang_thai.name";
        $dh = pdo_query($sql);
        return $dh;
    }
    function delete_donhang($id_dh){
        $sql = "DELETE FROM don_hang WHERE id=".$id_dh;
        pdo_execute($sql);
    }
    // function load_trangthai(){
    //     $sql = "SELECT *, trang_thai.name
    //     FROM don_hang
    //     INNER JOIN trang_thai ON trang_thai.id = don_hang.id_trangthai
    //     ORDER BY trang_thai.name";
    //     $dh = pdo_query($sql);
    //     return $dh;
    // }
    
?>