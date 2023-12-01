<?php
if (is_array($tk)) {
    extract($tk);
}
?>
<div class="container">
    <h1>Cập nhật Tài khoản</h1>
    <form action="index.php?act=updatetk" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="ten">Tên tài khoản:</label>
            <input type="text" class="form-control" id="ten" name="name" value="<?= $user ?>">
        </div>
        <div class="form-group">
            <label for="gia">Mật khẩu</label>
            <input type="text" class="form-control" id="gia" name="pass" value="<?= $pass ?>">
        </div>
        <div class="form-group">
            <label for="mota">Email</label>
            <input type="text" class="form-control" id="mota" name="email" value="<?= $email ?>">
        </div>
        <div class="mt-3 text-center">
        <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" name="suatk" class="btn btn-primary" value="Cập nhật"></input>
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại"></input>
            <a href="index.php?act=dstk"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</div>