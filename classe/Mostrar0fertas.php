<?php
include_once("CriaPaginacao.php");
class MostrarOfertas extends CriaPaginacao{
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
    public function mostrarOfertas(){
        $sql = "SELECT * FROM tbproduto,tbimagem WHERE destaqueProduto = 'SIM' ORDER BY nomeProduto";
        $query = self::execSql($sql);
        $totalItens = self::contarDados($query);
        $this->setParametro($this->strNumPagina); //Número de página atual
        $this->setFileName($this->strUrl); //Envia o nome da página atual
        $this->setInfoMaxPag(6); //Quantidade de itens por página
        $this->setMaximoLinks(2); //Quantidade de links por página 1 à 6
        $this->setSQL($sql); //Envia a sql criada
        self::iniciaPaginacao(); //Executa o método que inicia a paginação
        $contador = 0; //Contador para gerar o número de páginas
        $cont = 0;
        for ($i = 0; $i <= $totalItens; $i++) {
            $i = $i + 1;

            if ($dados = self::results($query)) {
                $contador++;
                echo "
              <div class='col-4 mb-sm-0 mb-md-5 col-md-3 col-xl-3'>
                                            <h5 class='lead text-dark fs-5 fw-bol fw-bold fw-medium'>" . $dados["nomeProduto"] . "</h5>
                                            <div class='text-center'>
                                                <img src='" . $dados["pastaImagem"] . "' width='180' class='img-fluid img-thumbnail' alt=''>
                                            </div>
                                            <div class='text-center mt-2'>
                                                <!-- Button trigger modal -->
                                                <button type='button' class='btn btn-sm btn-danger'
                                                    data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                                    Mais detalhes
                                                </button>

                                                <!-- Modal -->
                                                <div class='modal fade' id='exampleModal' tabindex='-1'
                                                    aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                    <div class='modal-dialog'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <button type='button' class='btn-close btn-danger'
                                                                    data-bs-dismiss='modal' aria-label='Close'></button>
                                                            </div>
                                                            <div class='modal-body'>
                                                                <img src='".$dados["pastaImagem"]."' width='200'alt=''
                                                                    class='img-fluid'>
                                                            </div>
                                                            <div class='modal-dialog'>
                                                                <div>" . $dados["nomeProduto"] . "</div>
                                                                <div>Preço: R$" . $dados["valorProduto"] . ".00</div>
                                                            </div>
                                                            <div class='modal-footer'>
                                                                <p>" . $dados["descProduto"] . "</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            ";
                self::setContador($contador);
                $cont++;
            }
        }
    }
}
?>