<?php

// Inicia a sessão apenas se não estiver iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "db_viavarejo";

try {
    // Cria a conexão com o banco de dados usando o PDO
    $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Em caso de erro na conexão, exibe uma mensagem de erro e encerra o script
    die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
}

$base = "http://localhost/viaVarejo";


