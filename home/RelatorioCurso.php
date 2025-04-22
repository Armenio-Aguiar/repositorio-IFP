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
        $tipo=$_GET['tipo'];
        $curso=$_GET['curso'];
     
		//ver quando nao tem arquivos mostrar msg em nenhum
        $BuscarDados=$conexao->query("SELECT autor.nome,titulo,documentos.disciplina,ano,tipo_doc,tipo_curso.tipo 
        FROM documentos  INNER JOIN autor ON autor=id_autor INNER JOIN tipo_curso on tipo_curso=id_curso WHERE tipo_curso = '$curso' and tipo_doc='$tipo';");
	?>	
	<div class="contaneir-subPage ">
	<table>
				<tr>
					<th>Autor</th>
					<th>Titulo</th>
					<th>Disciplina</th>
					<th>Ano</th>
					<th>Curso</th>
					<th>Documento</th>
					<th colspan="2">Disponiblidade</th>
				</tr>
				<?php if ($BuscarDados->rowCount()==0) {
					echo '<td colspan="7" id="vazio">Nao foi encontrado nenhum registo</td></tr>';
				} ?>
				
			<?php while ($mostraResultado=$BuscarDados->fetch(PDO::FETCH_ASSOC)) {?>
			<tr class="coluna">
				
				<td><?php echo $mostraResultado['nome'] ?></td>
				<td><?php echo $mostraResultado['titulo'] ?></td>
				<td><?php echo $mostraResultado['disciplina'] ?></td>
				<td><?php echo $mostraResultado['ano'] ?></td>
				<td><?php echo $mostraResultado['tipo'] ?></td>
				<td><?php echo $mostraResultado['tipo_doc'] ?></td>
				<td class="Disponiblidade"><a href=""><img src="icon/eye_24px.png"></a></td>
				<td class="Disponiblidade"><a href=""><img src="icon/download_from_the_cloud_24px.png"></a></td>
                
			</tr>
			<?php } ?>
		</table>
	<?php include 'footer.php'?>
</body>
</html>