<?php
require "includes/funcoes-alunos.php";
$pessoas = lerpessoas($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de pessoas - Exercício CRUD com PHP e MySQL</title>

</head>
<body>
<div id="container">
    <h1>Lista de pessoas</h1>
    <hr>

<?php foreach( $pessoas as $pessoas ){ ?>
    <div>
        <p>ID: <?=$pessoas['id']?></p>
        <p>Nome: <?=$pessoas['nome']?></p>
        
        <p>
            <a href="atualizar.php?id=<?=$pessoas['id']?>">Atualizar</a> - 
            <a href="excluir.php?id=<?=$pessoas['id']?>">Excluir</a>
        </p>
    </div>


    <hr>  
<?php } ?>    

    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>