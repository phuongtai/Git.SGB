<?php
	class KhoaHoc_Model extends CI_Model
	{
		public  function taoma()
		{

			# code...
			$this->load->model('taoma');
			$ma=$this->taoma->Timmacuoi("makhoahoc","khoahoc","KH",8);
			return $ma;
		}
	}
?>