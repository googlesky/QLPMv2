<?php
	/**
	* LỚP PHANCUNG
	*/
	class PHANCUNG
	{
		public $MA_PHANCUNG = 0;
		public $TEN_PHANCUNG = '';
		public $HANG_SX_PHANCUNG = '';
		public $DONVITINH = '';
		public $GIATHANH_1PHANCUNG = 0;


		function __construct($MA_PHANCUNG, $TEN_PHANCUNG, $HANG_SX_PHANCUNG, $DONVITINH, $GIATHANH_1PHANCUNG)
		{
			$this->MA_PHANCUNG = $MA_PHANCUNG;
			$this->TEN_PHANCUNG = $TEN_PHANCUNG;
			$this->HANG_SX_PHANCUNG = $HANG_SX_PHANCUNG;
			$this->DONVITINH = $DONVITINH;
			$this->GIATHANH_1PHANCUNG =$GIATHANH_1PHANCUNG;
		}

		/**
		 * 
		 * PHƯƠNG THỨC
		 * 
		 */
		
		/**
		 * [getTHONGTIN_PHANCUNG lấy thông tin phần cứng từ MA_PHANCUNG]
		 * @param  int $MA_PHANCUNG 
		 * @return [type]              [description]
		 */
		public function getTHONGTIN_PHANCUNG($MA_PHANCUNG)
		{
			# code...
		}
		/*Tạo phần cứng mới trong database*/
	    function SaveNew()
	    {
	        DB::table('PHANCUNG')->insert(array(
	            'MA_PHANCUNG' => $this->MA_PHANCUNG,
	            'TEN_PHANCUNG' => $this->TEN_PHANCUNG,
	            'HANG_SX_PHANCUNG' => $this->HANG_SX_PHANCUNG,
	            'DONVITINH' => $this->DONVITINH,
	            'GIATHANH_1PHANCUNG' => $this->GIATHANH_1PHANCUNG
	        ));
	    }
	}
?>