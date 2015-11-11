<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta>
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
						href="home.jsp">Home</a></li>

					<li onmouseover="mudafoto('_imagens/pesquisarLogo.png')"
						onmouseout="mudafoto('_imagens/homeLogo.png')"><a
						href="cadastrarUsuario.jsp">Cadastrar Usuário</a></li>
				
				<li onmouseover="mudafoto('_imagens/pesquisarLogo.png')"
						onmouseout="mudafoto('_imagens/homeLogo.png')"><a
						href="consultaUsuario.jsp">Consulta Usuário</a></li>


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

			<article id="texto-principal">

			<fieldset id="usuario">
						<legend>Dados do Usuário</legend>
				<form method="post" action="alterarUsuario">
					
						<td colspan="4"><hr /></td>
							<tr>
								<p>
									<label for="cId"><td colspan="2">Chave:
									</td> </label>
								<td colspan="2"><input type="text" name="cId"
									id="cId" maxlength="20" size="20" 
									autofocus="autofocus" placeholder="Digite uma chave" 
									value="<%=usuarioBean.getId()%>" readonly="readonly"/></td>
								</p>
							</tr>					
						
								
							<td colspan="4"><hr /></td>
							<tr>
								<p>
									<label for="cUsuario"><td colspan="2">Nome do
											Usuário:</td> </label>
								<td colspan="2"><input type="text" value="<%=usuarioBean.getNome()%>"
									id="cUsuario" name="cUsuario" maxlength="20" size="35" required="required"
									autofocus="autofocus" placeholder="Digite seu nome" /></td>
								</p>
							</tr>

							<tr>
								<p>
									<label for="clogin"><td colspan="2">Login:</td> </label>
								<td colspan="2"><input type="text" value="<%=usuarioBean.getLogin()%>"
									id="cLogin" name="cLogin" maxlength="15" size="15" required="required"
									placeholder="Digite seu Login"></td>
								</p>
							</tr>
							<tr>
								<p>
									<label for="cSenha"><td colspan="2">Senha:</td></label>
								<td colspan="2"><input type="text" value="<%=usuarioBean.getSenha()%>"
									id="cSenha" name="cSenha" maxlength="15" size="15" multiple
									placeholder="Digite sua senha" required="required" /></td>
								</p>
							</tr>
							<tr>
								<p>
									<label for="cEmail"><td colspan="2">Email:</td></label>
								<td colspan="2"><input type="email" value="<%=usuarioBean.getEmail()%>"
									id="cEmail" name="cEmail" maxlength="40" size="30" multiple
									placeholder="Ex: email@com.br" required="required" /></td>
								</p>
							</tr>
							<td colspan="4"><hr/></td>
							<tr>
								<p>
									<label for="cNascimento"><td colspan="2">Nascimento:</td></label>
								<td colspan="2"><input type="date" value="<%=usuarioBean.getNascimento()%>"
									id="cNascimento" name="cNascimento" maxlength="12" size="12" multiple
									placeholder="Ex: 01/01/2000 " required="required" /></td>
								</p>
							</tr>
							<tr>
								<p>
									<label for="cSexo"><td colspan="2">Sexo:</td></label>
								<td colspan="2">
								
									<input type="radio" value="<%=usuarioBean.getSexo()%>" name="cSexo" id="cSexo"
									required="required" checked="checked" />Masculino

									<input type="radio" value="<%=usuarioBean.getSexo()%>" name="cSexo" id="cSexo" 
									required="required"	 />Feminino</td>

								</p>
							</tr>
							<tr>
								<p>
									<label for="cSerie"><td colspan="2">Série:</td></label>
								<td colspan="2"><input type="number" value="<%=usuarioBean.getSerie()%>"
									id="cSerie" value="cSerie" maxlength="15" size="15" multiple 
									placeholder="Digite sua série" required="required" /></td>
								</p>
							</tr>
							<td colspan="4"><hr/></td>
							<tr>
								<tr><td><p>Dados da Escola</p></td></tr>
								<p>
									<label for="cEscola"><td colspan="2">Escola:</td></label>
								<td colspan="2"><input type="text" value="<%=usuarioBean.getEscola()%>"
									id="cEscola" name="cEscola" maxlength="40" size="40" multiple
									placeholder="Digite sua escola" required="required" /></td>
								</p>
							</tr>
							<tr>
								<p>
									<label for="cCidade"><td colspan="2">Cidade:</td></label>
								<td colspan="2"><input type="text" value="<%=usuarioBean.getCidade()%>"
									id="cCidade" name="cCidade" maxlength="40" size="40" multiple
									placeholder="Digite a cidade da escola" required="required" /></td>
								</p>
							</tr>
							<tr>
								<p>
									<label for="cUf"><td colspan="2">UF:</td></label>
								
								
								<td colspan="2">
								
								<select  id="cUf" name="cUf" required="required" >
										<%  String uf  =usuarioBean.getUf();%>
										<option >Selecione o Estado</option>
										
										<% if (uf.equals("AC")){ %>
										      <option value="AC" selected="selected">Acre</option>
										<%} else { %> <option value="AC" >Acre</option><%} %>
										
										<% if (uf.equals("AL")){ %>
										      <option value="AL" selected="selected">Alagoas</option>
										<%} else { %> <option value="AL" >Alagoas</option><%} %>
										
										<% if (uf.equals("AM")){ %>
										      <option value="AM" selected="selected">Amazonas</option>
										<%} else { %> <option value="AM" >Amazonas</option><%} %>
										
										<% if (uf.equals("AP")){ %>
										      <option value="AP" selected="selected">Amapá</option>
										<%} else { %> <option value="AP" >Amapá</option><%} %>
										
										<% if (uf.equals("BA")){ %>
										      <option value="BA" selected="selected">Bahia</option>
										<%} else { %> <option value="BA" >Bahia</option><%} %>
										
										<% if (uf.equals("CE")){ %>
										      <option value="CE" selected="selected">Ceará</option>
										<%} else { %> <option value="CE" >Ceará</option><%} %>
										
										<% if (uf.equals("DF")){ %>
										      <option value="DF" selected="selected">Distrito Federal</option>
										<%} else { %> <option value="DF" >Distrito Federal</option><%} %>
										
										<% if (uf.equals("ES")){ %>
										      <option value="ES" selected="selected">Espírito Santo</option>
										<%} else { %> <option value="ES" >Espírito Santo</option><%} %>
										
										<% if (uf.equals("GO")){ %>
										      <option value="GO" selected="selected">Goiás</option>
										<%} else { %> <option value="GO" >Goiás</option><%} %>
									
										<% if (uf.equals("MA")){ %>
										      <option value="MA" selected="selected">Maranhão</option>
										<%} else { %> <option value="MA" >Maranhão</option><%} %>
										
										<% if (uf.equals("MT")){ %>
										      <option value="MT" selected="selected">Mato Grosso</option>
										<%} else { %> <option value="MT" >Mato Grosso</option><%} %>
										
										<% if (uf.equals("MS")){ %>
										      <option value="MS" selected="selected">Mato Grosso do Sul</option>
										<%} else { %> <option value="MS" >Mato Grosso do Sul</option><%} %>
										
										<% if (uf.equals("MG")){ %>
										      <option value="MG" selected="selected">Minas Gerais</option>
										<%} else { %> <option value="MG" >Minas Gerais</option><%} %>
										
										<% if (uf.equals("PA")){ %>
										      <option value="PA" selected="selected">Pará</option>
										<%} else { %> <option value="PA" >Pará</option><%} %>
										
										<% if (uf.equals("PB")){ %>
										      <option value="PB" selected="selected">Paraíba</option>
										<%} else { %> <option value="PB" >Paraíba</option><%} %>
										
										<% if (uf.equals("PR")){ %>
										      <option value="PR" selected="selected">Paraná</option>
										<%} else { %> <option value="PR" >Paraná</option><%} %>
										
										<% if (uf.equals("PE")){ %>
										      <option value="PE" selected="selected">Pernambuco</option>
										<%} else { %> <option value="PE" >Pernambuco</option><%} %>
										
										<% if (uf.equals("PI")){ %>
										      <option value="PI" selected="selected">Piauí</option>
										<%} else { %> <option value="PI" >Piauí</option><%} %>
										
										<% if (uf.equals("RJ")){ %>
										      <option value="RJ" selected="selected">Rio de Janeiro</option>
										<%} else { %> <option value="RJ" >Rio de Janeiro</option><%} %>
										
										<% if (uf.equals("RN")){ %>
										      <option value="RN" selected="selected">Rio Grande do Norte</option>
										<%} else { %> <option value="RN" >Rio Grande Do Norte</option><%} %>
										
										<% if (uf.equals("RO")){ %>
										      <option value="RO" selected="selected">Rondônia</option>
										<%} else { %> <option value="RO" >Rondônia</option><%} %>
										
										<% if (uf.equals("RS")){ %>
										      <option value="RS" selected="selected">Rio Grande do Sul</option>
										<%} else { %> <option value="RS" >Rio Grande Do Sul</option><%} %>
										
										<% if (uf.equals("RR")){ %>
										      <option value="RR" selected="selected">Roraima</option>
										<%} else { %> <option value="RR" >Roraima</option><%} %>
										
										<% if (uf.equals("SC")){ %>
										      <option value="SC" selected="selected">Santa Catarina</option>
										<%} else { %> <option value="SC" >Santa Catarina</option><%} %>
										
										<% if (uf.equals("SE")){ %>
										      <option value="SE" selected="selected">Sergipe</option>
										<%} else { %> <option value="SE" >Sergipe</option><%} %>
										
										<% if (uf.equals("SP")){ %>
										      <option value="SP" selected="selected">São Paulo</option>
										<%} else { %> <option value="SP" >São Paulo</option><%} %>
										
										<% if (uf.equals("TO")){ %>
										      <option value="TO" selected="selected">Tocantins</option>
										<%} else { %> <option value="TO" >Tocantis</option><%} %>
										
										
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