<?php
include 'conexao.php';

// pegar o parametro
$nome = $_GET["nome"];

// Sentença SQL
$sqlDelete = "delete from nota10.tb_usuario where nome = '$nome'";

// Executar a sentença SQL 
mysql_query($sqlDelete) or die("Falha na exclusão");

// Redirecionando para página de consulta
$urlDestino = "consultaUsuario.php";
header("location:$urlDestino");

?>