
<?php
class Xe_model extends CI_model
{
  public function __contruct()
  {
      parent::__contruct();
  }

public function show()
  {
    $query= $this->db->get('xe');
    $query_result= $query->result_object();
    return $query_result;
    
  }
  public function add()
  {
    $data=array(
      'BienSo'=> $this->input->post('bien_so'),
      'MaLoaiXe'=> $this->input->post('ma_lx'),
      );
    $this->db->insert('xe',$data);
  }
    
}
  ?>