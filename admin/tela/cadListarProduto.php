<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-3">Produtos Cadastrados</div>
            </div>
            <div class="col-3 text-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Adicionar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar novo
                                    item</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="#" method="post">
                                <div class="modal-body">
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Nome</label>
                                        <input type="text" name="produto" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Descrição</label>
                                        <input type="text" name="produto" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Quantidade</label>
                                        <input type="text" name="produto" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Valor Unitário</label>
                                        <input type="text" name="produto" id="" class="input border-0 border-bottom">
                                    </div>
                                </div>
                                <div class="modal-footer border-0">
                                    <button type="submit" class="btn btn-sm btn-info">Adicionar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                            <th>Produto</th>
                            <th class="">Descrição</th>
                            <th class="">Quantidade</th>
                            <th>Preço</th>
                            <th width="30"></th>
                            <th width="30"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classe/MostrarProdutos.php");
                        $produtos = new MostrarProdutos();
                        $produtos->setNumPagina(@$_GET["pg"]);
                        $produtos->setUrl("?tela=cadListarProduto");
                        $produtos->setSessao("");
                        $produtos->mostrarProdutos();
                            ?>
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
                <ul class="nav nav1 d-flex">
                   <?php 
                   $produtos->geraNumeros();
                   ?>
                </ul>
            </div>
        </div>
    </div>
</div>