<?php

class Portfolio_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    
    public function LoadWorks($lang = NULL){
        $this->db->cache_on();
        if(isset($lang)){
            //$this->db->select("nombre, descripcion_$lang AS descripcion, servicios_$lang AS servicios, enlace");  
             $this->db->select("nombre, id, enlace");  
            
        }
        $this->db->order_by('orden');
        $query=$this->db->get('trabajos');
        
        return $query->result();
    }
    
     public function work($lang = NULL,$id){
        if(isset($lang)){
            $this->db->select("nombre, descripcion_$lang AS descripcion, servicios_$lang AS servicios, enlace");  
         //$query = $this->db->get_where($this->table, array('id' => $id), 1);

        }
        $this->db->order_by('orden');
        $query=$this->db->get_where('trabajos',array('id' => $id), 1);
        
        return $row = $query->row_array();
    }
}
?>
