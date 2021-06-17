<?php

try {
	$connexao = new PDO("mysql:host=localhost:8080; dbname=crudex", "root", "");
	$connexao->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
	
} catch (PDOException $e) {
	echo "Ocorreu um erro ao conectar ao banco de dados: ". $e->getMessage();
}
