<?php 
include_once("../classe/ManipularDados.php");

class ListarImagem extends ManipularDados{
    public function ListarImagem(){
        $sql = "SELECT * FROM tbimagem ORDER BY nomeImagem ASC";
        $query = self::execSql($sql);
        echo "
            <div class='input text-start border px-1 py-1 mb-1'>
                <label for='situacao' class='lead fs-6'>Imagem</label>
                <select class='form-select' aria-label='Default select example' name='idImagem'>
                    <option>Selecione</option>
        ";
        while ($imagem = self::Listardados($query)) {
            echo "
              <option value='".$imagem["idImagem"]."'>".$imagem["nomeImagem"]."</option>
                ";
        }
        echo "

        </select>

        </div>
        ";
    }
}
?>