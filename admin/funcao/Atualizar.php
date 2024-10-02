<?php
/********************************************************************
 * Função que irá apagar o dado selecionado ao primir o botão apagar.
 * Desenvolvedor: Matheus Augusto Mendes Ramalho (SateDevs)
 *******************************************************************/
include_once("../classe/ManipularDados.php");
$atualizar = new ManipularDados();
session_start(); // Inicia a sessão

// Agora você pode acessar as variáveis de sessão
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$nome = $_SESSION['nome'];

/***************************************
 * Função para apagar cadastro de categoria
 */
if(@$_POST["idForm"] == "atP"){
  if (empty($_POST["produto"]) || empty($_POST["desc"]) || empty($_POST["quantidade"]) || empty($_POST["valor"]) || empty($_POST["Cat"]) || empty($_POST["SubCat"]) || empty($_POST["idImagem"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarProduto';
    </script>
    ";
  } else {
    var_dump($_POST["id"]);
    $id = @$_POST["id"];
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
elseif (@$_POST["idForm"] == "atCat") {
if(empty($_POST["nome"]) || empty($_POST["desc"]) ){
    echo "
    <script>
    alert('Por favor, preencha todos os campos.*');
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
    $atualizar->acessarCampo("nomeCategoria='$nome',descCategoria='$desc'");
    $atualizar->acessarCampoId("idCategoria");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();
    echo "
    <script>
    alert('Atualizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarCategoria';
    </script>
    "; 
  }
} 
elseif (@$_POST["idForm"] == "atSubCat") {
if(empty($_POST["nome"]) || empty($_POST["desc"]) ){
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
    $atualizar->acessarCampo("nomeSubCategoria='$nome',descSubCategoria='$desc'");
    $atualizar->acessarCampoId("idSubCategoria");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();
    echo "
    <script>
    alert('Atualizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarSubCategoria';
    </script>
    ";
    
  }
} 
elseif (@$_POST["idForm"] == "apUsr") {
if (empty($_POST["nome"]) || empty($_POST["senha"]) || empty($_POST["email"])){
  echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarContato';
    </script>
    ";
    }
    else{
      $id = @$_POST["id"];
      $nomeUsuario = @$_POST["nomeUsuario"];
      $emailUsuario = @$_POST["emailUsuario"];
      $senhaUsuario = @$_POST["senhaUsuario"];
      $atualizar->acessarTabela("tbusuario");
      $atualizar->acessarCampo("nomeUsuario='$nomeUsuario',emailUsuario='$emailUsuario',senhaUsuario='$senhaUsuario'");
      $atualizar->acessarCampoId("idUsuario");
      $atualizar->acessarValorId($id);
      $atualizar->atualizarDados();
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
elseif (@$_POST["idForm"] == "atEvento") {
  if (empty($_POST["nome"]) || empty($_POST["local"]) || empty($_POST["dataInicio"]) || empty($_POST["dataFim"]) || empty($_POST["horaInicio"]) || empty($_POST["horaFim"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarEvento';
    </script>
    ";
  }
  else{
    $id = @$_POST["id"];
    $nome = @$_POST["nome"];
    $local = @$_POST["local"];
    $dataInicio = @$_POST["dataInicio"];
    $dataFim = @$_POST["dataFim"];
    $horaInicio = @$_POST["horaInicio"];
    $horaFim = @$_POST["horaFim"];
    $atualizar->acessarTabela("tbevento");
    $atualizar->acessarCampo("nomeEvento='$nome',localEvento='$local',dataInicioEvento='$dataInicio',dataFimEvento='$dataFim',horaInicioEvento='$horaInicio',horaFimEvento='$horaFim'");
    $atualizar->acessarCampoId("idEvento");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();
    echo "
    <script>
    alert('Atualizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarEvento';
    </script>
    ";
  }
}
elseif (@$_POST["idForm"] == "atNot") {
  if (empty($_POST["desc"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarNotificacao';
    </script>
    ";
  } 
  elseif (empty($_POST["idUsuario"])) {
    $idNot = @$_POST["id"];
    $texto = @$_POST["desc"];
    $atualizar->acessarTabela("tbnotificacao");
    $atualizar->acessarCampo("mensagemNotificacao='$texto'");
    $atualizar->acessarCampoId("idNotificacao");
    $atualizar->acessarValorId($idNot);
    $atualizar->atualizarDados(); 

    echo "
    <script>
    alert('Atualizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarNotificacao';
    </script>
    ";

  }
  else {
    $id = @$_POST["idUsuario"];
    $idNot = @$_POST["id"];
    $texto = @$_POST["desc"];
    class ListarNomeUsuario extends ManipularDados{
      public function ListarUsuario(){
        $sql = "SELECT * FROM tbusuario ORDER BY nomeUsuario ASC";
        $query = self::execSql($sql);
        $dados = self::listarDados($query);
       return $nomeUsuario = $dados["nomeUsuario"];
      }
    
    }
    $userName = new ListarNomeUsuario();
    $nomeUsuario = $userName->ListarUsuario();

    $atualizar->acessarTabela("tbnotificacao");
    $atualizar->acessarCampo("idUsuario='$id',nomeUsuario='$nomeUsuario',mensagemNotificacao='$texto'");
    $atualizar->acessarCampoId("idNotificacao");
    $atualizar->acessarValorId($idNot);
    $atualizar->atualizarDados();
    
    echo "
    <script>
    alert('Atualizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarNotificacao';
    </script>
    ";

  }
}
elseif (@$_POST["idForm"] == "atPerfil") {
  if (empty($_POST["nomeUsuario"]) || empty($_POST["emailUsuario"]) || empty($_POST["senhaUsuario"]) || empty($_POST["ProfissaoUsuario"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=perfilUser';
    </script>
    ";
  } 
  elseif($_POST["nomeUsuario"] != $_SESSION["nome"] || $_POST["senhaUsuario"] != $_SESSION["senha"]){
    $id = @$_POST["id"];
    $nomeUsuario = @$_POST["nomeUsuario"];
    $emailUsuario = @$_POST["emailUsuario"];
    $senhaUsuario = @$_POST["senhaUsuario"];
    $profissaoUsuario = @$_POST["ProfissaoUsuario"];
    $atualizar->acessarTabela("tbusuario");
    $atualizar->acessarCampo("nomeUsuario='$nomeUsuario',emailUsuario='$emailUsuario',senhaUsuario='$senhaUsuario',profissaoUsuario='$profissaoUsuario'");
    $atualizar->acessarCampoId("idUsuario");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();

    echo "
    <script>
    alert('Sessão expirada, por favor, entre novamente.');
    window.location.href =  '/SateDevs/admin/index.php';
    </script>
    ";
  }
  else {
    $id = @$_POST["id"];
    $nomeUsuario = @$_POST["nomeUsuario"];
    $emailUsuario = @$_POST["emailUsuario"];
    $senhaUsuario = @$_POST["senhaUsuario"];
    $profissaoUsuario = @$_POST["ProfissaoUsuario"];
    $atualizar->acessarTabela("tbusuario");
    $atualizar->acessarCampo("emailUsuario='$emailUsuario',profissaoUsuario='$profissaoUsuario'");
    $atualizar->acessarCampoId("idUsuario");
    $atualizar->acessarValorId($id);
    $atualizar->atualizarDados();
    echo "
    <script>
    alert('Atualizado com sucesso.');
    window.location.href = '../tela/?tela=perfilUser';
    </script>
    ";
  }
}
else{
  echo"ERRO FORA DOS FORMULARIOS";
}
?>