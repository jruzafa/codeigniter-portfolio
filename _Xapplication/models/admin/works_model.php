<?php
class Works_model extends CI_Model{
    
    private $table = 'trabajos';
    private $column_order = 'orden';
    
    public function list_all($ini,$fin){
        $this->db->order_by($this->column_order, 'asc');
        $query = $this->db->get($this->table,$fin,$ini);
       
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
    
    public function total_rows(){
        return $this->db->count_all($this->table);
    }
}
?>
