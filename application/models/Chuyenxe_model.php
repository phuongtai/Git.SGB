<?php
	class Chuyenxe_model extends CI_Model
	{
		public  function taoma()
		{

			# code...
			$this->load->model('taoma');
			$ma=$this->taoma->Timmacuoi("machuyen","chuyenxe","CH",9);
			return $ma;
		}
		public function laysoghecuaxe($machuyen)
		{
			$string="select soghe from chuyenxe c,xe ,loaixe lx where c.machuyen='$machuyen' 
			and c.bienso=xe.bienso and xe.maloaixe=lx.maloaixe";
			$result = $this->db->query($string);
			$soghe=0;
			foreach ($result->result() as $row)
			{
				$soghe=$row->soghe;
			}
			return $soghe;

		}
		public function thong_tin_chuyen($machuyen){
			$mc = $this->db->escape($machuyen);
			$sql = "SELECT
				chuyenxe.MaChuyen,
				tuyenxe.LoTrinh,
				DATE_FORMAT(chuyenxe.NgayDi,'%d-%m-%Y') as NgayDi,
				chuyenxe.ThoiGianXuatBen,
				chuyenxe.GiaChuyen
				FROM chuyenxe INNER JOIN tuyenxe 
				ON chuyenxe.MaTuyen = tuyenxe.MaTuyen 
				AND chuyenxe.MaTuyen = tuyenxe.MaTuyen
				where MaChuyen = ".$mc;
			$rs = $this->db->query($sql);
			if($rs){
				return $rs->result();
			}
			else return NULL;
		}
	}
?>