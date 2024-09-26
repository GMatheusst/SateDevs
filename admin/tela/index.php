<?php 
session_start();
include_once("../classe/MinhaConexao.php");
include_once("../classe/VerificarLogin.php");
include_once("../classe/TrocarUrl.php");

$login = new VerificarLogin();
if(isset($_SESSION['usuario']) and isset($_SESSION['senha']) and isset($_SESSION['nome'])){
	$_SESSION['usuario'];
	$_SESSION['senha'];
    $nome = $_SESSION['nome'];
    
?>
<!doctype html>
<html lang="pt-br">

<?php include_once("../include/head.php");?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 col-md-2 bg-danger p-0">
                <!-- Topo -->
                <?php include_once("../include/topo.php"); ?>
                <!-- Foto de usuário -->
                <?php include_once("../include/fotoUser.php"); ?>
                <!-- Menu -->
                <?php include_once("../include/menu.php");?>
                <!-- Rodapé -->
                <?php include_once("../include/footer.php"); ?>
            </div>
            <!-- Conteúdo -->
            <div class="col vh-100 bg-light-subtle p-0">
                <!-- Barra superior -->
                <?php include_once("../include/barraSuperior.php"); ?>
                <!-- Cadastro/Mostrar-->
                <?php 
                $url = new TrocarUrl();
                $url->trocarUrl(@$_GET["tela"]);
                ?>
            </div>
            <!-- Notificações -->
            <?php  ?>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
/***** Não permite que a sessão seja reiniciada após logout do sistema *****/
 }else{
    unset($_SESSION["usuario"]);
    unset($_SESSION["senha"]);	
    unset($_SESSION["nome"]);	    	
    echo "
    <script>
    alert('Sessão expirada, por favor, entre novamente.');
    window.location.href = '/SateDevs/admin/index.php';
    </script>
    ";
     }
?>