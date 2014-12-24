<?php
	/**
	* 
	*/
	class PHONG
	{
		var $MA_PHONG='';
		var $TEN_PHONG='';
		var $SLUONG_MAY='';
		function __construct($MA_PHONG,$TEN_PHONG,$SLUONG_MAY)
		{
			$this->MA_PHONG=$MA_PHONG;
			$this->TEN_PHONG=$MA_PHONG;
			$this->SLUONG_MAY=$SLUONG_MAY;
		}
		/**
		 * Phương thức
		 */
		//Hàm chuyển máy theo đơn vị
		function get_DONVI(){

		}
		//Hàm quản lý thiết bị trong phòng
		function get_THIETBI(){

		}
		//hàm cho biết công việc của phòng
		function get_CONGVIEC(){

		}
		//hàm quản lý máy tính của phòng
		function get_MAYTINH(){

		}
		/*Tạo phòng mới trong database*/
	    function SaveNew()
	    {
	        DB::table('PHONG')->insert(array(
	            'MA_PHONG' => $this->MA_PHONG,
	            'TEN_PHONG' => $this->TEN_PHONG,
	            'SLUONG_MAY' => $this->SLUONG_MAY
	        ));
	    }
	}
?>
