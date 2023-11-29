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
    function loadone_donhang($id_dh){
        $sql = "SELECT * FROM don_hang WHERE id_dh=".$id_dh;
        $dh = pdo_query_one($sql);
        return $dh;
    }
    // function update_donhang($id_dh, $id_trangthai){
    //     $sql = "UPDATE don_hang SET name= '".$id_trangthai."' WHERE id=".$id_dh;
    //     pdo_execute($sql);
    // }
    function loadall_trangthai(){ 
        $sql = "SELECT * FROM trang_thai ORDER BY id DESC";
        $listctdh = pdo_query($sql);
        return $listctdh;
    }
    function update_donhang($id_dh, $id_trangthai){
        $sql = "UPDATE `don_hang` SET `id_dh` = '$id_dh', `id_trangthai` = '$id_trangthai' WHERE `don_hang`.`id_dh` = $id_dh";
        pdo_execute($sql);
    }
    

?>