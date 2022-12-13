<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        a{
            text-decoration: none;
        } 
        nav{
            padding-bottom: 35%;
        }
        nav .nav-item a{
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        nav .nav-item:hover {
            color:mediumblue;

        }
        nav p a{
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body class="h-100">
<div class="container-fluid">
	<div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-5">
                <h4 class="mb-3">Bem vindo, <br> <?php echo $_SESSION['nome']; ?></h4>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item mb-3">
                        <a href="view2.php" class="nav-item"><ion-icon name="analytics-outline"></ion-icon>Dashboard</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="insert.php" class="nav-item"><ion-icon name="add-circle-outline"></ion-icon>Inserir</a>
                    </li>
					<li class="nav-item mb-3">
                        <a href="cad_user.php" class="nav-item"><ion-icon name="add-outline"></ion-icon>Cadastrar Usuário</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a href="cat_add.php" class="nav-item"><ion-icon name="duplicate-outline"></ion-icon>Adicionar nova categoria</a>
                    </li>
                </ul>
	        <p><a href="?sair"><ion-icon name="exit-outline"></ion-icon>Deslogar</a></p>
        </nav>
		<main class="col-md-9 col-lg-10 pt-5 pb-5">
			<div class="container">
				
			

