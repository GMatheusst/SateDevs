<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #74ebd5, #acb6e5);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Roboto', sans-serif;
      color: #333;
    }

    .login-card {
      background-color: #fff;
      border-radius: 15px;
      padding: 40px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
      text-align: center;
      position: relative;
    }

    .login-card svg {
      width: 80px;
      height: 80px;
      background-color: #0d6efd;
      padding: 15px;
      border-radius: 50%;
      color: white;
      position: absolute;
      top: -40px;
      left: calc(50% - 40px);
    }

    .login-card input {
      margin-bottom: 20px;
      height: 45px;
      border-radius: 8px;
      border: 1px solid #ddd;
      padding: 10px;
      font-size: 16px;
      transition: border 0.3s;
    }

    .login-card input:focus {
      border-color: #0d6efd;
      outline: none;
      box-shadow: 0 0 0 2px rgba(13, 110, 253, 0.25);
    }

    .login-card button {
      height: 45px;
      border-radius: 8px;
      background-color: #0d6efd;
      color: white;
      border: none;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .login-card button:hover {
      background-color: #084298;
    }

    .login-card .forgot-password {
      font-size: 14px;
      color: #6c757d;
      text-decoration: none;
      margin-bottom: 10px;
      display: inline-block;
    }

    .login-card .forgot-password:hover {
      text-decoration: underline;
    }

    .login-card .alert {
      margin-top: 20px;
    }

    @media (max-width: 576px) {
      .login-card {
        padding: 20px;
      }

      .login-card input {
        font-size: 14px;
      }

      .login-card button {
        font-size: 14px;
      }
    }
    #aqui {
  position: absolute;
  top: 0;
  left: 1290px;
  padding: 10px;
}

  </style>
</head>

<body>
  <div id="aqui">
    <a class="btn btn-danger text-dark" href="../index.php">Sair</a>
  </div>
  <div class="login-card">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8 7A7 7 0 1 0 8 1a7 7 0 0 0 0 14z" />
    </svg>

    <!-- Formulário de login -->
    <form action="index.php" method="post">
      <input type="hidden" name="idForm" value="formLogin">
      <input type="hidden" name="nome">

      <div class="mb-3">
    <input type="text" class="form-control" name="usuario" placeholder="UserName" autocomplete="off" required>
  </div>

  <div class="mb-3">
    <input type="password" class="form-control" name="senha" placeholder="Password" autocomplete="new-password" required>
  </div>

      <div class="mb-3">
        <a href="cadastro.php" class="forgot-password">Não possui conta? Cadastre-se!</a>
      </div>

      <div class="d-grid mt-4">
        <button type="submit" name="enviar" class="btn">Login</button>
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