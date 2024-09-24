<?php
include_once("ManipularDados.php");
class EnviaNewsLetter extends ManipularDados
{
    public function enviaNewsLetter($email)
    {
        $this->acessarTabela("tbnewsletter");
        $this->acessarCampo("emailNewsLetter");
        $this->acessarDados("'$email'");
        $this->acessarCampoId("emailNewsLetter");
        $this->acessarValorId("$email");
        self::inserirDados();
        
        echo "
          <script>
          alert('".$this->status."');
          window.location.href = '';
          </script>
          ";
       
    }
}
