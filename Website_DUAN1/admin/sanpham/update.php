<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$imgpath = "../upload/" . $img;
if (isset($imgpath)) {
    $img = "<img src = '" . $imgpath . "' height = '80'>";
} else {
    $img = "No photo";
}
?>
<div class="container">
    <h1>Cập nhật Sản Phẩm</h1>
    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="ten">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="ten" name="name" value="<?= $sanpham['name'] ?>" required>
        </div>
        <div class="form-group">
            <label for="gia">Giá sản phẩm:</label>
            <input type="text" class="form-control" id="gia" name="price" value="<?= $price ?>" required>
        </div>
        <div class="form-group">
            <label for="anh">Ảnh sản phẩm:</label>
            <input type="file" class="form-control-file" id="anh" name="img"><?= $img ?>
        </div>
        <div class="form-group">
            <label for="mota">Mô tả sản phẩm:</label>
            <textarea type="text" class="form-control" id="mota" name="mota"><?= $mota ?></textarea>
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
            <input type="hidden" name="id" value="<?php echo $sanpham['id'] ?>">
            <input type="submit" name="capnhat" id="" class="btn btn-primary" value="Cập nhật"></input>
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại"></input>
            <a href="index.php?act=listsp"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</div>