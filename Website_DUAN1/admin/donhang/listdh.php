<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đơn hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Đơn hàng</h2>      
        <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                
                <th>Tên người nhận</th>
                <th>Email</th>
                <th>SĐT Người nhận</th>
                <th>Địa chỉ</th>
                <th>Trạng thái</th>
            </tr>
            <?php
                
            foreach ($list_donhang as $dh) {
                extract($dh);
                $xoadh = "index.php?act=xoadh&id_dh=" . $id_dh;
                // $suactsp = "index.php?act=updatectsp&id_ctsp=" . $id_ctsp;
                echo '<tr>

                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $ten_nguoi_nhan . '</td>
                    <td>' . $email . '</td>
                    <td>' . $sdt_nguoi_nhan . '</td>
                    <td>' . $dia_chi_nguoi_nhan . '</td>  
                    <td>' . $name.'</td>
                    <td>
                        <a href="'.$xoadh.'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\');">
                            <input type="button" value="Xóa">
                        </a>
                        <a href=""><input type="button" value="Sửa"></a>
                    </td>
                </tr>';
            }
            ?>
        </thead>
        </table>
        <a href="index.php?act=listsp"><button class="btn btn-primary">Quay về</button></a>
    </div>
    <br><br>
</body>
</html>
