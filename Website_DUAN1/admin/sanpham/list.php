<!DOCTYPE html>
<html lang="en">
<head>
  <title>Danh mục</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Sản Phẩm</h2>      
        <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th>STT</th>
                <th>TÊN SẢN PHẨM</th>
                <th>HÌNH</th>
                <th>GIÁ</th>
                <th>MÔ TẢ</th>
                <th>NGÀY NHẬP</th>
                <th>LƯỢT XEM</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
<<<<<<< Updated upstream
            include "../model/offset.php";
            $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] :3;
            $current_page = !empty($_GET['page']) ? $_GET['page'] :1;
            $offset = ($current_page - 1) * $item_per_page;
            $sql = mysqli_query($conn, "SELECT * FROM san_pham ORDER BY id ASC LIMIT ".$item_per_page." OFFSET ".$offset."");
            $total = mysqli_query($conn, "SELECT * FROM san_pham");
            $totalRecords = $total->num_rows;
            $totalPages = ceil($totalRecords / $item_per_page);

            while($row = mysqli_fetch_array($sql)){
                $suasp = "index.php?act=suasp&id=" . $row['id'];
                $xoasp = "index.php?act=xoasp&id=" . $row['id'];
                $hinhpath = "../upload/" . $row['img'];
=======
            foreach ($listsp as $sp) {
                extract($sp);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $chitietsp = "index.php?act=chitietsp&id=" . $id;
                $hinhpath = "../upload/" . $img;
>>>>>>> Stashed changes
                if (isset($hinhpath)) {
                    $hinh = "<img src = '" . $hinhpath . "' height='80px'>";
                } else {
                    $hinh = "No photo";
                }
                echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $row['id'] . '</td>
                            <td>' . $row['name'] . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $row['price'] . '</td>
                            <td>' . $row['mota'] . '</td>
                            <td>' . $row['ngaynhapkhau'] . '</td>
                            <td>' . $row['luotxem'] . '</td>
                            <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>
<<<<<<< Updated upstream
                            <a onclick="return confirm(\'Bạn có muốn xóa không?\')" href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
=======
                            <a href="' . $xoasp . '"><input type="button" value="Xóa"></a> <br>
                            <a href="' . $chitietsp . '"><input type="button" value="Chi tiết sản phẩm"></a></td>
>>>>>>> Stashed changes
                        </tr>';
            }
            ?>
        </tbody>
        </table>
<<<<<<< Updated upstream
        
        <div class="product__pagination">
            <?php
                if($current_page > 1){
                    $prev_page = $current_page - 1;
            ?>      
                <a href="?act=listsp&per_page=<?=$item_per_page; ?>&page=<?=$prev_page; ?>"><i class="fa fa-long-arrow-left"></i></a>
            <?php } ?>
            <?php
                for($num = 1; $num <= $totalPages; $num++){
            ?>
                    <?php
                        if($num != $current_page){
                    ?>
                        <?php if($num > $current_page - 2 && $num < $current_page + 2){ ?>
                            <a href="?act=listsp&per_page=<?=$item_per_page; ?>&page=<?=$num; ?>"><?=$num; ?></a>
                        <?php } ?>
                    <?php }else{ ?>
                        <a style="background-color: #343a40; color: #fff;" href="?act=listsp&per_page=<?=$item_per_page; ?>&page=<?=$num; ?>"><?=$num; ?></a>
                    <?php } ?>
            <?php } ?>
            <?php
                if($current_page < $totalPages + 1){
                    $next_page = $current_page + 1;
            ?>      
                <a href="?act=listsp&per_page=<?=$item_per_page; ?>&page=<?=$next_page; ?>"><i class="fa fa-long-arrow-right"></i></a>
            <?php } ?>
        </div>
        <br>
        <button class="btn btn-primary">Chọn tất cả</button>
        <button class="btn btn-primary">Bỏ chọn tất cả</button>
        <a href="index.php?act=addsp"><button class="btn btn-primary">Thêm sản phẩm</button></a>
=======
        <button class="btn btn-primary"><i class="fas fa-edit"></i>Chọn tất cả</button>
        <button class="btn btn-primary"><i class="fas fa-edit"></i>Bỏ chọn tất cả</button>
        <a href="index.php?act=addsp"><button class="btn btn-primary"><i class="fas fa-edit"></i>Thêm sản phẩm</button></a>
       
>>>>>>> Stashed changes
    </div>
    <br><br>
</body>
</html>
