
<?php
include_once('../config.php');

// Captura os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];

/* Para corrigir o problema do AUTO_INCREMENT  
ALTER TABLE `test` CHANGE `id_test` `id_test` INT(11) NOT NULL AUTO_INCREMENT;
*/

$stmt = $dsn->prepare("INSERT INTO test (nome, email, empresa) VALUES (:nome, :email, :empresa)");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':empresa', $empresa);

$stmt->execute();
$contagem_linhas = $stmt->rowCount();

echo '</br> Executou o insert no banco de dados com sucesso </br>';
print_r('Os dados inseridos foram os seguintes: ');
echo 'Nome:'.$nome.', Email:'.$email.', Empresa:'.$empresa;
echo 'Inseriu '.$contagem_linhas.' linhas';

?>