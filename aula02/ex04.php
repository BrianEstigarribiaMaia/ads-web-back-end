<!--
Exercício 4
Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)
-->
<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "utf-8">
    <title>Exercício 4</title>
</head>
<body>
    <form>
        Valor 1: <input type ="text" name = "valor1"> <br>
        Valor 2: <input type ="text" name = "valor2"> <br>
        Valor 3: <input type ="text" name = "valor3"> <br>
    <form>    

    Impressão dos numeros <br>
    <?php
        $listaNumeros = array($_REQUEST['valor1'], $_REQUEST['valor2'], $_REQUEST['valor3']);

        rsort($listaNumeros);

        foreach($listaNumeros as $valor){
            echo $valor ."<br>";
        }
    ?>
</body>
</html>

