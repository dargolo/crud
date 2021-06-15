<?php
require "includes/funcoes-pessoas.php";
$fabricantes = lerpessoas($conexao);

if( isset($_POST['inserir']) ){
    require "includes/funcoes-pessoas.php";
    
    $nome = $_POST['nome'];
    $alunoId = $_POST['pessoa']; 
    
    inserirPessoa($conexao, $nome, $pessoaId);
    header("location:visualizar.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastrar uma nova pessoa - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
	<h1>Cadastrar uma nova pessoa </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para cadastrar uma nova pessoa.</p>

	<form action="#" method="post">
	    <p><label for="nome">Nome:</label><br>
	    <input type="text" name="nome" id="nome" required></p>
        
      <p><label for="primeira">Primeira pessoa:</label><br>
	    <input type="number" name="primeira" id="primeira" step="0.01" min="0.00" max="10" required></p>
	    
	    <p><label for="segunda">Segunda pessoa:</label><br>
	    <input type="number" name="segunda" id="segunda" step="0.01" min="0.00" max="10" required></p>
	    
      <p><button name="cadastrar-aluno">
			Cadastrar pessoa</button></p>
	</form>

    <hr>
    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>