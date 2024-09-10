<?php
/********************************************************************
 * Função que irá apagar o dado selecionado ao primir o botão apagar.
 * Desenvolvedor: Diego Jardim da Silva
 * Data: 08 de agosto de 2024
 *******************************************************************/
include_once("../classe/ManipularDados.php");
$apagar = new ManipularDados();
class UploadImagem{
    protected $novoDiretorio;
    public function getNovoDiretorio(){
        return $this->novoDiretorio;
    }
    public function upload($imagem){
        //Verifica se o botão de envio do formulário foi clicado. Se o botão foi clicado, o código dentro deste if será executado.
        try {
            if(isset($_POST['enviar'])){ 
                //Separa o nome do arquivo da imagem em um array, usando o ponto (.) como delimitador. Isso é feito para obter a extensão do arquivo (por exemplo, "jpg", "png").
                $imagemNova = explode('.',$imagem['name']); 
                //Verifica se a última parte do array $imagemNova (que contém a extensão) é diferente de "jpg". Se for diferente, significa que o formato do arquivo não é JPEG
                if($imagemNova[sizeof($imagemNova) - 1] != 'png' || $imagemNova[sizeof($imagemNova) - 1] != 'jpg'){
                    die ("Formato do arquivo não permitido");
                }else{
                    //Se o formato do arquivo for JPEG, essa linha move o arquivo temporário da imagem (localizado em $imagem["tmp_name"]) para o diretório de destino especificado.
                    move_uploaded_file($imagem["tmp_name"],'./../img/'.$imagem['name'].'');
                    $this->novoDiretorio = "../img/".$_FILES['imagem']['name']."";
                    echo "Imagem enviada\n";
                }
            }
        } catch (\Throwable $e) {
            echo "Erro ao enviar imagem: ".$e->getMessage();
        }
    }
}


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
         $bol = "ATIVO";//@$_POST["situcao"];
         $cat = 1;//@$_POST["categoria"];
         $subCat = 1; // @$_POST["sub"];
        if(isset($_FILES['imagem'])){
            $upload = new UploadImagem();
            $upload->upload($_FILES['imagem']);
  };
         $atualizar = new ManipularDados();
         $atualizar->acessarTabela("tbproduto");
         $atualizar->acessarCampo("nomeProduto='$nome',descProduto='$desc',quantProduto='$quant',valorProduto='$preco',situacaoProduto='$bol',idCategoria='$cat',idSubCategoria='$subCat'");
         $atualizar->acessarCampoId("idProduto");
         $atualizar->acessarValorId($id);
         $atualizar->atualizarDados();
       @header('Location: ../tela/?tela=cadListarProduto');
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
