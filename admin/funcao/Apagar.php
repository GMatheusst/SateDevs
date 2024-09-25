<?php
/********************************************************************
 * Função que irá apagar o dado selecionado ao primir o botão apagar.
 * Desenvolvedor: Diego Jardim da Silva
 * Data: 08 de agosto de 2024
 *******************************************************************/
include_once("../classe/ManipularDados.php");
$apagar = new ManipularDados();
/***************************************
* Função para apagar cadastro de categoria
*/
if($_POST["idForm"] == "apProd"){
         $id = @$_POST["id"];
         $apagar->acessarTabela("tbproduto");
         $apagar->acessarCampo("situacaoProduto='INATIVO'");
         $apagar->acessarCampoId("idProduto");
         $apagar->acessarValorId("$id");
         $apagar->atualizarDados();
  echo "
    <script>
    alert('Apagado com sucesso.');
    window.location.href = '../tela/?tela=cadListarProduto';
    </script>
    ";
}
elseif($_POST["idForm"] == "apImg"){
         $id = @$_POST["id"];
         $apagar->acessarTabela("tbimagem");
         $apagar->acessarCampo("situacaoImagem='INATIVO'");
         $apagar->acessarCampoId("idImagem");
         $apagar->acessarValorId("$id");
         $apagar->atualizarDados();
         echo "
          <script>
          alert('Apagado com sucesso.');
          window.location.href = '../tela/?tela=cadListarFoto';
          </script>
          ";
}
elseif($_POST["idForm"] == "apCat"){
    $id = @$_POST["id"];
    $apagar->acessarTabela("tbcategoria");
    $apagar->acessarCampo("situacaoCategoria='INATIVO'");
    $apagar->acessarCampoId("idCategoria");
    $apagar->acessarValorId("$id");
    $apagar->atualizarDados();
    echo "
          <script>
          alert('Apagado com sucesso.');
          window.location.href = '../tela/?tela=cadListarFoto';
          </script>
          ";
}
elseif($_POST["idForm"] == "apSubCat"){
         $id = @$_POST["id"];
         $apagar->acessarTabela("tbsubcategoria");
         $apagar->acessarCampo("situacaoSubCategoria='INATIVO'");
         $apagar->acessarCampoId("idSubCategoria");
         $apagar->acessarValorId("$id");
         $apagar->atualizarDados();
       ;
       echo "
       <script>
       alert('Apagado com sucesso.');
       window.location.href = '../tela/?tela=cadListarFoto';
       </script>
       ";
}

elseif($_POST["idForm"] == "apUser"){
         $id = @$_POST["id"];
         $apagar->acessarTabela("tbusuario");
         $apagar->acessarCampo("situacaoUsuario='INATIVO'");
         $apagar->acessarCampoId("idUsuario");
         $apagar->acessarValorId("$id");
         $apagar->atualizarDados();
       // echo "Chegou";
       echo "
       <script>
       alert('Apagado com sucesso.');
       window.location.href = '../tela/?tela=cadListarFoto';
       </script>
       ";
}
elseif($_POST["idForm"] == "apEvento"){
         $id = @$_POST["id"];
         $apagar->acessarTabela("tbevento");
         $apagar->acessarCampo("situacaoEvento='INATIVO'");
         $apagar->acessarCampoId("idEvento");
         $apagar->acessarValorId("$id");
         $apagar->atualizarDados();
         echo "
         <script>
         alert('Apagado com sucesso.');
         window.location.href = '../tela/?tela=cadListarEvento';
         </script>
         ";
}
elseif($_POST["idForm"] == "apUsr"){
         $id = @$_POST["id"];
         $apagar->acessarTabela("tbusuario");
         $apagar->acessarCampo("situacaoUsuario='INATIVO'");
         $apagar->acessarCampoId("idUsuario");
         $apagar->acessarValorId("$id");
         $apagar->atualizarDados();
         echo "
         <script>
         alert('Apagado com sucesso.');
         window.location.href = '../tela/?tela=cadListarUsuario';
         </script>
         ";
}
elseif($_POST["idForm"] == "apNot"){
         $id = @$_POST["id"];
         $apagar->acessarTabela("tbnotificacao");
         $apagar->acessarCampo("idNotificacao");
         $apagar->acessarDados("$id");
         $apagar->acessarCampoId("idNotificacao");
         $apagar->acessarValorId("$id");
         $apagar->apagarDados();
         echo "
         <script>
         alert('Apagado com sucesso.');
         window.location.href = '../tela/?tela=cadListarNotificacao';
         </script>
         ";
        
}
else{
  echo"ERRO FORA DOS FORMULARIOS";
}
?>
