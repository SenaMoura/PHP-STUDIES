<?php
$produtos = [
    "nome" => "Caderno",
    "preco" => 15.99,
    "quantidade" => 100
]
foreach ($produtos as $chave => $valor){
    echo ucfirst($chave) . ": $valor\n";
}
