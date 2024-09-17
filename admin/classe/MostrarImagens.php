<?php
include_once("CriaPaginacao.php");
class MostrarImagens extends CriaPaginacao
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
    public function mostrarImagem()
    {

        $sql = "SELECT * FROM tbimagem WHERE situacaoImagem = 'ATIVO' ORDER BY nomeImagem ASC";
        $query = self::execSql($sql);
        $this->setParametro($this->strNumPagina); //Número de página atual
        $this->setFileName($this->strUrl); //Envia o nome da página atual
        $this->setInfoMaxPag(8); //Quantidade de itens por página
        $this->setMaximoLinks(10); //Quantidade de links por página 1 à 6
        $this->setSQL($sql); //Envia a sql criada
        self::iniciaPaginacao(); //Executa o método que inicia a paginação
        $contador = 0; //Contador para gerar o número de páginas
        $cont = 0;
        for ($i = 0; $i <= mysqli_num_rows($query); $i++) {
            $i = $i + 1;

            if ($dados = self::results($query)) {
                $contador++;
                echo "
                            <tr>
                            <td class='fw-lighter'>".$dados["idImagem"]."</td>
                            <td class='fw-lighter'>".$dados['nomeImagem']."</td>
                            <td class='align-content-around'>";
                            include("../tela/formAtualizarFoto.php");
                            echo "</td>
                            <td class='align-content-around'>";
                            include("../tela/formApagarFoto.php");
                            "</td>
                        </tr>";
                self::setContador($contador);
            }
        }
    }
}
?>