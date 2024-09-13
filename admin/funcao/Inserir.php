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
  $insert->acessarCampo("nomeProduto,descProduto,quantProduto,valorProduto,idCategoria,idSubCategoria");
  $insert->acessarDados("'$nome','$desc','$quant','$preço','$idc','$idsc'");
  $insert->acessarDados("'$nome','$desc','$quant','$preço','$idc','$idsc'");
  $insert->acessarCampoId("nomeProduto");
$insert->acessarValorId("'$nome'");
$insert->inserirDados();
    @header('Location: ../tela/?tela=cadListarProduto');

}
if ($_POST["idForm"] == "CRImg") {
  $nome = @$_POST["produto"];
  $idImagem = @$_POST["imagem"];
 
  var_dump($idImagem);
  $insert = new ManipularDados();
  $insert->acessarTabela("tbimagem");
  $insert->acessarCampo("nomeImagem,pastaImagem");
  $insert->acessarDados("'$nome','$idImagem'");
  $insert->acessarCampoId("nomeImagem");
  $insert->acessarValorId("'$nome'");
  $insert->inserirDados();
  //  @header('Location: ../tela/?tela=cadListarFoto&pg=1');

 }
?>
