<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) { /* verifica se há email escrito */
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) { /* verifica se há senha escrita */
        echo "Preencha sua senha";
    } else {
        $email = $mysqli -> real_escape_string($_POST['email']); /* assegura o login, mesmo que pouco */
        $senha = $mysqli -> real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        $sql_query = $mysqli-> query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query -> num_rows;
        if($quantidade == 1) {
            $usuario = $sql_query-> fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ../home/painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Seja bem vindo a <br>Gestão de Laboratórios!</h1>
            <img src="lab.svg" class="left-login-image" alt="Animação!">
        </div> 
        <div class="right-login">
            <div class="card-login">
                <h1> LOGIN </h1> 
                <form action = "" method="POST">
                    <div class="textfield">
                        <label for="email"> Email </label>
                        <input type="text" name="email" placeholder="E-mail">
                    </div>

                    <div class="textfield">
                        <label for="senha"> Senha </label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn-login"> Entrar </button>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>