<?php
include "config/conn.php";
include "nav.php";

$id = $_GET['id'];

$stmt = $conection->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<style>
	#footer{
		margin-top: 2rem;
		background-color: #D9D9D9;
		max-height: 500px;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.content-footer{
		display: flex;
		padding-top: 3rem;
		padding-bottom: 3rem;
		justify-content: space-between;
		max-width: 1100px;
		width: 100%;
	}
	p img{
		max-width: 900px;
	}
</style>

<div class="container pt-5">
	<?php foreach ($results as $post) : ?>
		<h2><?= $post['title'] ?></h2>
		<p><?= $post['description']; ?></p>
			<p><?= date('d/m/Y', strtotime($post['data'])); ?></p>
		<div class="container  text-center">
			<p>
				<img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
			</p>
		</div>
		<p><?= $post['texto'] ?></p>
	<?php endforeach; ?>
</div>

<!-- footer -->
<?php include "footer.php"; ?>