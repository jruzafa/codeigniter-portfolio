<?php
class Services_model extends CI_Model{

    public function get_service($service){
        $this->db->select("description, name");
        $query = $this->db->get_where('secciones',array('id' => $service, 'publicated' => 1),1);
       //$query->result();
       
        return $row = $query->first_row('array'); 

    }
}
?>
