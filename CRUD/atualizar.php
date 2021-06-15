<?php
require "includes/funcoes-pessoas.php";

$id = $_GET['id'];
$pessoa = lerpessoas($conexao, $id);

if( isset($_POST['atualizar']) ){
    $nome = $_POST['nome'];
    $descricao = $_POST["descricao"];
    atualizarPessoas($conexao, $id, $nome);
    header("location:visualizar.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>

</head>
<body>
<div id="container">
    <h1>Atualizar dados de pessoas </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para atualizar os dados de pessoas.</p>

    <form action="#" method="post">
        
	    <p><label for="nome">Nome:</label><br>
	    <input type="text" name="nome" id="nome" required></p>
        
        <p><label for="primeira">Primeira pessoa:</label><br>
	    <input name="primeira" type="number" id="primeira" step="0.01" min="0" max="10" required></p>
	    
	    <p><label for="segunda">Segunda pessoa:</label><br>
	    <input name="segunda" type="number" id="segunda" step="0.01" min="0" max="10" required></p>
	    
        <p><button name="atualizar-lista">
        Atualizar lista de pessoas</button></p>
	</form>    
    
    <hr>
    <p><a href="visualizar.php">Voltar à lista de pessoas</a></p>

</div>

</body>
</html>