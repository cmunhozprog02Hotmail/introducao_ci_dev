<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aula07 extends CI_Controller {
    
    public function index(){
        $this->load->model('Cidade', 'CidadeM');
        /*$cidade = array(
            "nome"  => "Carazinho",
            "uf"    => "RS"
        );
        $id = $this->CidadeM->insert($cidade);
        echo "Cidade inserida: {$id}";
         * 
         */
        /*$cidades = array(
            array(
                "nome"  => "Não me Toque2",
                "uf"    => "RS"
            ),
            array(
                "nome"  => "Bento Gonçalves",
                "uf"    => "RS"
            )
        );
        $id = $this->CidadeM->insertBatch($cidades);
        echo "Cidades Inseridas";
        */
        /*
        $id = $this->CidadeM->insertSet('Lajeado', 'RS');
        echo "Cidade inserida: {$id}";
         * 
         */
        $cidade = new stdClass();
        $cidade->nome = 'Cidade Teste';
        $cidade->uf = 'RS';
        
        
        $this->CidadeM->insertObjeto($cidade);
       
        echo "OK";
        
        
    }
}

