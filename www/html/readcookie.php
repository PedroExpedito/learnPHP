<?php 
print_r($_COOKIE);
if (isset($_COOKIE['Pedro'])){
    $valor_cookie = $_COOKIE['Teste'];
    echo "O cookie tem valor de " . $valor_cookie;

}
else{echo "Cookie não encontrado";}
?>