<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli -> error) { /* verifica conexão com o banco de dados */
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>