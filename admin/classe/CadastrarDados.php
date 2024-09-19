<?php
include_once("ManipularDados.php");

// classe Responsavel por inserir dados
Class InserirDados extends ManipularDados{

// Metodo que Insere um produto ao banco
/* Exemplo de uso:
* $this->acessarTabela("nome_da_tabela");
* $this->acessarCampo("nome_do_campo");
* $this->acessarDados("'valor'");
* self::inserirDados();
*/
public function CadastroDeUsuario($nome,$emai,$senha){
    
    $this->acessarTabela("tbusuario");
    $this->acessarCampo("nomeUsuario,emailUsuario,senhaUsuario");
    $this->acessarDados("'$nome','$emai','$senha'");
    $this->acessarCampoId("nomeUsuario");
    $this->acessarValorId("$nome");
    self::inserirDados();

}


}

?>