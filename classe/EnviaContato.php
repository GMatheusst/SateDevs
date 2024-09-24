<?php
include_once("ManipularDados.php");
class EnviaContato extends ManipularDados{
    public function EnviaContato($id,$nome,$email,$cidade,$estado,$assunto,$mensagem){
        $this->acessarTabela("tbontato");
        $this->acessarCampo("idContato='$id',nomeContato=$nome',emailContato='$email',cidadeContato='$cidade',estadoContato='$estado',assuntoContato='$assunto',mensagemContato='$mensagem'");
        $this->acessarDados("$nome,$email,$cidade,$estado,$assunto,$mensagem");
        $this->acessarValorId("$id");
        self::inserirDados();
        echo $this->status;
    }
}