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
       // echo "Chegou";
       @header('Location: ../tela/?tela=cadListarProduto');
}
elseif($_POST["idForm"] == "apImg"){
         $id = @$_POST["id"];
         $apagar->acessarTabela("tbimagem");
         $apagar->acessarCampo("situacaoImagem='INATIVO'");
         $apagar->acessarCampoId("idImagem");
         $apagar->acessarValorId("$id");
         $apagar->atualizarDados();
       // echo "Chegou";
       @header('Location: ../tela/?tela=cadListarFoto');
}
if($_POST["idForm"] == "apSubCat"){
         $id = @$_POST["id"];
         $apagar->acessarTabela("tbsubcategoria");
         $apagar->acessarCampo("situacaoSubCategoria='INATIVO'");
         $apagar->acessarCampoId("idSubCategoria");
         $apagar->acessarValorId("$id");
         $apagar->atualizarDados();
       // echo "Chegou";
       @header('Location: ../tela/?tela=cadListarSubCategoria');
}
if($_POST["idForm"] == "apUser"){
         $id = @$_POST["id"];
         $apagar->acessarTabela("tbusuario");
         $apagar->acessarCampo("situacaoUsuario='INATIVO'");
         $apagar->acessarCampoId("idUsuario");
         $apagar->acessarValorId("$id");
         $apagar->atualizarDados();
       // echo "Chegou";
       @header('Location: ../tela/?tela=cadListarProduto');
}
?>
