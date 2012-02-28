<?php
class Home_model extends CI_Model{
    public function get_text($id,$lang){
        $this->db->select("descripcion_$lang AS descripcion");
        $query = $this->db->get_where('secciones',array('id' => $id, 'publicado' => 1),1);
       
        return $row = $query->first_row('array'); 
    } 
}
?>
