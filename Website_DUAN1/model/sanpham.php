<?php
    function loadall_sanpham(){
        $sql = "SELECT * FROM san_pham";
        $list_sanpham = pdo_query($sql);
        return $list_sanpham;
    }
    function loadall_sanpham_top3(){
        $sql= "select * from sanpham where 1 order by id desc limit 0.3";
        $list_sanpham = pdo_query($sql);
        return $list_sanpham;
    }
    function loadone_sanpham($id){
        $sql = "select * from sanpham where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
   
?>