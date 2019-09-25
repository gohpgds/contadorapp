<?php
/* funcoes */

function criarConexao()
{
	$banco = "Contador";
	$usuario = "contador";
	$senha = "senha123";
	$conexao = new PDO("mysql:host=localhost;dbname=${banco}",
		$usuario, $senha,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
	return $conexao;
}

function buscarContadores()
{
	$conexao = criarConexao();
	$sql = "SELECT * FROM contador";
	$comando = $conexao->query($sql);
	return $comando->fetchAll();
}

function criarContador($nome)
{
	$conexao = criarConexao();
	$sql = "INSERT INTO contador values (null, ? , 0)";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[
			$nome
		]
	);
}




function incrementarContador($id)
{
	$conexao = criarConexao();
	$sql = "UPDATE contador SET numero= numero+1 WHERE codigo=?";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[
			$id
		]
	);
}

function decrementarContador($id)
{
	$conexao = criarConexao();
	$sql = "UPDATE contador SET numero= numero-1 WHERE codigo=?";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[
			$id
		]
	);
}

function deletarcont($id)
{
	$conexao = criarConexao();
	$sql = "DELETE contador WHERE codigo=?";
	$comando = $conexao->prepare($sql);
	return $comando->execute(
		[
			$id
		]
	);
}

?>