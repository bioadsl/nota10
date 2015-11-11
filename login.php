<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Nota10</title>
<link href="_css/estilo.css" rel="stylesheet" type="text/css" />
<link href="_css/form.css" rel="stylesheet" type="text/css" />
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="_javascript/funcoes.js"></script>

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" type="text/css" href="css/clockcss.css"
    charset="utf-8">


</head>
<body>
	<div id="interface">
		<header id="cabecalho">
			<hgroup>
				<h1>Projeto Nota10</h1>
				<h2>Fa�a o login de sistema</h2>
			</hgroup>

			<img id="logo" src="_imagens/arquivoLogo.png" />
		</header>

	  	<article id="texto-principal">

		<fieldset id="usuario">
				<legend>Login</legend>

				<form action="autentica.php" method="post">
					<table>
						<tr>
							<td>Login:</td>
							<td><input type="text" name="login" required="required">
							<td>
						</tr>
						<tr>
							<td>Senha:</td>
							<td><input type="password" name="senha" required="required">
							<td>
						</tr>
											
						<tr></tr>
						<tr>
							<td><input type="submit" value="Entrar"></td>
							<td><input type="reset" value="Cancelar"></td>
							<td><a href="cadastrarUsuarioLogin.html">Crie sua conta!</a></td>
						</tr>
						
				</table>
				
				
		</form>
	</fieldset> 
	</article>

						<footer id="rodape">
							<p>
								Copyright &copy; 2014 - by Fabricio Duarte e Manoel Andrade <a
									href="http://facebook.com/biosonora" target="_blank">|
									Facebook</a> | <a href="http://twitter.com/biosonora"
									target="_blank">Twitter</a> | <a
									href="https://www.linkedin.com/pub/fabrÃ­cio-duarte/2a/306/522"
									target="_blank"> Linkedin </a>
							</p>
						</footer>
						</div>
</body>
</html>