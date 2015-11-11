  

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro de Cliente</title>
</head>
<body>

<?php
 
  include 'conexao.php';
 
      if ($_POST['login']!=null){
          $login = $_POST['login'];
    
          $sqlAutentincar = "select * from nota10.tb_usuario";
     }
          
          $resultado = mysql_query($sqlAutentincar) or die ("Falha na consulta");

print('SQL'.$sqlAutenticar);

mysql_query($sqlAutenticar) or die ("Falha na inserção do cliente");

$urlDestino = "home.php";
header("location:$urlDestino");
?>
</body>
</html>

