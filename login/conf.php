<?php

    //Configura de acesso ao banco de dados
    $conf['host'] = "10.1.1.14"; //host do banco de dados
    $conf['bd'] = "teste"; //nome do banco
    $conf['usuario'] = "rodrigo"; //nome de usu�rio de acesso ao banco
    $conf['senha'] = "********"; //senha de acesso ao banco de dados


    //conex�o com o banco de dados
    $conexao = @mysql_connect($conf['host'], $conf['usuario'], $conf['senha'])or die("ERRO NA CONEX�O COM MYSQL");
    $db = @mysql_select_db($conf['bd'], $conexao) or die("ERRO NA SELE��O DO BANCO DE DADOS MYSQL");

?>