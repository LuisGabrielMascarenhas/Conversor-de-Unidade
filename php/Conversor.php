<?php 
    class Conversor{
        protected float $numero = 0;

        protected float $resultado = 0;

        protected string $de = '';

        protected string $para = '';

        protected string $opcoesDe = '';

        protected string $opcoesPara = '';

        protected string $mensagem = '';

        protected array $medidas = array(
            'metro(s)',
            'quilometro(s)',
            'centímetro(s)',
            'milimetro(s)'
        );

        public function __construct() {
            $argumentos = func_get_args();
            $numeroDeArgumentos = func_num_args();
            if (method_exists($this, $funcao = '__construct' . $numeroDeArgumentos)) {
                call_user_func_array(array($this, $funcao), $argumentos);
            }
        }

        public function __construct0(){
            $this->gerarOpcoes();
            $this->calcular();
            
        }
    
        public function __construct3(float $numero = null, string $de = null, string $para = null) {
            $this->numero = $numero != null ? $numero : 0;
            $this->de = $de != null ? $de : 'null';
            $this->para = $para != null ? $para : 'null';
            $this->gerarOpcoes($this->de, $this->para);
            $this->resultado = $this->calcular();
           
        }

        private function gerarOpcoes(string $de = null, string $para = null) {
            
            foreach ($this->medidas as $medida) {
                $this->opcoesDe .= $de == $medida ? "<option value='{$medida}' selected='selected'>{$medida}</option>" : "<option value='{$medida}'>{$medida}</option>";
            }
           
            foreach ($this->medidas as $medida) {
                $this->opcoesPara .= $para == $medida ? "<option value='{$medida}' selected='selected'>{$medida}</option>" : "<option value='{$medida}'>{$medida}</option>";
            }
        }

         public function getNumero() {
            return $this->numero;
        }

        public function getResultado(){
            return $this->resultado;
        }

        public function getopcoesDe() {
            return $this->opcoesDe;
        }

        public function getopcoesPara() {
            return $this->opcoesPara;
        }

        private function calcular(){
            switch($this->de){
                case "metro(s)":
                    switch($this->para) {
                        case 'quilometro(s)': return $this->numero /1000; break;
                        case 'centímetro(s)': return $this->numero * 100;  break;
                        case 'milimetro(s)': return $this->numero * 1000; break;
                        default: return $this->numero; break;
                    }
                    break;
                case 'quilometro(s)':
                    switch($this->para) {
                        case 'metro(s)': return $this->numero * 1000; break;
                        case 'centímetro(s)': return $this->numero * 100000; break;
                        case 'milimetro(s)': return $this->numero * 1000000; break;
                        default: return $this->numero;
                    } 
                    break;
                case 'centímetro(s)':
                    switch($this->para) {
                        case 'metro(s)': return $this->numero / 100; break;
                        case 'milimetro(s)': return $this->numero * 10; break;
                        case 'quilometro(s)': return $this->numero / 100000; break;
                        default: return $this->numero * 1; break;
                    }
                    break;
                case 'milimetro(s)':
                    switch($this->para) {
                        case 'metro(s)': return $this->numero / 100; break;
                        case 'centímetro(s)': return $this->numero / 10; break;
                        case 'quilometro(s)': return $this->numero / 1000000; break;
                        default: return $this->numero; break;
                    }
                    break;
            }
        }
    }
?>