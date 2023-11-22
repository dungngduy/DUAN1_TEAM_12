<?php
    session_start();
    ob_start();
    include "view/header.php";
    include "global.php";
    include "model/pdo.php";
    include "model/dangnhap.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/tintuc.php";
    include "model/binhluan.php";
    $list_danhmuc = list_danhmuc();
    $list_tintuc = loadall_tintuc();
    $list_sp_discount = loadall_sp_discount();
    $sanphammoi = loadall_sanpham_top3();

    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch($act){
            case "dmsanpham":
                include "view/details/shop-grid.php";
                break;
            case "ctsanpham":
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0 ){
                    $onesp = loadone_sanpham($_GET['idsp']);
                    extract($onesp);
                    $list_binhluan = load_binhluan($_GET['idsp']);
                    $sanpham_cungloai=loadall_sanpham_cungloai($id,$iddm);
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
            case "binhluan":
                include "view/comment/form-comment.php";
                break;
            case "blog_details":
                include "view/blog/blog-details.php";
                break;
            case "register":
                if(isset($_POST['submit'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $repass = $_POST['repass'];
                    $checkrepass = $repass == $pass;
                    if(empty($user)){
                        $errorUser = "Không để trống tên tài khoản";
                    }else if(empty($email)){
                        $errorEmail = "Không để trống Email";
                    }else if(empty($pass)){
                        $errorPass = "Không để trống mật khẩu";
                    }else if(empty($checkrepass)){
                        $errorRepass = "Xác nhận mật khẩu không trùng khớp";
                    }else{
                        insert_taikhoan($email, $user, $pass);
                        header("Location: index.php?act=login");
                    }
                }
                include "view/login/register.php";
                break;
            case "login":
                if(isset($_POST['submit'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $result = get_user($user, $pass);
                    $role = $result[0]['role'];
                    if(empty($user) || empty($pass)){
                        $error = "Tài khoản hoặc mật khẩu không đúng";
                    }
                    if($role == 1){
                        $_SESSION['role'] = $role;
                        header("Location: admin/index.php");
                    }
                    else{
                        $_SESSION['role'] = $role;
                        $_SESSION['user_id'] = $result[0]['id'];
                        $_SESSION['user'] = $result[0]['user'];
                        header("Location: index.php");
                    }
                    ;
                }
                include "view/login/login.php";
                break;
            case "logout":
                unset($_SESSION['user_id']);
                unset($_SESSION['role']);
                unset($_SESSION['user']);
                header("Location: index.php");
                break;
            case "forget":
                include "view/login/forget-pass.php";
                break;
            case "info_user":
                include "view/login/info_user.php";
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