<?php
include_once("../classe/ManipularDados.php");
class Usuario extends ManipularDados
{
    
public function getFotoUsuario(){
   
    $user = $_SESSION["usuario"] ;
    $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$user'";
    $query = self::execSql($sql);
    $dados = self::listarDados($query);
    if($dados["fotoUsuario"] != null){
        echo "<img src='".$dados["fotoUsuario"]."' class='border border-4 rounded-3 my-3' height='200' width='200' alt=''>";
}
    else{           
        echo " 
       ";
    }
}
public function getProfissaoUsuario(){
        $user = $_SESSION["usuario"];
        $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$user'";
        $query = self::execSql($sql);
        $dados = self::listarDados($query);
        if ($dados["ProfissaoUsuario"] != null) {
        echo $dados["ProfissaoUsuario"];
    }
    else{
            echo "";
    }
}
}
?>
<div class="col bg-warning">
    <div class="d-none d-md-block text-center">
       <?php 
        $FotoUsuario = new Usuario();
        $FotoUsuario->getFotoUsuario();
       ?>
    </div>
    <div class="d-none d-md-block text-center lead text-light"><?php echo"Bem Vindo ".$_SESSION['usuario']; ?></div>
    <div class="d-none d-md-block text-center lead text-light fs-4">
    <?php
    $profissao = new Usuario();
    $profissao->getProfissaoUsuario();
    ?></div>
</div>