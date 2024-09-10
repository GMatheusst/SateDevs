<div class="col-3 text-end">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
        data-bs-target="#staticBackdropApC<?php echo $i; ?>">
        <i class="bi bi-trash2"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdropApC<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Deseja apagar a categoria selecionada?</h1>
                </div>
                <form action="../funcao/Apagar.php" method="post">
                    <input type="hidden" name="idForm" value="apProd">
                    <input type="hidden" name="id" value="<?php echo $dados['idProduto']; ?>">
                    <span class="modal-title fs-6" id="staticBackdropLabel">Está ação não será desfeita!</span>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não</button>
                        <button type="submit" class="btn btn-info" name="apC">Sim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>