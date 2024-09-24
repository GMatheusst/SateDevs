<?php 
include_once("MinhaConexao.php");

class TotalItens extends MinhaConexao{
    protected $total;
    public function setTotalItens($t){
        $this->total = $t;
    }
    public function getTotalItens(){
        return $this->total;
    }

    public function TotalItens($tabela){
        $sql = "SELECT * from $tabela";
        $query = self::execSql($sql);
        $this->total = self::contarDados($query);
    }
}
?>