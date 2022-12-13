<?php 

    include_once('../config/conn.php');
   
    $cat = $_POST['newCat'];
    $stmt = $conection->prepare("INSERT INTO category (name_cat) VALUES(:newCat)");


   $stmt->bindParam(":newCat", $cat);
   $stmt->execute();
   
   /*redireciona o arquivo */
   header("Location: cat_add.php");


?>