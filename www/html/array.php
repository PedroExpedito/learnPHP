<?php
$frutas = array("laranja", "Maça", "Banana", "Caju", "Melão","Melancia","Graviola");

echo "Array Original: <br> <br>";
foreach ($frutas as $fruta) {
echo "$fruta<br>";
}
echo "<br> Array Ordenado alfabeticamente<br><br>";

//sort($frutas); // função para ordenar o array em ordem alfabetica.
rsort($frutas);// função para ordenar em ordem alfabetica inversa
foreach ($frutas as $fruta) {
echo "$fruta<br>";
}
echo "<br><br>valor com suas chaves <br><br>";
foreach ($frutas as $chave => $valor) {
  echo "frutas[" . $chave . "] = " . $valor . "<br>";
}

echo "<br>Fim<br>";

echo "Numeros ordenados como string<br>";
$numeros = array(1,5,6,43,32,22,'88','45');
sort($numeros, SORT_STRING);
foreach ($numeros as $num) {
  echo "$num<br>";
}
echo "<br>numero em ordem numerica<br>";
sort($numeros, SORT_NUMERIC);
foreach ($numeros as $num) {
  echo "$num<br>";
}
echo("array de ordenado de forma padrão");
sort($numeros, SORT_REGULAR);// opção padrão.
foreach ($numeros as $num) {
  echo "$num<br>";
}
?>
