<?php

// Conectando com o banco de dados MYSQL 
$link = mysql_connect("127.0.0.1","root","") or die ("Não foi possível realizar a conexão");

//Selecionando a base de dados
mysql_select_db("nota10") or die("Não foi possível realizar a seleção da base de dados");



//$conn = @mysql_connect('127.0.0.1','root','');
// if (!$conn) {
//	die('Não foi possível Conectar: ' . mysql_error());
//}
//mysql_select_db('nota10', $conn);




?>