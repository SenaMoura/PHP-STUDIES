<?php
$mercado = [
    "nome" => "Mercado Central",
    "endereco" => "Avenida Principal, 456",
    "telefone" => "(21) 9876-5432"
];

foreach ($mercado as $chave => $valor){
    echo ucfirst($chave) . ": $valor\n";
}
