<?php 

include "../config/conn.php";

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);

//preparar
$stmt = $conection->prepare("INSERT INTO users (nome, login, senha) VALUES(:nome, :login, :senha)");

//tratar
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':senha', $senha);

//executar
$stmt->execute();

header("Location:cad_user.php");
?>

