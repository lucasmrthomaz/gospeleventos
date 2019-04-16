<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir no BD</title>
</head>
<body>
<form action="insert_pdo_test.php" method="POST">
  Nome: <input type="text" name="nome"><br>
  Email: <input type="text" name="email"><br>
  Empresa: <input type="text" name="empresa"><br>
  <input type="submit" value="Enviar">
</form> <br>

<?php
include_once('../database.php');

$stmt = $dsn->prepare("INSERT INTO test (nome, email, empresa) VALUES (:nome, :email, :empresa)");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':empresa', $empresa);

// Captura os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];

$stmt->execute();

echo '</br> Executou o insert no banco de dados com sucesso </br>';
print_r('Os dados inseridos foram os seguintes: ');
echo 'Nome:'.$nome.', Email:'.$email.', Empresa:'.$empresa;
?>
</body>
</html>

