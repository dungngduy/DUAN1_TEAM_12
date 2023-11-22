<?php
function loadall_tintuc(){
    $sql = "SELECT * FROM tin_tuc";
    $list_tintuc = pdo_query($sql);
    return $list_tintuc;
}
function load_top3_tintuc(){
    $sql= "select * from tin_tuc where 1 order by id desc limit 0.3";
    $list_tintuc = pdo_query($sql);
    return $list_tintuc;
}
function loadone_tintuc($id){
    $sql = "select * from tin_tuc where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
?>