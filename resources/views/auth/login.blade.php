<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mobile Shop : Hệ thống bán hàng trực tuyến</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="{{ url('/css/login.css') }}">
</head>

<body>

<div class="login-wrap">
    <div class="login-html">
        <div style="margin-bottom: 25px;">
            @if(session('error'))
                <p class="text-error">{{ session('error') }}</p>
            @endif
        </div>
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
        <label for="tab-1" class="tab"><a href="{{ url('/login') }}">ĐăngNhập</a></label>
        <input id="tab-2" type="radio" name="tab" class="sign-up">
        <label for="tab-2" class="tab"><a href="{{ url('/register') }}">Đăng Ký</a></label>
        <div class="login-form">
            {{ Form::open(['url' => url('/login'), 'method' => 'POST']) }}
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Tên Đăng Nhập</label>
                    <input id="user" type="text" class="input" name="user_name" value="{{ old('user_name') ?? '' }}">
                    <div><p class="text-error">{{ $errors->first('user_name') }}</p></div>
                </div>
                <div class="group">
                    <label for="pass" class="label">Mật Khẩu</label>
                    <input id="pass" type="password" class="input" data-type="password" name="password">
                    <div><p class="text-error">{{ $errors->first('password') }}</p></div>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Đăng Nhập">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Quên Mật Khẩu?</a>
                </div>
            </div>
            {{ Form::close() }}
            {{ Form::open(['url' => url('/register'), 'method' => 'POST']) }}
            <div class="sign-up-htm">
                <div class="group">
                    <label for="user" class="label">Tên Đăng Nhập</label>
                    <input id="user" type="text" class="input">
                    <div><p class="text-error">{{ $errors->first('user_name') }}</p></div>
                </div>
                <div class="group">
                    <label for="pass" class="label">Mật Khẩu</label>
                    <input id="pass" type="password" class="input" data-type="password">
                    <div><p class="text-error">{{ $errors->first('user_name') }}</p></div>
                </div>
                <div class="group">
                    <label for="pass" class="label">Nhập Lại Mật Khẩu</label>
                    <input id="pass" type="password" class="input" data-type="password">
                    <div><p class="text-error">{{ $errors->first('user_name') }}</p></div>
                </div>
                <div class="group">
                    <label for="pass" class="label">Email</label>
                    <input id="pass" type="text" class="input">
                    <div><p class="text-error">{{ $errors->first('user_name') }}</p></div>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Đăng Ký">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1"><a href="{{ url('/login') }}">Đã Có Tài Khoản?</a></label>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>


</body>

</html>
