@extends('headermain')

@section('title')
    Administrator CP
@endsection

@section('customJS')
@endsection

@section('customCSS')
@endsection

@section('noidung')


    <div class="container-fluid" id="main_content">

        <div class="row">
            {{--@extends('sidebar') --}}{{--Kế thừa sidebar--}}
            <div class="col-md-10 col-md-offset-2" id="main_primary">

                <div class="row">

                    <div class="col-md-12">

                        <h1>Trang quản lý
                            <small>Thống kê chi tiết</small>
                        </h1>
                        <div class="alert alert-info fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Chào mừng {{Session::get('USERNAME')}}</strong> bạn đã đến với trang quản lý
                            phòng máy. Dưới đây là thống kê tổng quan toàn bộ thông tin của phòng máy hiện tại.
                        </div>

                    </div>
                    <!-- End .col-md-12 -->

                </div>
                <!-- End .row top-->

                <div class="row">

                    <div class="col-md-3">
                        <div class="panel panel-primary">

                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="glyphicon glyphicon-record"></span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <h2>{{DB::table('MAYTINH')->remember(60)->count('*')}}</h2>

                                        <p>máy trên <strong>{{DB::table('PHONG')->remember(60)->count('*')}}</strong>
                                            phòng</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel-heading -->

                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        Tổng số máy hiện tại
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="maytinh.app">Xem chi tiết
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel-footer -->

                        </div>
                        <!-- End .panel panel-primary -->
                    </div>
                    <!-- End .col-md-3 -->

                    <div class="col-md-3">
                        <div class="panel panel-success">

                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="glyphicon glyphicon-download-alt"></span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <h2>{{DB::table('PHANMEM')->remember(60)->count('*')}}</h2>

                                        <p><strong>phần mềm</strong> đã cài</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel-heading -->

                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        Tổng số phần mềm
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="maytinh.app">Xem chi tiết
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel-footer -->

                        </div>
                        <!-- End .panel panel-success -->
                    </div>
                    <!-- End .col-md-3 -->

                    <div class="col-md-3">
                        <div class="panel panel-danger">

                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="glyphicon glyphicon-remove-sign"></span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <h2>0</h2>

                                        <p>máy bị <strong>hỏng</strong></p>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel-heading -->

                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        Tổng số máy bị hỏng
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="maytinh.app">Xem chi tiết
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel-footer -->

                        </div>
                        <!-- End .panel panel-danger -->
                    </div>
                    <!-- End .col-md-3 -->

                    <div class="col-md-3">
                        <div class="panel panel-warning">

                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="glyphicon glyphicon-wrench"></span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <h2>{{DB::table('THIETBI')->remember(60)->count('*')}}</h2>

                                        <p><strong>Thiết bị</strong> đang được dùng</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel-heading -->

                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        Tổng số thiết bị
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="#">Xem chi tiết
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel-footer -->

                        </div>
                        <!-- End .panel panel-warning -->
                    </div>
                    <!-- End .col-md-3 -->

                </div>
                <!-- End .row panel-->

                <div class="row">

                    <div class="col-md-8">

                        <div class="panel panel-primary" id="lichlamviec">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-calendar"></span> Lịch làm việc
                            </div>
                            <div class="panel-body">
                                <ul class="timeline">
                                    @extends('Templates.admin.lichlamviec')
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="panel-group">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-time"></span> Đăng nhập gần đây
                                </div>
                                <div class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="list-group table-hover">
                                            @extends('Templates.admin.DangNhapGanDay')
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End .col-md-4 Right recently IP -->

                </div>
                <!-- End .row center chart -->

            </div>
            <!-- End .col-md-10 -->

        </div>

    </div><!-- End .container-fluid -->
    <script type="text/javascript">
        new Morris.Donut({
            element: 'chart1',
            data: [
                {label: "Máy hỏng", value: 27},
                {label: "Máy đang sửa", value: 15},
                {label: "Máy đang hoạt động", value: 192}
            ]
        });

        //submenu cho sidebar
        $('#menu').metisMenu();
        $(".alert").alert();
    </script>
@endsection