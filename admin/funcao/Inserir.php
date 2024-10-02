<?php

include_once("../classe/ManipularDados.php");
$insert = new ManipularDados();
if($_POST["idForm"] == "CRProd"){
  if(empty($_POST["nome"]) || empty($_POST["desc"]) || empty($_POST["quant"]) || empty($_POST["preço"]) || empty($_POST["Cat"]) || empty($_POST["SubCat"])){
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarProduto';
    </script>
    ";
  } 
  else {
    $nome = @$_POST["nome"];
    $desc = @$_POST["desc"];
    $img = @$_POST["idImagem"];
    $quant = @$_POST["quant"];
    $preço = @$_POST["preço"];
    $idc = @$_POST["Cat"];
    $idsc = @$_POST["SubCat"];
    $insert->acessarTabela("tbproduto");
    $insert->acessarCampo("nomeProduto,descProduto,quantProduto,valorProduto,idImagem,idCategoria,idSubCategoria");
    $insert->acessarDados("'$nome','$desc','$quant','$preço','$img',$idc,$idsc");
    $insert->acessarCampoId("nomeProduto");
    $insert->acessarValorId('$nome');
    $insert->inserirDados();
    echo "
          <script>
          alert('Cadastro realizado com sucesso.');
          window.location.href = '../tela/?tela=cadListarProduto';
          </script>
          ";
  }
}
elseif($_POST["idForm"] == "CRImg") {
  if (empty($_POST["nome"]) || empty($_FILES["imagem"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarFoto';
    </script>
    ";


  }
  else{
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
        $insert->acessarValorId("$nome");
        $insert->inserirDados();
       echo "
          <script>
          alert('Cadastro realizado com sucesso.');
          window.location.href = '../tela/?tela=cadListarFoto';
          </script>
          ";
      }
  }
elseif($_POST["idForm"] == "CRCat"){
  if(empty($_POST["nome"]) || empty($_POST["desc"])){
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
    $insert->acessarTabela("tbcategoria");
    $insert->acessarCampo("nomeCategoria,descCategoria");
    $insert->acessarDados("'$nome','$desc'");
    $insert->acessarCampoId("nomeCategoria");
    $insert->acessarValorId('$nome');
    $insert->inserirDados();
    echo "
    <script>
    alert('Cadastro realizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarCategoria';
    </script>
    ";
  }
  }
elseif($_POST["idForm"] == "CRSub") {
  if (empty($_POST["nome"]) || empty($_POST["desc"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarSubCategoria';
    </script>
    ";
  } else {
    $nome = @$_POST["nome"];
    $desc = @$_POST["desc"];
    $insert->acessarTabela("tbsubcategoria");
    $insert->acessarCampo("nomeSubCategoria,descSubCategoria");
    $insert->acessarDados("'$nome','$desc'");
    $insert->acessarCampoId("nomeSubCategoria");
    $insert->acessarValorId('$nome');
    $insert->inserirDados();
    echo "<script>
    alert('Cadastro realizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarSubCategoria';
    </script>
    ";
  }
}
elseif($_POST["idForm"] == "CRUsr"){
  if(empty($_POST["nome"]) || empty($_POST["senha"]) ){
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarUsuario';
    </script>
    ";
  }
  else{
    $nome = @$_POST["nome"];
    $email = @$_POST["senha"];
    $insert->acessarTabela("tbusuario");
    $insert->acessarCampo("nomeUsuario,senhaUsuario");
    $insert->acessarDados("'$nome','$senha'");
    $insert->acessarCampoId("nomeUsuario");
    $insert->acessarValorId('$nome');
    $insert->inserirDados();
    echo "
    <script>
    alert('Cadastro realizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarUsuario';
    </script>
    ";
  }
} 
elseif ($_POST["idForm"] == "CRContato") {
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
    $insert->acessarTabela("tbcontato");
    $insert->acessarCampo("nomeContato,emailContato,cidadeContato,estadoContato,assuntoContato,mensagemContato");
    $insert->acessarDados("'$nome','$email','$cidade','$estado','$assunto','$mensagem'");
    $insert->acessarCampoId("nomeContato");
    $insert->acessarValorId('$nome');
    $insert->inserirDados();
    echo "
    <script>
    alert('Cadastro realizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarContato';
    </script>
    ";
  }
}
elseif ($_POST["idForm"] == "CRNewsLetter") {
  if (empty($_POST["email"]) || empty($_POST["situacao"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarNewsLetter';
    </script>
    ";
  } else {
    $email = @$_POST["email"];
    $situacao = @$_POST["situacao"];
    $insert->acessarTabela("tbnewsletter");
    $insert->acessarCampo("emailNewsLetter,situacaoNewsLetter");
    $insert->acessarDados("'$email','$situacao'");
    $insert->acessarCampoId("emailNewsLetter");
    $insert->acessarValorId('$email');
    $insert->inserirDados();
    echo "
    <script>
    alert('Cadastro realizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarNewsLetter';
    </script>
    ";
  }
}
elseif($_POST["idForm"] == "CadFoto"){
  include_once("../classe/UploadImagem.php");
      $id = @$_POST["id"];
      $Imagem = @$_FILES['imagem'];
      $image = new UploadImagem();
      $image->upload($Imagem);
      $idImagem = $image->getNovoDiretorio();
      $insert->acessarTabela("tbusuario");
      $insert->acessarCampo("fotoUsuario='$idImagem'");
      $insert->acessarCampoId("idUsuario");
      $insert->acessarValorId($id);
      $insert->atualizarDados();
      echo "
    <script>
    alert('Cadastro realizado com sucesso.');
    window.location.href = '../tela/?tela=perfilUser';
    </script>
    ";
}
elseif($_POST["idForm"] == "CREvent"){
  if (empty($_POST["nome"]) || empty($_POST["local"]) || empty($_POST["dataInicio"]) || empty($_POST["dataFim"]) || empty($_POST["horaInicio"]) || empty($_POST["horaFim"])) {
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarEvento';
    </script>
    ";
  } else {
    $nome = @$_POST["nome"];
    $local = @$_POST["local"];
    $dataInicio = @$_POST["dataInicio"];
    $dataFim = @$_POST["dataFim"];
    $horaInicio = @$_POST["horaInicio"];
    $horaFim = @$_POST["horaFim"];
    $insert->acessarTabela("tbevento");
    $insert->acessarCampo("nomeEvento,localEvento,dataInicioEvento,dataFimEvento,horaInicioEvento,horaFimEvento");
    $insert->acessarDados("'$nome','$local','$dataInicio','$dataFim','$horaInicio','$horaFim'");
    $insert->acessarCampoId("nomeEvento");
    $insert->acessarValorId('$nome');
    $insert->inserirDados();
    echo "
    <script>
    alert('Cadastro realizado com sucesso.');
    window.location.href = '../tela/?tela=cadListarEvento';
    </script>
    // 
    ";
  }
} 
elseif($_POST["idForm"] == "CRNot"){
  if(empty($_POST["idUsuario"]) || empty($_POST["desc"])){
    echo "
    <script>
    alert('Por favor, preencha todos os campos.');
    window.location.href = '../tela/?tela=cadListarNotificacao';
    </script>
    ";
  } else {
    $id = @$_POST["idUsuario"];
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
  
    $idUsuario = @$_POST["idUsuario"];
    $insert->acessarTabela("tbnotificacao");
    $insert->acessarCampo("idUsuario,nomeUsuario,mensagemNotificacao");
    $insert->acessarDados("'$id','$nomeUsuario','$texto'");
    $insert->acessarCampoId("nomeUsuario");
    $insert->acessarValorId("$nomeUsuario");
    $insert->inserirDados();
    
  }
}
else{
  echo"ERRO FORA DOS FORMULARIOS";
}
?>
