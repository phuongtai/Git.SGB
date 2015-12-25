<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class DatCho extends CI_Controller{
	public function khoitaoghe($machuyen)
	{
		$this->load->model('ghe_model');
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
	public function index()
	{
		echo "Đây là trang index";
	}
	public function Dat($machuyen)
	{
		$str="Select maghe,trangthai,vitri from ghe where MaChuyen='$machuyen'";
		$kq=$this->db->query($str);
		$result['data']=$kq->result();
		$this->load->model('chuyenxe_model');
		$soghe=$this->chuyenxe_model->laysoghecuaxe($machuyen);
		//print_r($result);
		if($soghe==30)
		{
			$this->load->view('datcho_view(30)',$result);
		}
		else
			$this->load->view('datcho_view',$result);
	}
}
?>

