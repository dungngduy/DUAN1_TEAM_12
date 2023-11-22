<div class="container">
    <h2>Danh sách danh mục</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Vai Trò </th>
            </tr>
        </thead>
        <?php
        foreach ($listdm as $dm) {
            extract($dm);
            $suadm = "index.php?act=suadm&id=" . $id;
            $xoadm = "index.php?act=xoadm&id=" . $id;
            echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id . '</td>
                <td>' . $name . '</td>
                <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a> 
                <a href="' . $xoadm . '"><input type="button" value="Xóa"></a></td>
            </tr>';
        }
        ?>

    </table>
    <button class="btn btn-primary">Chọn tất cả</button>
    <button class="btn btn-primary">Bỏ chọn tất cả</button>
    <a href="index.php?act=adddm"><button class="btn btn-primary">Thêm danh mục</button></a>
</div>