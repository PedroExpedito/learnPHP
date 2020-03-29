<?php
  $nome = $_POST['NomeCliente'];
  $sobrenome = $_POST['SobrenomeCliente'];
  $sexo = $_POST['Sexo'];

  $strcon = mysqli_connect('localhost','pedro','123','banco_teste');
  $sql = "INSERT INTO Cadastro VALUES";
  $sql .= "('$nome','$sobrenome','$sexo')";
  
  mysqli_query($strcon,$sql) or die("erro ao cadastrar");
  mysqli_close($strcon); 
  echo 'ok';
?>