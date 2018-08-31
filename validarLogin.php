<?php

if(!isset($_POST['text'])){
    //header("Location: index.php");
  exit();
}

$text = $_POST['text'];
$senha = $_POST['senha'];
$senha = md5($senha);

$conexao = mysqli_connect('localhost', 'root', '', 'zestema');

$query = "SELECT * FROM login WHERE loginusuario = '$text' AND password = '$senha'";

$buscar = mysqli_query($conexao, $query);

$dados = mysqli_fetch_assoc($buscar);

if($dados != null){

    echo "Logado com sucesso!";

    session_start();
    $_SESSION['nome'] = $dados['nome'];
    $_SESSION['login'] = $dados['loginusuario'];
    
    header("location: home.php");
    exit();

}else{

    echo "Senha inválida";
    header("location: index.php?login=0");

}
