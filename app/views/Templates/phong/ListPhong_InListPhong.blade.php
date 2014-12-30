<?php
$phongResults = DB::table('PHONG')->orderBy('MA_PHONG', 'asc')->get();
$i = 1;

if (!is_null($phongResults)) {
    foreach ($phongResults as $value) {
        $arr = new PHONG($value->MA_PHONG, $value->TEN_PHONG, $value->SLUONG_MAY);
        echo("
                        <tr>
                            <td>" . $i++ . "</td>
                            <td id=\"$arr->MA_PHONG\" name=\"$arr->MA_PHONG\">$arr->MA_PHONG</td>
                            <td>$arr->TEN_PHONG</td>
                            <td>$arr->SLUONG_MAY</td>");
        echo("<td><button class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#edit" . ($i - 1) . "\">Sửa</button>");
        echo("<div class=\"modal fade\" id=\"edit" . ($i - 1) . "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                              <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                <form action=\"\">
                                  <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Chỉnh sửa</h4>
                                  </div>
                                  <div class=\"modal-body\">
                                  <div class=\"row\">
                                    <div class=\"col-md-12\" id=\"e-$arr->MA_PHONG\" name=\"e-$arr->MA_PHONG\" >

                                      <div class=\"form-group\">
                                        <label for=\"\">Số thứ tự</label>
                                        <input type=\"text\" class=\"form-control\" value=\"" . ($i - 1) . "\" disabled>
                                      </div>
                                      <div class=\"form-group\">
                                        <label for=\"\">Mã Phòng</label>
                                        <input id=\"e1-$arr->MA_PHONG\" type=\"text\" class=\"form-control\" value=\"" .$arr->MA_PHONG. "\">
                                      </div>
                                      <div class=\"form-group\">
                                        <label for=\"\">Tên Phòng</label>
                                        <input id=\"e2-$arr->MA_PHONG\" type=\"text\" class=\"form-control\" value=\"" .$arr->TEN_PHONG. "\">
                                      </div>
                                      <div class=\"form-group\">
                                        <label for=\"\">Số máy tính</label>
                                        <input id=\"e3-$arr->MA_PHONG\" type=\"text\" class=\"form-control\" value=\"" . $arr->SLUONG_MAY. "\">
                                      </div>

                                    </div>
                                  </div><!-- End row -->
                                  </div>
                                  <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Hủy bỏ</button>
                                    <button id=\"b-$arr->MA_PHONG\" onclick=\"updatephong((this).id)\" type=\"button\" class=\"btn btn-primary\" >Lưu thay đổi</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            </td>
                        </tr>");

    }
}
?>