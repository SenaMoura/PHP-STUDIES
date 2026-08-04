<?php
$usuario = [
    "nome" => "Ana Souza",
    "email" => "ana@email.com"
    "nivel" => "Desenvolvedora"
];

// Percorrendo as chaves e valores
foreach ($usuario as $chave => $valor) {
    echo ucfirst($chave) . ": $valor\n";
}
?>