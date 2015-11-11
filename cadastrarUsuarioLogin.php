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
//$data_nascimento = $_POST['data_nascimento'];
//$sexo = $_POST['sexo'];
//$serie = $_POST['serie'];
//$escola = $_POST['escola'];
//$cidade = $_POST['cidade'];
//$uf = $_POST['uf'];

include_once 'conexao.php';

//criptografamos a senha
$senha  = md5($senha);

$sqlInsert = "insert into nota10.usuarios (nome,login,senha,email) values 
('$nome','$login','$senha','$email')";
print("SQL".$sqlInsert);

mysql_query($sqlInsert) or die("Falha na inserção do cliente");

$urlDestino = "consultaUsuarioLogin.php";
header("location:$urlDestino");
?>
</body>
</html>
