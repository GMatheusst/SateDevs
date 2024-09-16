<?php 
include_once("../classe/ManipularDados.php");
$conexao = new ManipularDados();
$sql = "SELECT * FROM tbcategoria ORDER BY nomeCategoria ASC";
$query = self::execSql($sql);
echo "
    <div class='input text-start border px-1 py-1 mb-1'>
        <label for='situacao' class='lead fs-6'>Categoria</label>
        <select class='form-select' aria-label='Default select example' name='Cat'>
            <option>Selecione</option>
    </div>

";

while ($dados = self::Listardados($query)) {
    echo "
      <option value='".$dados["idCategoria"]."'>".$dados["nomeCategoria"]."</option>
        ";
}

echo "

</select>

</div>
";
?>