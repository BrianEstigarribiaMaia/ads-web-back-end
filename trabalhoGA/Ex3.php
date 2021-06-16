<?php
	/*
		3. (Peso 3,0) - Considere que você precisa ler uma matriz quadrada da qual você não sabe
		o tamanho, esta matriz será fornecida pela função retornaMatrizQuadrada.
		Desenvolva um script php que deverá ler os valores da diagonal principal da matriz
		fornecida pela função retornaMatrizQuadrada, somar estes valores e imprimir esta
		soma através do comando echo.
		Definições:
		Matriz quadrada: matriz do tipo n x n, ou seja, com o mesmo número de linhas e colunas
		
		Diagonal principal: Numa matriz quadrada definimos a diagonal principal e a diagonal
		secundária. A principal é formada pelos elementos aij tais que i = j. Na secundária,
		temos i + j = n + 1. Veja:
		
		Observações:
		Considere que a função retornaMatrizQuadrada já está implementada e você não
		precisa implementar. Dica: utilize esta função para você realizar os seus testes,
		utilizando matrizes quadradas de tamanhos diferentes.
	
	*/
	
	function retornaMatrizQuadrada(){
		$matriz = array(array(1,2,3),array(4,5,6),array(7,8,9)); 
		$n = count($matriz); 
		$principal = 0;

		for($i = 0; $i < $n; $i++){
			$principal += $matriz[$i][$i];
		}
		return $principal;
	}
	
	echo "Retornando soma da diagonal principal: " .retornaMatrizQuadrada();
?>