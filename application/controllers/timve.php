<?php
class Timve extends CI_Controller{
	public function index()
    {	
        
        $data['tram'] = $this->db->select('*')->from('tram')->get()->result_array();
		if($this->input->post('submit'))
		{
				$diemdi = $this->input->post('diemdi');
				$diemden = $this->input->post('diemden');
				$ngaydi = $this->input->post('ngaydi');
				$date = new DateTime($ngaydi);
				$date = $date->format('Y-m-d');
			}
		if($diemdi == NULL || $diemden == NULL ){redirect('home','refresh');}
		if($diemden == $diemdi){		
			$this->session->set_flashdata('message', 'Bạn đã nhập trùng. Vui Lòng chọn lại');

			redirect('home','refresh');
			    
		}
		else{
			$sql1 = "SELECT DISTINCT tuyenxe.MaTuyen FROM tuyenxe WHERE tuyenxe.TramBatDau = ".$this->db->escape($diemdi)."AND tuyenxe.TramKetThuc =".$this->db->escape($diemden);
				$query = $this->db->query($sql1);
				$MaTuyen = $query->row();
				if(!isset($MaTuyen)){
						$this->session->set_flashdata('message', 'Hệ thống chưa cung cấp tuyến xe này. Vui Lòng chọn lại');
						redirect('home','refresh');
				}
				else{
				$MaTuyen = $MaTuyen->MaTuyen;
			//$ngaydi = $this->db->escape('ngaydi');
				$sql = "SELECT
					chuyenxe.MaChuyen,
					tr1.TenTram AS TramBatDau,
					tr2.TenTram AS TramKetThuc,
					chuyenxe.GiaChuyen,
					DATE_FORMAT(chuyenxe.NgayDi,'%d-%m-%Y') as NgayDi,
					chuyenxe.ThoiGianXuatBen,
					loaixe.TenLoaiXe
					FROM
					chuyenxe
					INNER JOIN `xe` ON chuyenxe.BienSo = `xe`.BienSo
					INNER JOIN tuyenxe ON chuyenxe.MaTuyen = tuyenxe.MaTuyen AND chuyenxe.MaTuyen = tuyenxe.MaTuyen
					INNER JOIN tram AS tr1 ON tuyenxe.TramBatDau = tr1.MaTram
					INNER JOIN loaixe ON `xe`.MaLoaiXe = loaixe.MaLoaiXe
					INNER JOIN tram AS tr2 ON tuyenxe.TramKetThuc = tr2.MaTram
					AND chuyenxe.MaTuyen =".$this->db->escape($MaTuyen)." AND chuyenxe.NgayDi =".$this->db->escape($date);
					$result = $this->db->query($sql);
					if($result->result_array()){
					$data['ketqua'] = $result->result_array();
					$this->load->view('templates/header');
					$this->load->view('timve',$data);
				}
				else {
					$this->session->set_flashdata('message', 'Hệ thống chưa cung cấp tuyến xe này vào ngày này. Bạn có thể chọn ngày khác.');
					redirect('home','refresh');
					}
			}
		}
}
	public function datcho($id){
     $this->load->view('templates/header');
     echo $id;
	}
}
