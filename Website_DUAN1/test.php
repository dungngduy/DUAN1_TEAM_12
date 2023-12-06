<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <style>
        input[type="radio"] {
            display: none;
        }

        /* Thiết lập hình ảnh tùy chọn khi checked */
        input[type="radio"]:checked + label {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>

    <input type="radio" id="option1" name="options">
    <label for="option1">Tùy chọn 1</label>

    <input type="radio" id="option2" name="options">
    <label for="option2">Tùy chọn 2</label>


</body>
</html>