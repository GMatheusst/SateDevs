<?php

include_once("../classe/ManipularDados.php");
if($_POST["idForm"] == "CRProd"){
$apagar = new ManipularDados();
$this->acessarTabela("tbproduto");
$this->acessarCampo("nomeProduto,descProduto,quantProduto,valorProduto");
$this->acessarDados("'$nome','$desc','$quant','$preço'");
$this->acessarCampoId("nomeProduto");
$this->acessarValorId("'$nome'");
self::inserirDados();
}
?>
