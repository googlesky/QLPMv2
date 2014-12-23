<?php
	/**
	* LỚP PHANMEM
	*/
	class PHANMEM
	{
		public $MA_PM = 0;
		public $TEN_PM = '';
		public $PHIENBAN_PM = '';

		function __construct($MA_PM, $TEN_PM, $PHIENBAN_PM)
		{
			$this->MA_PM = $MA_PM;
			$this->TEN_PM = $TEN_PM;
			$this->PHIENBAN_PM = $PHIENBAN_PM;
		}

		/**
		 * 
		 * PHƯƠNG THỨC 
		 * 
		 */
		
		/**
		 * [getTHONGTIN_PHANMEM lấy thông tin PM bằng MA_PM]
		 * @param  int $MA_PM 
		 * @return [type]        [description]
		 */
		public function getTHONGTIN_PHANMEM($MA_PM)
		{
			# code...
		}
	}
?>