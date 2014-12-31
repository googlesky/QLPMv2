<div class="panel panel-primary">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-calendar"></span> Lịch làm việc - Tuần <?php
        echo str_replace("2014", "", date("YW"));
        ?>
    </div>
    <div class="panel-body" style="height: 600px; overflow: auto;">

        <?php
        $res = DB::select("SELECT
	NGUOIDUNG.TEN_ND AS TEN_ND,
	PHANCONG.BUOIDAY AS BUOI_DAY,
	PHANCONG.NGAYDAY AS NGAY_DAY,
	PHANCONG.NGUOIDAY AS NGUOI_DAY,
	CONGVIEC.NOIDUNG_CVIEC AS NOI_DUNG,
	PHONG.TEN_PHONG AS TEN_PHONG,
    PHANCONG.ID_CV AS ID_CV
FROM
	PHANCONG
INNER JOIN CONGVIEC ON PHANCONG.STT_CVIEC = CONGVIEC.STT_CVIEC
INNER JOIN NGUOIDUNG ON PHANCONG.MA_ND = NGUOIDUNG.ID
INNER JOIN PHONG ON PHANCONG.MA_PHONG = PHONG.MA_PHONG
ORDER BY
NGAY_DAY ASC,
PHANCONG.MA_PHONG ASC
");

        foreach($res as $arr){

        if (strcasecmp($arr->BUOI_DAY, "Sáng") == 0) {
            $laber = "success";
        } elseif(strcasecmp($arr->BUOI_DAY, "Chiều") == 0) {
            $laber = "warning";
        }else {
            $laber = "danger";
        }

        ?>

        <div class="panel-group" id="accordion">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle='collapse' data-parent='#accordion' href='#collapse{{ $arr->ID_CV }}'>
                            <span class="label label-{{ $laber }}">{{ $arr->NGAY_DAY }}</span> <b>{{ $arr->NGUOI_DAY }}
                                - {{ $arr->TEN_PHONG }}</b>
                        </a>
                        <span class="pull-right"><input type="checkbox" id="pl-{{ $arr->ID_CV }}"></span>
                    </h4>
                </div>
                <div id='collapse{{ $arr->ID_CV }}' class='panel-collapse collapse'>
                    <div class="panel-body">
                        {{ $arr->NOI_DUNG }}
                    </div>
                </div>
            </div>
        </div>

        <?php
        }
        ?>

    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal3">
                    Thêm lịch
                </button>

                <button id="xoalich" class="btn btn-primary pull-right" style="margin-right: 10px;">
                    Xóa lịch
                </button>


                <script>
                    var dellich = function () {
                        $("input:checked").each(function ($key, $element) {
                            $.ajax({
                                type: "POST",
                                url: "delphong.php",
                                data: {type: "dellich", lichno: $($element).attr("id")}
                            })
                                    .done(function (msg) {
                                        alert("Đã xoá!!");
                                        location.reload();
                                    });
                        });
                    };
                    $("#xoalich").click(dellich);
                </script>
                <!-- Modal 1-->
                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" action="add_lich.app">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Thêm lịch</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php
                                            $resCV = DB::table("CONGVIEC")->get();
                                            $CV = Array();
                                            foreach ($resCV as $ArrayCV) {
                                                array_push($CV, $ArrayCV->STT_CVIEC . " - " . $ArrayCV->NOIDUNG_CVIEC);
                                            }

                                            $resPHONG = DB::table("PHONG")->lists("MA_PHONG");

                                            $ArrBuoiDay = array("Sáng", "Chiều","Tối");
                                            ?>
                                            {{ Form::label("Chọn Công Việc: " ) }}
                                            {{ Form::select("Công Việc",$CV,"",array("class" =>"selectpicker","id"=>"select_congviec")) }}
                                            <br>
                                            {{ Form::label("Chọn Phòng: ") }}
                                            {{ Form::select("Phòng",$resPHONG,"",array("class" =>"selectpicker","id"=>"seclect_phong")) }}
                                            <br>
                                            {{ Form::label("Chọn Ngày: ") }}
                                            {{ Form::text('date', null, array('type' => 'text', 'class' => 'form-control datepicker','placeholder' => 'Pick the date this task should be completed', 'id' => 'calendar')) }}
                                            <br>
                                            {{ Form::label("Chọn Buổi: ") }}
                                            {{ Form::select("Buổi",$ArrBuoiDay,"",array("class" =>"selectpicker","id"=>"seclect_buoi")) }}
                                            <br>
                                            {{ Form::label("Người Dạy: ") }}
                                            {{ Form::text("Người Dạy","",array("class" => "input input-sm form-control","id"=>"txtNguoiDay")) }}
                                            <?php

                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
                                    <button id="luulich" type="button" class="btn btn-primary">Lưu thay đổi</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <script>
                    $("#luulich").click(function () {
//alert($("#tengiaovien").val());
                        $.ajax({
                            type: "POST",
                            url: "add_lich.app",
                            data: {
                                congviec: $('#select_congviec option:selected').text(),
                                phong: $('#seclect_phong option:selected').text(),
                                ngayday: $('#calendar').val(),
                                buoiday: $('#seclect_buoi option:selected').text(),
                                nguoiday: $('#txtNguoiDay').val()

                            }
                        })
                                .done(function (msg) {
                                    alert(msg);
                                    location.reload();
                                });

                    });
                </script>
            </div>
        </div>
    </div>

</div>
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