<!DOCTYPE html>
<html lang="en">
<head>
  <title>Danh mục</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Sản Phẩm</h2>      
        <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th>STT</th>
                <th>TÊN SẢN PHẨM</th>
                <th>HÌNH</th>
                <th>GIÁ</th>
                <th>MÔ TẢ</th>
                <th>NGÀY NHẬP</th>
                <th>LƯỢT XEM</th>
                <th>VAI TRÒ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Số mục bạn muốn hiển thị trên mỗi trang
            $muc_tren_trang = 5;

            // Tính tổng số trang dựa trên số sản phẩm và số mục trên mỗi trang
            $tong_so_trang = ceil(count($listsp) / $muc_tren_trang);

            // Kiểm tra xem trang hiện tại được chọn là trang nào
            if (!isset($_GET['trang'])) {
                $trang_hien_tai = 1;
            } else {
                $trang_hien_tai = $_GET['trang'];
            }

            // Xác định chỉ số của sản phẩm đầu tiên trên trang hiện tại
            $so_muc_dau_tien = ($trang_hien_tai - 1) * $muc_tren_trang;

            // Lọc mảng để chỉ hiển thị số sản phẩm cần thiết cho trang hiện tại
            $listsp_trang_hien_tai = array_slice($listsp, $so_muc_dau_tien, $muc_tren_trang);

            foreach ($listsp_trang_hien_tai as $sp) {
                extract($sp);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $hinhpath = "../upload/" . $img;
                if (isset($hinhpath)) {
                    $hinh = "<img src = '" . $hinhpath . "' height='80px'>";
                } else {
                    $hinh = "No photo";
                }
                echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $price . '</td>
                            <td>' . $mota . '</td>
                            <td>' . $ngaynhapkhau . '</td>
                            <td>' . $luotxem . '</td>
                            <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                            <a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                        </tr>';
            }
            ?>
        </tbody>
        </table>
        
        <!-- Tạo liên kết phân trang -->
        <ul class="pagination">
            <?php
            for ($i = 1; $i <= $tong_so_trang; $i++) {
                echo '<li class="page-item"><a class="page-link" href="index.php?trang=' . $i . '">' . $i . '</a></li>';
            }
            ?>
        </ul>

        <button class="btn btn-primary">Chọn tất cả</button>
        <button class="btn btn-primary">Bỏ chọn tất cả</button>
        <a href="index.php?act=addsp"><button class="btn btn-primary">Thêm sản phẩm</button></a>
    </div>
    <br><br>
</body>
</html>
