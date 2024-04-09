<?php 

include_once("./pdoConnection.php");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD) ");

$login = 'Mathe';
$password = '112233';

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dado inserido com sucesso";

?>