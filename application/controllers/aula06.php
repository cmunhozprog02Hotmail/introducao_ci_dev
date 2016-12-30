<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aula06 extends CI_Controller {

	
    public function index()
    {
       
        $this->load->model('Cliente', 'ClienteM');
        $this->load->model('Cidade', 'CidadeM');
        #$res = $this->ClienteM->get();
        #$res = $this->CidadeM->getWhere2(3);
        #$estados = array('RJ', 'SP');
        #$res = $this->CidadeM->getWhereIn($estados);
        #$res = $this->CidadeM->getLike('sao');
        #$res = $this->ClienteM->getGroup();
        #res = $this->ClienteM->getOrder();
        #$res = $this->ClienteM->getTotalPesquisa();
        $res = $this->ClienteM->getTotalTabela();
        echo '<pre>';
        #print_r($this->db);
        print_r($res); 
       
        
    }
         
    
    
     
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */