<?php
	class Ghe_model extends CI_Model
	{
		public  function taoma($machuyen)
		{

			# code...
			$ma=$machuyen;
			//echo "$ma";
			$this->load->model('taoma');
			$ma=$this->taoma->Timmacuoi("maghe","ghe","$ma",11);
			return $ma;
		}
		public function khoitaoghe($machuyen)
		{
			$this->load->model('chuyenxe_model');
			$soghe=$this->chuyenxe_model->laysoghecuaxe($machuyen);
			//echo "$soghe<br>";
		    for ($i=1; $i < $soghe ; $i++)
			{
				$ma=$this->ghe_model->taoma($machuyen);
				$ma_lg=($i<11)?"LG01":"LG02"; 
				$str="insert into ghe (MaGhe,MaChuyen,MaLoaiGhe,ViTri,TrangThai) values (\"$ma\",\"$machuyen\",\"$ma_lg\",\"$i\",1)";
				$this->db->query($str);
				//echo "$ma<br>";
			}

		}
	}
?>