<?php
include_once("CriaPaginacao.php");
class MostrarSubCategorias extends CriaPaginacao
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
    public function mostrarSubCategorias()
    {
        $sql = "SELECT * FROM tbsubcategoria WHERE situacaoSubCategoria = 'ATIVO'";
        $query = self::execSql($sql);
        $totalItens = self::contarDados($query);
        $this->setParametro($this->strNumPagina); //Número de página atual
        $this->setFileName($this->strUrl); //Envia o nome da página atual
        $this->setInfoMaxPag(8); //Quantidade de itens por página
        $this->setMaximoLinks(6); //Quantidade de links por página 1 à 6
        $this->setSQL($sql); //Envia a sql criada
        self::iniciaPaginacao(); //Executa o método que inicia a paginação
        $contador = 0; //Contador para gerar o número de páginas
        $cont = 0;
        for ($i = 0; $i <= $totalItens; $i++) {
           $cont++;

            if ($dados = self::results($query)) {
                $contador++;
                echo "
                            <tr>
                                <td class='fw-lighter'>" . $dados['idSubCategoria'] . "</td>
                                <td class='fw-lighter'>" . $dados['nomeSubCategoria'] . "</td>
                                <td class='fw-lighter'>".$dados['descSubCategoria']."</td>
                                <!-- Button update -->
                                <td class='align-content-around'>
                                "; include('../tela/formAtualizarSubCategoria.php'); echo "
                                </td>
                                <!-- Button delete -->
                                <td class='align-content-around'>
                                    "; include('../tela/formApagarSubCategoria.php'); echo "
                                </td>
                            </tr>
            ";
            self::setContador($contador);
        }
        }
    }
}
?>