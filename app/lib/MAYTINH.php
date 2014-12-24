<?php
	/**
	* LỚP MÁY TÍNH
	*/
	class MAYTINH
	{
	    public $MA_MT = 0;
	    public $TEN_MT = '';
	    public $NGAYCHUYEN = '';
	    public $GHICHU_NGCHUYENMAY = '';

		function __construct($MA_MT, $TEN_MT, $NGAYCHUYEN, $GHICHU_NGCHUYENMAY)
		{
			$this->MA_MT = $MA_MT;
			$this->TEN_MT = $TEN_MT;
			$this->NGAYCHUYEN = $NGAYCHUYEN;
			$this->GHICHU_NGCHUYENMAY = $GHICHU_NGCHUYENMAY;
		}

		/**
		 * PHƯƠNG THỨC MAYTINH
		 * 
		 */
		

		/**
		 * [getMAYTINH lấy thông tin máy tính từ MA_MT]
		 * @param  int $MA_MT 
		 * @return [type]        [description]
		 */
		public function getTHONGTIN_MAYTINH($MA_MT)
		{
			# code...
		}
		/*Tạo máy tính mới trong database*/
	    function SaveNew()
	    {
	        DB::table('MAYTINH')->insert(array(
	            'MA_MT' => $this->MA_MT,
	            'TEN_MT' => $this->MA_MT,
	            'NGAYCHUYEN' => $this->NGAYCHUYEN,
	            'GHICHU_NGCHUYENMAY' => $this->GHICHU_NGCHUYENMAY
	        ));
    	}
	}
?>