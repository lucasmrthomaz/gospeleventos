<?php
// Importa configurações e banco de dados
include_once('../config/database.php');

$email = $_POST['email_i'];
$senha = $_POST['senha_i'];
    
// Testa as condições de login no sistema
if($email == 'teste@teste.com' & $senha == '1234'){
    echo '<br> Login permitido com sucesso <br>';
    
    echo '</br>Email: '.$email;
    echo '</br>Senha: '.$senha;
    
    // Redireciona para pagina principal do admin
    sleep(1);
    header("Location: home.php");
}else{
    echo '<h1>Login não permitido.</h1>.</br>';
}

?>