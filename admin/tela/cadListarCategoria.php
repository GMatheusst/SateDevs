<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-4">Categorias Cadastradas</div>
            </div>
            <div class="col-3 text-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdropAdC">
                    Adicionar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdropAdC" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar novo
                                    item</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="../funcao/Inserir.php" method="post">
                                <input type="hidden" name="idForm" value="CRCat">
                                <div class="modal-body">
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Nome Categoria</label>
                                        <input type="text" name="nome" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="desc" class="lead fs-6">Descrição da categoria</label>
                                        <input type="text" name="desc" id="" class="input border-0 border-bottom">
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
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-light table-hover">
                        <thead>
                            <tr class="text-center table-dark">
                                <th width="30">Id</th>
                                <th width="200">Nome</th>
                                <th width="300">Descrição</th>
                                <th class="px-3 py-2" style="width: 30px;">
                    <i class="bi bi-pencil-square text-info" title="Editar"></i>
                    </th>
                    <th class="px-3 py-2" style="width: 30px;">
                    <i class="bi bi-trash text-danger" title="Excluir"></i>
                    </th>
                         
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                            include_once("../classe/MostrarCategoria.php");
                            $categorias = new MostrarCategorias();
                            $categorias->setNumPagina(@$_GET["pg"]);
                            $categorias->setUrl("?tela=cadListarCategoria");
                            $categorias->setSessao("");
                            $categorias->mostrarCategorias();
                            ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Paginação -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center">
                <ul class="pagination">
                   <?php
                    $categorias->geraNumeros();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>