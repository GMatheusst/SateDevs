<?php

if($dados['access_level'] == '1'){
echo "<!-- Button trigger modal --> 
        <form action='../funcao/ConviteAcessLevel.php' method='post' enctype='multipart/form-data'>
            <input type='hidden' name='id' value='".$dados['idUsuario']."'>
            <input type='hidden' name='turno' value='enviar'>
        <button type='submit' class='btn btn-outline-info'>
            ".var_dump($dados['idUsuario'])."
        </button>
        </form>
";}
else{
    echo"";
}
        