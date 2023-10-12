<?php

class Conversor{
        protected $valor;
        private $medidaDe;

        private $medidaPara;

        protected $resultado;


        function __construct($valor, $medidaDe, $medidaPara)
        {
            $this->valor = $valor;
            $this->medidaDe = $medidaDe;
            $this->medidaPara = $medidaPara;
        
        }


        function getValor(){
            return $this->valor;
        }

        function getResultado(){
            return $this->resultado = $this->valor * $this->medidaPara;
        }






}



?>