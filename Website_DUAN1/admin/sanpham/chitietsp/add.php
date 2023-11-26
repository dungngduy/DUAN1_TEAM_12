<div class="container">
    <h1>Chi Tiết Sản Phẩm</h1>
    <form action="" method="POST" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="ten">Tên sản phẩm</label>
            <input type="text" class="form-control" id="color" name="color" required>
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" required>
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="size" name="size" required>
        </div>
        <div class="form-group">
            <label for="soluong">Số lượng</label>
            <input type="text" class="form-control" id="soluong" name="soluong" required>
        </div>
        <div class="mt-3 text-center">
          <input type="hidden" name="id_sp" value="<?php echo $id_ctsp; ?>">
          <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm" ></input>
          <input type="reset" class="btn btn-outline-primary" value="Nhập lại"></input>
          <a href="index.php?act=addct"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
            if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
        ?>
  </div>