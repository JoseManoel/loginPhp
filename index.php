<?php
session_start();
if(isset($_SESSION['email'])){

    header("location:  home.php");
    exit();

}

?>

<html>
    <head>
        <title>Sistema de Login</title>
        <meta charset="UTF-8">
    </head>

    <body>
      <div>
        <h1>Login</h1>

        <form method="POST" action="validarLogin.php">
            <label>E-mail:</label>
            <input type="text" name="text">

            <label>Senha:</label>
            <input type="password" name="senha">

            <button type="submit">Saco</button>
        </form>
      </div>

      <?php if(isset($_GET['login'])): ?>

      <div>
        <p>Senha inválida!</p>
      </div>

    <?php endif ?>

    </body>
</html>
