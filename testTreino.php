  

<?php

    /*definição de variaveis*/
    
    $entrada = 0;
	$vezes = 3;
	$acertos = 0;
	$erros = 0;
	$resposta = 0;
    $valorA = rand(6,1);
    $valorB = rand(6,1);

  
    function total(){
    $resultado = $valorA + $valorB;
   	return $resultado;

    }


    function media() {
		if ($acertos === 0){
			return 0;
    	} else 	(($acertos*100) / $vezes); 

    }

   
    function pontuacao() {
		if ($acertos === 0){
		 $pontuacao = $pontuacao + 0
			return 0;
    	
    	} else 	($pontuacao = ($acertos*100) * $vezes); 

    		return $pontuacao; 
    }

 
    function registro_entrada(){

    $entrada = $entrada + 1;
    $resposta = $_POST['resposta'];
    
    if ($resultado == $resposta){
    	$acertos= $acertos + 1;
    	print('Correto')
    }else ($resultado != $resposta)	{

    	$erros = $erros + 1;

    	print('A resposta correta é: ' total());
    }


    }


    function salvar_pontuacao(){
    
   while ( $vezes <= 1) {
   
    print ("<form action='salvarPontuacao.php' method='post'>
    <input type = 'number' value='<?php print( $pontuacao ?>' name='pontuacao'>
    <input type = 'submit' value='Salvar Pontuacao'> </form>");
	
	$arquivo = "contador.txt";
	$contador = 0;

	$fp = fopen($arquivo,"r");
	$contador = fgets($fp, 26);
	fclose($fp);

	++$contador;

	$fp = fopen($arquivo,"w+");
	fwrite($fp, $contador, 26);
	fclose($fp);

	" Você fez esse treino $contador vezes";

	}
?> 













