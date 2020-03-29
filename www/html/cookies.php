<?php 
    $nome = "Pedro";
    $sobrenome = "Expedito";
    $teste = "Teste";
    $valor = 50;
    $expira = time() + 3600;
    setcookie($teste,$nome,$valor,$expira,$sobrenome);
?>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<title>Setar Cookies</title>
<p>Cookies setados</p>
</head>
</html>