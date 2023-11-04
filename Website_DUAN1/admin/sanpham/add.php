<!DOCTYPE html>
<html lang="en">
<head>
  <title>hihi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
  <div class="container">
    <h1>Thêm Sản Phẩm</h1>
    <form>
        <div class="form-group">
            <label for="ten">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="ten" name="ten">
        </div>
        <div class="form-group">
            <label for="gia">Giá sản phẩm:</label>
            <input type="text" class="form-control" id="gia" name="gia">
        </div>
        <div class="form-group">
            <label for="anh">Ảnh sản phẩm:</label>
            <input type="file" class="form-control-file" id="anh" name="anh">
        </div>
        <div class="form-group">
            <label for="mota">Mô tả sản phẩm:</label>
            <input type="text" class="form-control" id="mota" name="mota">
        </div>
        <div class="form-group">
            <label for="danhmuc">Danh Mục</label>
            <select class="form-control" id="vai-tro" name="vai-tro">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
        </div>
        <div class="mt-3 text-center">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <button type="submit" name="capnhat" class="btn btn-primary">Thêm mới</button>
          <button type="reset" class="btn btn-outline-primary">Nhập lại</button>
          <a href="index.php?act=listsp"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
