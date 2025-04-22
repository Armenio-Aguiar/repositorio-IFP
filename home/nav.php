<?php 
	include 'conexao.php';
	$Buscar2018=$conexao->query("select count(*) as 'quantidade' from documentos WHERE ano=2018");
	$Buscar2019=$conexao->query("select count(*) as 'quantidade' from documentos WHERE ano=2019");
	$Buscar2020=$conexao->query("select count(*) as 'quantidade' from documentos WHERE ano=2020");
	$Buscar2021=$conexao->query("select count(*) as 'quantidade' from documentos WHERE ano=2021");
 ?>
<nav class="menu-bar" >
	<p class="repositorio">REPOSITÓRIO IFP</p>
		<div class="serch">
			<form method="post" action="buscar.php">
				<input type="text" name="buscar" class="serch-txt" placeholder="Introduza o nome do autor/ titulo"><input type="submit" name="Pesquisar" value="Pesquisar" serch-btn>
			</form>
		</div>
		<div class="menu-item">
			<ul>
				<li ><a href="index.php">Pagina principal</a></li>
				<li ><a href="RelatorioEstagio.php">Relatorios de estagios</a>
					<!--<ul>
						<li><a href="RelatorioEstagio.php?rel=1&tb=relatorio">Curso regular</a></li>
						<li><a href="RelatorioEstagio.php?rel=2&tb=relatorio">Curso inregular</a></li>
					</ul>-->
				</li>
				<li><a href="trabalhoacademicos.php?tipo=1&tb=trabalho">Trabalhos academicos</a>
					<!--<ul class="list">
						<li><a href="trabalhoacademicos.php?tipo=1&tb=trabalho">Curso regular</a></li>
						<li><a href="trabalhoacademicos.php?tipo=2&tb=trabalho">Curso inregular</a></li>
					</ul>-->
				</li>
				
			</ul>
			<div class="user">
				<?php if (empty($_SESSION['ID'])) { ?>

				<a href="../loginForm.php" id="user_off">Login</a>
				<?php }else {

					$consultaUsuario=$conexao->query("select primeiro_nome,ultimo_nome from usuario WHERE id_usuario = '$_SESSION[ID]';");
					$exibe=$consultaUsuario->fetch(PDO::FETCH_ASSOC);
				 ?> 
				 <img src="icon/customer_64px.png">
				 <div class="drop">
					 <label>
					 	<a href="#" id="user_online"><?php echo $exibe['primeiro_nome'];echo' '; echo $exibe['ultimo_nome'];?></a>
					 	<img src="icon/chevron_down_25px.png" id="toogle">
					 	<img src="icon/delete_25px.png" id="show">
					 </label>
					 <ul class="list-toggle">
					 	<li><a href="">Editar perfil</a></li>
					 	<li><a href="sair.php">Sair</a></li>

					 </ul>
				 </div>
				<?php } ?>
			</div>
				
				<img src="icon/menu_50px.png" id="img-toggle" onclick="abrir()">
				<div id="contaneir-toggle" >
					<ul id="list-ano">
						<?php while($ver=$Buscar2018->fetch(PDO::FETCH_ASSOC)) {?>
							<li><a href="BuscarAno.php?ano=2018">2018 <span class="count"><?php echo $ver['quantidade'] ?></span></a></li>
							<?php } ?>
							<?php while($ver=$Buscar2019->fetch(PDO::FETCH_ASSOC)) {?>
								<li><a href="BuscarAno.php?ano=2019">2019 <span class="count"><?php echo $ver['quantidade'] ?></span></a></li>
							<?php } ?>
						<?php while($ver=$Buscar2020->fetch(PDO::FETCH_ASSOC)) {?>
							<li><a href="BuscarAno.php?ano=2020">2020 <span class="count"><?php echo $ver['quantidade'] ?></span></a></li>
						<?php } ?>
						<?php while($ver=$Buscar2021->fetch(PDO::FETCH_ASSOC)) {?>
							<li><a href="BuscarAno.php?ano=2021">2021 <span class="count"><?php echo $ver['quantidade'] ?></span></a></li>
						<?php } ?>
					</ul>
		</div>	
			</div>
				<div class="slider-contaneir">
					<div class="img-box">
						<img src="img/18g.jpg" alt="" id="sliderimg">
					</div>
				</div>
			</div>		
			<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
			<script type="text/javascript">
				const currentLocation=location.href;
				const menuItem=document.querySelectorAll('a');
				const menuLength=menuItem.length;
				for (var i = 0; i < menuLength; i++) {
					if (menuItem[i].href===currentLocation) {
						menuItem[i].className="active"
					}
				}
			</script>
			<script type="text/javascript">
				function abrir(){
					var x=document.getElementById('contaneir-toggle');
					if (x.style.width == '0px') {
						x.style.width='120px';

					}else{
						x.style.width='0px'
					}			
				}
			</script>
			<script>
	var sliderImg=document.getElementById('sliderimg');
	var img = new Array (
		"img/aluno-no-centro-do-aprendizado.jpg",
		"img/18g.jpg",
		"img/aluno-no-centro-do-aprendizado.jpg",
		"img/18g.jpg"
	);
	var len = img.length;
	var i=0;
	function slider() {
		if (i > len-1) {
			i=0;
		}
			sliderImg.src = img[i];
			i++;
			setTimeout('slider()',3000); 
	}
	</script>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/eventos.js"></script>
	</nav>