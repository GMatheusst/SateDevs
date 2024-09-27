<?php 
include_once("../classe/ManipularDados.php");
$insert = new ManipularDados();

           class ListarNomeUsuario extends ManipularDados{
        public function ListarUsuario(){
          $sql = "SELECT * FROM tbusuario ORDER BY nomeUsuario ASC";
          $query = self::execSql($sql);
          $dados = self::listarDados($query);
         return $nomeUsuario = $dados["nomeUsuario"];
        }
        
      
      } 
            $texto = 'Você esta sendo convidado para se torna administrador<button type="button" class="btn btn-primary" aria-controls="offcanvasRight">Aceitar Convite</button>';
            $id = @$_POST["id"];
            $userName = new ListarNomeUsuario();
            $nomeUsuario = $userName->ListarUsuario();
            $idUsuario = @$_POST["idUsuario"];
            $insert->acessarTabela("tbnotificacao");
            $insert->acessarCampo("idUsuario,nomeUsuario,mensagemNotificacao");
            $insert->acessarDados("'$id','$nomeUsuario','$texto'");
            $insert->inserirDadosForçados();

?>