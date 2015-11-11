<?php

    //Configura de acesso ao banco de dados
    $conf['http://127.0.0.1:8888/home/mysql'] = "http://127.0.0.1:8888/home/mysql"; //host do banco de dados
    $conf['nota10'] = "nota10"; //nome do banco
    $conf['root'] = "root"; //nome de usuário de acesso ao banco
    $conf['senha'] = ""; //senha de acesso ao banco de dados


    //conexão com o banco de dados
    $conexao = @mysql_connect($conf['http://127.0.0.1:8888/home/mysql'], $conf['nota10'], $conf['root'])or die("ERRO NA CONEXÃO COM MYSQL");
    $db = @mysql_select_db($conf['nota10'], $conexao) or die("ERRO NA SELEÇÃO DO BANCO DE DADOS MYSQL");

?>