<?php 
class ListarUsuario extends ManipularDados
{
    
    public function ListarUsuario(){
       
        include_once("../classe/ManipularDados.php");
        $sql = "SELECT * FROM tbusuario ORDER BY nomeUsuario ASC";
        $query = self::execSql($sql);
        echo "
            <div class='input text-start border px-1 py-1 mb-1'>
                <label for='situacao' class='lead fs-6'>Usuario</label>
                <select class='form-select' aria-label='Default select example' name='idUsuario'>
                    <option value=''>Selecione</option>
            </div>
        
        ";
        
        while ($dados = self::Listardados($query)) {
            echo "
              <option value='".$dados["idUsuario"]."'>".$dados["nomeUsuario"]."</option>
                ";
        }
        
        echo "
        
        </select>
        
        </div>
        ";
    }
}

?>