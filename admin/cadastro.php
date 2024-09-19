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
      font-family: Arial, sans-serif;
    }
    .login-card {
      background-color: white;
      border-radius: 10px;
      padding: 30px;
      width: 350px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
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
      margin-bottom: 15px;
      height: 45px;
      border-radius: 5px;
      border: 1px solid #ccc;
      padding: 10px;
      font-size: 16px;
    }
    .login-card button {
      height: 45px;
      border-radius: 5px;
      background-color: #0d6efd;
      color: white;
      border: none;
      font-size: 16px;
      cursor: pointer;
    }
    .login-card .form-check-label {
      font-size: 14px;
    }
    .login-card .forgot-password {
      font-size: 14px;
      color: #6c757d;
      text-decoration: none;
    }
    .login-card .forgot-password:hover {
      text-decoration: underline;
    }
    .login-card .remember-me {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .login-card .alert {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8 7A7 7 0 1 0 8 1a7 7 0 0 0 0 14z"/>
    </svg>

    <!-- Formulário de login -->
    <form action="cadastro.php" method="post">
      <input type="hidden" name="idForm" value="formLogin">
      <input type="hidden" name="nome">

      <div class="mb-3">
        <input type="text" class="form-control" name="usuario" placeholder="Email ID" required>
      </div>
      
      <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>

      <div class="mb-3">
        <input type="password" class="form-control" name="senha" placeholder="Password" required>
      </div>

      <div class="d-grid mt-4">
        <button type="submit" name="enviar" class="btn">Cadastrar</button>
      </div>

      <!-- PHP para validação de login -->
      <?php
        if(empty($_POST["usuario"]) || empty($_POST["senha"]) || empty($_POST["email"])) {
          echo "";
        } else if(isset($_POST["enviar"])) {
            include_once("classe/CadastrarDados.php");
            $cadastro = new InserirDados();
            $cadastro->CadastroDeUsuario($_POST["usuario"],$_POST["email"],$_POST["senha"]);
            echo "<div class='alert alert-success my-3'>";
            echo "Cadastro realizado com sucesso!";
            echo "<a href='index.php' class='alert-link'> Voltar ao login</a>";
            echo "</div>";
        }
      ?>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
