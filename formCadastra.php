<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/formcadastro.css">
	<title></title>
</head>
<body onload="desableBTN()">
	<?php 
		/*include 'conexao.php';
		$consulta=$conexao->query("select tipo_usuario	FROM tipo_usuario");
		while ($mostra=$consulta->fetch(PDO::FETCH_ASSOC)) {
			
		}
*/

	 ?>


	<div class="rep-text">
		<p>REPOSITÓRIO IFP</p>
	</div>
	<div class="text-msg">
		<p>CARO USUÁRIO POR FAVOR FAÇA O CADASTRO PARA PODER ACESSAR O PORTAL.</p>
	</div>

	<form method="POST" action="validaCadastro.php" id="form">
		<div class="form-group">
			<h2>Formulario de cadastro</h2>
			<div class="box-dadosP">
				<input type="text" name="" placeholder="Primeiro nome" id="primeiro" required onkeydown="valited()">
				<input type="text" name="" placeholder="Ultimo nome" id="ultimo" required onkeydown="valited()">
				<br>
				<input type="text" name="email" placeholder="E-mail" id="email" onkeydown="valited()">
				<input type="Date" name="" placeholder="Data de nascimento" id="data">
				<input type="password" name="" placeholder="Criar senha" id="senha" class="senha" onkeydown="valited()" maxlength="8">
				<input type="password" name="" placeholder="Confrimar senha" id="confsenha" class="senha" maxlength="8" onkeydown="valited()">
			</div>
			<br>
			<div class="box-label">
				<fieldset id="radio"><legend>Sexo</legend>
					<input type="radio" name="sexo" value="M" id="sexo"checked> <label for="sexo">M</label>
				<input type="radio" name="sexo" value="F" id="F"><label for="F">F</label> 
				</fieldset>
					<select class="tipo_curso" id="btnDesable" onchange="desableBTN()">
						<option id="invalido">Tipo de usuario</option>
						<option id="estudante">- Estudante da IFP</option>
						<option id="visitante">- Visitante</option>
					</select>

					<select class="Nivel" id="TipoDeCurso">
					<option>Tipo de curso</option>
						<option>- <?php echo $mostra['tipo_usuario']; ?></option>
						<option>- <?php echo $mostra['tipo_usuario'];?> </option>
				</select>
				</div>
				
			<div class="Univeriatario">
				<select class="estudo" id="estudos" onchange="desableBTN()">
					<<option id="nenhum">Nivel academico</option>
					<option id="medio">- Ensino geral</option>
					<option id="universidade">- Universitario</option>
				</select>

				<select class="universidade" id="universidades">
					<option>Universidade</option>
					<option>- Universidade Licungo</option>
					<option>- Universidade Apolitecnica</option>
					<option>- Univeridade Catolica</option>
					<option>- ISCED</option>
					<option>- Universidade Eduardo Mondlane</option>
					<option>- Universidade Zambeze</option>
				</select>

				<select class="ano" id="anos">
					<option>Ano</option>
					<option>1° Ano</option>
					<option>2° Ano</option>
					<option>3° Ano</option>
					<option>4° Ano</option>
				</select>
			</div>
			<div class="alunos">
				<select class="escola" id="escolas">
					<option>Escola</option>
					<option>- E.S.G 25 de Setembro</option>
					<option>- E.S.G de Coalane</option>
					<option>- E.S.G Geral de Quelimane</option>
					<option>- E.S.G Patrice Lomunba</option>
					<option>- E.S.G Sangariveira</option>
					<option>- E.S.G Amor de Deus</option>
					<option>- E.S.G Eduardo Mondlane</option>
				</select>

				<select class="classe" id="classes">
					<option>Classe</option>
					<option>8°</option>
					<option>9°</option>
					<option>10°</option>
					<option>11°</option>
					<option>12°</option>
				</select>
			</div>
			<div class="btn-conta">
				<input type="submit" name="" value="Criar conta">
			</div>
				
		</div>	
	</form>
	<script type="text/javascript">
		function desableBTN(){
			var btn=document.getElementById('btnDesable').value;
			var btnnv=document.getElementById('estudos').value;

			if (btn==document.getElementById('estudante').value) {
				document.getElementById('TipoDeCurso').disabled='';
				document.getElementById('classes').disabled='true';
				document.getElementById('escolas').disabled='true';
				document.getElementById('anos').disabled='true';
				document.getElementById('estudos').disabled='true';
				document.getElementById('universidades').disabled='true';
			}else if(btn==document.getElementById('visitante').value){
				document.getElementById('TipoDeCurso').disabled='true';
				document.getElementById('classes').disabled='';
				document.getElementById('escolas').disabled='';
				document.getElementById('anos').disabled='';
				document.getElementById('estudos').disabled='';
				document.getElementById('universidades').disabled='';
			}else if (btn==document.getElementById('invalido').value) {
				document.getElementById('TipoDeCurso').disabled='true';
				document.getElementById('classes').disabled='true';
				document.getElementById('escolas').disabled='true';
				document.getElementById('anos').disabled='true';
				document.getElementById('estudos').disabled='true';
				document.getElementById('universidades').disabled='true';
			}
			if (btnnv==document.getElementById('universidade').value) {
				document.getElementById('escolas').disabled='true';
				document.getElementById('classes').disabled='true';

			}else if (btnnv==document.getElementById('medio').value) {
				document.getElementById('universidades').disabled='true';
				document.getElementById('anos').disabled='true';
			}else if (btnnv==document.getElementById('nenhum').value) {
				document.getElementById('escolas').disabled='true';
				document.getElementById('classes').disabled='true';
				document.getElementById('universidades').disabled='true';
				document.getElementById('anos').disabled='true';

			}

		}
	</script>
	<script>
		function valited() {
			var form=document.getElementById('form');
			var email=document.getElementById('email').value;
			var pattend=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
			var nome=document.getElementById('primeiro').value;
			var Last=document.getElementById('ultimo').value;
			var s1=document.getElementById('senha').value;
			var s2=document.getElementById('confsenha').value;

			if (email.match(pattend)) {
				document.getElementById('email').classList.add("valid");
				document.getElementById('email').classList.remove("invalid");

			}else{
				document.getElementById('email').classList.remove("valid");
				document.getElementById('email').classList.add("invalid");
				
			}

			if (nome=="") {
				document.getElementById('primeiro').classList.add("invalid");
				document.getElementById('primeiro').classList.remove("valid");
			}else{
				document.getElementById('primeiro').classList.remove("invalid");
				document.getElementById('primeiro').classList.add("valid");

			}

			if (Last=="") {
				document.getElementById('ultimo').classList.add("invalid");
				document.getElementById('ultimo').classList.remove("valid");
			}else{
				document.getElementById('ultimo').classList.remove("invalid");
				document.getElementById('ultimo').classList.add("valid");

			}


			if (s1.length<8) {
				document.getElementById('senha').classList.add("invalid");
				document.getElementById('senha').classList.remove("valid");
			}else{
				document.getElementById('senha').classList.remove("invalid");
				document.getElementById('senha').classList.add("valid");
			}

			if ( s2==s1) {
				document.getElementById('confsenha').classList.remove("invalid");
				document.getElementById('confsenha').classList.add("valid");

			}else{
				document.getElementById('confsenha').classList.add("invalid");
				document.getElementById('confsenha').classList.remove("valid");

			}


		}
	</script>
</body>
</html>