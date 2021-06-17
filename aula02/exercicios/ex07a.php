<!--
Exercício 7
A biblioteca de uma universidade deseja fazer um algoritmo que leia  o nome do livro que será emprestado, o tipo de
 usuário (professor ou aluno) e possa imprimir um recibo conforme  mostrado a seguir.
 Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias.
-->

<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "utf-8">
    <title>Exercício 7</title>
</head>
<body>
    <form method = "post" action = "ex07b.php">
    Nome do Livro <br>
    <input type = "text" name = "nomeLivro">
    <br>
    <input type = "radio" name = "tipoUsuario" value = "professor" id = "radProfessor"><label for ="radProfessor">professor</label><br>
    <input type = "radio" name = "tipoUsuario" value = "aluno" id = "radAluno"><label for ="radAluno">aluno</label><br>
    <br>
    <input type = "submit" value = "submeter">
    </form>
</body>
</html>

