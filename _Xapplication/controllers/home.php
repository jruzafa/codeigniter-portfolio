<?php
class Home extends CI_Controller{
    public function index(){
        $this->output->cache(10);
        
        // Carga de ficheros de idiomas
        $this->lang->load('config');
        $this->lang->load('menu');
        $this->lang->load('home');
        $this->lang->load('footer');
        
        //Cargamos los helpers necesarios
        $this->load->helper('html');

        $data['title'] = $this->lang->line('title.home');
        $data['description'] = $this->lang->line('description.home');
        
        
        $this->load->view('head',$data);
        $this->load->view('menu');
        
        $this->load->model('home_model',"",TRUE);
        
        $data['text'] = $this->home_model->get_text(1,$this->lang->lang());
        
        $this->load->view('home',$data);
        $this->load->view('footer');
    }
}

?>
