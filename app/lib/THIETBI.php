<?php
	/**
	* 
	*/
	class THIETBI
	{
		var $MA_TB='';
		var $TEN_TB='';
		var $SLUONG_TB='';
		var $DONVIDO_TB='';
		var $LOAI_TB='';
		var $GIATHANH_1TB='';
		function __construct($MA_TB,$TEN_TB,$SLUONG_TB,$DONVIDO_TB,$LOAI_TB,$GIATHANH_1TB)
		{
			$this->MA_TB=$MA_TB;
			$this->TEN_TB=$TEN_TB;
			$this->SLUONG_TB=$SLUONG_TB;
			$this->DONVIDO_TB=$DONVIDO_TB;
			$this->LOAI_TB=$LOAI_TB;
			$this->GIATHANH_1TB=$GIATHANH_1TB;
		}
	}
?>