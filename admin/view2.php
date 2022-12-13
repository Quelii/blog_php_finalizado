<?php
include_once('../config/conn.php');

$stmt = $conection->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<?php
    include('../config/conn.php');
    include('session.php');
    $stmt = $conection->prepare("SELECT * FROM posts ORDER BY id");

    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<?php

$stmt = $conection->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('header.php');

?>
				<h1 id="main-title">Meus Posts</h1>
				<div class="container">
					<table class="table" id="contacts-table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Título</th>
								<th scope="col">Descrição</th>
								<th scope="col">Ações</th>
							</tr>
						</thead>


						<tbody>
							<?php foreach ($results as $post) : ?>
								<tr>
									<td scope="row"><?= $post["id"] ?></td>
									<td scope="row"><?= $post["title"] ?></td>
									<td scope="row"><?= $post["description"] ?></td>
									<td class="actions">
										<a href="viewBlog.php?id=<?= $post["id"] ?>">
										<ion-icon name="eye-outline" size="large" title="Ver"> </ion-icon>
										</a>
										<a href="editar.php?id=<?= $post["id"] ?>">
										<ion-icon name="create-outline" size="large" title="Editar"> </ion-icon>
										</a>
										<a href="delete.php?id=<?= $post["id"] ?>">
										<ion-icon name="close-circle-outline" size="large" title="Deletar"> </ion-icon>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				</div>
			</main>
		</div>
		</div>
		<?php

		include "footer.php";

		?>