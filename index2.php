<html>
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8">

        <style>
        .center{
          text-align: center;
          background-color: #fffffff;
        }
        </style>
    </head>

    <body>
      <div class="center">
        <h1>Cadastro de Funcionário</h1>

        <form method="POST" action="validarLogin.php">
            <label>Nome Completo:</label>
            <input type="email" name="nome">
            <br>
            <br/>
            <label>E-mail:</label>
            <input type="email" name="email">
            <br>
            <br />
            <label>Endereço:</label>
            <input type="text" name="endereco">
            <br>
            <br/>
            <label>Idade:</label>
            <input type="number" name="idade">
            <br>
            <br />
            <label>Cargo</label>
            <input type="text" name="cargo">
            <br>
            </br>
            <label>Salário</label>
            <input type="number" name="salario">
            <br>
            <br />
            <button type="submit">Cadatrar</button>
        </form>
      </div>
    </body>
</html>
