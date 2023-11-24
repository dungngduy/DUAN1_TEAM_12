<?php
if (is_array($ctsanpham)) {
    extract($ctsanpham);
}
// print_r($ctsanpham);
// echo $ctsanpham[0]['id_sp'];
?>
<div class="container">
    <h1>Cập nhật Chi Tiết Sản Phẩm</h1>
    <form action="index.php?act=postupdatectsp" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="color">Màu</label>
            <input type="text" class="form-control" id="color" name="color" value="<?= $ctsanpham[0]['color'] ?>">
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="size" name="size" value="<?= $ctsanpham[0]['size'] ?>"></input>
        </div>
        <div class="form-group">
            <label for="size">Số lượng</label>
            <input type="text" class="form-control" id="size" name="soluong" value="<?= $ctsanpham[0]['soluong'] ?>"></input>
        </div>
        <div class="mt-3 text-center">
            <input type="hidden" name="id_ctsp" value="<?php echo $ctsanpham[0]['id_ctsp'] ?>">
            <input type="hidden" name="id_sp" value="<?php echo $ctsanpham[0]['id_sp'] ?>">
            <input type="submit" name="capnhatctsp" id="" class="btn btn-primary" value="Cập nhật"></input>
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại"></input>
            <a href="index.php?act=listctsp"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</div>