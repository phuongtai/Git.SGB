<?php
	class LoaiGhe_Model extends CI_Model
	{
		public  function taoma()
		{

			# code...
			$this->load->model('taoma');
			$ma=$this->taoma->Timmacuoi("maloaighe","loaighe","LG",5);
			return $ma;
		}
	}
?>