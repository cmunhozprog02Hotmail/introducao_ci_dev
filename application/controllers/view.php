<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends CI_Controller {

	/*
	public function index()
	{
            $data['nome'] = 'Chris';
            $data['title'] = 'Curso de CodeIginter';
            $data['tecnologias'] = array("PHP", "CodeIgniter", "Netbeans", "MySql");
            $html = $this->load->view('basico', $data, TRUE);
            echo $html;
	}
         * 
         */
    
     public  function index(){
         
         $data = array();
         $data['VARIAVEL'] = 'Mensagem de teste.';
         $data['BLC_MENSAGEM'] = array(array("MENSAGEM" => "Erro"));
         $data['BLC_TECNOLOGIAS'] = array();
         $tec = array("PHP", "CI", "MySQL", "NetBeans", "Windows");
         foreach ($tec as $t):
             $data['BLC_TECNOLOGIAS'][] = array("ITEM" => $t);
         endforeach;
         
         $data['NOME'] = 'Christovam';
         
         //$data['BLC_TECNOLOGIAS'][] = array("ITEM" => 'PHP');
         //$data['BLC_TECNOLOGIAS'][] = array("ITEM" => 'MySQL');
         //$data['BLC_TECNOLOGIAS'][] = array("ITEM" => 'CodeIgniter');
         
         $this->parser->parse('parser', $data);
     }
     
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */