<?php

/**
 * Lớp NGUOIDUNG
 */
class NGUOIDUNG
{
    /**
     * @var int
     */
    public $ID = 0;
    public $USERNAME = '';
    public $PASSWORD = '';
    public $TEN_ND = '';
    public $MA_CVU;

    /**
     * [__construct hàm khởi dựng với 4 tham số]
     * @param int $MA_ND
     * @param string $USERNAME
     * @param string $PASSWORD
     * @param string $TEN_ND
     */
    function __construct($ID, $USERNAME, $PASSWORD, $TEN_ND)
    {
        $this->ID = $ID;
        $this->USERNAME = $USERNAME;
        $this->PASSWORD = $PASSWORD;
        $this->TEN_ND = $TEN_ND;
    }

    /**
     * thuộc tính cho đối tượng
     */

    // MA_ND
    function getMA_ND()
    {
        return $this->MA_ND;
    }

    function setMA_ND($MA_ND)
    {
        $this->MA_ND = $MA_ND;
    }

    // USERNAME
    function getUSERNAME()
    {
        return $this->$USERNAME;
    }

    function setUSERNAME($USERNAME)
    {
        $this->USERNAME = $USERNAME;
    }

    // PASSWORD
    function getPASSWORD()
    {
        return $this->$PASSWORD;
    }

    function setPASSWORD($PASSWORD)
    {
        $this->PASSWORD = $PASSWORD;
    }

    // TEN_ND
    function getTEN_ND()
    {
        return $this->$TEN_ND;
    }

    function setTEN_ND($TEN_ND)
    {
        $this->TEN_ND = $TEN_ND;
    }


    /**
     *
     * PHƯƠNG THỨC
     *
     */


    /*Lấy chức vụ từ mã chức vụ*/
    function getChucVu()
    {
        return DB::table('CHUCVU')->where('MA_VCU', '=', $this->MA_CVU);
    }


    /*Tạo người dùng mới trong database*/
    function SaveNew()
    {
        DB::table('NGUOIDUNG')->insert(array(
            'ID' => $this->ID,
            'MA_CVU' => $this->MA_CVU,
            'USERNAME' => $this->USERNAME,
            'PASSWORD' => $this->PASSWORD,
            'TEN_ND' => $this->TEN_ND
        ));
    }

    /*Check password và username có đúng ko!*/
    function CheckLogin($username,$password){
        $user = DB::table('NGUOIDUNG')->where('USERNAME',$username)->first();
        if(is_null($user)){
            return -1;
        }else{
            if($password==$user->PASSWORD){
                return 1;
            }else{
                return 0;
            }
        }
    }

    function LogOut(){
//        echo Form::label('ThongBao','Bạn đã logout thành công!');
        Session::flush();
        echo View::make('login');

    }
}

?>