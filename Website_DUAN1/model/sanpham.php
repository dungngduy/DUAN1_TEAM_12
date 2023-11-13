<?php
    function loadall_sanpham(){
        $sql = "SELECT * FROM san_pham";
        $list_sanpham = pdo_query($sql);
        return $list_sanpham;
    }
?>