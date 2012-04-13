<?php

class Contact extends CI_Controller{
    
    public function index() {
        
        $this->load->library('email');
        
        $config['protocol'] = 'mail';
       // $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'utf-8';
        //$config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

        $this->email->initialize($config);
        
        
        
        
        $this->load->library('form_validation');
       // $this->load->helper('email');
        
        
        $this->form_validation->set_rules('contact_name', 'Nombre', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('contact_email', 'E-Mail', 'trim|required|valid_email');
        $this->form_validation->set_rules('contact_message', 'Mensaje', 'trim|required|min_length[2]');

        
        $data['title'] = 'Contact';
        
        $this->load->view('head', $data);
        $this->load->view('menu');
        
        if($this->form_validation->run()==FALSE){
             $this->load->view('contact');
        }else{
            $mensaje.= '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
            $mensaje.= '<html><head><meta content="text/html; charset=utf-8" http-equiv="Content-Type" /></head>';
            $mensaje.= '<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0" style="margin: 0px; background-color: #FFFFFF; font-family: Helvetica, Arial, sans-serif;">';
            $mensaje.= '<table>';
            $mensaje.= "<tr><td>Nombre:</td><td> ".$_POST['contact_name']."</td></tr>"
                       ."<tr><td>E-mail:</td><td> ".$_POST['contact_email']."</td></tr>"
                       ."<tr><td>Mensaje:</td><td> ".$_POST['contact_message']."</td></tr>";
            $mensaje.= '</table>';
            $mensaje.= '</body></html>';
            
            $this->email->from('jose.ruzafa@gmail.com', 'Formulario de contacto Joseruzafa.es');
            $this->email->to('jose.ruzafa@gmail.com');

            $this->email->subject('Contacto de '.$_POST['contact_name']);
            $this->email->message($mensaje);

            if($this->email->send()):
                $data['message'] = 'Your message has been sent successfully.';
            else:
                $data['message'] = 'Failed to send the message.';              
            endif;

            
            $this->load->view('contact',$data);
        }

        $this->load->view('footer');
    }

}
?>
