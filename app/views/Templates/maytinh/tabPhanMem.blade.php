<div id="tab3" class="tab-pane fade">
                      <h2 class="text-center">Chi tiết phần mềm của máy:</h2>
                      <div style="height: 600px; overflow: auto; margin-bottom: 10px;">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <td><b>STT</b></td>
                              <td><b>Tên máy</b></td>
                              <td><b>PM Văn phòng</b></td>
                              <td><b>PM lập trình</b></td>
                              <td><b>PM đồ họa</b></td>
                              <td><b>PM Antivirus</b></td>
<!--                              <td><b>Sửa</b></td>-->
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                          $res = sql_query("select * from maytinh_software,maytinh where maytinh.autonum = maytinh_software.idmay and phong=".$pid);
                          $i=1;
                          if(mysql_num_rows($res)){
                              while($arr = mysql_fetch_assoc($res)){
                                  $vanphong="";
                                  $laptrinh="";
                                  $dohoa="";
                                  $baomat="";
                                  $dssw = explode(";",$arr['software']);
                                  foreach($dssw as $val){
                                      $res2 = sql_query("select * from software where autonum=".$val." limit 1");
                                      $arr2 = mysql_fetch_assoc($res2);
                                      if($arr2['NHOM']=='Văn Phòng'){
                                          $vanphong .= $arr2['TENPM']." ".$arr2['VERSION'].",";
                                      }
                                      if($arr2['NHOM']=='Lập Trình'){
                                          $laptrinh .= $arr2['TENPM']." ".$arr2['VERSION'].",";
                                      }
                                      if($arr2['NHOM']=='Đồ Hoạ'){
                                          $dohoa .= $arr2['TENPM']." ".$arr2['VERSION'].",";
                                      }
                                      if($arr2['NHOM']=='Bảo Mật'){
                                          $baomat .= $arr2['TENPM']." ".$arr2['VERSION'].",";
                                      }
                                  }
                                  echo("<tr>
                              <td>$i</td>
                              <td>".$arr['tenmay']."</td>
                              <td>$vanphong</td>
                              <td>$laptrinh</td>
                              <td>$dohoa</td>
                              <td>$baomat</td>

                              <td>

                                <!--<button type=\"submit\" class=\"btn btn-primary\" data-toggle='modal' data-target='#editz".$arr['autonum']."'>Sửa</button>-->
                                <!-- Begin editz1 modal -->
                                <div class='modal fade' id='editz".$arr['autonum']."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
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
                                                                <input type='text' class='form-control' value='".$arr['tenmay']."'>
                                                            </div>
                                                            ");
                                                              $res2 = sql_query("select * from software");
                                                              if(mysql_num_rows($res2)){
                                                                  while($arr2 = mysql_fetch_assoc($res2)){
                                                                      if(stripos($arr['software'],$arr2['AUTONUM'])=== false){
                                                                          echo("<div class=\"col-md-3\">
                                                                                <div class=\"checkbox\" ><label><input type=\"checkbox\" id=\"sw-".$arr['autonum']."-".$arr2['AUTONUM']."\" >".$arr2['TENPM']."</label></div>
                                                                            </div>");
                                                                      }else{
                                                                          echo("<div class=\"col-md-3\">
                                                                                <div class=\"checkbox\" ><label><input type=\"checkbox\" id=\"sw-".$arr['autonum']."-".$arr2['AUTONUM']."\" checked>".$arr2['TENPM']."</label></div>
                                                                            </div>");
                                                                      }

                                                                  }
                                                              }

                                                        echo("</div>
                                                    </div>
                                                    <!-- End row -->
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Hủy bỏ</button>
                                                    <button type='button' class='btn btn-primary' onclick='updatesoftware(".$arr['autonum'].")'>Lưu thay đổi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End editz1 modal -->
                              </td>
                            </tr>");$i++;
                              }
                          }
                          ?>
                          <script>
//                              var updatesoftware = function(data){
//                                  $.ajax({
//                                      type: "POST",
//                                      url: "addmay.php",
//                                      data: {type:'updatesoft',data:data+"&"+$("#select-"+data).val()+"&"+$("#ghichu-"+data).val()}
//                                  })
//                                      .done(function(msg){
//                                          alert(msg);
//                                          location.reload();
//                                      });
//
//                              }
                          </script>
                          </tbody>
                        </table>
                      </div>
<!--                      <button class="btn btn-primary" style="margin-bottom: 20px; margin-right: 20px">Thêm dòng</button>-->
<!--                      <button class="btn btn-primary" style="margin-bottom: 20px;">Xóa dòng</button>-->

</div><!-- End #tab3 -->