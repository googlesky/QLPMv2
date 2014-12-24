<?php
	/**
	* 
	*/
	class CONGVIEC
	{
		var $STT_CVIEC='';
		var $NOIDUNG_CVIEC='';
		
		function __construct($STT_CVIEC,$NOIDUNG_CVIEC)
		{
			$this->STT_CVIEC=$STT_CVIEC;
			$this->NOIDUNG_CVIEC=$NOIDUNG_CVIEC;
		}
		 /*Tạo công việc mới trong database*/
	    function SaveNew()
	    {
	        DB::table('CONGVIEC')->insert(array(
	            'STT_CVIEC' => $this->STT_CVIEC,
	            'NOIDUNG_CVIEC' => $this->NOIDUNG_CVIEC
	        ));
	    }
	}
?>