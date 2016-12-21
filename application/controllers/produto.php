<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto extends CI_Controller {
        
        private $horario = null;
    
	public function __construct() {
            parent::__construct();
            
            $this->horario = date('d/m/Y H:i:s');
        }

        public function index()
	{
            //echo "<h2>Este é o index</h2>";
            echo "<h3>O horário de inicialização é {$this->horario}</h3>";
	}
        public function publico(){
            echo '<h1>Este é um método público</h1>';
        }
        private function privado(){
            echo '<h1>Este é um método privado</h1>';
        }
        public function chamaprivado(){
            $this->privado();
        }
        public function chamacalculadora(){
            $resultado = $this->caculadados(50, 10);
            echo $resultado;
        }
        
        private function caculadados($valor1, $valor2){
            return $valor1 + $valor2;
        }
        
        public function parametros($param1, $param2 = null, $param3 = 'teste 03'){
            echo "<pre>P1: {$param1}</pre>";
            echo "<pre>P2: {$param2}</pre>";
            echo "<pre>P3: {$param3}</pre>";
        }
        public function calculadora($valor1 = null, $valor2 =null){
            if(empty($valor1)){
                echo "Informe o valor 1";
                return false;
            }
            if(empty($valor2)){
                echo "Informe o valor 2";
                return false;
            }
            echo $valor1 + $valor2;
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */