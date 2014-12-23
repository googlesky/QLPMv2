<?php
/**
 * Created by PhpStorm.
 * User: Hieu
 * Date: 24/12/14
 * Time: 04:51
 */

$nd = new NGUOIDUNG(0,Session::get('USERNAME'),Session::get('PASSWORD'),'');
$nd->LogOut();

