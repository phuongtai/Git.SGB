<?php
	class LoaiXe_Model extends CI_Model
	{
		public  function taoma()
		{

			# code...
			$this->load->model('taoma');
			$ma=$this->taoma->Timmacuoi("maloaixe","loaixe","LX",5);
			return $ma;
		}
	}
?>