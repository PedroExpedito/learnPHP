<?php
// Conectando ao banco de dados: 
include_once("conectar.php");
// Criando tabela e cabeçalho de dados:
echo "<table border=1>";
echo "<tr>";
echo "<th>NOME</th>";
echo "<th>SOBRENOME</th>";
echo "<th>SEXO</th>";
echo "</tr>";

$strcon = mysqli_connect('localhost', 'pedro', '123', 'banco_teste') or die("Erro ao conectar ao banco");
$sql = "SELECT * FROM Cadastro";
$resultado = mysqli_query($strcon, $sql) or die("Erro ao retornar dados");
// Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado)) {
  $nome = $registro['NomeCliente'];
  $sobrenome = $registro['SobrenomeCliente'];
  $sexo = $registro['SEXO'];
  echo "<tr>";
  echo "<td>" . $nome . "</td>";
  echo "<td>" . $sobrenome . "</td>";
  echo "<td>" . $sexo . "</td>";
  echo "</tr>";
}
mysqli_close($strcon);
echo "</table>";
?>