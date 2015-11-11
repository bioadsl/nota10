<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<title>Projeto Nota10</title>
<link href="_css/estilo.css" rel="stylesheet" type="text/css" />
<link href="_css/form.css" rel="stylesheet" type="text/css" />
</head>
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="_javascript/funcoes.js"></script>
<style>
fieldset {
	background-image: url("_imagens/cjLapis.png");
	background-position: center;
	background-repeat: no-repeat;
}
</style>

</head>
<body>
	<div id="interface">
		<header id="cabecalho">
			<hgroup>
				<h1>Projeto Nota10</h1>
				<h2>Programa de apoio escolar</h2>
			</hgroup>

			<img id="logo" src="_imagens/cabeçalho-login.png" />




			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>

				<li onmouseover="mudafoto('_imagens/cabeçalho-login.png')"
						onmouseout="mudafoto('_imagens/cabeçalho-login.png')"><a
						href="selecionaTreino.php">Treino</a></li>

					<li onmouseover="mudafoto('_imagens/pesquisarLogo.png')"
						onmouseout="mudafoto('_imagens/homeLogo.png')"><a
						href="cadastrarUsuario.html">Cadastrar Usuário</a></li>


					<li onmouseover="mudafoto('_imagens/pesquisarLogo.png')"
						onmouseout="mudafoto('_imagens/homeLogo.png')"><a
						href="consultaUsuario.php">Consulta Usuário</a></li>

				</ul>
			</nav>
		</header>
		<section id="corpo-full">
			<header id="cabecalho-corpo">

				<hgroup>
					<p id="caminho">Home</p>
					<h1>Bem Vindos</h1>
					<h2>por Fabricio Duarte e Manoel Andrade</h2>
				</hgroup>
			</header>

			<fieldset id="usuario-treino" >
				<legend>Selecione o nível</legend>
				
					<table>
						<tr><tr>
						<tr><tr>					
						<tr><td><a href="treino1.php"><button>Nível 1</button></a></td><td>Soma</td></tr>
						<tr><tr>
						<tr><tr>
						<tr><td><a href="treino2.php"><button>Nível 2</button></a></td><td>Subtração</td></tr>
						<tr><tr>
						<tr><tr>
						<tr><td><a href="treino3.php"><button>Nível 3</button></a></td><td>Multiplicação</td></tr>					
						<tr><tr>
						<tr><tr>
						<tr><td><a href="treino4.php"><button>Nível 4</button></a></td><td>Divisão</td></tr>	
						<tr><tr>
						<tr><tr>
				   
				     </table>
				
				
		
	</fieldset>
						<footer id="rodape">
							<p>
								Copyright &copy; 2014 - by Fabricio Duarte e Manoel Andrade <a
									href="http://facebook.com/biosonora" target="_blank">|
									Facebook</a> | <a href="http://twitter.com/biosonora"
									target="_blank">Twitter</a> | <a
									href="https://www.linkedin.com/pub/fabrÃƒÂ­cio-duarte/2a/306/522"
									target="_blank"> Linkedin </a>
							</p>
						</footer>
						</div>
</body>
</html>