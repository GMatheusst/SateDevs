<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #a1c4fd, #c2e9fb);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 300px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
        }

        .form-check-input:checked {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="mb-3 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path
                    d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            </svg>
        </div>

        <!-- Formulário de login -->
        <form action="index.php" method="post">
            <input type="hidden" name="idForm" value="formLogin">
            <input type="hidden" name="nome">

            <div class="mb-3">
                <input type="text" class="form-control" name="usuario" placeholder="Usuário" required>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="senha" placeholder="Senha" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
            </div>

            <!-- PHP para validação de login -->
            <?php
            if (empty($_POST["usuario"]) || empty($_POST["senha"])) {
                echo "";
            } else if (isset($_POST["enviar"])) {
                echo "<div class='alert alert-danger my-3'>";
                include_once("classe/VerificarLogin.php");
                $dados = new VerificarLogin();
                $dados->retornarUsuario($_POST["usuario"]);
                $dados->retornarSenha($_POST["senha"]);
                $dados->verificarLogin();
                echo "</div>";
            }
            ?>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>