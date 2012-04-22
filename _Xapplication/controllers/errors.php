<?php
class Errors extends CI_Controller{
    public function index(){
        //$this->output->cache(10);
        $data['title'] = 'Home';
        $this->load->view('head',$data);
        $this->load->view('menu');
        $heading = "404 Page Not Found";
        $message = "The page you requested was not found for some strange reason...";
        $this->load->view('404');
        $this->load->view('footer');
    }
}
?>
