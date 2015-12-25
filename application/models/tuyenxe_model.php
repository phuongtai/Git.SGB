<?php

	class TuyenXe_Model extends CI_Model
	{
		public  function taoma()
		{

			# code...
			$this->load->model('taoma');
			$ma=$this->taoma->Timmacuoi("matuyen","tuyenxe","TU",5);
			return $ma;
		}
	}
?>