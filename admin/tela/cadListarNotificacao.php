<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-4">Notificações realizadas</div>
            </div>
            <div class="col-3 text-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdropAdNot">
                    Adicionar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdropAdNot" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar nova notificação</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="../funcao/Inserir.php" method="post">
                                <input type="hidden" name="idForm" value="adNotificacao">
                                <div class="modal-body">
                                    <!-- input nome -->
                                    <div class="input text-start border px-1 py-1 mb-1">
                                        <label for="imagem" class="lead fs-6">Nome Usuário</label>
                                        <select class="form-select input border-0 border-bottom"
                                            aria-label="Default select example" name="nome">
                                            <option selected>Selecione um usuário</option>
                                            <?php include("../funcao/ListarUsuarios.php"); ?>
                                        </select>
                                    </div>
                                    <!-- input descrição -->
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="desc" class="lead fs-6">Descrição do produto</label>
                                        <textarea name="texto" class="input border-0 border-bottom"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer border-0">
                                    <button type="submit" class="btn btn-sm btn-info" name="enviar">Adicionar</button>
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
                            <thead class="">
                                <tr class="text-center table-dark">
                                    <th width="300">Id</th>
                                    <th width="300">Notificacao</th>
                                    <th width="300">Data</th>
                                    <th width="400"></th>
                                </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <?php
                        $notificacao = new MostrarNotificacao();
                        $notificacao->setNumPagina(@$_GET["pg"]);
                        $notificacao->setUrl("?tela=cadListarNotificacao");
                        $notificacao->setSessao("");
                        $notificacao->mostrarNotificacao();
                                ?>
                            </tr>
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
                <ul id="paginacao" class="nav nav-1 d-flex">
                    <li><?php $notificacao->geraNumeros(); ?></li>
            </div>
        </div>
    </div>
</div>