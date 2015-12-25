<?php
	class DatCho_Model extends CI_Model
	{
		public  function taoma()
		{

			# code...
			$this->load->model('taoma');
			$ma=$this->taoma->Timmacuoi("madatcho","datcho","DC",9);
			return $ma;
		}
	}
?>