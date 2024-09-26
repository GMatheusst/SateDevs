<?php
include_once("CriaPaginacao.php");
class MostrarResultPesquisa extends CriaPaginacao{
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
    public function mostrarResultPesquisa(){
        $txtBusca = $_POST["pesquisa"];
        $txtBusca = $_POST["pesquisa"];
        $sql = "SELECT * FROM tbproduto,tbimagem WHERE nomeProduto LIKE '%$txtBusca%' AND tbproduto.idImagem = tbimagem.idImagem ";
        $query = self::execSql($sql);
        $this->setParametro($this->strNumPagina); //Número de página atual
        $this->setFileName($this->strUrl); //Envia o nome da página atual
        $this->setInfoMaxPag(6); //Quantidade de itens por página
        $this->setMaximoLinks(2); //Quantidade de links por página 1 à 6
        $this->setSQL($sql); //Envia a sql criada
        self::iniciaPaginacao(); //Executa o método que inicia a paginação
        $contador = 0; //Contador para gerar o número de páginas
        while($dados = self::results($query)){
            $contador++;
            echo "
            <div class='col-4 mb-sm-0 mb-md-5 col-md-3 col-xl-3'>
                    <h5 class='lead text-dark fs-6 fw-medium'>" . $dados["nomeProduto"] . "</h5>
                    <div class='text-center'>
                        <img src='" . $dados["pastaImagem"] . "' class='img-fluid img-thumbnail' alt=''>
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
                                        <button type='button' class='btn-close'
                                            data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        <img src='" . $dados["pastaImagem"] . " alt='' class='img-fluid'>
                                    </div>
                                    <div class='modal-dialog'>
                                        <div>" . $dados["nomeProduto"] . "</div>
                                        <div>" . $dados["valorProduto"] . "</div>
                                    </div>
                                    <div class='modal-footer'>
                                        <p>" . $dados["descProduto"] . "</p>
                                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>";
            self::setContador($contador);
           
        }
        }
    }

?>