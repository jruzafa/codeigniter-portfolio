<?php
class Home extends CI_Controller{
    public function index(){
        //$this->output->cache(10);
        $data['title'] = 'Home';
        $this->load->view('head',$data);
        $this->load->view('menu');
        $this->load->view('home');
        $this->load->view('footer');
    }
}

?>
