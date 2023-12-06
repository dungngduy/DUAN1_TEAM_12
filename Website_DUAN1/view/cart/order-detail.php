<!-- <div class="container">
    <h2>Chi tiết đơn hàng</h2>
    <form action="index.php?act=updatedh" method="POST">
        <div class="form-group">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Size</th>
                        <th>Màu sắc</th>
                        <th>Trạng thái đơn hàng</th>
                    </tr>
                    <?php
                        
                        foreach ($ctdh as $dh) {
                            extract($dh);
                            echo '<tr>
                                <td>' . $name . '</td>
                                <td>' . $soluong . '</td>
                                <td>' . $size . '</td>
                                <td>' . $color . '</td>
                                <td>' . $name_tt . '</td>
                            </tr>';
                        }
                    ?>
                </thead>
            </table>
            <select class="form-control" id="trangthai" name="id_trangthai">
                <?php
                
                    foreach ($list_ctdonhang as $trangthai) {
                        extract($trangthai);
                        if ($id_trangthai == $id) {
                            echo '<option value="' . $id . '" selected>' . $name_tt . '</option>';
                        } else {
                            echo '<option value="' . $id . '">' . $name_tt . '</option>';
                        }
                    }
                
                ?>
            </select>
        </div>
    </form>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <style>
        .head{
            text-align: center;
            margin-bottom: 20px;
        }

        .section{
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .tb, th, td {
            border: 1px solid #ddd;
        }

        .tb th, td {
            padding: 15px;
            text-align: left;
        }

        .tb th {
            background-color: #f2f2f2;
        }

        .ft{
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
        foreach($ctdh as $key){
            extract($key);
        }
    ?>
    <div class="head">
        <h1>Chi tiết đơn hàng</h1>
    </div>

    <div class="section">
        <h2>Thông tin đơn hàng</h2>
        <p><strong>Mã đơn hàng:</strong> <?=$id_dh; ?></p>
        <p><strong>Ngày đặt hàng:</strong> <?=$created; ?></p>
        <p><strong>Trang thái:</strong> <?=$name_tt; ?></p>
        <!-- Thêm các thông tin khác của đơn hàng -->
    </div>

    <div class="section">
        <h2>Sản phẩm</h2>
        <table class="tb">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Tổng cộng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ctdh as $key){
                    extract($key);
                    $tt = 0;
                ?>
                <tr>
                    <td><?=$name; ?></td>
                    <td><?=$soluong; ?></td>
                    <td><?=number_format($price, 0, ',', '.'); ?>đ</td>
                    <td><?=number_format($thanh_tien, 0, ',', '.'); ?>đ</td>
                </tr>
                <!-- Thêm các sản phẩm khác của đơn hàng -->
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="section">
        <h2>Tổng cộng</h2>
        <?php
            foreach($tt_order_detail as $tt){
                extract($tt);
            }
        ?>
        <p><strong>Tổng tiền:</strong> <?=number_format($thanhtien, 0, ',', '.'); ?>đ</p>
        <!-- Thêm các thông tin khác về thanh toán, vận chuyển, vv. -->
    </div>
    <div class="ft">
        <p>Cảm ơn bạn đã mua hàng!</p>
    </div>

</body>
</html>