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
                                <td class='fw-lighter'>" . $dados["mensagemNotificao"] . "</td>
                                <!-- Button update -->
                                <td class='align-content-around'>
                                ";
                include('../tela/formAtualizarNotificacao.php');
                echo "
                                </td>
                                <td class='align-content-around'>";
                include('../tela/formApagarNotificacao.php');
                echo "
                                </td>
                            </tr>
                ";
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
        $id = $_SESSION["idUsuario"];
        $sql = "SELECT * FROM tbnotificacao,tbusuario WHERE tbnotificacao.nomeUsuario = tbusuario.nomeUsuario AND tbusuario.idUsuario = '$id' ORDER BY tbnotificacao.idNotificacao DESC";
        $query = self::execSql($sql);
        echo "
                    <div class='col-10 text-end'>
                         <button type='button' class='btn btn-primary position-relative' data-bs-toggle='offcanvas'
                             data-bs-target='#offcanvasRight' aria-controls='offcanvasRight'>
                             <i class='bi bi-bell'></i>
                             <span
                                 class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
                                 " . self::contarDados($query) . "
                                 <span class='visually-hidden'>unread messages</span>
                             </span>
                         </button>
                         <div class='offcanvas offcanvas-end bg-wite' tabindex='-1' id='offcanvasRight'
                             aria-labelledby='offcanvasRightLabel'>
                             <div class='offcanvas-body p-0'>
                                <h1 class='lead text-center mt-1'>Notificações</h1>                                
        ";
        while ($dados = self::listarDados($query)) {
            echo "
                                <div class='mt-1 p-2 bg-light-subtle'>
                                    <h5>" . $dados["nomeUsuario"] . "</h5>
                                    <p class='mb-0'>" . $dados["mensagemNotificao"] . "</p> 
                                </div>
                                
                ";
        }
        echo "
                                
                            </div>
                        </div>
                    </div>
        ";
    }
}