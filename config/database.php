<?php
/**
 *  Conexão com o banco de dados
 *  PDO Connection for Database
 *  
  */ 

$user="root"; 
$pass="";
$dsn = new PDO('mysql:host=localhost;dbname=gospeleventos', $user, $pass, array(
    PDO::ATTR_PERSISTENT => true
));

$dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

print_r(">> Conexao com banco de dados efetuada com sucesso. <br>");
?>