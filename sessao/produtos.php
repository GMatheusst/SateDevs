
<section class="mt-3">
                <?php
                include_once("classe/MostrarProdutos.php");
                $produtos = new MostrarProdutos();
                /**Método para gerar a paginação */
                $produtos->setNumPagina(@$_GET["pg"]); //resgata o número da página atual
                $produtos->setUrl("?sessao=".$_GET["sessao"]."&idc=".$_GET["idc"]."&idsc=".$_GET["idsc"].""); //indicar o caminho/diretório
                $produtos->setSessao(""); //deve ficar vazia
                $idc = (@$_GET["idc"]);
                $idsc = (@$_GET["idsc"]);
                $produtos->mostrarProdutos($idc, $idsc);
                ?>
           
</section>
<!-- Paginação -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center">
                <ul class="nav nav1 d-flex">
            <?php $produtos->geraNumeros(); ?>
                </ul>
            </div>
        </div>
    </div>
</div>