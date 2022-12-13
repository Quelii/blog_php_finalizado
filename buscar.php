<?php
include_once('config/conn.php');

$buscar = $_POST['buscar'];
$stmt = $conection->prepare("SELECT * FROM posts WHERE title LIKE '%$buscar%'");
$stmt->execute();
$search = $stmt->fetchAll();

include "nav.php";
?>
<div class="container pt-5">
	<h2>Resultado da busca</h2>
	<hr class="divider">
	<?php foreach($search as $key => $value): ?>
		<h5 class="card-title mb-3 pt-3">
		<a href="viewPost.php?id=<?= $value["id"] ?>">
			<?= $value["title"] ?>
		</a>
		</h5>
		<p><?=$value['description']?></p>
	<?php endforeach; ?>
</div>

<?php include "footer.php";?>
