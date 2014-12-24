<!-- SIDEBAR ================================================================ -->
<div class="col-md-2 sidebar">

    <div class="row">
        <div class="col-md-12">
            <div class="img-circle" id="avatar">
                <img alt="My Avatar" src="images/avatar.jpg" class="center-block img-circle img-responsive">
            </div>
            <p>
            <h1 class="text-center" style="color: #878787;">{{Session::get('USERNAME')}}</h1>
            </p>
        </div><!-- End .col-md-12 .avatar -->
    </div>
    <ul id="menu" class="nav nav-sidebar">
        <li class="active">
            <a href="admincp.app">Trang chủ</a>

        </li>
        <li>
            <a href="#">Quản lý <span class="glyphicon glyphicon-plus pull-right"></span></a>
            <ul class="list-unstyled nav">
                <li><a href="phong.php">Phòng</a></li>
                <li><a href="may.php">Máy tính</a></li>
                <li><a href="phanquyen.php">Phân quyền</a></li>
            </ul>
        </li>
        <li><a href="#">Người dùng</a></li>
    </ul>
</div><!-- End .col-md-2 .sidebar-->