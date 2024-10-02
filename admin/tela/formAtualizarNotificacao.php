
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
                    <input type="hidden" name="idForm" value="atNot">
                    <input type="hidden" name="id" value="<?php echo $dados['idNotificacao']; ?>">
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="nome" class="lead fs-6">Mensagem Notificação</label>
                        <input type="text" name="desc" id="" class="input border-0 border-bottom" value="<?php echo $dados['mensagemNotificacao'] ;?>">
                    </div>
                    <?php include_once("../funcao/ListarUsuario.php"); 
                        $usuario = new ListarUsuario();
                        $usuario->ListarUsuario();
                    ?>

                <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-sm btn-info">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>