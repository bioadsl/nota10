<?php

    //Configura de acesso ao banco de dados
    $conf['http://127.0.0.1:8888/home/mysql'] = "http://127.0.0.1:8888/home/mysql"; //host do banco de dados
    $conf['nota10'] = "nota10"; //nome do banco
    $conf['root'] = "root"; //nome de usu�rio de acesso ao banco
    $conf['senha'] = ""; //senha de acesso ao banco de dados


    //conex�o com o banco de dados
    $conexao = @mysql_connect($conf['http://127.0.0.1:8888/home/mysql'], $conf['nota10'], $conf['root'])or die("ERRO NA CONEX�O COM MYSQL");
    $db = @mysql_select_db($conf['nota10'], $conexao) or die("ERRO NA SELE��O DO BANCO DE DADOS MYSQL");

?>