
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro de Pontos</title>
</head>
<body>

<?php



$pontuacao=$_POST['pontuacao'];
$media_acerto=$_POST['media_acerto'];


include_once 'conexao.php';

$sqlInsert = "insert into nota10.tb_pontuacao (pontuacao,media_acerto) values ('$pontuacao','$media_acerto')";
print("SQL".$sqlInsert);

echo $pontuacao ;
echo $media_acerto;

mysql_query($sqlInsert) or die("Falha na inserção do cliente");

$urlDestino = "treino1.php";
header("location:$urlDestino");

?>

</body>
</html>