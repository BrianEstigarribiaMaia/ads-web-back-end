<html>
<body>
    <form
        action="http://localhost/mensagem.php"
        method="POST">
        Nome: <input type="text" name="txtNome" >
        Idade: <input type="text" name="txtIdade">
        <button type="submit">Submeter</button>
        <a href="http://localhost/mensagem.php?txtNome=Brian&txtIdade=25">Link</a>
    </form>
</body>
</html>