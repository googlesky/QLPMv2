<?php
$congviec = intval( explode("-",Input::get('congviec'))[0]);
$phong = Input::get('phong');
$ngayday = Input::get('ngayday');
$buoiday = Input::get('buoiday');
$nguoiday = Input::get('nguoiday');
$autonumber = DB::table('PHANCONG')->max('ID_CV');
$autonumber++;

if(is_null(Session::get('USERNAME'))){
    $nguoidung = 1;
}else{
    $nguoidung = DB::table('NGUOIDUNG')->where('USERNAME',"=",Session::get('USERNAME'))->get('ID');
}

$return = DB::table('PHANCONG')->insert(
    array(
        'ID_CV'=>$autonumber,
        'STT_CVIEC'=>$congviec,
        'MA_ND' => $nguoidung,
        'MA_PHONG' => $phong,
        'NGAYDAY' => date('Y-m-d',strtotime($ngayday)),
        'BUOIDAY' => $buoiday,
        'NGUOIDAY' => $nguoiday
    )
);

if($return==1){
    echo "Đã thêm vào csdl thành công!";
}else{
    echo "Lỗi vô định!";
}