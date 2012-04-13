<?php
class Services_model extends CI_Model{

    public function get_service($service,$lang){
        $this->db->select("descripcion_$lang AS descripcion,nombre_$lang AS nombre");
        $query = $this->db->get_where('secciones',array('id' => $service, 'publicado' => 1),1);
       //$query->result();
       
        return $row = $query->first_row('array'); 

    }
}
?>
