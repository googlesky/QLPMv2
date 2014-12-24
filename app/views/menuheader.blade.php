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