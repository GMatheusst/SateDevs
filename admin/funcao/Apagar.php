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
         $id = @$_GET["id"];
         $apagar->acessarTabela("tbProduto");
         $apagar->acessarCampo("idProduto");
         $apagar->acessarDados("$id");
         $apagar->acessarCampoId("idProduto");
         $apagar->acessarValorId(1);
         $apagar->apagarDados();
        echo "Chegou";
        // @header('Location: ../tela/?tela=cadListarProduto');
}
?>