<?php
include_once("ManipularDados.php");
class EnviaContato extends ManipularDados{
    public function EnviaContato($nome,$email,$cidade,$estado,$assunto,$mensagem){
        $this->acessarTabela("tbontato");
        $this->acessarCampo("nomeContato,emailContato,cidadeContato,estadoContato,assuntoContato,mensagemContato");
        $this->acessarDados("'$nome','$email','$cidade','$estado','$assunto','$mensagem'");
        $this->acessarValorId('$nome');
        $this->acessarCampoId("nomeContato");
        self::inserirDados();
        echo $this->status;
    }
}
