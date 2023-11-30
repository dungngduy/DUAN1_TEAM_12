<?php
    if(isset($error) && $error != ""){
        echo $error;
?>
<?php }else{ ?>
<style>
    .row input{
        margin-right: 10px;
    }
</style>
<div class="container">
    <h2>Đơn hàng của tôi</h2>
    <form action="#" method="POST">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày mua</th>
                    <th>Tên sản phẩm</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái đơn hàng</th>
                </tr>
                <?php
                foreach ($ctdh as $list) {
                    extract($list);
                        echo '<tr>
                                <td>'.$ma_dh.'</td>
                                <td>'.$created.'</td>
                                <td>'.$name.'</td>
                                <td>' . number_format($thanh_tien, 0, ',', '.') . 'đ</td>
                                <td>'.$name_tt.'</td>
                            </tr>';
                }
                ?>
            </thead>
        </table>
    </form>
</div>
<?php } ?>