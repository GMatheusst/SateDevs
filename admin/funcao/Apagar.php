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
?>