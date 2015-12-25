<?php
class Khoahoc_model extends CI_model
{
		
	public function __contruct()
	{
		
			parent::__contruct();
	}
  public  function taoma()
    {
      $this->load->model('taoma');
      $ma=$this->taoma->Timmacuoi("makhoahoc","khoahoc","KH",9);
      return $ma;
    }
    public function kiemtra()
    {
      $ngaybd= $this->input->post('NgayBatDau');
      $daybt= substr("$ngaybd",8,2);
      $monthbt= substr("$ngaybd",5,2);
      $yearbt= substr("$ngaybd",0,4);

      $ngaykt= $this->input->post('NgayKetThuc');
      $daykt= substr("$ngaykt",8,2);
      $monthkt= substr("$ngaykt",5,2);
      $yearkt= substr("$ngaykt",0,4); 
      if($yearbt==$yearkt)
        {
          if($monthbt==$monthkt)
          {
            if($daybt<$daykt)
              return true;
            else
              return false;
          }
          elseif($monthbt <$monthkt)
            return true;
          else
            return false;
        }
        elseif($yearbt <$yearkt)
          return true;
        else
          return false;

    }
  public function add()
  {
      $data= array(
      'MaKhoaHoc'=> $this->taoma(),
      'TenKhoaHoc'=> $this->input->post('TenKhoaHoc'),
      'NgayBatDau'=> $this->input->post('NgayBatDau'),
      'NgayKetThuc'=> $this->input->post('NgayKetThuc'),
      'NgayThi'=> $this->input->post('NgayThi'),
      'DiaChiKhoaHoc'=> $this->input->post('DiaChiKhoaHoc'),
      'HocPhi'=> $this->input->post('HocPhi'),
      );
    $this->db->insert('khoahoc',$data);
}
  public function show()
  {
    $query= $this->db->get('khoahoc');
    $query_result= $query->result_object();
    return $query_result;

  }
  public function update($id)
    {
      $data= array(
      'MaKhoaHoc'=> $id,
      'TenKhoaHoc'=> $this->input->post('TenKhoahoc'),
      'NgayBatDau'=> $this->input->post('NgayBatDau'),
      'NgayKetThuc'=> $this->input->post('NgayKetThuc'),
      'NgayThi'=> $this->input->post('NgayThi'),
      'DiaChiKhoaHoc'=> $this->input->post('DiaChiKhoaHoc'),
      'HocPhi'=> $this->input->post('HocPhi'),
      );
      $this->db->where('MaKhoaHoc',$id);
      $this->db->update('khoahoc',$data);
    }
  public function tim($id)
  {
    $str="select * from hocvien hv,dangkyhoc dk,khoahoc kh where hv.SoCMT=dk.SoCMT and dk.MaKhoaHoc='$id' and kh.MaKhoaHoc='$id'";
    $result=$this->db->query($str);
    $query_result=$result->result_array();
    return $query_result;
  }
}
?>