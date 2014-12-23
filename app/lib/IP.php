<?php
	/**
	* LỚP IP
	*/
	class IP
	{
		public $STT_IP = 0;
		public $IP = '';
		public $THOIGIAN_DN;
		function __construct($STT_IP, $IP, $THOIGIAN_DN)
		{
			$this->STT_IP = $STT_IP;
			$this->IP = $IP;
			$this->THOIGIAN_DN = $THOIGIAN_DN;
		}

		/**
		 * 
		 * PHƯƠNG THỨC
		 * 
		 */
		
		/**
		 * [getTHONGTIN_IP lấy thông tin IP từ địa chỉ IP]
		 * @param  string $IP 
		 * @return [type]     [description]
		 */
		public function getTHONGTIN_IP($IP)
		{
			# code...
		}
	}
?>