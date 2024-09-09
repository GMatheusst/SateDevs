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
public function InserirProdutos($nome,$desc,$quant,$preço){
    
$this->acessarTabela("tbproduto");
$this->acessarCampo("nomeProduto,descProduto,quantProduto,valorProduto");
$this->acessarDados("'$nome','$desc','$quant','$preço'");
$this->acessarCampoId("nomeProduto");
$this->acessarValorId("'$nome'");
self::inserirDados();
}


}

?>