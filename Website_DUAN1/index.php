<?php
    include "view/header.php";
    include "global.php";
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/tintuc.php";
    $list_danhmuc = list_danhmuc();
    $list_sanpham = loadall_sanpham();
    $list_tintuc = loadall_tintuc();

    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch($act){
            case "dmsanpham":
                include "view/details/shop-grid.php";
                break;
            case "sanpham":
                $sanphammoi = loadall_sanpham_top3();
                include "view/sanpham.php";
                break;
            case "ctsanpham":
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0 ){
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);

                    $sanpham_cungloai=loadall_sanpham_cungloai($id,$iddm);
                    // extract($onesp);
                    include "view/details/shop-details.php";
                } 
                break;
            // case "blog_details":
            //     if(isset($_GET['idtt']) && $_GET['idtt'] > 0 ){
            //         $id = $_GET['idtt'];
            //         $onett = loadone_tintuc($id);
            //         extract($onett);
            //         include "view/details/blog-details.php";
            //     }
            //     break;
            case "tintuc":
                // $tintucmoi = load_top3_tintuc();
                include "view/blog/blog.php";
                break;
            case "giohang":
                include "view/cart/cart.php";
                break;
            case "contact":
                include "view/contact.php";
                break;
            case "ctsanpham":
                include "view/details/shop-details.php";
                break;
            case "blog_details":
                include "view/blog/blog-details.php";
                break;
            case "login":
                include "view/login/login.php";
                break;
            case "forget":
                include "view/login/forget-pass.php";
                break;
            case "register":
                include "view/login/register.php";
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