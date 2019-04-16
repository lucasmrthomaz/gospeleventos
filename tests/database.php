<?php
/**
 *  Conexão com o banco de dados
 *  PDO Connection for Database
 *  
  */ 
  
  ini_set('display_errors', 'On');
  error_reporting(E_ALL | E_STRICT);

$user="root"; 
$pass="";
$dsn = new PDO('mysql:host=localhost;dbname=gospeleventos', $user, $pass, array(
    PDO::ATTR_PERSISTENT => true
));

print_r(">> Conexao com banco de dados efetuada com sucesso. <br>");
?>