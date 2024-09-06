<?php 
include_once("MinhaConexao.php");

class CriatituloPagina extends MinhaConexao{
	
	private $texto;
	
	public function getTexto(){
		return $this->texto;
	}
	
	public function getTitulos(){
        $idc = $_GET["idc"];
        $idsc = $_GET["idsc"];
		$sql = "SELECT nomeCategoria,nomeSubCategoria,nomeSessao FROM tbcategoria,tbsubcategoria,tbsessao WHERE tbcategoria.idCategoria = '1' AND tbsubcategoria.idCategoria = '2';";
		
	}
}
?>