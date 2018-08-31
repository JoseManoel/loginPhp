<?php
session_start();

if(!isset($_SESSION['login'])){

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
            <h1>Bem vindo, <?=$nome?><h1>

              <a href="cadastrofuncionario.php">

                <button>Cadastro</button>

              </a>

            <form method="post" action="logout.php">
                <input type="hidden" value="<?=@nome?>">
                <button type="submit">Logout</button>
            </form>
    </body>

</html>
