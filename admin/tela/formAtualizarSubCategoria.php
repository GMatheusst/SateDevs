<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdropAtC">
    <i class="bi bi-pencil"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdropAtC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Atualizar Sub Categoria Selecionada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../funcao/Atualizar.php" method="post">
                <input type="hidden" name="idForm" value="atSubCat">
                <input type="hidden" name="id" value="<?php echo $dados['idSubCategoria']; ?>">
                <div class="modal-body">
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="nome" class="lead fs-6">Nome da Sub Categoria</label>
                        <input type="text" name="nome" value="<?php echo $dados['nomeSubCategoria']; ?>" id="" class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="desc" class="lead fs-6">Descrição da Sub Categoria</label>
                        <input type="text" name="desc" value="<?php echo $dados['descSubCategoria']; ?>" id="" class="input border-0 border-bottom">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-sm btn-info">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>