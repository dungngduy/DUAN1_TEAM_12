<?php
    include "view/header.php";
    include "global.php";
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    $list_danhmuc = list_danhmuc();
    $list_sanpham = loadall_sanpham();

    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch($act){
            // case "danhmuc":
            //     $list_danhmuc = list_danhmuc();
            //     include "view/home.php";
            //     break;
            case "sanpham":
                include "view/sanpham.php";
                break;
            case "contact":
                include "view/contact.php";
                break;
            case "dmsanpham":
                include "view/details/shop-grid.php";
                break;
            case "ctsanpham":
                include "view/details/shop-details.php";
                break;
            case "blog_details":
                include "view/blog/blog-details.php";
                break;
        }
    }else{
        include "view/home.php";
        include "view/more-item.php";
        include "view/lastest-product.php";
        include "view/news.php";
    }

    include "view/footer.php";
?>