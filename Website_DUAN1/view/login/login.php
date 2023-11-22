<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        .forget_and_register a:hover{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login_form">
        <div class="img_fix">
            <img src="img/register.jpg" alt="">
        </div>
        <div class="login_box">
            <h3>ĐĂNG NHẬP</h3>
            <form action="">
                <div class="input_box">
                    <input id="userLogin" type="text" name="" placeholder="Tên đăng nhập">
                    <span></span>
                    <small id="errorUserLogin"></small>
                </div>
                <div class="input_box">
                    <input id="passLogin" type="pass" name="" placeholder="Mật khẩu">
                    <span></span>
                    <small id="errorPassLogin"></small>
                </div>
                <div class="btn_login">
                    <a href=""><button type="submit">Đăng nhập</button></a>
                </div>
                <div class="forget_and_register">
                    <a href="index.php?act=forget">Quên mật khẩu</a>
                    <a href="index.php?act=register">Bạn chưa có tài khoản?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>