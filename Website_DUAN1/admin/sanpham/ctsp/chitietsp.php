<div class="container">
    <h1>Chi Tiết Sản Phẩm</h1>
    <form action="index.php?act=addspct" method="POST" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="ten">Color</label>
            <input type="text" class="form-control" id="color" name="color" required>
        </div>
        <div class="form-group">
            <label for="gia">Size</label>
            <input type="text" class="form-control" id="size" name="size" required>
        </div>
        <div class="form-group">
            <label for="gia">Số lượng</label>
            <input type="text" class="form-control" id="soluong" name="soluong" required>
        </div>
        <div class="form-group">
        <label> Sản phẩm </label> <br>
            <select name="id_sp" id="" required>
                <option value="0">Chọn sản phẩm </option>
                  <?php
                      foreach ($listsp as $sanpham){
                            extract($sanpham);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
            </select>
        </div> <br>
        <div class="mt-3 text-center">
          <input type="hidden" name="id_ctsp" value="<?php echo $id_ctsp; ?>">
          <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm" ></input>
          <input type="reset" class="btn btn-outline-primary" value="Nhập lại"></input>
          <a href="index.php?act=listctsp"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
        if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
    ?>
  </div>
