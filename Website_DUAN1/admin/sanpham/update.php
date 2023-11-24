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
    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data" onsubmit="return validateFormUpdateSP()">
        <div class="form-group">
            <label for="ten">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="ten" name="name" value="<?= $sanpham['name'] ?>">
            <span id="tenError" style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="gia">Giá sản phẩm:</label>
            <input type="text" class="form-control" id="gia" name="price" value="<?= $price ?>">
            <span id="giaError" style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="anh">Ảnh sản phẩm:</label>
            <input type="file" class="form-control-file" id="anh" name="img"><?= $img ?>
            <span id="anhError" style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="mota">Mô tả sản phẩm:</label>
            <textarea type="text" class="form-control" id="mota" name="mota"><?= $mota ?></textarea>
            <span id="motaError" style="color: red;"></span>
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
            <span id="iddmError" style="color: red;"></span>
        </div> <br>
        <div class="mt-3 text-center">
            <input type="hidden" name="id" value="<?php echo $sanpham['id'] ?>">
            <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật"></input>
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại"></input>
            <a href="index.php?act=listsp"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</div>

<script>
    function validateFormUpdateSP() {
        var ten = document.getElementById("ten").value;
        var gia = document.getElementById("gia").value;
        var anh = document.getElementById("anh").value;
        var mota = document.getElementById("mota").value;
        var iddm = document.getElementById("iddm").value;

        var tenError = document.getElementById("tenError");
        var giaError = document.getElementById("giaError");
        var anhError = document.getElementById("anhError");
        var motaError = document.getElementById("motaError");
        var iddmError = document.getElementById("iddmError");

        tenError.innerHTML = "";
        giaError.innerHTML = "";
        anhError.innerHTML = "";
        motaError.innerHTML = "";
        iddmError.innerHTML = "";

        if (ten.trim() === "") {
            tenError.innerHTML = "Vui lòng nhập tên sản phẩm";
            console.log("Tên sản phẩm không được để trống");
            return false;
        }

        if (gia.trim() === "") {
            giaError.innerHTML = "Vui lòng nhập giá sản phẩm";
            console.log("Giá sản phẩm không được để trống");
            return false;
        }

        if (anh.trim() === "") {
            anhError.innerHTML = "Vui lòng chọn ảnh sản phẩm";
            console.log("Ảnh sản phẩm không được để trống");
            return false;
        }

        if (mota.trim() === "") {
            motaError.innerHTML = "Vui lòng nhập mô tả sản phẩm";
            console.log("Mô tả sản phẩm không được để trống");
            return false;
        }

        if (iddm === "0") {
            iddmError.innerHTML = "Vui lòng chọn danh mục";
            console.log("Danh mục không được để trống");
            return false;
        }

        console.log("Form hợp lệ");
        return true;
    }
</script>

