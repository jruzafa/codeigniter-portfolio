<?php
class Services extends CI_Controller{
    public function index(){
        $this->output->cache(10);
        
        // Carga de ficheros de idiomas
        $this->lang->load('config');
        $this->lang->load('menu');
        $this->lang->load('footer');
        
        //Cargamos los helpers necesarios
        $this->load->helper('html');

        //titulo y descripcion de la página
        $data['title'] = $this->lang->line('title.services');
        $data['description'] = $this->lang->line('description.services');
        
        $this->load->view('head',$data);
        $this->load->view('menu');
        
        $this->load->model('services_model',"",TRUE);
        
        /*TODO: simplificar todo en una consulta*/
        /*SERVICIOS*/
        $data['service1'] = $this->services_model->get_service(4,$this->lang->lang());
        $data['service2'] = $this->services_model->get_service(5,$this->lang->lang());
        $data['service3'] = $this->services_model->get_service(8,$this->lang->lang());
        
        $this->load->view('services',$data);
        $this->load->view('footer');
    }

}

?>
