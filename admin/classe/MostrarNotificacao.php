<?php

/********************************************************************
 * Classe que irá listar todas as categóris cadastradas, a mesma irá
 * criar uma paginação para a listagem dos dados.
 * Desenvolvedor: Diego Jardim da Silva
 * Data: 08 de agosto de 2024
 *******************************************************************/
include_once("CriaPaginacao.php");
class MostrarNotificacao extends CriaPaginacao
{
    private $strSessao, $strNumPagina, $strPaginas, $strUrl, $totalItens;
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
    public function mostrarNotificacao()
    {
        $sql = "SELECT * FROM tbnotificacao,tbusuario WHERE tbnotificacao.nomeUsuario = tbusuario.nomeUsuario ORDER BY tbnotificacao.idNotificacao DESC";
        $query = self::execSql($sql);
        $totalItens = self::contarDados($query);
        $this->setParametro($this->strNumPagina); //Número de página atual
        $this->setFileName($this->strUrl); //Envia o nome da página atual
        $this->setInfoMaxPag(8); //Quantidade de itens por página
        $this->setMaximoLinks(5); //Quantidade de links por página 1 à 6
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
                <td class='fw-lighter'>" . $dados["idNotificacao"] . "</td>
                <td class='fw-lighter'>" . $dados["nomeUsuario"] . "</td>
                <td class='fw-lighter'>" . $dados["mensagemNotificacao"] . "</td>
                <!-- Button update -->
                <td class='align-content-around'>";
                include("../tela/formAtualizarNotificacao.php");
                echo "</td>
                <td class='align-content-around'>";
            include("../tela/formApagarNotificacao.php");
                "</td>
            </tr>";
                self::setContador($contador);
            }
        }
    }
    public function setTotalNotificacao($t)
    {
        $this->totalItens = $t;
    }

    public function getTotalNotificacao()
    {
        return $this->totalItens;
    }

    public function mostrarNotificacaoUsuario()
    {
        $nome = $_SESSION["nome"];
        $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$nome' ";
        $query = self::execSql($sql);
        $dados = self::listarDados($query);
        $id = $dados["idUsuario"];

        $sqlNot = "SELECT * FROM tbnotificacao,tbusuario WHERE tbnotificacao.nomeUsuario = tbusuario.nomeUsuario AND tbusuario.idUsuario = '$id' ORDER BY tbnotificacao.idNotificacao DESC LIMIT 10";
       
        $queryNot = self::execSql($sqlNot);
       // var_dump($sqlNot);
        echo "
        <div class='col-10 text-end'>
            <button type='button' class='btn btn-primary position-relative' data-bs-toggle='offcanvas'
                data-bs-target='#offcanvasRight' aria-controls='offcanvasRight'>
                <i class='bi bi-bell fs-4'></i>
                <span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger shadow-sm'>
                    ".self::contarDados($queryNot)."
                    <span class='visually-hidden'>unread messages</span>
                </span>
            </button>
            <div class='offcanvas offcanvas-end shadow-lg' tabindex='-1' id='offcanvasRight' aria-labelledby='offcanvasRightLabel'>
                <div class='offcanvas-header bg-primary text-white'>
                    <h5 class='offcanvas-title' id='offcanvasRightLabel'>Notificações</h5>
                    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='offcanvas' aria-label='Close'></button>
                </div>
                <div class='offcanvas-body p-0'>
                    <div class='list-group list-group-flush'>
        ";
        while ($dadosNot = self::listarDados($queryNot)) {
            echo "
                <div class='list-group-item d-flex justify-content-between align-items-center bg-light-subtle py-3 px-4 border-0 border-bottom'>
                    <div class='d-flex align-items-center'>
                        ";
                        if($dadosNot['fotoUsuario'] == null){
                            echo"";
                        }
                        else{
                            echo"
                            <div class='me-3'>
                            <img src='" . $dadosNot['fotoUsuario'] . "' alt='' class='img-fluid rounded-circle' height='50' width='50'>
                            </div>";
                        }
                        echo"
                        <div>
                            <h5 class='mb-1 fw-bold '>" . $dadosNot['nomeUsuario'] . "</h5>
                            <p class='mb-0 text-muted small'>" . $dadosNot['mensagemNotificacao'] . "</p>
                        </div>
                    </div>
                  
                </div>
            ";
        }
        echo "
                    </div>
                </div>
            </div>
        </div>
        ";
        
    }
    public function getNot(){
        $nome = $_SESSION["nome"];
        $sql = "SELECT * FROM tbusuario WHERE nomeUsuario =  '$nome' ORDER BY idUsuario DESC";
        $query = self::execSql($sql);
        $dados = self::listarDados($query);
        $id = $dados["idUsuario"];
        $sql1 = "SELECT * FROM tbnotificacao,tbusuario WHERE tbnotificacao.nomeUsuario = tbusuario.nomeUsuario AND tbusuario.idUsuario = '$id' ORDER BY tbnotificacao.idNotificacao DESC LIMIT 10";
        $query1 = self::execSql($sql1);
        $dados = self::listarDados($query1);
        return $dados;
}
}