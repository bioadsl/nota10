<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Alterar Usuário</title>
<link href="_css/estilo.css" rel="stylesheet" type="text/css" />
<link href="_css/form.css" rel="stylesheet" type="text/css" />
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="_javascript/funcoes.js"></script>
</head>
<body>
	<div id="interface">
		<header id="cabecalho">
			<hgroup>
				<h1>Projeto Nota10</h1>
				<h2>Módulo de Alteração de cadastro de usuário</h2>
			</hgroup>

			<img id="logo" src="_imagens/arquivoLogo.png" />

			<nav id="menu">
				<h1>Menu Principal</h1>
				<ul>
					<li onmouseover="mudafoto('_imagens/homeLogo.png')"
						onmouseout="mudafoto('_imagens/homeLogo.png')"><a
						href="home.php">Home</a></li>

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
					<p id="caminho">Home > Cadastro Usuário</p>
					<h1>Alteração de Cadastro de Usuário</h1>
					<h2>por Fabricio Duarte e Manoel Andrade</h2>
				</hgroup>
			</header>


<?php

include 'conexao.php';

// Obtendo os parâmetros da requisição HTTP do form de veiculo. 
$nome 	= $_GET['nome'];

// sentenção SQL para inserção 
$busca= "SELECT * FROM Nota10.tb_usuario where nome='$nome'";

