<?php

include_once('../config/conn.php');

include_once('session.php');

$id = $_GET['id'];

$stmt = $conection->prepare('SELECT * FROM category WHERE id_cat = :id');

$stmt->bindParam(':id', $id);

$stmt->execute();

$results1 = $stmt->fetchALL(PDO::FETCH_ASSOC);


include_once('header.php');


?>
<main class="col-md-9 col-lg-10">
    <div class="container">
        <h1 id="main-title">Editar Post</h1>
        <form action="editar_cat.php" method="post" enctype="multipart/form-data">
            <?php foreach($results1 as $category): ?>
                <label for="category" class="form-label">Id</label>
                   <div class="input-group mb-3">
                   <input type="text" class="form-control" name="description" id="description" value="<?=$category['id_cat']?>" aria-describedby="basic-addon3" placeholder="" disabled>
                   </div>
                <label for="description" class="form-label">Categoria</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="description" id="description" value="<?=$category['name_cat']?>" aria-describedby="basic-addon3" placeholder="Digite o título" required>
                </div>
                <?php endforeach; ?>
            <input type="submit" class="btn btn-primary" value="EDITAR">
        </form>
    </div>
</main>
<?php
include "footer.php";
?>