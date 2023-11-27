<?php
    session_start();

    // Kiểm tra vai trò người dùng
    // if(!isset($_SESSION['role']) || $_SESSION['role'] != 1){
    //     header("Location: ../index.php?act=login");
    // }

    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";

    include "header.php";
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            // Danh mục
            case "adddm":
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $name = $_POST['name'];
                    insert_danhmuc($name);
                    $thongbao = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case "list_danhmuc":
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "xoadm":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    $sl_sp = kt_sl($id)['product_count'];
                    
                    if (intval($sl_sp) > 0) {
                        echo '<script>
                                var confirmed = window.confirm("Danh mục có sản phẩm. Bạn có chắc muốn xóa không?");
                                if (confirmed) {
                                    window.location.href = "index.php?act=xoadm&id=' . $id . '";
                                }
                                
                            </script>';
                    } else {
                        delete_danhmuc($id);
                    }
                }
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            // case 'addct':
            //     if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
            //         $color = $_POST['color'];
            //         $size = $_POST['size'];
            //         $soluong = $_POST['soluong'];
            //         $id_sp = $_POST['id_sp'];
            //         insert_chitietsp($soluong, $color, $size, $id_sp);
            //         $thongbao = "Thêm thành công";
            //     }
            //     $listsp = loadall_sp();
            //     include "sanpham/chitietsp.php";
            //     break;
            // case 'listsp':
            //     if (isset($_POST['listok']) && ($_POST['listok'])) {
            //         $kw = $_POST['kw'];
            //         $iddm = $_POST['iddm'];
            //     } else {
            //         $kw = '';
            //         $iddm = 0;
            //     }
            //     $listdm = loadall_danhmuc();
            //     $listsp = loadall_sanpham($kw, $iddm);
            //     include "sanpham/list.php";
            //     break;
        
            // case 'xoasp':
            //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            //         delete_sanpham($_GET['id']);
            //     }
            //     $listsp = loadall_sanpham("", 0);
            //     include "sanpham/list.php";
            //     break;
            // case 'suasp':
            //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            //         $sanpham = loadone_sanpham($_GET['id']);
            //     }
            //     $listdm = loadall_danhmuc();
            //     include "sanpham/update.php";
            //     break;
            // case 'updatesp':
            //     if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            //         $id = $_POST['id'];
            //         $iddm = $_POST['iddm'];
            //         $name = $_POST['name'];
            //         $price = $_POST['price'];
            //         $mota = $_POST['mota'];
            //         $img = $_FILES['img']['name'];
            //         $target_dir = "../upload/";
            //         $target_file = $target_dir . basename($_FILES['img']['name']);
            //         if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            //             //echo 
            //         } else {
            //             //
            //         }
            //     }
            //     $listdm = loadall_danhmuc();
            //     include "danhmuc/list.php";
            //     break;
            case 'suadm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $name = $_POST['name'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $name);
                    $thongbao = "Cập nhật thành công";
                }
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            // Sản phẩm
            case 'addsp':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $mota = $_POST['mota'];
                    $filename = $_FILES['img']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        //echo
                    } else {
                        //
                    }
                    insert_sanpham($name, $price, $filename, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdm = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kw = $_POST['kw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kw = '';
                    $iddm = 0;
                }
                $listdm = loadall_danhmuc();
                $listsp = loadall_sanpham($kw, $iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsp = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdm = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $mota = $_POST['mota'];
                    $img = $_FILES['img']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['img']['name']);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        //echo 
                    } else {
                        //
                    }
                    update_sanpham($id, $name, $price, $img, $mota, $iddm);
                    $thongbao = "Cập nhật thành công";
                }
                $listdm = loadall_danhmuc();
                $listsp = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            // Chi tiết sản phẩm
            case "listctsp":
                $listspct = loadall_spct();
                include "sanpham/ctsp/listctsp.php";
                break;
            case 'addspct':
                if (isset($_POST['themmoi'])) {
                    $color = $_POST['color'];
                    $size = $_POST['size'];
                    $soluong = $_POST['soluong'];
                    $id_sp = $_POST['id_sp'];
                    insert_chitietsp($color, $size, $soluong, $id_sp);
                    $thongbao = "Thêm thành công";
                }
                $listsp = loadall_sanpham("", 0);
                include "sanpham/ctsp/chitietsp.php";
                break;
            case 'updatectsp':
                if (isset($_GET['id_ctsp']) && ($_GET['id_ctsp'] > 0)) {
                    $ctsanpham = loadone_chitietsp($_GET['id_ctsp']);
                }
                $listsp = loadall_sanpham("", 0);
                include "sanpham/ctsp/update.php";
                break;
            case 'postupdatectsp':
                if (isset($_POST['capnhatctsp']) && ($_POST['capnhatctsp'])) {
                    $id_ctsp = $_POST['id_ctsp'];
                    $id_sp = $_POST['id_sp'];
                    $color = $_POST['color'];
                    $size = $_POST['size'];
                    $soluong = $_POST['soluong'];
                    update_ctsanpham($id_ctsp, $id_sp, $color, $size, $soluong);
                    $thongbao = "Cập nhật thành công";
                }
                $listsp = loadall_sanpham("", 0);
                $listspct = loadall_spct();
                include "sanpham/ctsp/listctsp.php";
                break;
            case 'xoactsp':
                if (isset($_GET['id_ctsp']) && ($_GET['id_ctsp'] > 0)) {
                    delete_ctsanpham($_GET['id_ctsp']);
                }
                    $listspct = loadall_spct("", 0);
                    include "sanpham/ctsp/listctsp.php";
                break;
            // Danh sách tài khoản
            case 'dskh':
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/listtaikhoan.php";
                break;
            case 'xoatk':
                if(isset($_GET['id_tk']) && ($_GET['id_tk'] > 0)){
                    delete_taikhoan($_GET['id_tk']);
                }
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            // Danh sách bình luận
            case 'dsbl':
                $listbinhluan = loadall_xembinhluan();
                include "binhluan/listbinhluan.php";
                break;
            case 'xoabinhluan':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_xembinhluan();
                include "binhluan/listbinhluan.php";
                break;
            }
            // Thống kê về danh thu theo khoảng tg
            // Đơn hàng đã dặt
            // Tài khoản mới
            // Sản phẩm bán chạy
    }else {
        include "home.php";
    }
    include "footer.php";
?>