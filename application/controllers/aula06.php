<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aula06 extends CI_Controller {

	
    public function index()
    {
       
        $this->load->model('Cliente', 'ClienteM');
        $res = $this->ClienteM->get();
        
        echo '<pre>';
        print_r($res); 
       
        
    }
         
    
    
     
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */