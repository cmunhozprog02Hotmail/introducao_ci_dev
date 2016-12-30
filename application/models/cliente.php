<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Model{
    public function get(){
        $this->db->select('cliente.codcliente, cliente.nome');
        $this->db->select('cidade.nome as nomecidade', false);
        $this->db->from('cliente');
        $this->db->join('cidade', 'cidade.codcidade = cliente.codcidade', 'LEFT');
        return $this->db->get()->Result();
    }
    public function getGroup(){
        $this->db->select('COUNT(codcliente) AS TOTAL', false);
        $this->db->select('codcidade');
        $this->db->from('cliente');
        $this->db->group_by('codcidade');
        return $this->db->get()->Result();
    }
    public function getOrder(){
        $this->db->select('cliente.codcliente, cliente.nome');
        $this->db->select('cidade.nome as nomecidade', false);
        $this->db->from('cliente');
        $this->db->join('cidade', 'cidade.codcidade = cliente.codcidade', 'LEFT');
        $this->db->order_by('cliente.nome, cidade.nome');
        return $this->db->get()->Result();
    }
    public function getTotalPesquisa(){
        $this->db->select('cliente.codcliente, cliente.nome');
        $this->db->select('cidade.nome as nomecidade', false);
        $this->db->from('cliente');
        $this->db->join('cidade', 'cidade.codcidade = cliente.codcidade');
        $this->db->order_by('cliente.nome, cidade.nome');
        return $this->db->count_all_results();
    }
    public function getTotalTabela(){
        
        return $this->db->count_all('cliente');
    }
}

