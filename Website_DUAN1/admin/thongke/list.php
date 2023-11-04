<div class="list_tk">
    <div class="list_title_tk">
        <h3>THỐNG KÊ SẢN PHẨM TRONG DANH MUC</h3>
    </div>
    <div class="list_content">
        <form action="" method="post">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Mã loại</th>
                        <th scope="col">Tên loại</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá nhỏ nhất</th>
                        <th scope="col">Giá lớn nhất</th>
                        <th scope="col">Giá trung bình</th>
                    </tr>
                </thead> 
                <tbody>
                    <tr>
                        <?php foreach($dsthongke as $thongke): ?>
                            <?php
                                extract($thongke);
                                echo '<tr>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$soluong.'</td>
                                        <td>'.$gia_min.'₫</td>
                                        <td>'.$gia_max.'₫</td>
                                        <td>'.number_format($gia_avg, 6).'</td>
                                    </tr>';
                            ?>
                        <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
            <a href="index.php?act=bieudo"><button type="button" class="btn btn-outlinedark">Xem biểu đồ</button></a>
        </form>
    </div>
</div>