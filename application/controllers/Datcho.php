<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Datcho extends CI_Controller{
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
	public function chuyen($machuyen)
	{
		$this->load->model('ChuyenXe_model');
		if($this->ChuyenXe_model->thong_tin_chuyen($machuyen) != NULL)
		$result['thongtin'] = $this->ChuyenXe_model->thong_tin_chuyen($machuyen);

		$this->load->view('templates/header');
		$str="Select maghe,trangthai,vitri from ghe where MaChuyen=".$this->db->escape($machuyen);
		$kq=$this->db->query($str);
		$result['data']=$kq->result();
		$this->load->model('ChuyenXe_model');
		$soghe=$this->chuyenxe_model->laysoghecuaxe($machuyen);
		//print_r($result);
		switch ($soghe) {
			case 45: $this->load->view('DatCho/datcho_view(45)',$result);
			break;
			case 30: $this->load->view('DatCho/datcho_view(30)',$result);
			break;
			case 40: $this->load->view('DatCho/datcho_view(40)',$result);
			break;
		}

	}
	public function mua_ve($machuyen){
		$this->load->model('DatCho_model');
		if($this->input->post('submit')){
			echo $this->input->post('vitri');
		}
	}
	
}
?>

