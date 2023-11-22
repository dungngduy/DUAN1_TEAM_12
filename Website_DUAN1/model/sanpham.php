<?php
    function insert_sanpham($name,$price,$img,$mota,$iddm){
        $sql = "INSERT INTO san_pham(name,price,img,mota,iddm) VALUES ('$name','$price','$img','$mota','$iddm')";
        pdo_execute($sql);
    }

    function insert_chitietsp($color,$size,$soluong,$id_sp){
        $sql = "INSERT INTO chi_tiet_san_pham(color,size,soluong,id_sp) VALUES ('$color','$size','$soluong','$id_sp')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "DELETE FROM san_pham WHERE id=".$_GET['id'];
        pdo_execute($sql);
    }

    function loadall_sanpham($kw=" ",$iddm = 0 ){
        $sql = "SELECT * FROM san_pham WHERE 1"; 
        if($kw !=""){
            $sql.=" AND name LIKE '%".$kw."%'";
        }
        if($iddm > 0){
            $sql.=" AND iddm = '".$iddm."'";
        }
        $sql.=" ORDER BY id DESC";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function loadall_sp_discount(){
        $sql = "SELECT * FROM san_pham";
        $list_sanpham = pdo_query($sql);
        return $list_sanpham;
    }

    function loadall_sanpham_top3(){
        $sql= "SELECT * FROM san_pham WHERE 1 ORDER BY id DESC LIMit 0,3";
        $list_sanpham = pdo_query($sql);
        return $list_sanpham;
    }

    function loadone_sanpham($id){
        $sql = "SELECT * FROM san_pham WHERE id= $id ";
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_sanpham($id, $name, $price, $img, $mota, $iddm){
        if($img != ""){
            $sql = "UPDATE `san_pham` SET `name` = '$name', `price` = '$price', `img` = '$img', `mota` = '$mota', `iddm` = '$iddm' WHERE `san_pham`.`id` = $id";
        }else{
            $sql = "UPDATE `san_pham` SET `name` = '$name', `price` = '$price', `mota` = '$mota', `iddm` = '$iddm' WHERE `san_pham`.`id` = $id";
        }
        pdo_execute($sql);
    }

    function loadall_spct(){
        $sql = "SELECT * FROM chi_tiet_san_pham ORDER BY id_ctsp DESC";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function loadall_sp(){
        $sql = "SELECT * FROM san_pham ORDER BY id DESC";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function loadone_chitietsp($id){
        $sql = "SELECT * FROM san_pham WHERE id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }

    function loadall_sanpham_cungloai($id,$iddm){
        $sql = "select * from san_pham where iddm=".$iddm." AND id <>".$id;
        $list_sanpham = pdo_query($sql);
        return $list_sanpham;
    }
?>