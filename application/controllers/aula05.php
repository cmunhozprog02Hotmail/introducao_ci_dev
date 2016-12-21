<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aula05 extends CI_Controller {

	
    public function index()
    {
        $this->load->model('Cidade', 'CidadeM'); 
        #$res = $this->CidadeM->get();
        #$res = $this->CidadeM->getWhere(array('uf' => 'SP'));
        #$res = $this->CidadeM->getSelect();
        #$res = $this->CidadeM->getMax();
        #$res = $this->CidadeM->getMin();
        #$res = $this->CidadeM->getAvg();
        #$res = $this->CidadeM->getSum();
        $res = $this->CidadeM->getFrom();
        echo '<pre>';
        print_r($res);
        echo '</pre>';
    }
         
    
    
     
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */