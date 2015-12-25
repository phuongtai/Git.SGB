<?php
	class Tram_Model extends CI_Model
	{
		public  function taoma()
		{

			# code...
			$this->load->model('taoma');
			$ma=$this->taoma->Timmacuoi("matram","tram","TR",5);
			return $ma;
		}
	}
?>