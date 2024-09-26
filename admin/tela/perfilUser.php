  <?php 
  class PerfilUser extends ManipularDados{

    private $nomeUsuario;

    public function getPerfilUser(){
      $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$this->nomeUsuario'";
      $query = self::execSql($sql);
      $dados = self::listarDados($query);
      return $dados;
    }
    public function setNomeUsuario($n){
        $this->nomeUsuario = $n;
    }
    public function getFotoUsuario()
    {

      $user = $_SESSION["usuario"];
      $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$user'";
      $query = self::execSql($sql);
      $dados = self::listarDados($query);
      echo "
<div class='text-center'>
    
    <button type='button' class='btn btn-outline-primary btn-sm rounded-pill' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
        <i class='bi bi-camera'></i> Adicionar Foto
    </button>
</div>

<!-- Modal -->
<div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header border-0'>
                <h5 class='modal-title fw-bold' id='staticBackdropLabel'>Adicionar Foto do Usuário</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Fechar'></button>
            </div>
            <div class='modal-body'>
                <form action='../funcao/Inserir.php' method='post' enctype='multipart/form-data'>
                    <input type='hidden' name='idForm' value='CadFoto'>
                    <input type='hidden' name='id' value='" . $dados["idUsuario"] . "'>

                    <div class='mb-3'>
                        <label for='imagem' class='form-label lead'>Selecione a Foto</label>
                        <input type='file' name='imagem' id='imagem' class='input-file form-control'>
                    </div>

                    <div class='modal-footer border-0'>
                        <button type='submit' class='btn btn-info btn-sm px-4'>Adicionar</button>
                        <button type='button' class='btn btn-secondary btn-sm' data-bs-dismiss='modal'>Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
    }
  }
  
  $perfil = new PerfilUser();
  $perfil->setNomeUsuario($_SESSION["nome"]);
  
  $dados = $perfil->getPerfilUser();
  
  ?>
  <div class="container-profile mt-5 mx-5">
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="profile-pic mb-3">
          <img src="<?php
          if($dados["fotoUsuario"] != null){
            echo $dados["fotoUsuario"];
          }
          else{
            echo "https://via.placeholder.com/150";
          }
          
          
          
          ?>" alt="Profile Picture" class="rounded-circle" height="150" width="150">
        </div>
        <?php $perfil->getFotoUsuario(); ?>
        <h2 class="text-primary" id="userName"><?php echo $dados["nomeUsuario"]; ?></h2>
        <p class="text-muted" id="userProfession"><?php echo $dados["profissaoUsuario"]; ?></p>
       
      </div>
      <div class="col-md-8">
        <h4 class="text-center mb-4">Perfil do Usuario</h4>
        <form action="../funcao/Atualizar.php" method="post">
          <input type="hidden" name="idForm" value="atPerfil">
          <input type="hidden" name="id" value="<?php echo $dados["idUsuario"]; ?>">
        <div class="mb-3">
            <label for="emailUsuario" class="form-label">Nome</label>
            <input type="text" class="form-control" id="emailUsuario" name="nomeUsuario" value="<?php echo $dados["nomeUsuario"]; ?>">
          </div>
          <div class="mb-3">
            <label for="emailUsuario" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" value="<?php echo $dados["emailUsuario"]; ?>">
          </div>
          <div class="mb-3">
            <label for="senhaUsuario" class="form-label">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario" value="<?php echo $dados["senhaUsuario"]; ?>">
              <button class="btn btn-outline-secondary" type="button" onclick="togglePassword(event)"><i class="bi bi-eye"></i></button>
            </div>
          </div>
          <div class="mb-3">
            <label for="ProfissaoUsuario" class="form-label">Profession</label>
            <input type="text" class="form-control" id="ProfissaoUsuario" name="ProfissaoUsuario" value="<?php echo $dados["profissaoUsuario"]; ?>">
          </div>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
  <script src="../java/java.js"></script>
  
