
<?php
  $nome = $_POST['nome'];

  // O nome original do arquivo no computador do usuário
  $arqName = $_FILES['arquivo']['name'];
  // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
  $arqType = $_FILES['arquivo']['type'];
  // O tamanho, em bytes, do arquivo
  $arqSize = $_FILES['arquivo']['size'];
  // O nome temporário do arquivo, como foi guardado no servidor
  $arqTemp = $_FILES['arquivo']['tmp_name'];
  // O código de erro associado a este upload de arquivo
  $arqError = $_FILES['arquivo']['error'];

  echo "Nome do usuário: " . $nome . "<br>";

  echo "Nome do arquivo: " . $arqName . "<br>";

  echo "Tipo do arquivo: " . $arqType . "<br>";

  echo "Tamanho do arquivo: " . $arqSize . "<br>";

  echo "Nome do arquivo armazenado no servidor: " . $arqTemp . "<br>";

  echo "Código de erro associado a este upload de arquivo: " . $arqError . "<br>";

  if ($arqError == 0) {
    $pasta = "c:\\temp\\";
    $upload = move_uploaded_file($arqTemp, $pasta . $nome . ".pdf");
  }
?>