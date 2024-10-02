<?php include_once("classe/EnviaNewsLetter.php");?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geek Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        /* Background personalizado */
        .imgBack {
            background-image: url('img/background.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
        }

        /* Estilo do navbar */
        .navbar-custom {
            background-color: #0d6efd !important;
            /* Azul mais forte */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav a {
            color: #fff !important;
            font-weight: 600;
        }

        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.1) !important;
        }

        /* Dropdown menus */
        .dropdown-menu {
            background-color: #f8f9fa !important;
            /* Fundo leve */
           
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dropdown-menu a {
            color: #333;
        }

        /* Botões e Formulários */
        .btn-custom {
           
            color: #fff;
            border-radius: 50px;
        }

       

        /* Estilo dos cards */
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Estilo do formulário */
        .form-control {
            border-radius: 30px;
        }

        /* Espaçamento e centralização */
        .centered-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        /* Customizar o rodapé */
        footer {
            background-color: #0d6efd;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body class="imgBack">

    <!-- Navbar customizada -->
    <nav class="navbar navbar-expand-lg navbar-custom ">
        <div class="container">
            <a class="navbar-brand text-white" href="."><i class="bi bi-shop me-2"></i>Geek Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto background">
                    <li class="nav-item">
                        <a class="nav-link active" href="?sessao=home"><i class="bi bi-house-door-fill me-2"></i>Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="bi bi-box-seam me-2"></i>Produtos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mangás</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=1&idsc=1">Shounen</a></li>
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=1&idsc=2">Seinen</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Hardware</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=2&idsc=3">Processador</a></li>
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=2&idsc=4">Placa de Video</a></li>
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=2&idsc=5">Placa mãe</a></li>
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=2&idsc=6">Memorias Ram</a></li>
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=2&idsc=7">HD's e SSD's</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">HQ's (revistas em quadrinhos)</a>
                                <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" href="?sessao=produtos&idc=3&idsc=8">Marvel</a></li>
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=3&idsc=9">Dc</a></li>
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=3&idsc=10">Brasileiros</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Decoração</a>
                                <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="?sessao=produtos&idc=4&idsc=11">Figures</a></li>
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=4&idsc=12">Funko's</a></li>
                                    <li><a class="dropdown-item" href="?sessao=produtos&idc=4&idsc=13">Quadros</a></li>
                                </ul>
                            </li>
                             <li><a class="dropdown-item" href="?sessao=produtos&idc=5&idsc=14">Camisetas e Moletons</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="?sessao=galeria"><i
                                class="bi bi-images me-2"></i>Galeria</a></li>
                    <li class="nav-item"><a class="nav-link" href="?sessao=eventos"><i
                                class="bi bi-calendar-event me-2"></i>Eventos</a></li>
                    <li class="nav-item"><a class="nav-link" href="?sessao=localizacao"><i
                                class="bi bi-geo-alt-fill me-2"></i>Localização</a></li>
                    <li class="nav-item"><a class="nav-link" href="?sessao=contato"><i
                                class="bi bi-envelope me-2"></i>Contato</a></li>
                </ul>
                 <div class="col-md-2 mt-2 me-2">
                    <div class="d-grid gap-2">
                        <a href="admin/index.php" class="btn btn-custom "><i class="bi bi-person-circle "></i>
                            Login</a>
                    </div>
            </div>
            <div class="col-md-2 mt-2">
                <div class="d-grid gap-2">
                   <?php include_once("include/pesquisa.php");?>
                </div>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-3">
                    <!-- News Letter -->
                   <?php
                   if (@$_GET["sessao"] == "home" || @$_GET["sessao"] == null) {
                       include_once("include/newsLetter.php");
                   }
                   else {
                       echo "";
                   }
                ?>
                   </div>
                <!-- Conteúdo dinâmico -->
              <?php  
               if (@$_GET["sessao"] == "home" || @$_GET["sessao"] == null) {
                  echo "<div class='col-md-9'> ";
               }
               else {
                  echo "<div class='col-md-12'>";
               }
              ?>
                    <div class="card p-4 mb-3">
                        <?php
                        include_once("classe/trocarUrl.php");
                        $url = new TrocarUrl();
                        $url->trocarUrl(@$_GET["sessao"]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p class="mb-0">© 2024 Minha Loja. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>