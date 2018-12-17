<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Day 001 Login Form</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="{{ url('/css/login.css') }}">
</head>

<body>

<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in">
        <label style="  color: #6a6f8c;" for="tab-1" class="tab"><a href="{{ url('/login') }}">ĐăngNhập</a></label>
        <input id="tab-2" type="radio" name="tab" class="sign-up" checked>
        <label for="tab-2" class="tab"><a href="{{ url('/register') }}">Đăng Ký</a></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Tên Đăng Nhập</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Mật Khẩu</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Đăng Nhập">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Quên Mật Khẩu?</a>
                </div>
            </div>
            <div class="sign-up-htm">
                <div class="group">
                    <label for="user" class="label">Tên Đăng Nhập</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Mật Khẩu</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Nhập Lại Mật Khẩu</label>
                    <input id="pass" type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Email</label>
                    <input id="pass" type="text" class="input">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Đăng Ký">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">Đã Có Tài Khoản?</label>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>
