<!DOCTYPE html>
<html lang="en">
<head>
  <title>huhu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Thêm danh mục </h2>
        <form action="/action_page.php">
        <div class="form-group">
            <label for="danhmuc">Tên danh mục</label>
            <input type="danhmuc" class="form-control" id="danhmuc" placeholder="Thêm danh mục" name="danhmuc">
        </div>
        <div class="mt-3 text-center">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" name="capnhat" class="btn btn-primary">Thêm mới</button>
            <button type="reset" class="btn btn-outline-primary">Nhập lại</button>
            <a href="index.php?act=listsp"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
        </form>
    </div>
</body>
</html>