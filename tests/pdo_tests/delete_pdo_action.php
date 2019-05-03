<?php
include_once('../config.php');

$userid = isset($_GET['id']);

$stmt = $dsn->prepare("DELETE FROM test WHERE :userid"); 
$stmt->bindParam(':userid', $userid);
$stmt->execute();

?>