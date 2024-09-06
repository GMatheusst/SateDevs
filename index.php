<?php include_once("classe/TrocarUrl.php");?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="imgBack">
    <!-- Cabeçalho do projeto -->
    <?php include_once("include/header.php"); ?>
    <!-- Conteúdo do projeto -->
    <main>
        <section class="mt-2">
            <div class="container">
                <div class="row">
                    <!-- Imagem compre -->
                    <div class="col-sm-12 col-md-3 p-0">
                        <?php include_once("include/topo.php"); ?>
                        <!-- Formulário de pesquisa -->
                        <?php include_once("include/pesquisa.php");?>
                        <!-- Menu lateral -->
                        <?php include_once("include/menu.php");?>
                        <!-- News Letter -->
                        <?php include_once("include/newsLetter.php");?>
                        <section class="mt-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col ms-1 ms-md-0 py-2 me-1 bg-info-subtle">
                                        <div class="text-center mb-2 text-success">Área Administrativa</div>
                                        <form action="" method="post" class="formcontrol">
                                            <div class="input-group mb-1">
                                                <label for="usuario" class="input-group-text"><i
                                                        class="bi bi-person-square"></i></label>
                                                <input type="text" placeholder="Usuário"
                                                    class="input-group-text form-control">
                                            </div>
                                            <div class="input-group mb-1">
                                                <label for="senha" class="input-group-text"><i
                                                        class="bi bi-incognito"></i></label>
                                                <input type="password" placeholder="Senha"
                                                    class="input-group-text form-control">
                                            </div>
                                            <button type="submit"
                                                class="btn btn-sm btn-success form-control">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="mt-3 mt-md-0 col-sm-12 col-md-9 bg-white">
                        <?php 
                        $url = new TrocarUrl();
                        $url->trocarUrl(@$_GET["sessao"]);
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Rodapé -->
    <?php include_once("include/footer.php");?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>