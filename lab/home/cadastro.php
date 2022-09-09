<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
<header> 
    <nav>
        <h1 class="h1"> LABORATÓRIOS - Cadastro </h1>

        <ul class="nav-list">
            <li> <a href="painel.php">Início</a></li>
            <li> <a href="/">Agenda</a></li>
            <li> <a href="/">Acervo</a></li>
            <li> <a href="cadastro.php">Cadastro</a></li>
            <li> <a href="../login/logout.php">Sair</a></li>
        </ul>
        </nav>
    </header>
    <section>
        <form action="cadastrar.php" method="POST">
            <div>
                <label> Nome do Laboratório: </label>
                <input type="text" placeholder="Nome" name="nomesala" required />
            </div>

            <div>
                <label> Turma de prioridade: </label>
                <input type="text" placeholder="Turma" name="prioridade" required />
            </div>
            <div>
                <input type="submit" value="Cadastrar"/>
            </div>
        </form>    
</body>
</html>