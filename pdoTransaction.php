<?php 

include_once("./pdoConnection.php");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ? ");

$id = 3;

$stmt->execute(array($id));


// $conn->rollBack();
$conn->commit();

echo "Dado deletado com sucesso";

?>