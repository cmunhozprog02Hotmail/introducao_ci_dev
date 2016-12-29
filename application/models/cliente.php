<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Model{
    public function get(){
        $this->db->select('cliente.codcliente, cliente.nome');
        $this->db->select('cidade.nome as nomecidade', false);
        $this->db->from('cliente');
        $this->db->join('cidade', 'cidade.codcidade = cliente.codcidade', 'LEFT');
        return $this->db->get()->Result();
    }
}

