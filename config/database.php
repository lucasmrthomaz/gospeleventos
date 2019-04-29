<?php
/**
 *  Conexão com o banco de dados MySQL
 *  PDO Connection for Database
 *  
  */ 

$user="root"; 
$pass="";
$dsn = new PDO('mysql:host=localhost;dbname=gospeleventos', $user, $pass, array(
    PDO::ATTR_PERSISTENT => true
));

$dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

print_r(">> Banco de dados conectado com sucesso << <br>");
?>