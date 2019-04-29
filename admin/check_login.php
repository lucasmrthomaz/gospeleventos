<?php

// Importa configurações e banco de dados
include_once('../config/config.php');


$email = $_POST['email_i'];
$senha = $_POST['senha_i'];
    
// Testa as condições de login no sistema
// Depois fazer com que logue via banco de dados
if($email == 'lucasmrthomaz@gmail.com' & $senha == '1234'){
    echo '<br> Login permitido com sucesso </br>';
    
    echo '</br>Email digitado foi: '.$email;
    echo '</br>Senha digitada foi: '.$senha;
    sleep(1);

    //Redireciona para pagina principal do admin
    header("Location: home.php");
}else{
    echo '<h1>Login não é valido</h1>';
    echo '<a style="btn button" href="index.php">Voltar</a>';
}

?>