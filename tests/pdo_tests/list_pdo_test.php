<?php
include_once('../config.php');

$stmt = $dsn->prepare("SELECT * FROM test");
$stmt->execute(); //Executa a query

// Retorna um statement com array associativo
/* $result = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($result['nome']);    echo '<br>';
print_r($result['email']);   echo '<br>'; 
print_r($result['empresa']); echo '<br>';    
*/

while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {?>

</br>
Nome: <?php print_r($result['nome']); ?> </br>    
Email:<?php print_r($result['email']); ?>      </br>
Empresa:<?php print_r($result['empresa']); ?>    </br>
</br>

<?php } ?>