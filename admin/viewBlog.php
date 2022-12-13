<?php

include_once('../config/conn.php');

$id = $_GET['id'];

$stmt = $conection->prepare('SELECT id, title,data,description,image FROM posts WHERE id = :id');

$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!-- aqui entra o HTML, chame o Boostrap -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
	<!-- dentro do body faça o código abaixo -->
	<div class="container-fluid">
		<div class="row row-cols-1 row-cols-md-3 g-4">
		<?php foreach($results as $post): ?>
		  <div class="col gy-5">
		    <div class="card">
		      <img src="../<?= $post["image"] ?>" class="card-img-top" alt="..." width="100">
		      <div class="card-body">
		        <h5 class="card-title">
<?= $post["title"] ?>
        </h5>
		<p class="card-text">
			<?= $post["data"] ?>
		</p>
		        <p class="card-text">
<?= $post["description"] ?>
         </p>
		      </div>
		    </div>
		  </div>
		  <?php endforeach; ?>
	</div>
	<div class="container-fluid">
	<a href="view2.php"> <button class="btn btn-primary mt-3">VOLTAR</button></a>
</div>
</div>
</body>

</html>