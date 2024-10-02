
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdropAtC<?php echo $i; ?>">
    <i class="bi bi-pencil"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdropAtC<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Atualizar Categoria Selecionada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../funcao/Atualizar.php" method="post">
                <div class="modal-body">
                    <div class="text-start border px-1 py-1 mb-1">
                        <input type="hidden" name="idForm" value="atEvento">
                        <input type="hidden" name="id" value="<?php echo $dados['idEvento']; ?>">
                        <label for="nome" class="lead fs-6">Nome do evento</label>
                        <input type="text" name="nome" id="" value="<?php echo $dados['nomeEvento']; ?>" class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="desc" class="lead fs-6">Local do Evento</label>
                        <input type="text" name="local" id="" value="<?php echo $dados['localEvento']; ?>" class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="quantidade" class="lead fs-6">Data Incio Evento</label>
                        <input type="date" name="dataInicio" id="" value="<?php echo $dados['dataInicioEvento']; ?>" class="input border-0 border-bottom">
                    </div>
                     <div class="text-start border px-1 py-1 mb-1">
                        <label for="quantidade" class="lead fs-6">Quantidade</label>
                        <input type="date" name="dataFim" id="" value="<?php echo $dados['dataFimEvento']; ?>"
                            class="input border-0 border-bottom">
                    </div>
                     <div class="text-start border px-1 py-1 mb-1">
                        <label for="quantidade" class="lead fs-6">Hora incio Evento</label>
                        <input type="dateTime" name="horaInicio" id="" value="<?php echo $dados['horaInicioEvento']; ?>" class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="quantidade" class="lead fs-6">Hora fim Evento</label>
                        <input type="dateTime" name="horaFim" id="" value="<?php echo $dados['horaFimEvento']; ?>"
                            class="input border-0 border-bottom">
                    </div>

                </div>
                <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-sm btn-info">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>