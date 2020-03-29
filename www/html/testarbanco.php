<?php
  
  
  // show all errors
  error_reporting(E_ALL);
  //phpinfo();
  // system settings
  ini_set('display_errors', 'On');
  ini_set('log_errors', 'On');
  ini_set('track_errors', 'Off');
  ini_set('html_errors', 'Off');

 
  

  $strcon = mysqli_connect('localhost','pedro','123','banco_teste');
  if (!$strcon) {
    die('Não foi possível conectar ao MySQL');
  }
  echo 'Conexão realizada com sucesso!';
  mysqli_close($strcon);

  
?>