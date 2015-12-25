<?php
class Tuyenxe_model extends CI_model
{
		
	public function __contruct()
	{
		
			parent::__contruct();
			/*
			$this->MaTuyen= $mc;
      		$this->MaChuyen= $mt;
      		$this->BienSo= $BienSo;
      		$this->ThoiGianKhoiHanh= $thoigian;
      		*/
	}
  public  function taoma()
    {
      $this->load->model('taoma');
      $ma=$this->taoma->Timmacuoi("matuyen","tuyenxe","TU",5);
      return $ma;
    }

  public function add()
  {
    $data= array(
      'MaTuyen'=> $this->taoma(),
      'TenTuyen'=> $this->input->post('ten_tuyen'),
      'TramBatDau'=> $this->input->post('tram_bd'),
      'TramKetThuc'=> $this->input->post('tram_kt'),
      'LoTrinh'=> $this->input->post('lo_trinh'),
      'SoKM'=> $this->input->post('so_km'),
      'SoNgayDi'=> $this->input->post('so_ngay_di'),
      'SoGioDi'=> $this->input->post('so_gio_di'),
      'GiaTuyen'=> $this->input->post('gia_tuyen'),
      );
  $themtuyen= $this->input->post('themtuyen');
  if(isset($themtuyen))
  {
  $this->db->insert('tuyenxe',$data);
  }
  }
  public function show()
  {
    $query= $this->db->get('tuyenxe');
    $query_result= $query->result_object();
    return $query_result;
  }
  public function update($id)
    {
      $data= array(
      'MaTuyen'=> $id,
      'TenTuyen'=> $this->input->post('ten_tuyen'),
      'TramBatDau'=> $this->input->post('tram_bd'),
      'TramKetThuc'=> $this->input->post('tram_kt'),
      'LoTrinh'=> $this->input->post('lo_trinh'),
      'SoKM'=> $this->input->post('so_km'),
      'SoNgayDi'=> $this->input->post('so_ngay_di'),
      'SoGioDi'=> $this->input->post('so_gio_di'),
      'GiaTuyen'=> $this->input->post('gia_tuyen'),
      );
      $suatuyen= $this->input->post('suatuyen');
      if(isset($suatuyen))
      {
      $this->db->where('MaTuyen',$id);
      $this->db->update('tuyenxe',$data);
    }

    }
  public function tim($ma)
  {
    $str="SELECT
          tuyenxe.TenTuyen,
          tr1.TenTram AS TramBatDau,
          tr2.TenTram AS TramKetThuc,
          chuyenxe.GiaChuyen,
          DATE_FORMAT(chuyenxe.NgayDi,'%d-%m-%Y') as NgayDi,
          chuyenxe.ThoiGianXuatBen,
          taixe.TenTaiXe
          FROM
          chuyenxe
          INNER JOIN tuyenxe ON chuyenxe.MaTuyen = tuyenxe.MaTuyen AND chuyenxe.MaTuyen = tuyenxe.MaTuyen
          INNER JOIN tram AS tr1 ON tuyenxe.TramBatDau = tr1.MaTram
          INNER JOIN tram AS tr2 ON tuyenxe.TramKetThuc = tr2.MaTram
          INNER JOIN taixe ON chuyenxe.MaTaiXe=taixe.MaTaiXe
          AND chuyenxe.MaTuyen =".$this->db->escape($ma);
    $result=$this->db->query($str);
    $query_result=$result->result_array();
    return $query_result;
  }
}
?>