 <div class="container">
        <div class="mt-4">
        <h2>Danh sách bình luận</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th></th>
                <th>STT</th>
                <th>Tên người dùng </th>
                <th>Nội dung bình luận</th>
                <th> Ngày bình luận </th>
                <th>Vai trò </th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            <tr>
            <?php
                        foreach ($listbinhluan as $binhluan){
                            extract($binhluan);
                            $xoabinhluan = "index.php?act=xoabinhluan&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$id_user.'</td>
                            <td>'.$id_pro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <a href="'.$xoabinhluan.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                        }
                    ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
