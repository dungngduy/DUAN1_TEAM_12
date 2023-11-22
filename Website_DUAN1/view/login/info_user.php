<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/infor_user.css">
    <style>
        .title h2{
            margin-top: 20px;
            margin-left: 20px;
        }
        .box_left h4{
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <div class="info">
        <div class="title">
            <h2>Thông tin tài khoản</h2>
        </div>
        <div class="account">
            <div class="box_left">
                <div class="title_avatar">
                    <h4>Ảnh đại diện</h4>
                </div>
                <div class="title_name">
                    <h4>Tên người dùng</h4>
                </div>
                <div class="title_pass">
                    <h4>Mật khẩu người dùng</h4>
                </div>
                <div class="title_email">
                    <h4>Email</h4>
                </div>
                <div class="title_tel">
                    <h4>Số điện thoại</h4>
                </div>
                <div class="title_address">
                    <h4>Địa chỉ</h4>
                </div>
            </div>
            <div class="box_right">
                <div class="img_avt">
                    <input type="file" name="img" id="">
                </div>
                <div class="content_name">
                    <input type="text" name="user" id="" value="Nguyễn Duy Dũng">
                </div>
                <div class="content_pass">
                    <input type="password" name="pass" id="" value="123456">
                </div>
                <div class="content_email">
                    <input type="email" name="email" id="" value="dungndph35764@fpt.edu.vn">
                </div>
                <div class="content_tel">
                    <input type="text" name="tel" id="" value="0376318876">
                </div>
                <div class="content_address">
                    <input type="text" name="address" id="" value="Hà Nội">
                </div>
            </div>
        </div>
        <div class="btn_update">
            <button type="submit">Cập nhật tài khoản</button>
        </div>
    </div>
</body>
</html>