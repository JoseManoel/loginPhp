<?php
session_start();

if(!isset($_SESSION['email'])){

    header("Location: index.php");
    exit();

}

$nome = $_SESSION['nome'];
?>

<html>

    <head>
        <title>Home</title>
    </head>

    <body>
        <div>
            <h1>Bem vindo, <?=$nome?></h1>
              <a href="cadastrofuncionario.php">
                <button>Cadastro</button>
              </a>
    </body>
</html>
