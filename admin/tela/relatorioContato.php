<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-3">Contato Cadastrados</div>
            </div>
           
        </div>
    </div>
</div>
<!-- Mostrar dados -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col table-responsive">
                <table class="table table-light table-hover">
                    <thead class="">
                        <tr class="text-center table-dark">
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Assunto</th>
                            <th>Mensagem</th>
                            <th>Email</th>
                            <th>At/Del</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            include_once("../classe/MostrarContato.php");
                            $contato = new MostrarContato();
                            /**Método para gerar a paginação */
                            $contato->setNumPagina(@$_GET["pg"]); //resgata o número da página atual
                            $contato->setUrl("?tela=relatorioContato"); //indicar o caminho/diretório
                            $contato->setSessao(""); //deve ficar vazia
                            $contato->mostrarContato();
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Paginação -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center">
                <ul id="paginacao" class="nav nav-1 d-flex">
                    <li><?php $contato->geraNumeros(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>