<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css"  href="css/subPage.css">
	<title></title>
</head>
<body onload="slider()">
	<?php 
		include 'nav.php';
		include 'conexao.php';
        $disciplina=$_GET['disciplina'];
     
		//ver quando nao tem arquivos mostrar msg em nenhum
        $BuscarDados=$conexao->query("SELECT autor.nome,titulo,documentos.disciplina,ano,tipo_doc 
        FROM documentos  INNER JOIN autor ON autor=id_autor INNER JOIN tipo_curso on tipo_curso=id_curso WHERE disciplina = '$disciplina';");
	?>	
	<table class="contaneirUser">
				<tr>
					<th>Foto do estudante</th>
					<th>Nome do estudante</th>
					<th>Turma</th>
					<th>Ano</th>
					<th>Instuicao</th>
					<th>Visualizar</th>
				</tr>
				<?php if ($BuscarDados->rowCount()==0) {
					echo '<td colspan="7" id="vazio">Nao foi encontrado nenhum registo</td></tr>';
				} ?>
				
			<?php while ($mostraResultado=$BuscarDados->fetch(PDO::FETCH_ASSOC)) {?>
			<tr class="UserInfo">
				<td class="photoUser"><img src="IMG/1651649023496.JPG"></td>
				<td>Armenio mendes</td>
				<td>B </td>
				<td>2021</td>
				<td>ifp quelimane</td>
				<td class="icon"><a href=""><img src="icon/eye_24px.png"></a></td>  
			</tr>
			<?php } ?>
		</table>
	<?php include 'footer.php'?>
</body>
</html>