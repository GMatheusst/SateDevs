  <?php 
  class PerfilUser extends ManipularDados{
    public function getPerfilUser(){
      $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$this->nomeUsuario'";
      $query = self::execSql($sql);
      $dados = self::listarDados($query);
      return $dados;
    }
    public function setNomeUsuario($n){
        $this->nomeUsuario = $n;
    }
  }
  $perfil = new PerfilUser();
  $perfil->setNomeUsuario($_SESSION["nome"]);
  $dados = $perfil->getPerfilUser();
  
  ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 text-center">
        <div class="profile-pic mb-3">
          <img src="<?php echo $dados["fotoUsuario"]; ?>" alt="Profile Picture" class="rounded-circle" height="150" width="150">
        </div>
        <h2 class="text-primary" id="userName"><?php echo $dados["nomeUsuario"]; ?></h2>
        <p class="text-muted" id="userProfession"><?php echo $dados["ProfissaoUsuario"]; ?></p>
        <button class="btn btn-outline-primary btn-sm" onclick="uploadImage()">Change Photo</button>
        <input type="file" id="fileInput" style="display:none;" onchange="previewImage(event)">
      </div>
      <div class="col-md-8">
        <h4 class="text-center mb-4">User Information</h4>
        <form action="../funcao/Atualizar.php" method="post">
        <div class="mb-3">
            <label for="emailUsuario" class="form-label">Nome</label>
            <input type="email" class="form-control" id="emailUsuario" value="<?php echo $dados["nomeUsuario"]; ?>">
          </div>
          <div class="mb-3">
            <label for="emailUsuario" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailUsuario" value="<?php echo $dados["emailUsuario"]; ?>">
          </div>
          <div class="mb-3">
            <label for="senhaUsuario" class="form-label">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="senhaUsuario" value="<?php echo $dados["senhaUsuario"]; ?>">
              <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">Show</button>
            </div>
          </div>
          <div class="mb-3">
            <label for="ProfissaoUsuario" class="form-label">Profession</label>
            <input type="text" class="form-control" id="ProfissaoUsuario" value="<?php echo $dados["ProfissaoUsuario"]; ?>">
          </div>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
  <script src="../java/java.js"></script>
  
