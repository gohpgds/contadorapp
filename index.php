<?php
	require ('funcoes.php');

	 
	if ($_POST['acao'] == "add")
	{
	criarContador  ($_POST ['cont']);	
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
					<p><?= $c['Nome'] ?></p>
					<p><?= $c['Numero'] ?></p>
				</div>
				<button name="acao" value="mais">⊕</button>
			</form>

		<?php endforeach; ?>	

		</main>
		<hr>
		<footer>
			<form action="index.php" method="post">
			<p>
         <label for="icont">Novo contador</label> </p>

         <p><input type="nome" id="icont" name="cont">
         <button id="add" type="submit" name="acao" value="add">Adicionar</button></p>
    	 </form>
		</footer>

	</div>
</body>
</html>