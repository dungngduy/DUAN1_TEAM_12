<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Filter</title>
</head>
<body>

<?php
$products = array(
    array('name' => 'Sản phẩm 1', 'price' => 50, 'color' => 'Đỏ'),
    array('name' => 'Sản phẩm 2', 'price' => 75, 'color' => 'Xanh'),
    array('name' => 'Sản phẩm 3', 'price' => 100, 'color' => 'Vàng'),
    array('name' => 'Sản phẩm 4', 'price' => 120, 'color' => 'Đen'),
);

// Lấy màu sắc được chọn từ tham số truyền vào
$selectedColor = isset($_GET['color']) ? $_GET['color'] : '';

// Lọc sản phẩm theo màu sắc
$filteredProducts = array_filter($products, function ($product) use ($selectedColor) {
    return $selectedColor === '' || strtolower($product['color']) === strtolower($selectedColor);
});
?>

<!-- Hiển thị bảng sản phẩm -->
<table border="1">
    <tr>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Màu sắc</th>
    </tr>
    <?php foreach ($filteredProducts as $product): ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['color']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Form để chọn màu sắc -->
<form id="colorFilterForm">
    <label for="color">Chọn màu sắc:</label>
    <select id="color" name="color">
        <option value="">Tất cả</option>
        <option value="Đỏ">Đỏ</option>
        <option value="Xanh">Xanh</option>
        <option value="Vàng">Vàng</option>
        <option value="Đen">Đen</option>
    </select>

    <input type="submit" value="Lọc">
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('colorFilterForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // Lấy giá trị từ ô select
        const selectedColor = document.getElementById('color').value;

        // Chuyển hướng trang với tham số màu sắc mới
        window.location.href = `test.php?color=${selectedColor}`;
    });
});

</script>
</body>
</html>