$resultado = mysql_query($busca) or die("Falha na consulta");
$linha = mysql_fetch_assoc($resultado);

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];
$serie = $_POST['serie'];
$escola = $_POST['escola'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
	     
?> 





			<article id="texto-principal">

			<fieldset id="usuario">
						<legend>Dados do Usuário</legend>
				<form method="post" action="alterarUsuario.php">
					
						<td colspan="4"></td>
									
								
							<td colspan="4"></td>
							<tr>
								<p>
									<label for="nome"><td colspan="2">Nome do
											Usuário:</td> </label>
								<td colspan="2"><input type="text" value="<?php echo $nome;?>"
									id="nome" name="nome" maxlength="20" size="35" required="required"
									autofocus="autofocus" placeholder="Digite seu nome" /></td>
								</p>
							</tr>

							<tr>
								<p>
									<label for="login"><td colspan="2">Login:</td> </label>
								<td colspan="2"><input type="text" value="<?php print($login);?>"
									id="login" name="login" maxlength="15" size="15" required="required" 
									placeholder="Digite seu Login"></td>
								</p>
							</tr>
							<tr>
								<p>
									<label for="senha"><td colspan="2">Senha:</td></label>
								<td colspan="2"><input type="text" value="<?php print($senha);?>"
									id="senha" name="senha" maxlength="15" size="15" multiple
									placeholder="Digite sua senha" required="required" /></td>
								</p>
							</tr>
							<tr>
								<p>
									<label for="email"><td colspan="2">Email:</td></label>
								<td colspan="2"><input type="email" value="<?php print($email);?>"
									id="email" name="email" maxlength="40" size="30" multiple
									placeholder="Ex: email@com.br" required="required" /></td>
								</p>
							</tr>
							<td colspan="4"><hr/></td>
							<tr>
								<p>
									<label for="data_nascimento"><td colspan="2">Nascimento:</td></label>
								<td colspan="2"><input type="date" value="<?php print($data_nascimento);?>"
									id="data_nascimento" name="data_nascimento" maxlength="12" size="12" multiple
									placeholder="Ex: 01/01/2000 " required="required" /></td>
								</p>
							</tr>
							<tr>
								<p>
									<label for="sexo"><td colspan="2">Sexo:</td></label>
								<td colspan="2">
								
									<input type="radio" value="<?php print($email);?>" name="sexo" id="sexo"
									required="required" checked="checked" />Masculino

									<input type="radio" value="<?php print($sexo);?>" name="sexo" id="sexo" 
									required="required"	 />Feminino</td>

								</p>
							</tr>
							<tr>
								<p>
									<label for="serie"><td colspan="2">Série:</td></label>
								<td colspan="2"><input type="number" value="<?php print($serie);?>"
									id="serie" value="serie" maxlength="15" size="15" multiple 
									placeholder="Digite sua série" required="required" /></td>
								</p>
							</tr>
							<td colspan="4"><hr/></td>
							<tr>
								<tr><td><p>Dados da Escola</p></td></tr>
								<p>
									<label for="escola"><td colspan="2">Escola:</td></label>
								<td colspan="2"><input type="text" value="<?php print($escola);?>"
									id="escola" name="escola" maxlength="40" size="40" multiple
									placeholder="Digite sua escola" required="required" /></td>
								</p>
							</tr>
							<tr>
								<p>
									<label for="cidade"><td colspan="2">Cidade:</td></label>
								<td colspan="2"><input type="text" value="<?php print($cidade);?>"
									id="cidade" name="cidade" maxlength="40" size="40" multiple
									placeholder="Digite a cidade da escola" required="required" /></td>
								</p>
							</tr>
							<tr>
								<p>
									<label for="uf"><td colspan="2">UF:</td></label>
								
								
								<td colspan="2">
								
								<select  id="uf" name="uf" required="required" >
										<?php  $uf=print($uf); ?>
										
										<option >Selecione o Estado</option>
										
										<?php if ($uf="AC"){ ?>
										      <option value="AC" selected="selected">Acre</option>
										<?php} else { ?> <option value="AC" >Acre</option><?php} ?>
										
										<?php if ($uf="AL"){ ?>
										      <option value="AL" selected="selected">Alagoas</option>
										<?php} else { ?> <option value="AL" >Alagoas</option><?php} ?>
										
										<?php if ($uf="AM"){ ?>
										      <option value="AM" selected="selected">Amazonas</option>
										<?php} else { ?> <option value="AM" >Amazonas</option><?php} ?>
										
										<?php if ($uf="AP"){ ?>
										      <option value="AP" selected="selected">Amapá</option>
										<?php} else { ?> <option value="AP" >Amapá</option><?php} ?>
										
										<?php if ($uf="BA"){ ?>
										      <option value="BA" selected="selected">Bahia</option>
										<?php} else { ?> <option value="BA" >Bahia</option><?php} ?>
										
										<?php if ($uf="CE"){ ?>
										      <option value="CE" selected="selected">Ceará</option>
										<?php} else { ?> <option value="CE" >Ceará</option><?php} ?>
										
										<?php if ($uf="DF"){ ?>
										      <option value="DF" selected="selected">Distrito Federal</option>
										<?php} else { ?> <option value="DF" >Distrito Federal</option><?php} ?>
										
										<?php if ($uf="ES"){ ?>
										      <option value="ES" selected="selected">Espírito Santo</option>
										<?php} else { ?> <option value="ES" >Espírito Santo</option><?php} ?>
										
										<?php if ($uf="GO"){ ?>
										      <option value="GO" selected="selected">Goiás</option>
										<?php} else { ?> <option value="GO" >Goiás</option><?php} ?>
									
										<?php if ($uf="MA"){ ?>
										      <option value="MA" selected="selected">Maranhão</option>
										<?php} else { ?> <option value="MA" >Maranhão</option><?php} ?>
										
										<?php if ($uf="MT"){ ?>
										      <option value="MT" selected="selected">Mato Grosso</option>
										<?php} else { ?> <option value="MT" >Mato Grosso</option><?php} ?>
										
										<?php if ($uf="MS"){ ?>
										      <option value="MS" selected="selected">Mato Grosso do Sul</option>
										<?php} else { ?> <option value="MS" >Mato Grosso do Sul</option><?php} ?>
										
										<?php if ($uf="MG"){ ?>
										      <option value="MG" selected="selected">Minas Gerais</option>
										<?php} else { ?> <option value="MG" >Minas Gerais</option><?php} ?>
										
										<?php if ($uf="PA"){ ?>
										      <option value="PA" selected="selected">Pará</option>
										<?php} else { ?> <option value="PA" >Pará</option><?php} ?>
										
										<?php if ($uf="PB"){ ?>
										      <option value="PB" selected="selected">Paraíba</option>
										<?php} else { ?> <option value="PB" >Paraíba</option><?php} ?>
										
										<?php if ($uf="PR"){ ?>
										      <option value="PR" selected="selected">Paraná</option>
										<?php} else { ?> <option value="PR" >Paraná</option><?php} ?>
										
										<?php if ($uf="PE"){ ?>
										      <option value="PE" selected="selected">Pernambuco</option>
										<?php} else { ?> <option value="PE" >Pernambuco</option><?php} ?>
										
										<?php if ($uf="PI"){ ?>
										      <option value="PI" selected="selected">Piauí</option>
										<?php} else { ?> <option value="PI" >Piauí</option><?php} ?>
										
										<?php if ($uf="RJ"){ ?>
										      <option value="RJ" selected="selected">Rio de Janeiro</option>
										<?php} else { ?> <option value="RJ" >Rio de Janeiro</option><?php} ?>
										
										<?php if ($uf="RN"){ ?>
										      <option value="RN" selected="selected">Rio Grande do Norte</option>
										<?php} else { ?> <option value="RN" >Rio Grande Do Norte</option><?php} ?>
										
										<?php if ($uf="RO"){ ?>
										      <option value="RO" selected="selected">Rondônia</option>
										<?php} else { ?> <option value="RO" >Rondônia</option><?php} ?>
										
										<?php if ($uf="RS"){ ?>
										      <option value="RS" selected="selected">Rio Grande do Sul</option>
										<?php} else { ?> <option value="RS" >Rio Grande Do Sul</option><?php} ?>
										
										<?php if ($uf="RR"){ ?>
										      <option value="RR" selected="selected">Roraima</option>
										<?php} else { ?> <option value="RR" >Roraima</option><?php} ?>
										
										<?php if ($uf="SC"){ ?>
										      <option value="SC" selected="selected">Santa Catarina</option>
										<?php} else { ?> <option value="SC" >Santa Catarina</option><?php} ?>
										
										<?php if ($uf="SE"){ ?>
										      <option value="SE" selected="selected">Sergipe</option>
										<?php} else { ?> <option value="SE" >Sergipe</option><?php} ?>
										
										<?php if ($uf="SP"){ ?>
										      <option value="SP" selected="selected">São Paulo</option>
										<?php} else { ?> <option value="SP" >São Paulo</option><?php} ?>
										
										<?php if ($uf="TO"){ ?>
										      <option value="TO" selected="selected">Tocantins</option>
										<?php} else { ?> <option value="TO" >Tocantis</option><?php} ?>
										
										
								</select></td>
					
					
					
				
				
						<p><tr colspan="6"><td>
						<input type="submit" name="salvar" id="btnSalvar" value="Salvar" />
						</td></tr></p>
					
			
				</table>
			</form>	
	</fieldset>	


			</article>
		</section>




		<footer id="rodape">
			<p>
				Copyright &copy; 2015 - by Fabricio Duarte - Manoel Andrade<a
					href="http://facebook.com/biosonora" target="_blank">| Facebook</a>
				| <a href="http://twitter.com/biosonora" target="_blank">Twitter</a>
				| <a href="https://www.linkedin.com/pub/fabrÃ­cio-duarte/2a/306/522"
					target="_blank"> Linkedin </a>
			</p>

		</footer>
	</div>
</body>
</html>