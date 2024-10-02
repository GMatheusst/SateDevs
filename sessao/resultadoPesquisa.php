
<section class="mt-3">
                <?php
                include_once("classe/MostrarResultPesquisa.php");
                $pesquisa = new MostrarResultPesquisa();
                /**Método para gerar a paginação */
                $pesquisa->setNumPagina(@$_GET["pg"]); //resgata o número da página atual
                $pesquisa->setUrl("?pg"); //indicar o caminho/diretório
                $pesquisa->setSessao(""); //deve ficar vazia
                $idc = (@$_GET["idc"]);
                $idsc = (@$_GET["idsc"]);
                if($pesquisa->mostrarResultPesquisa() == null){
                    echo"<h3 class'fw-bold'>Resultado não encontrado<h2>";
                }
                else{
               $pesquisa->mostrarResultPesquisa();
                }
                ?>
           
</section>
<!-- Paginação -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center">
                <ul class="nav nav1 d-flex">
            <?php $pesquisa->geraNumeros(); ?>
                </ul>
            </div>
        </div>
    </div>
</div>