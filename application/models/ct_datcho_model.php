<?php
	class CT_datcho_model extends CI_Model
	{
		public  function taoma()
		{

			# code...
			$this->load->model('taoma');
			$ma=$this->taoma->Timmacuoi("madatcho","ct_datcho","CT",9);
			return $ma;
		}
	}
?>