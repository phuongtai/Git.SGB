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
	
		public function thong_tin_chuyen($machuyen)
    {
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

  public function add()
  {
    $machuyen=$this->taoma();
    $data=array(
      'MaChuyen'=> $machuyen,
      'MaTuyen'=> $this->input->post('tuyen_xe'),
      'MaTaiXe'=> $this->input->post('tai_xe'),
      'BienSo'=> $this->input->post('xe'),
      'NgayDi'=> $this->input->post('ngay_di'),
      'ThoiGianXuatBen'=> $this->input->post('thoi_gian_xb'),
      'GiaChuyen'=> $this->input->post('gia_chuyen'),
      );
    $themchuyen= $this->input->post('themchuyen');
    if(isset($themchuyen))
    {
      $this->db->insert('chuyenxe',$data);
      $this->ghe_model->khoitaoghe($machuyen);
    }
  }
  function show()
  {
    $query= $this->db->get('chuyenxe');
    $query_result= $query->result_object();
    return $query_result;

    }
    public function update($id)
    {
     // $this->MaTram=$this->input->post('MaTram');
      $data= array(
        'MaChuyen'=> $id,
        'MaTuyen'=> $this->input->post('tuyen_xe'),
        'MaTaiXe'=> $this->input->post('tai_xe'),
        'BienSo'=> $this->input->post('xe'),
        'NgayDi'=> $this->input->post('ngay_di'),
        'ThoiGianXuatBen'=> $this->input->post('thoi_gian_xb'),
        'GiaChuyen'=> $this->input->post('gia_chuyen'),

        );
      $suachuyen= $this->input->post('suachuyen');
      if(isset($suachuyen))
      {
      $this->db->where('MaChuyen',$id);
      $this->db->update('chuyenxe',$data);
    }

    }
    public function delete($id)
    {
      $xoachuyen=$this->input->post('xoachuyen');
      if(isset($xoachuyen))
      {
      $this->db->where('MaChuyen',$id);
      $this->db->delete('chuyenxe');
      }
    }
    public function laysoghecuaxe($machuyen)
    {
      $string="select soghe from chuyenxe c,xe ,loaixe lx where c.MaChuyen='$machuyen' 
      and c.BienSo=xe.BienSo and xe.maloaixe=lx.maloaixe";
      $result = $this->db->query($string);
      $soghe=0;
      foreach ($result->result() as $row)
      {
        $soghe=$row->soghe;
      }
      return $soghe;
    }
  
}
?>