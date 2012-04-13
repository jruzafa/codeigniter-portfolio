<?php
class Works extends CI_Controller{
 
    public function index(){
        //$this->output->cache(10);
     
        $this->load->helper('stringj');
        // Carga de ficheros de idiomas
        $this->load->model('works_model','',TRUE);
        
        $data['works']=$this->works_model->getWorks();
         
        $dataHead['title'] = 'Works';
        
        //load views
        $this->load->view('head', $dataHead);
        $this->load->view('menu');
        $this->load->view('works',$data);
        $this->load->view('footer');
    }
    
    public function work($id){
        //$this->output->cache(10);
        
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('stringj');
        $this->load->model('works_model','',TRUE);
        /*se carga solo un trabajo porque es in lightbox*/
        $data['work']=$this->works_model->work($id);
        
        //$data['works']=$this->portfolio_model->LoadWorks($this->lang->lang());
        
        $this->load->view('lightbox',$data);

    }
}
?>
