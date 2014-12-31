<?php

$lich = explode('-', Input::get('lichno'))[1];

$return = DB::table('PHANCONG')->where('ID_CV', $lich)->delete();

if ($return == 1) {
    echo 'Đã xóa lịch số ' . $lich;
} else {
    echo 'Lỗi vô định';
}