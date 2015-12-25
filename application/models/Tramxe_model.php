<?php
class Tramxe_model extends CI_model
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
    $ma=$this->taoma->Timmacuoi("matram","tram","TR",5);
    return $ma;
  }
  public function add()
  {
    $ma=$this->taoma();
    $data = array('MaTram'=>$ma,'TenTram'=>$this->input->post('ten_tram'),'GhiChu'=>$this->input->post('ghi_chu'));
    $them= $this->input->post('themtram');
    if(isset($them))
    {
      $this->db->insert('tram',$data);
    }
    return $ma;
  }
  public function show()
  {
    $query= $this->db->get('tram');
    $query_result= $query->result_object();
    return $query_result;
  }
  public function update($id)
  {
    $this->MaTram=$id;
    $this->TenTram= $this->input->post('ten_tram');
    $this->GhiChu= $this->input->post('ghi_chu');
    $sua= $this->input->post('suatram');
    if(isset($sua))
    {
      $this->db->where('MaTram',$id);
      $this->db->update('tram',$this );
    }
  }
}