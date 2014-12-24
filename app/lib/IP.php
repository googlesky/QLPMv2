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
		 /*Tạo IP mới trong database*/
	    function SaveNew()
	    {
	        DB::table('IP')->insert(array(
	            'STT_IP' => $this->STT_IP,
	            'IP' => $this->IP,
	            'THOIGIAN_DN' => $this->THOIGIAN_DN
	        ));
	    }
	}
?>