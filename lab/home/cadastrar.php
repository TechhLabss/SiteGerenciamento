<?php
session_start();
include("../login/conexao.php");

$nomesala = mysqli_real_escape_string($conexao, trim($_POST['nomesala']));
$prioridade = mysqli_real_escape_string($conexao, trim($_POST['prioridade']));

$sql = "select count(*) as total from salas where salas = '$salas'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO salas (nomesala, prioridade) VALUES ('$nomesala', '$prioridade')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;

?>