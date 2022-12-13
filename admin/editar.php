<?php

include_once('../config/conn.php');

include_once('session.php');

$id = $_GET['id'];

$stmt = $conection->prepare('SELECT id, title,description,texto,idCategory FROM posts WHERE id = :id');

$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

$stmt = $conection->prepare('SELECT * FROM category');

$stmt->execute();

$results1 = $stmt->fetchALL(PDO::FETCH_ASSOC);


include_once('header.php');


?>
<main class="col-md-9 col-lg-10">
    <div class="container">
        <h1 id="main-title">Editar Post</h1>
        <form action="editar-fim.php" method="post" enctype="multipart/form-data">
            <?php foreach ($results as $post) : ?>
                <p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
                <label for="basic-url" class="form-label">Título</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="title" id="title" value="<?=$post['title']?>" aria-describedby="basic-addon3" placeholder="Digite o título" required>
                </div>
                <label for="category" class="form-label">Categoria</label>
                <select class="form-select mb-3" name="category" id="category" aria-label="Default select example">
                <option selected></option>
                <?php foreach($results1 as $category): ?>
                <option value="<?=$category['id_cat']?>"><?=$category['name_cat']?></option>
                <?php endforeach; ?>
                </select>
                <label for="description" class="form-label">Descrição</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="description" id="description" value="<?=$post['description']?>" aria-describedby="basic-addon3" placeholder="Digite o título" required>
                </div>
                <label for="myTextarea" class="form-label">Texto</label>
                <div class=" mb-3">
                    <textarea id="myTextarea" name="texto" aria-label="With textarea" placeholder="Digite o novo texto da imagem..."><?= $post['texto'] ?></textarea>
                </div>
            <?php endforeach; ?>
            <input type="submit" class="btn btn-primary" value="EDITAR">
        </form>
    </div>
</main>
<?php
include "footer.php";
?>