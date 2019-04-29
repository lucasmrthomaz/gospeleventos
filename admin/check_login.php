<?php
// Importa configurações e banco de dados
include_once('../config/database.php');

$email = $_POST['email_i'];
$senha = $_POST['senha_i'];
    
echo 'Email: '.$email;
echo 'Senha: '.$senha;

 
if($email == 'teste@teste.com' & $senha == '1234'){
    echo 'Login permitido com sucesso';
}else{
    echo 'Login nao permitido.';
}

}



?>