<?php
include_once("CriaPaginacao.php");
class MostrarSessao extends CriaPaginacao{
    private $strSessao, $strNumPagina, $strPaginas, $strUrl;
    // Método que irá receber o número atual da página
    public function setNumPagina($x){
        $this->strNumPagina = $x;
    }
    // Método que irá informar o caminho do link
    public function setUrl($x){
        $this->strUrl = $x;
    }
    // Método que cria as sessões
    public function setSessao($x){
        $this->strSessao = $x;
    }
    // Método que irá retornar a página atual
    public function getPagina(){
        return $this->strNumPagina;
    }
    public function mostrarSessao(){;
        $sql = "SELECT * FROM tbsessao ORDER BY nomeSessao ASC";
        $query = self::execSql($sql);
        $this->setParametro($this->strNumPagina); //Número de página atual
        $this->setFileName($this->strUrl); //Envia o nome da página atual
        $this->setInfoMaxPag(8); //Quantidade de itens por página
        $this->setMaximoLinks(5); //Quantidade de links por página 1 à 6
        $this->setSQL($sql); //Envia a sql criada
        self::iniciaPaginacao(); //Executa o método que inicia a paginação
        $contador = 0; //Contador para gerar o número de páginas
        while($dados = self::results()){
            $contador++;
            echo "
            
            ";
            self::setContador($contador);
        }
    }
}
?>