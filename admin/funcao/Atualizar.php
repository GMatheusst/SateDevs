<?php
/********************************************************************
 * Função que irá apagar o dado selecionado ao primir o botão apagar.
 * Desenvolvedor: Diego Jardim da Silva
 * Data: 08 de agosto de 2024
 *******************************************************************/
include_once("../classe/ManipularDados.php");
$atualizar = new ManipularDados();

/***************************************
* Função para apagar cadastro de categoria
*/
if(@$_POST["idForm"] == "atP"){
         $id = @$_POST["id"];   
         $nome = @$_POST["produto"];
         $img = @$_POST["imagem"];
         $desc = @$_POST["desc"];
         $quant = @$_POST["quantidade"];
         $preco = @$_POST["valor"];
         $cat = @$_POST["Cat"];
         $subCat =  @$_POST["SubCat"];
         $atualizar->acessarTabela("tbproduto");
         $atualizar->acessarCampo("nomeProduto='$nome',descProduto='$desc',quantProduto='$quant',valorProduto='$preco',idCategoria='$cat',idSubCategoria='$subCat'");
         $atualizar->acessarCampoId("idProduto");
         $atualizar->acessarValorId($id);
         $atualizar->atualizarDados();
      @header('Location: ../tela/?tela=cadListarProduto');
}
elseif(@$_POST["idForm"] == "atImg")
{
        include_once("../classe/UploadImagem.php");
        $id = @$_POST["id"];  
        $name = @$_POST["name"];
        $Imagem = @$_FILES['imagem'];
        $image = new UploadImagem();
        $image->upload($Imagem);
        $idImagem = $image->getNovoDiretorio();
        $atualizar->acessarTabela("tbimagem");
        $atualizar->acessarCampo("nomeImagem='$name',pastaImagem='$idImagem'");
        $atualizar->acessarCampoId("idImagem");
        $atualizar->acessarValorId($id);
        $atualizar->atualizarDados();
     @header('Location: ../tela/?tela=cadListarFoto');


}
elseif(@$_POST["idForm"] == "apCat"){
         $id = @$_POST["id"];
         $nome = @$_POST["produto"];
         $img = @$_POST["imagem"];
         $desc = @$_POST["desc"];
         $quant = @$_POST["quantidade"];
         $preco = @$_POST["valor"];
         $bol = @$_POST["situcao"];
         $cat = @$_POST["categoria"];
         $subCat = @$_POST["sub"];
         $atualizar = new ManipularDados();
         $atualizar->acessarTabela("tbproduto");
         $atualizar->acessarCampo("nomeProduto='$nome',nomeProduto='$nome',descProduto='$desc',quantidadeProduto='$quant',valorProduto='$preco',situacaoProduto='$bol',categoriaProduto='$cat',subCategoriaProduto='$subCat', ");
         $atualizar->acessarCampoId("idProduto");
         $atualizar->acessarValorId($id);
         $atualizar->atualizarDados();
       // echo "Chegou";
        @header('Location: ../tela/?tela=cadListarCategoria');
}
elseif(@$_POST["idForm"] == "apSubCat"){
         $id = @$_POST["id"];
         $nome = @$_POST["produto"];
         $img = @$_POST["imagem"];
         $desc = @$_POST["desc"];
         $quant = @$_POST["quantidade"];
         $preco = @$_POST["valor"];
         $bol = @$_POST["situcao"];
         $cat = @$_POST["categoria"];
         $subCat = @$_POST["sub"];
         $atualizar = new ManipularDados();
         $atualizar->acessarTabela("tbproduto");
         $atualizar->acessarCampo("nomeProduto='$nome',nomeProduto='$nome',descProduto='$desc',quantidadeProduto='$quant',valorProduto='$preco',situacaoProduto='$bol',categoriaProduto='$cat',subCategoriaProduto='$subCat', ");
         $atualizar->acessarCampoId("idProduto");
         $atualizar->acessarValorId($id);
         $atualizar->atualizarDados();
       // echo "Chegou";
        @header('Location: ../tela/?tela=cadListarCategoria');
}
elseif(@$_POST["idForm"] == "apUser"){
         $id = @$_POST["id"];
         $nome = @$_POST["produto"];
         $img = @$_POST["imagem"];
         $desc = @$_POST["desc"];
         $quant = @$_POST["quantidade"];
         $preco = @$_POST["valor"];
         $bol = @$_POST["situcao"];
         $cat = @$_POST["categoria"];
         $subCat = @$_POST["sub"];
         $atualizar = new ManipularDados();
         $atualizar->acessarTabela("tbproduto");
         $atualizar->acessarCampo("nomeProduto='$nome',nomeProduto='$nome',descProduto='$desc',quantidadeProduto='$quant',valorProduto='$preco',situacaoProduto='$bol',categoriaProduto='$cat',subCategoriaProduto='$subCat', ");
         $atualizar->acessarCampoId("idProduto");
         $atualizar->acessarValorId($id);
         $atualizar->atualizarDados();
       // echo "Chegou";
        @header('Location: ../tela/?tela=cadListarCategoria');

      }
      else{
        var_dump($_POST["idForm"]);
        echo "Erro ao atualizar o produto";
      }

?>
