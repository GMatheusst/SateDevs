<?php
include_once("ManipularDados.php");
class EnviaContato extends ManipularDados{
    public function EnviaContato($nome,$email,$cidade,$estado,$assunto,$mensagem){
        $this->acessarTabela("");
        $this->acessarCampo("");
        $this->acessarDados("");
        $this->acessarValorId("");
        self::inserirDados();
        echo $this->status;
    }
}