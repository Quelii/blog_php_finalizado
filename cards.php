<!-- início card -->
<style>

	.img-card{
		max-height: 180px;
		height: 100%;
	}
	.card{
		max-width: 350px;
		width: 100%;
		max-height: 400px;
		height: 100%;
	}
</style>

<div class="container" id="cards">
		<div class="row row-cols-1 row-cols-md-3 g-4">
		<?php foreach($results as $post): ?>
		  <div class="col gy-5">
		    <div class="card">
		      <img src="<?=$post["image"] ?>" class="img-card" alt="...">
		      <div class="card-body">
		        <h5 class="card-title">
<?= $post["title"] ?>
        </h5>
		        <p class="card-text">
<?= $post["description"] ?>
         </p>
		        <a href="viewPost.php?id=<?= $post["id"] ?>">
					<ion-icon name="eye-outline" size="large"></ion-icon>
        		</a>
		      </div>
		    </div>
		  </div>
		  <?php endforeach; ?>
	</div>
</div>
	<!-- fim card -->
