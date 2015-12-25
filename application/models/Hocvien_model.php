
<?php
class Hocvien_model extends CI_model
{
  public function __contruct()
  {
      parent::__contruct();
  }
public function show()
  {
    $query= $this->db->get('hocvien');
    $query_result= $query->result_object();
    return $query_result;
    
    }
  public function add()
  {
    $data=array(
      'SoCMT'=> $this->input->post('SoCMT'),
      'HoTen'=> $this->input->post('HoTen'),
      'DiaChi'=> $this->input->post('DiaChi'),
      'Email'=> $this->input->post('Email'),
      'SDT'=> $this->input->post('SDT'),
      );
    $this->db->insert('hocvien',$data);
  }
    public function update($id)
    {
      $this->SoCMT=$id;
     $this->HoTen= $this->input->post('HoTen');
     $this->DiaChi= $this->input->post('DiaChi');
      $this->Email= $this->input->post('Email');
      $this->SDT= $this->input->post('SDT');
      $sua= $this->input->post('suahocvien');
      if(isset($sua))
      $this->db->where('SoCMT',$id);
      $this->db->update('hocvien',$this );

    }
    
}
  ?>