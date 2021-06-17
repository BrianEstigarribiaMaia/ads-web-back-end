<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "utf-8">
    <title>Exercício 7</title>
</head>
<body>
    <h1> recibo </h1>
    <?php
    echo "<h2> Nome do livro: " . $_POST{'nomeLivro'}. "</h2>";

    $data = new DateTime();

    if($_POST['tipoUsuario'] == 'professor'){
        $data->add(new DateInterval('P10D'));
    }else{
        $data->add(new DateInterval('P3D'));
    }

    $dataEntrega = data->format('d/m/y');
    echo "<h2> Data de entrega: " . $dataEntrega . "<h2>";

    ?>
</body>
</html>