<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cidade extends CI_Model{
    public function get(){
        return $this->db->get('cidade', 2, 1)->result();
    }
    
    public function getWhere($condicao){
        return $this->db->get_where('cidade', $condicao)->result();
    }
    public function getSelect(){
        $this->db->select('codcidade as Código', FALSE);
        $this->db->select('nome as Nome', FALSE);
        return $this->db->get('cidade')->result();
    }
    public function getMax(){
        $this->db->select_max('codcidade');
        return $this->db->get('cidade')->first_row();
    }
    public function getMin(){
        $this->db->select_min('codcidade', 'Menor');
        return $this->db->get('cidade')->first_row();
    }
    public function getAvg(){
        $this->db->select_avg('codcidade', 'Média');
        return $this->db->get('cidade')->first_row();
    }
    public function getSum(){
        $this->db->select_sum('codcidade', 'Soma');
        return $this->db->get('cidade')->first_row();
    }
    public function getFrom(){
        $this->db->select('c.codcidade, c.nome, c.uf');
        $this->db->from('cidade c');
        return $this->db->get()->result_array();
    }
    public function getWhere2($uf){
        $this->db->select('c.codcidade, c.nome, c.uf');
        $this->db->from('cidade c');
        $this->db->where('uf', 'RJ');
        $this->db->or_where('uf', 'RS');
        #$this->db->where('c.codcidade >=', $codcidade);
        return $this->db->get()->result();
    }
    public function getWhereIn($condicao){
        $this->db->select('c.codcidade, c.nome, c.uf');
        $this->db->from('cidade c');
        $this->db->where_not_in('uf', $condicao);
        
        return $this->db->get()->result();
    }
    public function getLike($condicao){
        $this->db->select('c.codcidade, c.nome, c.uf');
        $this->db->from('cidade c');
        $this->db->like('nome', $condicao, 'after');
        
        return $this->db->get()->result();
    }
    
}



