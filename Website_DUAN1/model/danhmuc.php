<?php
    function list_danhmuc(){
        $sql = "SELECT * FROM danh_muc WHERE 1 ORDER BY id ASC LIMIT 0,3";
        $danh_muc = pdo_query($sql);
        return $danh_muc;
    }
    function insert_danhmuc($name){
        $sql = "INSERT INTO danh_muc(name) VALUES ('$name')";    
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql = "DELETE FROM danh_muc WHERE id=".$id;
        pdo_execute($sql);
    }

    function loadall_danhmuc(){
        $sql = "SELECT * FROM danh_muc ORDER BY id DESC";
        $listdm = pdo_query($sql);
        return $listdm;
    }
    function loadone_danhmuc($id){
        $sql = "SELECT * FROM danh_muc WHERE id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id, $name){
        $sql = "UPDATE danh_muc SET name= '".$name."' WHERE id=".$id;
        pdo_execute($sql);
    }
   
?>