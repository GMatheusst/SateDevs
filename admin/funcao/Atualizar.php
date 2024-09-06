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
if($_POST["idForm"] == "apCat"){
         $id = $_GET["id"];
         $atualizar = new ManipularDados();
         $atualizar->acessarTabela(@$_GET['tabela']);
         $atualizar->acessarCampo(@$_GET['campo']);
         $atualizar->acessarDados(@$_GET['dados']);
         $atualizar->acessarCampoId(@$_GET['campoId']);
         $atualizar->acessarValorId(@$_GET['valorId']);
         $atualizar->atualizarDados();
        echo "Chegou";
        @header('Location: ../tela/?tela=cadListarCategoria');
}
