<?php
include_once("../classe/ManipularDados.php");
class Usuario extends ManipularDados
{
    
public function getFotoUsuario(){
   
    $user = $_SESSION["usuario"] ;
    $sql = "SELECT fotoUsuario FROM tbusuario WHERE nomeUsuario = '$user'";
    $query = self::execSql($sql);
    $dados = self::listarDados($query);
    echo $dados["fotoUsuario"];
}
}
?>
<div class="col bg-warning">
    <div class="d-none d-md-block text-center">
        <img src="<?php 
        $FotoUsuario = new Usuario();
        $FotoUsuario->getFotoUsuario();
        ?>" class="border border-4 rounded-3 my-3" height="200" width="200" alt="">
       
    </div>
    <div class="d-none d-md-block text-center lead text-light"><?php echo"Bem Vindo ".$_SESSION['usuario']; ?></div>
    <div class="d-none d-md-block text-center lead text-light fs-4">Programador Plênor</div>
</div>