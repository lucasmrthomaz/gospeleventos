<?php

// Importa configurações e banco de dados
include_once('../config/config.php');

$email = $_POST['email_i'];
$senha = $_POST['senha_i'];
    
// Testa as condições de login no sistema
if($email == 'teste@teste.com' & $senha == '1234'){
    echo '<br> Login permitido com sucesso <br>';
    
    echo '</br>Email: '.$email;
    echo '</br>Senha: '.$senha;
    sleep(1);

    //Redireciona para pagina principal do admin
    //header("Location: home.php");
}else{
    echo '<h1>Login não é valido</h1>';
    echo '<a style="btn button" href="index.php">Voltar</a>';
}

?>