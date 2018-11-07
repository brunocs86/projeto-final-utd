<!--Template da parte superior das páginas-->
<html>
<head>
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Cadastro de Funcionarios</title>
    <!-- Font Awesome -->
    <link href="../bootstrap/css/fontawesome-all.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../bootstrap/css/style.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">BCS</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php">Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="func-formulario.php">Cadastrar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="lista-func.php">Funcionarios</a>
                    <?php echo ($_SERVER["REQUEST_URI"] == "/busca-func.php") ? "<div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='busca-func.php'>Buscar</a>" : ""?>

                </div>
            </li>
        </ul>
        <form action="../busca-func.php" class="form-inline my-2 my-lg-0" <?php echo ($_SERVER["REQUEST_URI"] == "/busca-func.php") || ($_SERVER["REQUEST_URI"] == "/lista-func.php") ? "" : "hidden"?> method="post" >
            <input class="form-control mr-lg-2" type="text" name="buscar" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>
<!-- Fim do header -->

<!-- Area principal -->
<div class="container">
    <div class="principal">