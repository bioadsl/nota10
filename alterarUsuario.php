<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro de Cliente</title>
</head>
<body>

<?php
// Pegar os parâmetros
$cod_usuario = $_POST['id_usuario'];
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

include 'conexao.php';


$sqlAlterar = "update into nota10.tb_usuario SET nome='$nome', login='$login' ,senha='$senha' ,email='$email' ,data_nascimento='$data_nascimento' ,sexo='$sexo',serie='$serie',escola='$escola',cidade='$cidade',uf='$uf' where  id_usuario='$cod_usuario' ";

print('SQL'.$sqlAlterar);

mysql_query($sqlAlterar) or die ("Falha na inserção do cliente");

$urlDestino = "consultaUsuario.php";
header("location:$urlDestino");
?>
</body>
</html>
