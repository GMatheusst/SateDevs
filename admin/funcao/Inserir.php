<?php

include_once("../classe/ManipularDados.php");
$insert = new ManipularDados();
if($_POST["idForm"] == "CRProd"){
$nome = @$_POST["nome"];
$desc = @$_POST["desc"];
$quant = @$_POST["quant"];
$preço = @$_POST["preço"];
$insert->acessarTabela("tbproduto");
$insert->acessarCampo("nomeProduto,descProduto,quantProduto,valorProduto");
$insert->acessarDados("'$nome','$desc','$quant','$preço'");
$insert->acessarCampoId("nomeProduto");
$insert->acessarValorId("'$nome'");
$insert->inserirDados();
    @header('Location: ../tela/?tela=cadListarProduto');

}
?>
