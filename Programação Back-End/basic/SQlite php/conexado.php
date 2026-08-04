<?php
try{
    $pdo = new PDO('sqlite:' . __DIR__ . '/tb_insert.db');

    $pdo = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo = setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die "Erro ao conectar ao banco de dados: " . $e->getMessage();
}