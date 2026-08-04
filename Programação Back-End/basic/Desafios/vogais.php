<?php
contarVogais($texto);
    function contarVogais($texto){
        $vogais = ['a','e','i','o','u'];
        $contagem = 0;
        for($i = 0; $i < strlen($texto); $i++){
            if(in_array(strtolower($texto[$i]), $vogais)){
                $contagem++;
            }
        }
        return $contagem;
    }