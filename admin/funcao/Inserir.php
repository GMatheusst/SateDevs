<?php

include_once("../classe/ManipularDados.php");
$insert = new ManipularDados();
if($_POST["idForm"] == "CRProd"){
$insert->acessarTabela("tbproduto");
$insert->acessarCampo("nomeProduto,descProduto,quantProduto,valorProduto");
$insert->acessarDados("'$nome','$desc','$quant','$preço'");
$insert->acessarCampoId("nomeProduto");
$insert->acessarValorId("'$nome'");
self::inserirDados();
}
?>
