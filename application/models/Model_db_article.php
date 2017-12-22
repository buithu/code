<?php
class Model_db_arcticle extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function count_data(){
        $data1 = $this->db->get('post')->num_rows();
        return $data1;
    }
    public function listdata($limit,$start){
        $query = $this->db->get('post',$limit, $start);
        $data = $query->result();
        return $data;
    }
    public function getById($id){
        $this->db->where("stt", $id);
        return $this->db->get('post')->result();
   }
   

}
?>
