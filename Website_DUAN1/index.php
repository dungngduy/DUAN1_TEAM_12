<?php
    include "view/header.php";
    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch($act){
            case "sanpham":
                include "view/sanpham.php";
                break;
            case "contact":
                include "view/contact.php";
                break;
            case "dmsanpham":
                include "view/details/shop-grid.php";
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