<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title></title>
</head>
<body onload="slider()">
	<?php 
		session_start();
		include 'conexao.php';
		include 'nav.php';
		
		$BuscarDados=$conexao->query('SELECT *FROM telamenu;');
		$rownsPort=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE disciplina="portugues";');
		$rownsMat=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE disciplina="matematica";');
		$rownsIng=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE disciplina="ingles";');
		$rownsCS=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE disciplina="ciencias sociais";');
		$rownsCN=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE disciplina="ciencias naturais";');
		$rownsMC=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE disciplina="e.moral civica";');
		$rownsEF=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE disciplina="educacao fisica";');
		$rownsEV=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE disciplina="educacao visual";');

		$rownsTBpt=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE tipo_doc="trabalho" and disciplina="portugues";');
		$rownsTBmat=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE tipo_doc="trabalho" and disciplina="matematica";');
		$rownsTBing=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE tipo_doc="trabalho" and disciplina="ingles";');
		$rownsTBcs=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE tipo_doc="trabalho" and disciplina="ciencias sociais";');
		$rownsTBcn=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE tipo_doc="trabalho" and disciplina="ciencias naturais";');
		$rownsTBmc=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE tipo_doc="trabalho" and disciplina="e.moral civica";');
		$rownsTBef=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE tipo_doc="trabalho" and disciplina="educacao fisica";');
		$rownsTBev=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos WHERE tipo_doc="trabalho" and disciplina="educacao visual";');
		
		$rownsrt=$conexao->query('SELECT COUNT(*) AS "rowPort" FROM documentos WHERE tipo_curso=1 AND tipo_doc="relatorio";');
		$rownsrt2=$conexao->query('SELECT COUNT(*) AS "rowPort" FROM documentos WHERE tipo_curso=2 AND tipo_doc="relatorio";');

		$rownsTBR=$conexao->query('SELECT COUNT(*) AS "rowPort" FROM documentos WHERE tipo_curso=2 AND disciplina="ingles" AND tipo_doc="trabalho" ;');
		$rownsTBI=$conexao->query('SELECT COUNT(*) AS "rowPort" FROM documentos WHERE tipo_curso=2 AND disciplina="matematica"AND  tipo_doc="trabalho";');

		$rownsTBRPT=$conexao->query('SELECT COUNT(*) AS "rowPort" FROM documentos WHERE tipo_curso=1 AND disciplina="portugues"AND  tipo_doc="trabalho";');
		$rownsTBRCS=$conexao->query('SELECT COUNT(*) AS "rowPort" FROM documentos WHERE tipo_curso=1 AND disciplina="ciencias sociais"AND  tipo_doc="trabalho";');
		$rownsTBRCN=$conexao->query('SELECT COUNT(*) AS "rowPort" FROM documentos WHERE tipo_curso=1 AND disciplina="ciencias naturais"AND  tipo_doc="trabalho";');
		$rownsTBRMC=$conexao->query('SELECT COUNT(*) AS "rowPort" FROM documentos WHERE tipo_curso=1 AND disciplina="e.moral civica"AND  tipo_doc="trabalho";');
		$rownsTBREF=$conexao->query('SELECT COUNT(*) AS "rowPort" FROM documentos WHERE tipo_curso=1 AND disciplina="educacao fisica"AND  tipo_doc="trabalho";');
		$rownsTBREV=$conexao->query('SELECT COUNT(*) AS "rowPort" FROM documentos WHERE tipo_curso=1 AND disciplina="educacao visual"AND  tipo_doc="trabalho";');
		
		$rownsALL=$conexao->query('SELECT COUNT(*) AS "rowPort" from documentos;');
	?>	
	<div class="contaneir">
	<table class="disciplina">
	
		<tr>
			<th>Protofolio 1º ano</th>
		</tr>
	
	
		<tr>
			<td><a href="alunos.php?disciplina=portugues">Turma: A</a><span></span></td>
		</tr>

	
		<tr>
			<td><a href="alunos.php?disciplina=e.moral">Turma: B</a><span></span></td>
		</tr>
	
	
		<tr>
			<td><a href="alunos.php?disciplina=e.fisica">Turma: C</a><span></span></td>
		</tr>

	
		<tr>
			<td><a href="alunos.php?disciplina=e.visual">Turma: D</a><span></span></td>
		</tr>
</table>




	<table class="trabalho">
		<tr>
			<th>Protofolio 2º ano</th>
		</tr>

		<tr>
			<td><a href="alunos.php?disciplina=portugues">Turma: A</a><span></span></td>
		</tr>

	
		<tr>
			<td><a href="alunos.php?disciplina=e.moral">Turma: B</a><span></span></td>
		</tr>
	
	
		<tr>
			<td><a href="alunos.php?disciplina=e.fisica">Turma: C</a><span></span></td>
		</tr>

	
		<tr>
			<td><a href="alunos.php?disciplina=e.visual">Turma: D</a><span></span></td>
		</tr>
	</table>

	<table class="relatorio">
		<tr>
			<th>Protofolio 3º ano</th>
		</tr>
		
		<tr>
			<td><a href="alunos.php?disciplina=portugues">Turma: A</a><span></span></td>
		</tr>

	
		<tr>
			<td><a href="alunos.php?disciplina=e.moral">Turma: B</a><span></span></td>
		</tr>
	
	
		<tr>
			<td><a href="alunos.php?disciplina=e.fisica">Turma: C</a><span></span></td>
		</tr>

	
		<tr>
			<td><a href="alunos.php?disciplina=e.visual">Turma: D</a><span></span></td>
		</tr>

	</table>
	</div>
	<div class="conteneir-cursos">
	<table class="regulares">
		<tr>
			<th colspan="4"> Ano</th>
		</tr>
			<td><a href="alunos.php?disciplina=portugues">2018</a><span></span></td>
			<td><a href="alunos.php?disciplina=e.moral">2019</a><span></span></td>
			<td><a href="alunos.php?disciplina=e.fisica">2020</a><span></span></td>
			<td><a href="alunos.php?disciplina=e.visual">2021</a><span></span></td>
		</tr>
		</tr>
			<td><a href="alunos.php?disciplina=portugues">2022</a><span></span></td>
			<td><a href="alunos.php?disciplina=e.moral">2018</a><span></span></td>
			<td><a href="alunos.php?disciplina=e.fisica">2017</a><span></span></td>
			<td><a href="alunos.php?disciplina=e.visual">2016</a><span></span></td>
		</tr>
	</table>

	
	</div>
	<?php include 'footer.php'?>
</body>
</html>