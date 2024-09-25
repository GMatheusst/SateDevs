<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-3">Eventos Cadastrados</div>
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
                                    Evento</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="../funcao/Inserir.php" method="post">
                                <input type="hidden" name="idForm" value="CREvent">
                                <div class="modal-body">
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Nome</label>
                                        <input type="text" name="nome" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Local Evento</label>
                                        <input type="text" name="local" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Data Inicio</label>
                                        <input type="date" name="dataInicio" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Data Fim</label>
                                        <input type="date" name="dataFim" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Hora Inicio</label>
                                        <input type="time" name="horaInicio" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Hora Fim</label>
                                        <input type="time" name="horaFim" id="" class="input border-0 border-bottom">
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
                            <th>Nome</th>
                            <th class="">Local Evento</th>
                            <th class="">Data Inicio</th>
                            <th class="">Data Fim</th>
                            <th class="">Hora Inicio</th>
                            <th class="">Hora Fim</th>
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
                        include_once("../classe/MostrarEventos.php");
                        $evento = new MostrarEventos();
                        $evento->setNumPagina(@$_GET["pg"]);
                        $evento->setUrl("?tela=cadListarEvento");
                        $evento->setSessao("");
                        $evento->mostrarEventos();
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
                    $evento->geraNumeros();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>