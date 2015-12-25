<?php
	class DangKyHoc_Model extends CI_Model
	{
		public  function taoma()
		{

			# code...
			$this->load->model('taoma');
			$ma=$this->taoma->Timmacuoi("madangky","dangkyhoc","DK",9);
			return $ma;
		}
	}
?>