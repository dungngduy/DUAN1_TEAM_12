<?php
if (is_array($ctsanpham)) {
    extract($ctsanpham);
}
?>
<div class="container">
    <h1>Cập nhật Chi Tiết Sản Phẩm</h1>
    <form action="index.php?act=updatectsp" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="id_ctsp">ID Chi Tiết</label>
            <input type="text" class="form-control" id="id_ctsp" name="id_ctsp" value="<?= $ctsanpham['id_ctsp'] ?>" required>
        </div>
        <div class="form-group">
            <label for="id_sp">ID sản phẩm</label>
            <input type="text" class="form-control" id="id_sp" name="id_sp" value="<?= $id_sp ?>" required>
        </div>
        <div class="form-group">
            <label for="color">Màu</label>
            <input type="file" class="form-control" id="color" name="color"><?= $color ?>
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <textarea type="text" class="form-control" id="size" name="size"><?= $size ?></textarea>
        </div>
        <div class="form-group">
            <label> Danh mục: </label> <br>
            <select name="iddm" id="">
                <?php
                foreach ($listdm as $danh_muc) {
                    extract($danh_muc);
                    if ($iddm == $id) {
                        echo '<option value="' . $id . '" selected>' . $name . '</option>';
                    } else {
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                }
                ?>
            </select>
        </div> <br>
        <div class="mt-3 text-center">
            <input type="hidden" name="id_ctsp" value="<?php echo $ctsanpham['id_ctsp'] ?>">
            <input type="submit" name="capnhatctsp" id="" class="btn btn-primary" value="Cập nhật"></input>
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại"></input>
            <a href="index.php?act=listctsp"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</div>