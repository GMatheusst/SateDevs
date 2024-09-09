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
         $id = $_POST["id"];
         $atualizar = new ManipularDados();
         $atualizar->acessarTabela(@$_POST['tabela']);
         $atualizar->acessarCampo(@$_POST['campo']);
         $atualizar->acessarDados(@$_POST['dados']);
         $atualizar->acessarCampoId(@$_POST['campoId']);
         $atualizar->acessarValorId(@$_POST['valorId']);
         $atualizar->atualizarDados();
        echo "Chegou";
        @header('Location: ../tela/?tela=cadListarCategoria');
}
