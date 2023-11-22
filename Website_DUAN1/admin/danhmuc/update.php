<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="container">
    <h2>Cập nhật danh mục </h2>
    <form action="index.php?act=updatedm" method="POST">
        <div class="form-group">
            <label for="tendanhmuc">Tên danh mục</label>
            <input type="text" class="form-control" id="" placeholder="Thêm tên danh mục" name="name" value="<?=$name?>">
        </div>
        <div class="mt-3 text-center">
            <input type="hidden" name="id" id="" value="<?php if(isset($id)&&($id>0)) echo $id ?>">
            <input type="submit" name="capnhat" id="" class="btn btn-outline-primary" value="Cập nhật">
            <input type="reset" name="" id="" class="btn btn-outline-primary" value="Nhập lại">

        </div>
    </form>
    <a href="index.php?act=list_danhmuc"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</div>