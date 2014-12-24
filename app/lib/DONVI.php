<?php
//khai báo class
	/**
	* 
	*/
	class DONVI 
	{
		var $MA_DVI='';
		var $TEN_DVI='';

		function __construct($MA_DVI,$TEN_DVI)
		{
			$this->MA_DVI=$MA_DVI;
			$this->TEN_DVI=$TEN_DVI;
		}
		 /*Tạo đơn vị mới trong database*/
	    function SaveNew()
	    {
	        DB::table('DONVI')->insert(array(
	            'MA_DVI' => $this->MA_DVI,
	            'TEN_DVI' => $this->TEN_DVI	       
	       ));
	    }
	}
?>