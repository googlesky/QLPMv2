@extends('header')

@section('title')
Đăng Nhập
@endsection

@section('noidung')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form class="form" action="{{asset('take_login.app')}}" id="form-login">
                <div class="form-group">
                    <h2>Vui lòng đăng nhập</h2>
                    <input type="text" id="username" placeholder="Nhập tên đăng nhập" class="form-control" required autofocus>
                    <input type="password" id="password" placeholder="Nhập mật khẩu" class="form-control" required>
                    <div class="checkbox">
                        <input type="checkbox">Nhớ mật khẩu
                    </div>
                    <button class="btn btn-lg btn-success btn-block" type="submit">Đăng nhập</button>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<script>
    $('#form-login').validate({
        rules:{
            username:{
                request:true,
                minleg
            }
        }
    })
</script>
@endsection