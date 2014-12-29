<div class="col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-calendar"></span> Lịch làm việc - Tuần
            {{str_replace("2014","",date("YW"))}}
        </div>
        <div class="panel-body" style="height: 600px; overflow: auto;">

            <div class="panel-group" id="accordion">


                <?php

                $res = DB::select('SELECT
	NGUOIDUNG.TEN_ND AS TEN_ND,
	PHANCONG.BUOIDAY AS BUOI_DAY,
	PHANCONG.NGAYDAY AS NGAY_DAY,
	PHANCONG.NGUOIDAY AS NGUOI_DAY,
	CONGVIEC.NOIDUNG_CVIEC AS NOI_DUNG,
	PHONG.TEN_PHONG AS TEN_PHONG
FROM
	PHANCONG
INNER JOIN CONGVIEC ON PHANCONG.STT_CVIEC = CONGVIEC.STT_CVIEC
INNER JOIN NGUOIDUNG ON PHANCONG.MA_ND = NGUOIDUNG.ID
INNER JOIN PHONG ON PHANCONG.MA_PHONG = PHONG.MA_PHONG
HAVING
NGAY_DAY >= NOW()
ORDER BY
NGAY_DAY ASC,
PHANCONG.MA_PHONG ASC');

                foreach ($res as $arr) {
                    if (strtoupper(substr($arr->BUOI_DAY, 1, 1)) == 'S') {
                        $mau = 'alert-success';
                    } elseif (strtoupper(substr($arr->BUOI_DAY, 1, 1)) == 'C') {
                        $mau = 'alert-intro';
                    } else {
                        $mau = 'alert-danger';
                    }

                    $head = $arr->TEN_PHONG . '' . $arr->NGAY_DAY . ' - ' . $arr->BUOI_DAY . ' (' . $arr->NGUOI_DAY . ')';
                    $msg = ' (' . $arr->NGUOI_DAY . ') ' . $arr->NOI_DUNG;
                    echo '<div class="alert ' . $mau . ' alert-dismissible fade in" role="alert">
                    <h4>' . $head . '</h4>

                    <p>' . $msg . '</p>
                </div>';
                }

                ?>


            </div>
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
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Thêm lịch</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"><label for="">Giáo viên:</label><br>

                                            </div>
                                            <div class="form-group"><label for="">Chọn Phòng: </label><br>

                                            </div>
                                            <div class="form-group"><label for="">Ngày:</label><input id="ngaythanglich"
                                                                                                      type="text"
                                                                                                      class="form-control"
                                                                                                      placeholder="Nhập Ngày dạng yyyy-mm-dd">
                                            </div>
                                            <div class="form-group"><label for="">Buổi:</label><br><select id="buoi"
                                                                                                           class="selectpicker">
                                                    <option>Sáng</option>
                                                    <option>Chiều</option>
                                                </select></div>
                                            <div class="form-group"><label for="">Tiêu Đề: </label><input id="tieude"
                                                                                                          type="text"
                                                                                                          class="form-control"
                                                                                                          placeholder="Nhập tiêu đề cho nội dung"><select
                                                    id="cat" class="selectpicker">
                                                    <option>Dạy Học</option>
                                                    <option>Bảo Trì</option>
                                                    <option>Sự Cố</option>
                                                    <option>Khác</option>
                                                </select></div>
                                            <div class="form-group"><label for="">Nội dung:</label><textarea
                                                    id="noidung" cols="5" rows="5" class="form-control"
                                                    placeholder="Nhập nội dung vào đây"></textarea></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
                                    <button id="luulich" type="button" class="btn btn-primary">Lưu thay đổi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $("#luulich").click(function () {
                            //alert($("#tengiaovien").val());
                            $.ajax({
                                type: "POST",
                                url: "addphong.php",
                                data: {
                                    type: 'luulich',
                                    data: $("#tengiaovien").children(":selected").attr("id") + ';' + $("#chonphong").children(":selected").attr("id") + ';' + $("#ngaythanglich").val() + ';' + $("#buoi").val() + ';' + $("#tieude").val() + ';' + $("#noidung").val() + ';' + $("#cat").val()
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
</div>