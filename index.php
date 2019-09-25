<?php
	require ('funcoes.php');

	if (!empty ($_POST['acao']))
	{
	
		if ($_POST['acao'] == 'add')
		{
			criarContador  ($_POST ['cont']);	
		} 

		else if ($_POST['acao'] == 'mais')
		{
			 incrementarContador($_POST ['codigo']);	
		} 

		else if ($_POST['acao'] == 'menos')
		{
			 decrementarContador($_POST ['codigo']);	
		} 

		else if ($_POST['acao'] == 'lixo')
		{
			 deletarcont($_POST ['codigo']);	
		} 


		
	}

	$Contadores = buscarContadores();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="contador.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Contador App</title>
</head>
<body>
	<header>
		<h1>Contador de Coisas</h1>
	</header>
	<div id="container">
		<main>
		<?php foreach ($Contadores as $c): ?>			
		
		
			<form class="contador" action="index.php" method="post" class="contador">
				<button name="acao" value="menos" >⊖</button> 
				<div> 
					<p><?= $c['nome'] ?></p>
					<p><?= $c['numero'] ?></p>
					<button name="acao" value="lixo"><img src="imagem/lixo.jpg"></button>
				</div>
				<button name="acao" value="mais">⊕</button>
				<input type="hidden" name="codigo" value="<?= $c['codigo'] ?>">
			</form>

		<?php endforeach; ?>	

		</main>
		<hr>
		<footer>
			<form action="index.php" method="post">
				<p>
	         	<label for="icont">Novo contador</label> </p>

	         	<p><input type="text" id="icont" name="cont">
	         	<button id="add" type="submit" name="acao" value="add">Adicionar</button></p>
    	 	</form>
		</footer>

	</div>
</body>
</html>