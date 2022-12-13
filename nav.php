<?php
include "config/conn.php";

$stmt = $conection->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();


$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

$stmt = $conection->prepare("SELECT * FROM category");
$stmt->execute();

$results1 = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="category.php">
</head>

<body>
  <!-- Aqui entra a navbar -->

  <nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="background-color: #121213;">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/tarefa.png" alt="logo" width="40px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php"style="color: #2fcacf;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#posts"style="color: #2fcacf;">Post</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: #2fcacf;">
              Acesso Rápido
            </a>
            
            <ul class="dropdown-menu">
            <?php foreach($results1 as $category): ?>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="category.php?cat=<?=$category['id_cat']?>"><?=$category['name_cat']?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ft"style="color: #2fcacf;">Contato</a>
          </li>
        </ul>
        <form action="buscar.php" method="post" class="d-flex" role="search">
          <input class="form-control me-2" id="buscar" name="buscar" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <a href="admin/index.php">
            <li class="btn btn-primary m-2">
              Login
            </li>
          </a>
      </div>
    </div>
    
  </nav>

  <!-- Aqui acaba a navbar -->