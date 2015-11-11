<?php
//fazemos o include do conf.php
require_once("conf.php");

$login = $_POST['login'];
$senha = $_POST['senha'];


//coloca \ antes das aspas para evitar SQL Injection
if(get_magic_quotes_gpc() == 0){
    $login = addslashes($login);
    $senha = addslashes($senha);
}

//criptografamos a senha
$senha  = md5($senha);


//executamos uma consulta no banco de dados
$sql = mysql_query("SELECT id, nome FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("ERRO NO COMANDO SQL");

//retorma o número de linhas retornadas pela consulta acima
$row  = mysql_num_rows($sql);

if($row == 0){
    echo "Erro: Usuário ou Senha inválidos";
    echo "<br>";
    echo "<a href='login.php'>voltar</a>";
}else{

    $id = mysql_result($sql, 0, "id");//pegamos o id do usuario autentica
    $nome = mysql_result($sql, 0, "nome");//pegamos o nome do usuário autenticado

    //redirecionamos para a página do resultado
    header("Location: resultado.php");

}




?>