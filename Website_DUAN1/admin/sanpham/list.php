
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
            <?php
            foreach ($listsp as $sp) {
                extract($sp);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $hinhpath = "../upload/" . $img;
                if (isset($hinhpath)) {
                    $hinh = "<img src = '" . $hinhpath . "' height = '80'>";
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
        </thead>
        </table>
        <button class="btn btn-primary"><i class="fas fa-edit"></i>Chọn tất cả</button>
        <button class="btn btn-primary"><i class="fas fa-edit"></i>Bỏ chọn tất cả</button>
        <a href="index.php?act=addsp"><button class="btn btn-primary"><i class="fas fa-edit"></i>Thêm sản phẩm</button></a>
    </div>
    <br><br>
</body>
</html>
