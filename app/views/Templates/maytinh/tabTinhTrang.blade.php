<div id="tab2" class="tab-pane fade">
                      <h2 class="text-center">Chi tiết tình trạng máy:</h2>
                      <div style="height: 600px; overflow: auto; margin-bottom: 10px;">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <td><b>STT</b></td>
                              <td><b>Tên máy</b></td>
                              <td><b>Tình trạng hiện tại</b></td>
                              <td><b>Ngày hỏng</b></td>
                              <td><b>Ngày sửa xong</b></td>
                              <td><b>Số lần sửa</b></td>
                              <td><b>Báo hỏng</b></td>
<!--                              <td><b>Chỉnh sửa</b></td>-->
<!--                              <td><b>Chọn</b></td>-->
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                          $res = sql_query("select * from maytinh where phong = ".$pid);
                          $i=1;
                          if(mysql_num_rows($res)>0){
                              while($arr = mysql_fetch_assoc($res)){
                                   $res2 = sql_query("select * from maytinh_tinhtrang where idmay=".$arr['autonum']." ORDER by autonum DESC");
                                   $tinhtrang='Hoạt Động';
                                   $label = 'success';
                                  $ngayhong = 'N/A';
                                  $ngaysua = 'N/A';
                                  $solansua = mysql_num_rows($res2);
                                   if(mysql_num_rows($res2)>0){
                                       $arr2 = mysql_fetch_assoc($res2);

                                       $tinhtrang = $arr2['tinhtrang'];
                                       if($tinhtrang=='Hoạt Động'){
                                            $label = 'success';
                                       }else{
                                            $label = 'danger';
                                       }
                                       if($arr2['ngayhong']!=""){
                                           $ngayhong = $arr2['ngayhong'];
                                       }
                                       if($arr2['ngaysua']!=""){
                                           $ngaysua = $arr2['ngaysua'];
                                       }

                                    }
                                echo("                            <tr>
                              <td>$i</td>
                              <td>".$arr['tenmay']."</td>
                              <td> <span class=\"label label-$label\">$tinhtrang</span> </td>
                              <td>$ngayhong</td>
                              <td>$ngaysua</td>
                              <td>$solansua</td>
                              <td><button type='submit' class='btn btn-danger' data-toggle='modal' data-target='#mdReport".$arr['autonum']."'>Báo hỏng</button></td>

                              <!-- Begin Report modal -->
                                <div class='modal fade' id='mdReport".$arr['autonum']."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
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
                                                                <input type='text' class='form-control' value='$i' disabled>
                                                            </div>
                                                            <div class='form-group'>
                                                                <label for=''>Tên máy</label>
                                                                <input type='text' class='form-control' value='".$arr['tenmay']."' disabled>
                                                            </div>

                                                            <div class='form-group'>
                                                                <label for=''>Tình trạng hiện tại</label>
                                                                <select id=\"select-".$arr['autonum']."\" class=\"selectpicker\"><option>Đã Hỏng</option><option>Hoạt Động</option></select>
                                                            </div>

                                                            <div class='form-group'>
                                                                <label for=''>Ghi Chú</label>
                                                                <input id=\"ghichu-".$arr['autonum']."\" type='text' class='form-control' value='Máy hư'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End row -->
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Hủy bỏ</button>
                                                    <button onclick=\"report(".$arr['autonum'].")\" type='button' class='btn btn-primary'>Lưu thay đổi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End report modal -->
                            </tr>");$i++;
                              }
                          }
                          ?>
                          <script>
                              var report = function(data){
                                  $.ajax({
                                      type: "POST",
                                      url: "addmay.php",
                                      data: {type:'report',data:data+"&"+$("#select-"+data).val()+"&"+$("#ghichu-"+data).val()}
                                  })
                                      .done(function(msg){
                                          alert(msg);
                                          location.reload();
                                      });

                              };
                          </script>
                          </tbody>
                        </table>
                      </div>

<!--                      <button class="btn btn-primary" style="margin-bottom: 20px; margin-right: 20px">Thêm dòng</button>-->
<!--                      <button class="btn btn-primary" style="margin-bottom: 20px;">Xóa dòng</button>-->

</div><!-- End #tab2 -->