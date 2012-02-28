<?php
class Social extends CI_Controller{
    
    public function index() {
        $this->output->cache(50);
        // Carga de ficheros de idiomas
        $this->lang->load('config');
        $this->lang->load('menu');
        $this->lang->load('footer');
        
        
        //Cargamos los helpers necesarios
        $this->load->helper('html');
        $this->load->helper('url');
        
        //cargamos la vista
        $data['title'] = $this->lang->line('title.social');
        $data['description'] = $this->lang->line('description.social');
        $this->load->view('head',$data);
        $this->load->view('menu');
        $this->load->view('social');
        $this->load->view('footer');
    }

}

?>

