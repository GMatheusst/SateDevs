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
        echo " <button type='button' class='btn btn-info' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
                    Adicionar Foto do Usuário
                </button>
                <!-- Modal -->
                <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false'
                    tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header border-0'>
                                <h1 class='modal-title fs-5' id='staticBackdropLabel'>Adicionar novo
                                    item</h1>
                                <button type='button' class='btn-close' data-bs-dismiss='modal'
                                    aria-label='Close'></button>
                            </div>
                            <form action='../funcao/Inserir.php' method='post' enctype='multipart/form-data'>
                                     <input type='hidden' name='idForm' value='CadFoto'>
                                     <input type='hidden' name='id' value='".$dados["idUsuario"]."'>
                         <input type='file' name='imagem' id='' class='input border-0 border-bottom'>
                                <div class='modal-footer border-0'>
                                    <button type='submit' class='btn btn-sm btn-info'>Adicionar</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>";
    }
}
public function getProfissaoUsuario(){
    $user = $_SESSION["usuario"] ;
    $sql = "SELECT profissaoUsuario FROM tbusuario WHERE nomeUsuario = '$user'";
    $query = self::execSql($sql);
    $dados = self::listarDados($query);
    
    echo $dados["profissaoUsuario"];
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
    <div class="d-none d-md-block text-center lead text-light fs-4"><?php
    $profissao = new Usuario();
    $profissao->getProfissaoUsuario();
    ?></div>
</div>