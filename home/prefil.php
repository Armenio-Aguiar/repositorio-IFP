<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
</head>
<body>
	<?php 
		session_start();
		include 'conexao.php';
		include 'nav.php';
	 ?>
	 <div class="prefil">
	 		<div class="photo"><img src="icon/user_10i0px.png"></div>
	 		<p class="edit_inf">Informacoes do usuario</p>
	 		<div class="edit">
	 			<p>nome do usuario  <span>Editar <img src="icon/edit-black_25px.png"></span></p>
		 		<p>senha <span>Editar <img src="icon/edit-black_25px.png"></span></p>
		 		<p>mail <span>Editar <img src="icon/edit-black_25px.png"></span></p>
		 		<p>tipo de usuario <span>Editar <img src="icon/edit-black_25px.png"></span></p>
		 		<p>data de nascimento <span>Editar <img src="icon/edit-black_25px.png"></span></p>
	 		</div>
	 </div>
		<div class="background"></div>
			<div class="modal">
				<div class="banner">editar perfil</div>
				<div rodape> <button>editar</button></div>
			</div>
</body>
</html>