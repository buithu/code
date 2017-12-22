<?php
class Model_admin extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function delete($id){
        $this->db->where('stt',$id);
        $this->db->delete('post');
        return true;
    }
    public function add($data_insert){
        $this->db->insert('post',$data_insert);
    }
    public function getById($id){
        $this->db->where("stt", $id);
        return $this->db->get('post')->result();
   }
   
   public function edit($data_update, $id){
        $this->db->where("stt", $id);
        $this->db->update('post', $data_update);
        
    }
}
?>
