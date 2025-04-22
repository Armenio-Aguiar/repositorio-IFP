<?php 
	$server='127.0.0.1';
	$senha='';
	$usuario='root';
	$banco='repositório';

	$conexao= new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
 ?>