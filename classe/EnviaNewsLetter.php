<?php
include_once("ManipularDados.php");
class EnviaNewsLetter extends ManipularDados{
    public function enviaNewsLetter($email){
        $this->acessarTabela("");
        $this->acessarCampo("");
        $this->acessarDados("");
        $this->acessarValorId("");
        self::inserirDados();
        echo $this->status;
    }
}