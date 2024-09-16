
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
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Atualizar Categoria Selecionada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../funcao/Atualizar.php" method="post">
                <div class="modal-body">
                    <div class="text-start border px-1 py-1 mb-1">
                        <input type="hidden" name="idForm" value="atP">
                        <input type="hidden" name="id" value="<?php echo $dados['idProduto']; ?>">
                        <label for="nome" class="lead fs-6">Nome do produto</label>
                        <input type="text" name="produto" id="" value="<?php echo $dados['nomeProduto']; ?>" class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="desc" class="lead fs-6">Descrição do produto</label>
                        <input type="text" name="desc" id="" value="<?php echo $dados['descProduto']; ?>" class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="quantidade" class="lead fs-6">Quantidade</label>
                        <input type="text" name="quantidade" id="" value="<?php echo $dados['quantProduto']; ?>" class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="valor" class="lead fs-6">Valor Unitário</label>
                        <input type="text" name="valor" id="" value="<?php echo $dados['valorProduto']; ?>" class="input border-0 border-bottom">
                    </div>

                        <?php include_once("../funcao/ListarCategorias.php"); ?>
                       <?php include_once("../funcao/ListarSubCategorias.php"); ?>
                    <div class="text-start border px-1 py-1 mb-1">
                        <?php include_once("../funcao/ListarImagem.php");?>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-sm btn-info">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>