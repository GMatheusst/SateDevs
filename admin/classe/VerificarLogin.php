<?php
/***********************************************************************************************************************
 * Classe que irá permitir ou negar o acesso ao painel de administrador.
 * Desenvolvedor: Diego Jardim da Silva
 * Data: 12 de agosto de 2024
 */
include_once("MinhaConexao.php");
class VerificarLogin extends Minhaconexao
{
    /***** Declarar variáveis necessárias para tratar os dados de acesso *****/
    protected $usuario, $senha, $usuarioLogado, $erro;
    /***** Métodos que receberá o nome de usuário e retornará para validar o acesso  *****/
    private function setUsuario($u){
        $this->usuario = $u;
    }
    private function getUsuario(){
        return $this->usuario;
    }
    public function retornarUsuario($u){
        $this->setUsuario($u);
        return $this->getUsuario();
    }
    /***** Método que receberá a senha de usuário e retornará para validar o acesso *****/
    private function setSenha($s){
        $this->senha = $s;
    }
    private function getSenha(){
        return $this->senha;
    }
    public function retornarSenha($s){
        $this->setSenha($s);
        return $this->getSenha();
    }
    /***** Métodos que receberá o nome de usuário e retornará para validar o acesso  *****/
    public function getErro(){
        return $this->erro; 
    }
    /***** Método que realizará acesso ao sistema, caso os dados de acesso estejam corretos *****/
    public function verificarLogin()
    {
     try {
        $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$this->usuario' AND senhaUsuario = '$this->senha' AND situacaoUsuario = 'ATIVO'";
        $query = self::execSql($sql);
        /***** Armazenar os dados encontrados *****/
        $resultado = self::listarDados($query);
        /***** Verifica a quantidade de dados encontrados *****/
        $dados = self::contarDados($query);
        /**** Verifica se o usuário está duplicado *****/
        if($dados > 1){
            echo $this->erro = "Dados duplicados no sistema, entre em contato com o administrador do sistema!";
        /**** Verifica se o foi encontrado o usuário, ou seja, se dados foram digitados corretamente *****/
        }else if($dados <= 0){
            /***** Exibe mensagem onde onde os dados são inválidos *****/
            echo $this->erro = "Usuário ou senha inválidos! <br>Entre em contato com o administrador do sistema!";
            /**** Verifica se foi encontrado registro no banco *****/
        }else if($dados == 1){
            /**** Se encontrar resultado no banco, irá iniciar a sessão *****/
            @session_start();
            /**** Armazenando os dados do usuário (na super global $_SESSION) em uma sessão para que possam ser acessados em outras páginas do site  *****/
            $_SESSION['usuario'] = $this->usuario;
            $_SESSION['senha'] = $this->senha;
            $_SESSION['nome'] = $resultado["nomeUsuario"];
            header('Location: tela/index.php');
        }
     } catch (Exception $e) {
        echo "Erro: ".$e->getMessage();
     }   
    }
    public function getUser(){
     $nome = $_SESSION["nome"];
     $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$nome'";
     $query = self::execSql($sql);
     $dados = self::listarDados($query);
     return $dados;
    }
    
}