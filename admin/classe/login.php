<?php
include_once("../classe/ManipularDados.php");

class VerificarLogin extends ManipularDados
{
    public function getUserAt()
    {
        $user = $_SESSION["usuario"];
        $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$user'";
        $query = self::execSql($sql);
        $dados = self::listarDados($query);
        return $dados["nomeUsuario"];
    }
    public function getSenhaAt()
    {
        $user = $_SESSION["usuario"];
        $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$user'";
        $query = self::execSql($sql);
        $dados = self::listarDados($query);
        return $dados["senhaUsuario"];
    }
}

?>