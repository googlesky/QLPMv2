<?php
/**
 * Created by PhpStorm.
 * User: Hieu
 * Date: 23/12/14
 * Time: 12:19
 */

$nd = new NGUOIDUNG(0,$USERNAME,$PASSWORD,'');

$check = $nd->CheckLogin($USERNAME,$PASSWORD);

if($check==1){
    echo 'Đăng Nhập thành công!';
}elseif($check==-1){
    echo 'Không tồn tại username này';
}else{
    echo 'Sai mật khẩu!';
}