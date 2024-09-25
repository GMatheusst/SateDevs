<?php
include_once("CriaPaginacao.php");
class MostrarNewsLetters extends CriaPaginacao
{
    private $strSessao, $strNumPagina, $strPaginas, $strUrl;
    // Método que irá receber o número atual da página
    public function setNumPagina($x)
    {
        $this->strNumPagina = $x;
    }
    // Método que irá informar o caminho do link
    public function setUrl($x)
    {
        $this->strUrl = $x;
    }
    // Método que cria as sessões
    public function setSessao($x)
    {
        $this->strSessao = $x;
    }
    // Método que irá retornar a página atual
    public function getPagina()
    {
        return $this->strNumPagina;
    }
    public function mostrarNewsLetters()
    {
        $sql = "SELECT * FROM tbnewsletter ORDER BY idNewsLetter DESC";
        $query = self::execSql($sql);
        $totalItens = self::contarDados($query);
        $this->setParametro($this->strNumPagina); //Número de página atual
        $this->setFileName($this->strUrl); //Envia o nome da página atual
        $this->setInfoMaxPag(6); //Quantidade de itens por página
        $this->setMaximoLinks(10); //Quantidade de links por página 1 à 6
        $this->setSQL($sql); //Envia a sql criada
        self::iniciaPaginacao(); //Executa o método que inicia a paginação
        $contador = 0; //Contador para gerar o número de páginas
        $cont = 0;
        for ($i = 0; $i <= $totalItens; $i++) {
            $i = $i + 1;

            if ($newsletter = self::results($query)) {
                $contador++;
                echo "
                <tbody>
                        <tr>
                            <td class='fw-lighter'>" . $newsletter["idNewsLetter"] . "</td>
                            <td class='fw-lighter'>" . $newsletter["emailNewsLetter"] . "</td>
                             <td class='fw-lighter'>" . $newsletter["situacaoNewsLetter"] . "</td>
                                     
                                <td class='align-content-around'>
                                    ";
                include('../tela/formApagarProduto.php');
                " 
                        </tr>
                ";
                self::setContador($contador);
                $cont++;
            }
        }
    }
}
