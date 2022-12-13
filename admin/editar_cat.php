<?php
include_once('../config/conn.php');

$id = $_POST['category'];

$stmt = $conection->prepare('UPDATE category SET name_cat WHERE id_cat = :id');

$stmt->bindParam(':id', $id);

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

header('Location: cat_add.php');
?>