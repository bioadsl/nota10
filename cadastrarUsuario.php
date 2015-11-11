<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro de Cliente</title>
</head>
<body>

<?php
// Pegar os parâmetros
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];
$serie = $_POST['serie'];
$escola = $_POST['escola'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

include_once 'conexao.php';

$sqlInsert = "insert into nota10.tb_usuario (nome,login,senha,email,data_nascimento,sexo,serie,escola,cidade,uf) values 
('$nome','$login','$senha','$email','$data_nascimento','$sexo','$serie','$escola','$cidade','$uf')";
print("SQL".$sqlInsert);

mysql_query($sqlInsert) or die("Falha na inserção do cliente");

$urlDestino = "consultaUsuario.php";
header("location:$urlDestino");
?>
</body>
</html>
