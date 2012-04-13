<?php
class Portfolio extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->lang->load('config');
        $this->lang->load('menu');
        $this->lang->load('portfolio');
        $this->lang->load('footer');
        
        //load the helpers
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('stringj');
        
        //load the model with works
        
    }
    
    public function index(){
        $this->output->cache(10);
        
        // Carga de ficheros de idiomas
        $this->load->model('portfolio_model','',TRUE);
        $data['works']=$this->portfolio_model->LoadWorks($this->lang->lang());
        
        //load the views
        $data['title'] = $this->lang->line('title.works');
        $data['description'] = $this->lang->line('description.works');
        
        //load views
        $this->load->view('head',$data);
        $this->load->view('menu');
        $this->load->view('portfolio',$data);
        $this->load->view('footer');
    }
    
    public function work($id){
        $this->output->cache(10);
        
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('stringj');
        $this->load->model('portfolio_model','',TRUE);
        /*se carga solo un trabajo porque es in lightbox*/
        $data['work']=$this->portfolio_model->work($this->lang->lang(),$id);
        
        //$data['works']=$this->portfolio_model->LoadWorks($this->lang->lang());
        
        $this->load->view('lightbox',$data);

    }
}
?>
