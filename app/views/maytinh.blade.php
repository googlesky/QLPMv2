@extends('headermain')

@section('title')
    Administrator CP
@stop

@section('customJS')
@stop

@section('customCSS')
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
@stop

@section('NoiDung')
    @include('menuheader')
    <div class="container-fluid" id="main_content">
        @include('sidebar')
        <div class="row">

            <div class="col-md-10 col-md-offset-2" id="main_primary">

                <div class="row">

                    <div class="col-md-12">

                        <h1>Trang quản lý
                            <small>Thống kê chi tiết</small>
                        </h1>
                        <div class="alert alert-info fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Chào mừng {{Session::get('USERNAME')}}</strong> bạn đã đến với chức năng quản lý máy
                        </div>

                    </div>
                    <!-- End .col-md-12 -->

                </div>
                <!-- End .row top-->
                
                <div class="row">
                    <div class="col-md-12" >
                      <h2>Chọn phòng: </h2>
                      <hr />
                    </div>
                </div><!-- End .row -->
                
                <div class="row space">
                    <div class="container-fluid">
                    <!-- IMPORT PHẦN CHỌN PHÒNG -->
                        @include('Templates.maytinh.ChonPhong')
                    </div><!-- End .container-fluid -->
                </div><!-- End .row space -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid">

                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">Máy tính</a></li>
                                <li><a href="#tab2" data-toggle="tab">Tình trạng</a></li>
                                <li><a href="#tab3" data-toggle="tab">Phần mềm</a></li>
                            </ul>

                            @include('loadDataTheoPhong')

                            <div class="tab-content">
                                
                                @include('tabMayTinh')

                                @include('tabTinhTrang')

                                @include('tabPhanMem')

                            </div><!-- End .tab-content -->


                        </div><!-- End .container-fluid -->
                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->

            </div>
            <!-- End .col-md-10 -->

        </div>

    </div><!-- End .container-fluid -->
   
@stop