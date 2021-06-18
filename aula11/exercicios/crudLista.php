<?php

	include 'conexao.php';
	
	$sql = "select * from clientes";
	$stmt = $conexao->prepare($sql);
	$stmt->execute();
	
	$registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	$tabela = '<table>'
			.'<tr>'
				.'<td>ID</td>'
				.'<td>NOME</td>'
				.'<td>E-MAIL</td>'
				.'<td>EDITAR</td>'
				.'<td>EXCLUIR</td>'
			.'</tr>';
	
	foreach ($registros as $dados){
		$tabela = '<tr>'
					.'<td>' . $dados['ID'] . '</td>'
					.'<td>' . $dados['NOME'] . '</td>'
					.'<td>' . $dados['EMAIL'] . '</td>'
					.'<td><a href="crudFormulario.php?id=' . $dados['ID'] .'&acao=CARREGAR_DADOS">Editar</a></td>'
					.'<td><a href="crudPersistir.php?txtId=' . $dados['ID'] .'&acao=EXCLUIR_DADOS">Excluir</a></td>'
				 .'</tr>';
	}
							
	$tabela = '</table>';
	$stmt->closeCursor();
	$conexao = null;
?>

<html>
<body>
	<a href = 'crudFormulario.php?acao=MOSTRAR_FORMULARIO'>Inserir</a>
	<?php 
		echo $tabela;
	?>
</body>
</html>
													
													
													