@extends('header')

@section('title')
Đăng Nhập
@endsection

@section('noidung')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
                <div class="form-group">
                    <h2>Vui lòng đăng nhập</h2>
                    <input type="text" id="username" placeholder="Nhập tên đăng nhập" class="form-control" required autofocus>
                    <input type="password" id="password" placeholder="Nhập mật khẩu" class="form-control" required>
                    <div class="checkbox">
                        <input type="checkbox">Nhớ mật khẩu
                    </div>
                    <button id="btnDangNhap" class="btn btn-lg btn-success btn-block" type="button" onclick="login_submit()">Đăng nhập</button>
                </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<script>
function login_submit(){
    $.ajax({
        url: 'take_login.app',
        type: 'POST',
        data: {username: $('#username').val(), password: $('#password').val()}
    },"json")
}
</script>
@endsection