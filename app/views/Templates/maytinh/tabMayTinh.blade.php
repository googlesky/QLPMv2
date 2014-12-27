<div id="tab1" class="tab-pane fade in active">
                  <h2 class="text-center">Chi tiết thông tin máy:</h2>
                  <div style="height: 600px; overflow: auto; margin-bottom: 10px;">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <td><b>STT</b></td>
                            <td><b>Tên máy</b></td>
                            <td><b>Chipset</b></td>
                            <td><b>Mainboard</b></td>
                            <td><b>HDD</b></td>
                            <td><b>RAM</b></td>
                            <td><b>Màn hình</b></td>
                            <td><b>Chỉnh sửa</b></td>
                            <td><b>Chọn</b></td>
                          </tr>
                        </thead>
                        <tbody><?php
                        if(isset($pid)==0){
                            $pid=0;
                        }
                        $res = sql_query("select * from maytinh where phong = ".$pid);
                        $i=1;
                        if(mysql_num_rows($res)>0){
                            while($arr = mysql_fetch_assoc($res)){
                                echo("<tr>
                            <td>".$i."</td>
                            <td>".$arr['tenmay']."</td>
                            <td>".$arr['chipset']."</td>
                            <td>".$arr['main']."</td>
                            <td>".$arr['hdd']."</td>
                            <td>".$arr['ram1']."<br>".$arr['ram2']."</td>
                            <td>".$arr['manhinh']."</td>
                            <td>
                                <button type='submit' class='btn btn-primary' data-toggle='modal' data-target='#editx".$arr['autonum']."'>Sửa</button>
                                <!-- Begin Edit modal -->
                                <div class='modal fade' id='editx".$arr['autonum']."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            <form action=''>
                                                <div class='modal-header'>
                                                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                                    <h4 class='modal-title' id='myModalLabel'>Chỉnh sửa</h4>
                                                </div>
                                                <div class='modal-body'>
                                                    <div class='row'>
                                                        <div class='col-md-12'>

                                                            <div class='form-group'>
                                                                <label for=''>Số thứ tự</label>
                                                                <input type='text' class='form-control' value='".$i."' disabled>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label for=''>Tên máy</label>
                                                                <input id='tenmay-".$arr['autonum']."' type='text' class='form-control' value='".$arr['tenmay']."'>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label for=''>Chipset</label>
                                                                <input id='chip-".$arr['autonum']."' type='text' class='form-control' value='".$arr['chipset']."'>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label for=''>Mainboard</label>
                                                                <input id='main-".$arr['autonum']."' type='text' class='form-control' value='".$arr['main']."'>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label for=''>HDD</label>
                                                                <input id='hdd-".$arr['autonum']."' type='text' class='form-control' value='".$arr['hdd']."'>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label for=''>RAM</label>
                                                                <input id='ram-".$arr['autonum']."' type='text' class='form-control' value='".$arr['ram1'].";".$arr['ram2']."'>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label for=''>Màn hình</label>
                                                                <input id='manhinh-".$arr['autonum']."' type='text' class='form-control' value='".$arr['manhinh']."'>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- End row -->
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Hủy bỏ</button>
                                                    <button type='button' class='btn btn-primary' onclick='editmay(".$arr['autonum'].");'>Lưu thay đổi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Edit modal -->
                            </td>
                            <td><input id=\"m-".$arr['autonum']."\" type=\"checkbox\"></td>

                          </tr>

                          ");
                                $i++;
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                  </div>
                    <script>
                        var editmay = function(data){
                            $.ajax({
                                type: "POST",
                                url: "addmay.php",
                                data: {type:'editmay',data:data+"&"+$("#tenmay-"+data).val()+"&"+$("#chip-"+data).val()+"&"+$("#main-"+data).val()+"&"+$("#hdd-"+data).val()+"&"+$("#ram-"+data).val()+"&"+$("#manhinh-"+data).val()}
                            })
                                .done(function(msg){
                                    alert(msg);
                                    location.reload();
                                });

                        };
                    </script>
                  <button class="btn btn-primary" style="margin-bottom: 20px; margin-right: 20px" data-toggle="modal" data-target='#modalthemmay'>Thêm máy</button>
                  <?php
                  if($classuser==100){
                      echo('<button onclick="delmay()" class="btn btn-primary" style="margin-bottom: 20px;">Xóa máy</button>');
                  }
                  ?>
                    <script>
                        var delmay = function(){
                            $("input:checked").each(function($key,$element){
                                $.ajax({
                                    type:"POST",
                                    url:"delmay.php",
                                    data:{type:"delmay",data:$($element).attr("id")}
                                })
                                    .done(function(msg){
                                        if(msg!=""){
                                            alert(msg);
                                        }
                                    });
                            });
                            alert('Đã Xoá!!!');
                            location.reload();
                        };
                    </script>
                    <!-- Begin thêm máy modal -->
                    <div class='modal fade' id='modalthemmay' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <form action=''>
                                <div class='modal-header'>
                                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                    <h4 class='modal-title' id='myModalLabel'>Thêm Máy</h4>
                                </div>
                                <div class='modal-body'>
                                    <div class='row'>
                                        <div class='col-md-12'>
                                            <div class='form-group'>
                                                <label for=''>Tên máy</label>
                                                <input id="themtenmay" type='text' class='form-control' placeholder="Nhập tên máy">
                                            </div>
                                            <div class='form-group'>
                                                <label for=''>Chipset</label>
                                                <input id="themchip" type='text' class='form-control' placeholder="Nhập ChipSet">
                                            </div>
                                            <div class='form-group'>
                                                <label for=''>Mainboard</label>
                                                <input id="themmain" type='text' class='form-control' placeholder="Nhập Mainboard">
                                            </div>
                                            <div class='form-group'>
                                                <label for=''>HDD</label>
                                                <input id="themhdd" type='text' class='form-control' placeholder="Nhập hdd">
                                            </div>
                                            <div class='form-group'>
                                                <label for=''>RAM</label>
                                                <input id="themram" type='text' class='form-control' placeholder="Nhập ram, nếu 2 thanh thì phân cách bằng dấu ;">
                                            </div>
                                            <div class='form-group'>
                                                <label for=''>Màn hình</label>
                                                <input id="themmanhinh" type='text' class='form-control' placeholder="Nhập tên màn hình">
                                            </div>

                                        </div>
                                    </div>
                                    <!-- End row -->
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Hủy bỏ</button>
                                    <button id="themmaytinh" type='button' class='btn btn-primary' onclick="themmay(<?php echo($pid); ?>)">Thêm Máy</button>
                                </div>
                            </form>
                            <script>
                                var themmay = function(data){
                                    $.ajax({
                                        type: "POST",
                                        url: "addmay.php",
                                        data: {type:'themmay',data:data+"&"+$("#themtenmay").val()+"&"+$("#themchip").val()+"&"+$("#themmain").val()+"&"+$("#themhdd").val()+"&"+$("#themram").val()+"&"+$("#themmanhinh").val()}
                                    })
                                        .done(function(msg){
                                            alert(msg);
                                            location.reload();
                                        });

                                };
                            </script>
                        </div>
                    </div>
                </div>
                <!-- End Edit modal -->

</div><!-- End #table1 -->