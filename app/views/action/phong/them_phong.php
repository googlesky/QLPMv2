<?php
//var_dump(Input::all());

$result = DB::table('PHONG')->where('MA_PHONG',Input::get('maphong'))->get();

if(count($result)>0){
    die('Mã Phòng Trùng');
}else{
    $return = DB::table('PHONG')->insert(array(
        'MA_PHONG' => Input::get('maphong'),
        'TEN_PHONG' => Input::get('tenphong'),
        'SLUONG_MAY' => Input::get('somay')
    ));
}

if ($return == 1) {
    echo 'Đã thêm thành công!';
} else {
    echo 'Lỗi vô định';
}