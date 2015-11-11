<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<title>Treino Nota10</title>
<link href="_css/estilo.css" rel="stylesheet" type="text/css" />
<link href="_css/form.css" rel="stylesheet" type="text/css" />
<script src="_javascript/funcoes.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script type='text/javascript' src='js/jquery-2.1.4.min.js'></script>
<script type='text/javascript' src='js/knockout-3.3.0.js'></script>
<script type='text/javascript' src='js/nivel1.js'></script>
<script>
	$(document).ready(function () {
	    /*aplica o bind */
		ko.applyBindings(new myViewModel());
	});
</script>


<style>
	@import url(../_fonts/Sketch Nice.ttf);
	@import url(../_fonts/ChalkDust.ttf);
	
	@font-face {
     font-family: 'Treino1';
    src: url('../_fonts/Sketch Nice.ttf');
    font-family: 'Treino2';
    src: url('../_fonts/ChalkDust.ttf');

}

	.correto{
		color: white ;
	}
	.errado{
		color: red;
	}



	.treino{
	 	
	margin-top: 1 px;
	width:auto;
	height:400px;
	background-image:url(_imagens/green-307835_640.png);
	background-repeat: no-repeat;
	background-position: top center;
	
	}
	
	.texto-treino{
	
	font-family: 'Treino2', sans-serif;
	padding-top: 30px ;
	text-align: center;
	font-size: large;
	font-color: white;
	
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

			<img id="logo" src="_imagens/homeLogo.png" />
			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>

					<li onmouseover="mudafoto('_imagens/cabeçalho-login.png')"
						onmouseout="mudafoto('_imagens/homeLogo.png')"><a
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

<div class="treino">
<div class="texto-treino">
<table align="center" >
	<th></th>
	
	<tr><td><div>Você completou <span data-bind='text: numberOfClicks'>&nbsp;</span> de 10 sentenças</div></td></tr>
	
	<tr><td><div><span id='resultado'></span></div></td></tr>
		
	<tr><td><div><h1><span data-bind="text: valorA"> </span> + <span data-bind="text: valorB" ></span> = ? </h1></div></td></tr>
	
	<tr><td>Resposta: <input data-bind="value: resposta" autofocus="autofocus" size="2" />&nbsp;
	<button data-bind='click: registerClick, disable: hasClickedTooManyTimes' autofocus="autofocus"> Conferir</button></td></tr>
	
	<tr><td>
	<div  data-bind='visible: hasClickedTooManyTimes'>
		<p>Média de acerto : <span   data-bind='text: Media'> </span> % &nbsp; &nbsp; Pontuação: <span  data-bind='text: Pontuacao'> </span></p>
		<div data-bind='visible: hasClickedTooManyTimes'>
			
			<form method="POST" action="salvarPontuacao.php">
			<input type="hidden" name="media_acerto"  id="inputmedia" />
			<input type="hidden" name="pontuacao"  id="inputpontuacao" />
			<input type="button" data-bind='click: resetClicks'  value="Jogar Novamente">
			<input type="submit" value="Salvar Pontuação"/>
			</form>
		
		</div>  
	</div>
	</td></tr>

</table>
</div>

</div>

</div>	

<footer id="rodape">
	<p>
		Copyright &copy; 2014 - by Fabricio Duarte e Manoel Andrade <a
			href="http://facebook.com/biosonora" target="_blank">| Facebook</a> |
		<a href="http://twitter.com/biosonora" target="_blank">Twitter</a> | <a
			href="https://www.linkedin.com/pub/fabrÃ­cio-duarte/2a/306/522"
			target="_blank"> Linkedin </a>
	</p>
</footer>

</div>
</body>
</html>