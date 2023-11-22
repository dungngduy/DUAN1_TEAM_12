

  <div class="container">
    <h1>Thêm Sản Phẩm</h1>
    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="ten">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="ten" name="name" required>
        </div>
        <div class="form-group">
            <label for="gia">Giá sản phẩm:</label>
            <input type="text" class="form-control" id="gia" name="price" required>
        </div>

        <div class="form-group">
            <label for="anh">Ảnh sản phẩm:</label>
            <input type="file" class="form-control-file" id="anh" name="img" required>
        </div>

        <div class="form-group">
            <label for="mota">Mô tả sản phẩm:</label>
            <input type="text" class="form-control" id="mota" name="mota" required>
        </div>
        <div class="form-group">
        <label> Danh mục: </label> <br>
              <select name="iddm" id="" required>
                <option value="0">Chọn danh mục</option>
                  <?php
                      foreach ($listdm as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
        </div> <br>

        <div class="mt-3 text-center">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm" ></input>
          <input type="reset" class="btn btn-outline-primary" value="Nhập lại"></input>
          <a href="index.php?act=listsp"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
          <a href="index.php?act=chitietsp"><button type="button" class="btn btn-outline-primary">Chi tiết sản phẩm <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
            if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
        ?>
  </div>
