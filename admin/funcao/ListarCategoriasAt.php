<?php
include_once("../classe/ManipularDados.php");

class ListarCategoriasAt extends ManipularDados
{
    public function ListarCategoriasAt()
    {
        $sql = "SELECT * FROM tbcategoria ORDER BY nomeCategoria ASC";
        $query = self::execSql($sql);
        while ($dados = self::Listardados($query)) {
            echo "<option value='".$dados["idCategoria"]."'>".$dados["nomeCategoria"]."</option>";
        }
    }
}
?>