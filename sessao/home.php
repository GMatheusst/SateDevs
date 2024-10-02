<section class="mt-3">
    <div class="container">
        <div class="row">
                <?php
                include_once("classe/Mostrar0fertas.php");
                $produtos = new MostrarOfertas();
                /**Método para gerar a paginação */
                $produtos->setNumPagina(@$_GET["pg"]); //resgata o número da página atual
                $produtos->setUrl("?pg"); //indicar o caminho/diretório
                $produtos->setSessao(""); //deve ficar vazia
                $produtos->mostrarOfertas();
                ?>
           </div>
        </div>
</section>