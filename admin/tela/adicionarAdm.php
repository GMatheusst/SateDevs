<!-- Button trigger modal --> 
 <form action="../funcao/ConviteAcessLevel.php" method="post" enctype="multipart/form-data">
 <input type="hidden" name="id" value="<?php echo $dados["idUsuario"];?>">
 <input type="hidden" name="turno" value="enviar">
<button type="submit" class="btn btn-outline-info">
<i class="bi bi-envelope-arrow-down-fill"></i>
</button>
</form>

           
               