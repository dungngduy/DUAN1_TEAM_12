<?php
if (is_array($dh)) {
    extract($dh);
}
?>

<div class="container">
    <h2>Cập nhật đơn hàng </h2>
    <form action="index.php?act=updatedh" method="POST">
        <div class="form-group">
            <label for="trangthai">Trạng thái đơn hàng</label>
            <select class="form-control" id="trangthai" name="id_trangthai">
    <?php
    if (isset($list_ctdonhang) && is_array($list_ctdonhang)) {
        foreach ($list_ctdonhang as $trangthai) {
            if ($id_trangthai == $trangthai['id']) {
                echo '<option value="' . $trangthai['id'] . '" selected>' . $trangthai['name_tt'] . '</option>';
            } else {
                echo '<option value="' . $trangthai['id'] . '">' . $trangthai['name_tt'] . '</option>';
            }
        }
    }
    ?>
</select>
        </div>
        <div class="mt-3 text-center">
            <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id ?>">
            <input type="submit" name="suadh" class="btn btn-outline-primary" value="Cập nhật">
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại">
        </div>
    </form>
    <a href="index.php?act=donhang"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</div>
