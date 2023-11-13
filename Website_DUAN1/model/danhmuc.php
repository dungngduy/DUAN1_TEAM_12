<?php
    function list_danhmuc(){
        $sql = "SELECT * FROM danh_muc";
        $danh_muc = pdo_query($sql);
        return $danh_muc;
    }
?>