<?php 
include_once("../classe/ManipularDados.php");
$insert = new ManipularDados();

class ListarNomeUsuario extends ManipularDados{
        public function ListarUsuario(){
          $sql = "SELECT * FROM tbusuario ORDER BY idUsuario ASC";
          $query = self::execSql($sql);
          $dados = self::listarDados($query);
         return $nomeUsuario = $dados["nomeUsuario"];
        }
        }
        if(@$_POST["turno"] == "enviar"){ 
            session_start(); // Inicia a sessão

            // Agora você pode acessar as variáveis de sessão
            $usuario = $_SESSION['usuario'];
            $senha = $_SESSION['senha'];
            $nome = $_SESSION['nome'];
            include_once("../classe/VerificarLogin.php");
            $usuario = new VerificarLogin;
            $dados = $usuario->getUser();
          
            $texto = ' <div class="card text-center shadow-sm p-1 mb-4 bg-white rounded">
    <div class="card-body">
        <h5 class="card-title">Convite para Administrador</h5>
        <p class="card-text">Você está sendo convidado para se tornar administrador.</p>

        <div class="d-flex justify-content-center gap-3">
            <!-- Formulário para aceitar o convite -->
            <form action="../funcao/ConviteAcessLevel.php" method="post">
                <input type="hidden" name="id" value="'.$dados["idUsuario"].'">
                <input type="hidden" name="turno" value="aceitar">
                <button type="submit" class="btn btn-outline-success">Aceitar</button>
            </form>

            <!-- Formulário para negar o convite -->
            <form action="../funcao/ConviteAcessLevel.php" method="post">
                <input type="hidden" name="id" value="'.$dados["idUsuario"].'">
                <input type="hidden" name="turno" value="negar">
                <button type="submit" class="btn btn-outline-danger">Negar</button>
            </form>
        </div>
    </div>
</div>
';
            $id = @$_POST["id"];
            $userName = new ListarNomeUsuario();
            $nomeUsuario = $userName->ListarUsuario();
            $idUsuario = @$_POST["idUsuario"];
            $insert->acessarTabela("tbnotificacao");
            $insert->acessarCampo("idUsuario,nomeUsuario,mensagemNotificacao");
            $insert->acessarDados("'$id','$nomeUsuario','$texto'");
            $insert->inserirDadosForçados();
            echo "
         <script>
         alert('Notificação enviada');
         window.location.href = '../tela/index.php';
         </script>
         ";

        } 
        elseif(@$_POST["turno"] == "aceitar"){

         session_start(); // Inicia a sessão

          // Agora você pode acessar as variáveis de sessão
          $usuario = $_SESSION['usuario'];
          $senha = $_SESSION['senha'];
          $nome = $_SESSION['nome'];
          include_once("../classe/MostrarNotificacao.php");
          $mostrar = new MostrarNotificacao();
          $dados = $mostrar->getNot();

          $id =  @$_POST["id"];
          var_dump($id);
          $idNot = $dados["idNotificacao"];
          $adm = 2;
          $insert->acessarTabela("tbusuario");
          $insert->acessarCampo("access_level='$adm'");
          $insert->acessarCampoId("idUsuario");
          $insert->acessarValorId($id);
          $insert->atualizarDados();
          
        
          }
        elseif(@$_POST["turno"] === "negar"){
        session_start(); // Inicia a sessão

        // Agora você pode acessar as variáveis de sessão
        $usuario = $_SESSION['usuario'];
        $senha = $_SESSION['senha'];
        $nome = $_SESSION['nome'];
        include_once("../classe/MostrarNotificacao.php");
        $mostrar = new MostrarNotificacao();
        $dados = $mostrar->getNot();
        $idNot = $dados["idNotificacao"];
        $insert->acessarTabela("tbnotificacao");
        $insert->acessarCampo("idNotificacao");
        $insert->acessarDados("$idNot");
        $insert->acessarCampoId("idNotificacao");
        $insert->acessarValorId("$idNot");
        $insert->apagarDados();
        echo "
         <script>
         alert('Apagado com sucesso.');
         window.location.href = '../tela/index.php';
         </script>
         ";
        }
        else {
           echo "erro fora";
        }
?>