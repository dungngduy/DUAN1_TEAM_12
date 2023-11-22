<?php
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
                    delete_danhmuc($_GET['id']);
                }
                $listdm = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
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
            case 'chitietsp':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $color = $_POST['color'];
                    $size = $_POST['size'];
                    $soluong = $_POST['soluong'];
                    $id_sp = $_POST['id_sp'];
                    insert_chitietsp($soluong, $color, $size, $id_sp);
                    $thongbao = "Thêm thành công";
                }
                $listsp = loadall_sp();
                include "sanpham/ctsp/chitietsp.php";
                break;
            case "listctsp":
                $listspct = loadall_spct();
                include "sanpham/ctsp/listctsp.php";
                break;
            case 'addspct':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $id_sp = $_POST['id'];
                    $color = $_POST['color'];
                    $size = $_POST['size'];
                    $soluong = $_POST['soluong'];
                    insert_chitietsp($id_sp, $color, $size, $soluong);
                    $thongbao = "Thêm thành công";
                }
                $listsp = loadall_sanpham("", 0);
                include "sanpham/add.php";
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
        } else {
            include "home.php";
        }
    include "footer.php";
?>