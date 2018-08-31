<?php
$nome = $_POST['nome_funcionario'];
$email = $_POST['email_funcionario'];
$cargo = $_POST['cargo_funcionario'];
$salario = $_POST['salario_funcionario'];

$conexao = mysqli_connect ('localhost', 'root', '', 'zestema');

$query = "insert into funcionarios(nome_funcionario, email_funcionario, cargo_funcionario, salario_funcionario) values ('$nome', '$email', '$cargo', '$salario')";


?>
