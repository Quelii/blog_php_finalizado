<?php
include_once('../config/conn.php');
$stmt = $conection->prepare("DELETE FROM category WHERE id_cat = :ID");
$id = $_GET['id'];
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Registro apagado";
header("Location: cat_add.php");
?>