<!-- MENU HEADER ================================================================== -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">CTEC SYSTEM</a>
    </div>

    <!-- Navigation top static -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">

        <ul class="nav navbar-nav">
            <li class="active"><a href="#">LINK</a></li>
            <li><a href="#">LINK</a></li>
            <li><a href="#">LINK</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right container-fluid">
            <li>
                <form class="navbar-form" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm..." style="border-radius: 30px;">
                    </div>
                </form>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-bell"></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="setting-mess.html">Zack Le&nbsp;&nbsp;&nbsp;<span class="badge pull-right">3</span></a></li>
                    <li><a href="setting-mess.html">ZuVN&nbsp;&nbsp;&nbsp;<span class="badge pull-right">1</span></a></li>
                    <li><a href="setting-mess.html">Nhanh&nbsp;&nbsp;&nbsp;<span class="badge pull-right">5</span></a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"><?php //echo $_COOKIE['username'] ?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="setting.html"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Thông tin cá nhân</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;Tùy chọn</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>&nbsp;Đăng xuất</a></li>
                </ul>
            </li>
        </ul>

    </div><!-- /.navbar-collapse -->
</div>
<!-- BODY ================================================================== -->
<div class="container-fluid" id="main_content">

    <div class="row">
        <!-- SIDEBAR ================================================================ -->
        <div class="col-md-2 sidebar">

            <div class="row">
                <div class="col-md-12">
                    <div class="img-circle" id="avatar">
                        <img alt="My Avatar" src="{{asset('assets/images/avatar.jpg')}}" class="center-block img-circle img-responsive">
                    </div>
                    <p>
                    <h1 class="text-center" style="color: #878787;"><?php echo $_COOKIE['username'] ?></h1>
                    </p>
                </div><!-- End .col-md-12 .avatar -->
            </div>
            <ul id="menu" class="nav nav-sidebar">
                <li class="active">
                    <a href="admin.php">Trang chủ</a>

                </li>
                <li>
                    <a href="#">Quản lý <span class="glyphicon glyphicon-plus pull-right"></span></a>
                    <ul class="list-unstyled nav">
                        <li><a href="phong.app">Phòng</a></li>
                        <li><a href="may.app">Máy tính</a></li>
                        <li><a href="phanquyen.php">Phân quyền</a></li>
                    </ul>
                </li>
                <li><a href="setting.html">Người dùng</a></li>
            </ul>
        </div><!-- End .col-md-2 .sidebar-->
    </div>
        <!-- RIGHT MAIN ============================================================ -->