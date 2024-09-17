<?php
/********************************************************************
 * Função que irá apagar o dado selecionado ao primir o botão apagar.
 * Desenvolvedor: Matheus Augusto Mendes Ramalho (SateDevs)
 *******************************************************************/
include_once("../classe/ManipularDados.php");
$atualizar = new ManipularDados();

/***************************************
* Função para apagar cadastro de categoria
*/
if(@$_POST["idForm"] == "atP"){
  if (empty($_POST["nome"]) || empty($_POST["desc"]) || empty($_POST["quantidade"]) || empty($_POST["valor"]) || empty($_POST["Cat"]) || empty($_POST["SubCat"]) || empty($_POST["imagem"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarProduto';
    </script>
    ";
  } else {
    $nome = @$_POST["nome"];
    $img = @$_POST["imagem"];
    $desc = @$_POST["desc"];
    $quant = @$_POST["quantidade"];
    $preco = @$_POST["valor"];
    $cat = @$_POST["Cat"];
    $subCat =  @$_POST["SubCat"];
    $imagem = @$_POST["imagem"];
    $atualizar->acessarTabela("tbproduto");
    $atualizar->acessarCampo("nomeProduto='$nome',descProduto='$desc',quantProduto='$quant',valorProduto='$preco',idCategoria='$cat',idSubCategoria='$subCat',idImagem='$imagem'");
    $atualizar->acessarCampoId("idProduto");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarProduto';
    </script>
    ";
  }
        
}
elseif(@$_POST["idForm"] == "atImg")
{
  if (empty($_POST["name"]) || empty($_FILES["imagem"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarFoto';
    </script>
    ";
  } 
  else {
    if ($_FILES["imagem"]["error"] == UPLOAD_ERR_NO_FILE) {
      $id = @$_POST["id"];
      $name = @$_POST["name"];
      $atualizar->acessarTabela("tbimagem");
      $atualizar->acessarCampo("nomeImagem='$name'");
      $atualizar->acessarCampoId("idImagem");
      $atualizar->acessarValorId($id);
      $atualizar->atualizarDados();
      echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarFoto';
    </script>
    ";
    }
    else{
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
      echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarFoto';
    </script>
    ";

    }
  }
} 
elseif (@$_POST["idForm"] == "apCat") {
if(empty($_POST["nome"]) || empty($_POST["desc"]) || empty($_POST["situacao"])){
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarCategoria';
    </script>
    ";
  }
  else{
    $nome = @$_POST["nome"];
    $desc = @$_POST["desc"];
    $situacao = @$_POST["situacao"];
    $id = @$_POST["id"];
    $atualizar->acessarTabela("tbcategoria");
    $atualizar->acessarCampo("nomeCategoria='$nome',descCategoria='$desc',situacaoCategoria='$situacao'");
    $atualizar->acessarCampoId("idCategoria");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarCategoria';
    </script>
    ";
  }
} 
elseif (@$_POST["idForm"] == "apSubCat") {
if(empty($_POST["nome"]) || empty($_POST["desc"]) || empty($_POST["situacao"])){
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarSubCategoria';
    </script>
    ";
  }
  else{
    $nome = @$_POST["nome"];
    $desc = @$_POST["desc"];
    $situacao = @$_POST["situacao"];
    $id = @$_POST["id"];
    $atualizar->acessarTabela("tbsubcategoria");
    $atualizar->acessarCampo("nomeSubCategoria='$nome',descSubCategoria='$desc',situacaoSubCategoria='$situacao'");
    $atualizar->acessarCampoId("idSubCategoria");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarSubCategoria';
    </script>
    ";
  }
} 
elseif (@$_POST["idForm"] == "apUsr") {
if(empty($_POST["nome"]) || empty($_POST["senha"])){
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarUsuario';
    </script>
    ";
  }
  else{
    $nome = @$_POST["nome"];
    $senha = @$_POST["senha"];
    $id = @$_POST["id"];
    $atualizar->acessarTabela("tbusuario");
    $atualizar->acessarCampo("nomeUsuario='$nome',senhaUsuario='$senha'");
    $atualizar->acessarCampoId("idUsuario");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarUsuario';
    </script>
    ";
  }
} 
elseif (@$_POST["idForm"] == "apContato") {
  if (empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["cidade"]) || empty($_POST["estado"]) || empty($_POST["assunto"]) || empty($_POST["mensagem"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarContato';
    </script>
    ";
  } else {
    $nome = @$_POST["nome"];
    $email = @$_POST["email"];
    $cidade = @$_POST["cidade"];
    $estado = @$_POST["estado"];
    $assunto = @$_POST["assunto"];
    $mensagem = @$_POST["mensagem"];
    $id = @$_POST["id"];
    $atualizar->acessarTabela("tbontato");
    $atualizar->acessarCampo("nomeContato='$nome',emailContato='$email',cidadeContato='$cidade',estadoContato='$estado',assuntoContato='$assunto',mensagemContato='$mensagem'");
    $atualizar->acessarCampoId("idContato");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarContato';
    </script>
    ";
  }
}
elseif (@$_POST["idForm"] == "apNewsLetter") {
if(empty($_POST["email"]) || empty($_POST["situacao"])){
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarNewsLetter';
    </script>
    ";
  }
  else{
    $email = @$_POST["email"];
    $situacao = @$_POST["situacao"];
    $id = @$_POST["id"];
    $atualizar->acessarTabela("tbnewsletter");
    $atualizar->acessarCampo("emailNewsLetter='$email',situacaoNewsLetter='$situacao'");
    $atualizar->acessarCampoId("idNewsLetter");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();
    echo "
    <script>      
    alert('Por favor, preencha todos os campos.');  
        window.location.href = '../tela/?tela=cadListarNewsLetter'; 
                    </script> 
                    ";
  }
}
?>