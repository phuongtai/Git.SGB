
<?php
class Taixe_model extends CI_model
{
  //public $MaTram=NULL;
  //Public $TenTram=NULL;
  //public $GhiChu=NULL;
 // extract($_post);
  public function __contruct()
  {
      parent::__contruct();
  }

public  function taoma()
    {
      $this->load->model('taoma');
      $ma=$this->taoma->Timmacuoi("mataixe","taixe","TX",5);
      return $ma;
    }
public function show()
  {
    $query= $this->db->get('taixe');
    $query_result= $query->result_object();
    return $query_result;
    
    }
  public function add()
  {
    $data=array(
      'MaTaiXe'=> $this->taoma(),
      'TenTaiXe'=> $this->input->post('ten_tai_xe'),
      'Luong'=> $this->input->post('luong'),
      'GhiChu'=> $this->input->post('ghi_chu'),
      );
   $them= $this->input->post('themtaixe');
   if(isset($them))
   {
    $this->db->insert('taixe',$data);
   }
  }
    public function update($id)
    {
      $this->MaTaiXe=$id;
     $this->TenTaixe= $this->input->post('ten_tai_xe');
     $this->Luong= $this->input->post('luong');
      $this->GhiChu= $this->input->post('ghi_chu');
      $sua= $this->input->post('suataixe');
      if(isset($sua))
      {
      $this->db->where('MaTaiXe',$id);
      $this->db->update('taixe',$this );
    }

    }
    
}
?>