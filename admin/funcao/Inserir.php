<?php

include_once("../classe/ManipularDados.php");
$insert = new ManipularDados();
if($_POST["idForm"] == "CRProd"){
$nome = @$_POST["nome"];
$desc = @$_POST["desc"];
$quant = @$_POST["quant"];
$preço = @$_POST["preço"];
  $idc = @$_POST["categoria"];
  $idsc = @$_POST["sub"];
$insert->acessarTabela("tbproduto");
$insert->acessarCampo("nomeProduto,descProduto,quantProduto,valorProduto");
$insert->acessarDados("'$nome','$desc','$quant','$preço'");
$insert->acessarCampoId("nomeProduto");
$insert->acessarValorId('$nome');
$insert->inserirDados();
 @header('Location: ../tela/?tela=cadListarProduto');

}
if ($_POST["idForm"] == "CRImg") {
  include_once("../classe/UploadImagem.php");
  $nome = @$_POST["nome"];
  
  $Imagem = @$_FILES['imagem'];
  $image = new UploadImagem();
  $image->upload($Imagem);
  $idImagem = $image->getNovoDiretorio();
  $insert->acessarTabela("tbimagem");   
  $insert->acessarCampo("nomeImagem,pastaImagem");
  $insert->acessarDados("'$nome','$idImagem'");
  $insert->acessarCampoId("nomeImagem");
  $insert->acessarValorId("'$nome'");
  $insert->inserirDados();
  @header('Location: ../tela/?tela=cadListarFoto');

 }
?>
