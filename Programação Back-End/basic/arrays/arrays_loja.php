<?php
$loja = [
    "nome" => "Loja de Roupas",
    "endereco" => "Rua das Flores, 123",
    "telefone" => "(11) 1234-5678"
]

foreach ($loja as $chave => $valor) {
    echo ucfirst($chave) . ": $valor\n";
}