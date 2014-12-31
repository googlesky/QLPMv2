<?php

$data = explode(';',Input::get('data'));

$return = DB::table('PHONG')
    ->where('MA_PHONG',$data[1])
    ->update(array(
        'MA_PHONG' => $data[1],
        'TEN_PHONG' => $data[2],
        'SLUONG_MAY' => $data[3]
    ));

if ($return == 1) {
    echo 'Đã update thành công!';
} else {
    echo 'Lỗi vô định';
}