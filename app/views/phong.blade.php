@extends('headermain')

@section('title')
    Quản lý Phòng Máy Tính
@stop

@section('NoiDung')
    @include('menuheader')
    <div class="container-fluid" id="main_content">
    @include('sidebar')
    <div class="col-md-10 col-md-offset-2" id="main_primary">

        <div class="row">

            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-4">

                        <h1>Quản lý phòng
                            <small>Chi tiết về quản lý phòng</small>
                        </h1>

                    </div>

                </div>


                <div class="alert alert-info fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Chào mừng {{Session::get('USERNAME')}}</strong> bạn đã đến với chức năng quản lý
                    phòng.
                </div>

                <!-- Button trigger modal -->


            </div>
            <!-- End .col-md-12 -->

        </div>
        <!-- End .row top-->

        <div class="row">
            <div class="col-md-6">
                @include('Templates.phong.ListPhong')
            </div>
        </div>
    </div> <!-- End .row tables -->


    </div><!-- End .container-fluid -->
    <script type="text/javascript">
        $('#menu1').metisMenu();
        $(".alert").alert();
    </script>
    <script>
        $('.selectpicker').selectpicker({
            style: 'btn-info',
            size: 4
        });

    </script>
@stop
