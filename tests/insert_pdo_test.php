<?php


$stmt = $dsn->prepare("INSERT INTO test (nome, email, empresa) VALUES (:nome, :email, :empresa)");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':empresa', $empresa);

// insert one row
$nome = 'Lucas Thomaz';
$email = 'lucasmrthomaz@gmail.com';
$empresa = 'Geek Imoveis';

$stmt->execute();

echo '</br> Executou o insert no banco de dados com sucesso';
?>