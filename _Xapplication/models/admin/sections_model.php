<?php
class Sections_model extends CI_Model{
    
    private $table = 'secciones';
    
    public function list_all(){
        $query = $this->db->get($this->table);
        return $query->result_array(); 
    }
    
    public function select($id){
        $query = $this->db->get_where($this->table, array('id' => $id), 1);
        return $row = $query->row_array(); 
    }
    
    public function update($data,$id)
    {
	$this->db->where('id', $id);
	return $this->db->update($this->table, $data); 
    }
    
    public function delete($id)
    {
        return $this->db->delete($this->table, array('id' => $id)); 
    }
    
    public function create($data){
        return $this->db->insert($this->table, $data); 
    }
}
?>
