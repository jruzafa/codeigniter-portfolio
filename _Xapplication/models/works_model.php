<?php

class Works_model extends CI_Model{
   
    
    public function getWorks(){
        //$this->db->cache_on();

        $this->db->select("name, id, link");  

        $this->db->order_by('order');
        $query=$this->db->get('trabajos');

        return $query->result_object();
    }
    
     public function work($id){

        $this->db->select("name, description, services, link");  

        $this->db->order_by('order');
        $query=$this->db->get_where('trabajos',array('id' => $id), 1);

        return $row = $query->row_array();
    }
}
?>
