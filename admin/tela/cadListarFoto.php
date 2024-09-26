<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-3">Fotos Cadastradas</div>
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
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar novo
                                    item</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="../funcao/Inserir.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="idForm" value="CRImg">
                                <div class="modal-body">
                                    <div class="text-start">
                                        <label for="nome" class="lead fs-6">Nome</label>
                                        <input type="text" name="nome" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start">
                                        <label for="imagem" class="lead fs-6">Imagem</label>
                                        <input type="file" name="imagem" id="" class="input border-0 border-bottom">
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-info">Adicionar</button>
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
                            <th width="10">Id</th>
                            <th width="100">Nome</th>
                            <th width="100">Imagem</th>
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
                        include_once("../classe/MostrarImagens.php");
                        $imagem = new MostrarImagens();
                        $imagem->setNumPagina(@$_GET["pg"]);
                        $imagem->setUrl("?tela=cadListarFoto");
                        $imagem->setSessao("");
                        $imagem->mostrarImagem();
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
                <ul class="pagination">
                   <?php
                    $imagem->geraNumeros();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>