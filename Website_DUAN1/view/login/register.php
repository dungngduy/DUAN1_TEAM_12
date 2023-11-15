<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="../../css/register.css">
</head>
<body>
    <div class="container">
        <div class="img_fix">
            <img src="../../img/register.jpg" alt="">
        </div>
        <div class="register_box">
            <h3>ĐĂNG KÍ</h3>
            <form action="" onsubmit="return formValidate();">
                <div class="input_box">
                    <input id="username" type="text" name="" placeholder="Tên tài khoản">
                    <span></span>
                    <small id="errorName"></small>
                </div>
                <div class="input_box">
                    <input id="email" type="email" name="" placeholder="Email">
                    <span></span>
                    <small id="errorEmail"></small>
                </div>
                <div class="input_box">
                    <input id="password" type="pass" name="" placeholder="Mật khẩu">
                    <span></span>
                    <small id="errorPass"></small>
                </div>
                <div class="input_box">
                    <input id="confirm-password" type="pass" name="" placeholder="Nhập lại mật khẩu">
                    <span></span>
                    <small id="errorConfirmPass"></small>
                </div>
                <div class="btn_login">
                    <a href=""><button type="submit">Đăng kí</button></a>
                </div>
                <div class="forget_and_login">
                    <a href="">Quên mật khẩu</a>
                    <a href="">Đăng nhập</a>
                </div>
            </form>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>