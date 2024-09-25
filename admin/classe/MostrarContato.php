<?php
include_once("CriaPaginacao.php");
class MostrarContato extends CriaPaginacao
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
    public function mostrarContato()
    {
        $sql = "SELECT * FROM tbontato ORDER BY idContato DESC";
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

            if ($contato = self::results($query)) {
                $contador++;
                echo
                "
                 <tbody>
                        <tr>
                            <td class='fw-lighter'>" . $contato["idContato"] . "</td>
                                <td class='fw-lighter'>" . $contato["nomeContato"] . "</td>
                                    <td class='fw-lighter'>" . $contato["cidadeContato"] . "</td>
                                        <td class='fw-lighter'>" . $contato["estadoContato"] . "</td>
                                            <td class='fw-lighter'>" . $contato["assuntoContato"] . "</td>
                                             <td class='fw-lighter'>" . $contato["mensagemContato"] . "</td>
                            <td class='fw-lighter'>" . $contato["emailContato"] . "</td>
                                     
                        </tr>
                ";
                self::setContador($contador);
                $cont++;
            }
        }
    }
}
