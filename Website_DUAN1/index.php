<?php
    session_start();
    ob_start();
    // if(isset($_SESSION['role']) && $_SESSION['role'] == 1){
    //     header("Location: admin/index.php");
    // }
    include "view/header.php";
    include "global.php";
    include "model/pdo.php";
    include "model/dangnhap.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/tintuc.php";
    include "model/binhluan.php";
    
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $list_danhmuc = list_danhmuc();
    $loadall_danhmuc = loadall_danhmuc();
    $list_tintuc = loadall_tintuc();
    $list_sp_discount = loadall_sp_discount();
    $sanphammoi = loadall_sanpham_top3();

    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch($act){
            case "dmsanpham":
                if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                    $iddm = $_GET['iddm'];
                    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 3;
                    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                    
                    $minPrice = isset($_GET['minPrice']) ? (int)$_GET['minPrice'] : null;
                    $maxPrice = isset($_GET['maxPrice']) ? (int)$_GET['maxPrice'] : null;
                    
                    $sp_with_dm = getall_sp($iddm, $current_page, $item_per_page, $minPrice, $maxPrice);
                    $total_items = get_total_sp_count($iddm, $minPrice, $maxPrice);
                    $totalPages = ceil($total_items / $item_per_page);
                } else {
                    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 3;
                    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;

                    $minPrice = isset($_GET['minPrice']) ? (int)$_GET['minPrice'] : null;
                    $maxPrice = isset($_GET['maxPrice']) ? (int)$_GET['maxPrice'] : null;

                    $sp_with_dm = getall_sp(0, $current_page, $item_per_page, $minPrice, $maxPrice);
                    $total_items = get_total_sp_count(0, $minPrice, $maxPrice);
                    $totalPages = ceil($total_items / $item_per_page);
                }
                include "view/details/shop-grid.php";
                break;
            case "ctsanpham":
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0 ){
                    $onesp = loadone_sanpham($_GET['idsp']);
                    extract($onesp);
                    $list_binhluan = load_binhluan($_GET['idsp']);
                    $sanpham_cungloai=loadall_sanpham_cungloai($id,$iddm);
                    $ctsp = loadall_ctsp($_GET['idsp']);
                    $count = get_count_bl($_GET['idsp']);
                    include "view/details/shop-details.php";
                } 
                break;
            case "blog_details":
                if(isset($_GET['idtt']) && $_GET['idtt'] > 0 ){
                    $id = $_GET['idtt'];
                    // var_dump($id);
                    $onett = loadone_tintuc($id);
                    extract($onett);
                    include "view/blog/blog-details.php";
                }
                break;
            case "tintuc":
                include "view/blog/blog.php";
                break;
            case "cart":
                if(isset($_POST['cart'])&& ($_POST['cart'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = $_POST['qty'];
                    $ttien = $soluong * $price;
                    $spadd =[$id,$name,$img,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                    
                }
                include "view/cart/cart.php";
                break;
            case "delcart":
                if(isset($_GET['idcart'])){
                    $_SESSION['mycart'] = array_merge(
                    array_slice($_SESSION['mycart'], 0, $_GET['idcart']),
                    array_slice($_SESSION['mycart'], $_GET['idcart'] + 1)
                );
                } else {
                    $_SESSION['mycart'] = [];
                }
                header('Location: index.php?act=cart');
                include "view/header.php";
                break;
            case "updatecart":
                if(isset($_POST['idcart']) && isset($_POST['quantity'])){
                    $idcart = $_POST['idcart'];
                    $quantity = $_POST['quantity'];
            
                    // Kiểm tra xem idcart có tồn tại trong giỏ hàng hay không
                    if(isset($_SESSION['mycart'][$idcart])){
                        // Cập nhật số lượng cho sản phẩm tương ứng
                        $_SESSION['mycart'][$idcart]['quantity'] = $quantity;
                    }
                }
                var_dump($_SESSION['mycart']);
                // header('Location: index.php?act=cart');
                break;
            case "checkout":
                include "view/cart/checkout.php";
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
                if(isset($_POST['guiemail'])){
                    $email = $_POST['email'];
                    $sendMailMess = sendMail($email);
                }
                include "view/login/forget-pass.php";
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