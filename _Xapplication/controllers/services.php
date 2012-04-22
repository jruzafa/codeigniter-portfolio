<?php
class Services extends CI_Controller{
    public function index(){
        $this->output->cache(10);
        
        //titulo y descripcion de la página
        $data['title'] = 'Services';

        $this->load->model('services_model',"",TRUE);
        
        /*TODO: simplificar todo en una consulta*/
        /*SERVICIOS*/
        $data['service1'] = $this->services_model->get_service(4);
        $data['service3'] = $this->services_model->get_service(8);

        $this->load->view('head',$data);
        $this->load->view('menu');
        $this->load->view('services',$data);
        $this->load->view('footer');
    }

}

?>
