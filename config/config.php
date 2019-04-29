<?php

// Set-up encoding
header('Content-Type: text/html; charset=UTF-8');

/* Carrega autoload  */ 
require_once 'autoload.php';

/* Carrega o bamcp de dadps */ 
require_once 'database.php';

/* Habilitando o debug */ 
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

?>