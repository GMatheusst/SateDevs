<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-3">Notificação Cadastradas</div>
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
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar nova mensagem</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="../funcao/Inserir.php" method="post">
                                     <input type="hidden" name="idForm" value="CRNot">
                                <div class="modal-body">
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Mensagem</label>
                                        <input type="text" name="desc" id="" class="input border-0 border-bottom">
                                    </div>
                                    <?php 
                                    include_once("../funcao/ListarUsuario.php");
                                    $usuario = new ListarUsuario();
                                    $usuario->ListarUsuario();
                                    ?>
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
                <tr class="text-center table-dark text-light align-middle">
                    <th class="px-3 py-2" style="width: 20px;">ID</th>
                    <th class="px-3 py-2" style="width: 120px;">Nome</th>
                    <th class="px-3 py-2" >Mensagem</th>
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
                        include_once("../classe/MostrarNotificacao.php");
                        $notificacao = new MostrarNotificacao();
                        $notificacao->setNumPagina(@$_GET["pg"]);
                        $notificacao->setUrl("?tela=cadListarNotificacao");
                        $notificacao->setSessao("");
                        $notificacao->mostrarNotificacao();
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
                   $notificacao->geraNumeros();
                   ?>
                </ul>
            </div>
        </div>
    </div>
</div>
