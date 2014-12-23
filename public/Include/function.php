<?php
/**
 * Created by PhpStorm.
 * User: Hieu
 * Date: 23/12/14
 * Time: 11:58
 */

function CheckLogin($username,$password){
    $user = db::table('NGUOIDUNG')->where('USERNAME',$username);
    if(is_null($user)){
        return -1;
    }else{
        if($password==$user['PASSWORD']){
            return 1;
        }else{
            return 0;
        }
    }


}
