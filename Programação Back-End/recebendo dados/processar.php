<?php
// verifica se o campo foi enviado
if (isset($_POST['nome usuario'])) {
    $nome = $_POST['nome_usuario'];
    echo "Bem-vindo(a)," .htmlspecialchars($nome)
}
?>

