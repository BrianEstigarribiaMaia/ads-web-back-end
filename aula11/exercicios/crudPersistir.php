<?php

include_once 'conexao.php';

$acao = $_REQUEST['acao'];

switch ($acao){
	case 'EDITAR_DADOS':
		$sql = "update clientes set nome =:nome, email =:email where id =:id";
		break;
	case 'EXCLUIR_DADOS':
		$sql = "delete from clientes where id =:id";
		break;
	case 'INSERIR_DADOS':
		$sql = "insert into clientes (nome, email) values (:nome, :email)";
		break;
}

try {
	
	$conexao->beginTransaction();
	$stmt = $conexao->prepare($sql);
	
	if(acao === 'EXCLUIR_DADOS' || $acao === 'EDITAR_DADOS'){
		$stmt->bindValue(":id", $_REQUEST['txtId']);
	}
	
	if(acao === 'INSERIR_DADOS' || $acao === 'EDITAR_DADOS'){
		$stmt->bindValue(":nome", $_REQUEST['txtNome']);
		$stmt->bindValue(":email", $_REQUEST['txtEmail'] );
	}
	
	$sucesso = $stmt->execute();
	
	if($stmt->rowCount() == 0){
		echo  "Nenhum registro foi afetado";
	}else{
		echo "Registro atualizado com sucesso";
	}
	
	$conexao->commit();
	
} catch (PDOException $e) {
	$conexao->rollback();
	echo "Ocorreu um erro :" .$e->getMessage();
}