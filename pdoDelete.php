<?php 

include_once("./pdoConnection.php");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID ");

$id = 3;

$stmt->bindParam(":ID", $id);


echo "Dado deletado com sucesso";

?>