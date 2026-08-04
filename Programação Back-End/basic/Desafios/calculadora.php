<?php
class DataTime {
    private $calculadora;

    public function __construct(){
        $this -> calculadora = new Calculadora();
        $nome = readLine("Digite sua data de nascimento (dd/mm/aaaa): ");
        $this -> calculadora -> calcularIdade($nome);

        
    
    }
}