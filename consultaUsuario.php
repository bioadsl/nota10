<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<link href="_css/estilo.css" rel="stylesheet" type="text/css" />
<link href="_css/form.css" rel="stylesheet" type="text/css" />
<script src="_javascript/funcoes.js"></script>


</head>
<body>

     <div id="interface">
          <header id="cabecalho">
               <hgroup>
                    <h1>Consulta Usuário</h1>
                    <h2>Módulo de consulta</h2>
               </hgroup>

               <img id="logo" src="_imagens/pesquisarLogo.png" />

                         <nav id="menu">
                    <h1>Menu Principal</h1>
                    <ul>
                         <li onmouseover="mudafoto('_imagens/homeLogo.png')"
                              onmouseout="mudafoto('_imagens/homeLogo.png')"><a
                              href="home.php">Home</a></li>
                         
                         
                                                  
                         <li onmouseover="mudafoto('_imagens/pesquisarLogo.png')"
                              onmouseout="mudafoto('_imagens/homeLogo.png')"><a
                              href="cadastrarUsuario.html">Cadastrar Usuário</a></li>
                        

                    </ul>
               </nav>
          </header>
          <section id="corpo-full">
               <header id="cabecalho-corpo">

                    <hgroup>
                         <p id="caminho">Home > Consulta Usuário</p>
                         <h1>Consulta de usuário</h1>
                         <h2>por Fabricio Duarte e Manoel Andrade</h2>
                    </hgroup>
               </header>


               <article id="texto-principal">

                    

<?php
   include 'conexao.php';
      if ($_POST['nome']!=null){
          $nome = $_POST['nome'];
          $sqlConsulta = "select * from nota10.tb_usuario where nome like  '%$nome%' ";          
     } else 
     {
          $sqlConsulta = "select * from nota10.tb_usuario";
     }
          
          $resultado = mysql_query($sqlConsulta) or die ("Falha na consulta");
             
          print("<table  id='tabelaConsulta' ");
          print("<tr>");
          print("<td colspan='3'><a href='cadastrarUsuario.html'><button> Novo Usuario <img id='miniIcone' src='_imagens/incluir.png'></button></a></td>");
          print("<td colspan='9'> <form action='consultaUsuario.php' method='post'><input type='text' name='nome' size='65'  placeholder='Pesquise por dados do Usuário'><input type='submit' value='Consultar'></form></td>");
          print("</tr>");
          print("<tr>");
          print("<th> ID </th>");
          print("<th> NOME </th>");
          print("<th> LOGIN </th>");
          print("<th> EMAIL </th>");
          print("<th> NASCIMENTO </th>");
          print("<th> SEXO </th>");
          print("<th> SERIE </th>");
          print("<th> ESCOLA </th>");
          print("<th> CIDADE </th>");
          print("<th> UF </th>");
          print("<th> AÇÕES </th>");
          print("</tr>");
          
          while($linha = mysql_fetch_assoc($resultado)){
               $cod_usuario = $linha["id_usuario"];
               print("<tr>");
               print("<td>".$linha["id_usuario"]."</td>");
               print("<td>".$linha["nome"]."</td>");
               print("<td>".$linha["login"]."</td>");
               print("<td>".$linha["email"]."</td>");
               print("<td>".$linha["data_nascimento"]."</td>");
               print("<td>".$linha["sexo"]."</td>");
               print("<td>".$linha["serie"]."</td>");
               print("<td>".$linha["escola"]."</td>");
               print("<td>".$linha["cidade"]."</td>");
               print("<td>".$linha["uf"]."</td>");
               print("<td> <a href='alterarUsuario.html?id_usuario=$cod_usuario'><img id='miniIcone' src='_imagens/alterarItem.png'> </a>");
               print("<a href='excluirUsuario.php?id_usuario=$cod_usuario'><img id='miniIcone' src='_imagens/excluir.jpg'></a>");
               print("</td>");
               print("</tr>");                    
          }
               print("</table>");
?> 

 

               </article>

          </section>

          <footer id="rodape">
               <p> Copyright &copy; 2015 - by Fabricio Duarte e Manoel Andrade
    <a href="http://facebook.com/biosonora" target="_blank">| Facebook</a> | <a href="http://twitter.com/biosonora" target="_blank">Twitter</a> | <a href="https://www.linkedin.com/pub/fabrÃ­cio-duarte/2a/306/522" target="_blank"> Linkedin </a>
            </p>
          </footer>
     </div>
</body>
</html>