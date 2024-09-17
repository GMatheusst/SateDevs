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
            <form action="../funcao/Atualizar.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="text-start border px-1 py-1 mb-1">
                        <input type="hidden" name="idForm" value="atImg">
                        <input type="hidden" name="id" value="<?php echo $dados['idImagem']; ?>">
                        <label for="nome" class="lead fs-6">Nome da Imagem</label>
                        <input type="text" name="name" id="" value="<?php echo $dados['nomeImagem']; ?>"
                            class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="desc" class="lead fs-6">Local Da Imagem</label>
                        <input type="file" name="imagem" id="" value="<?php echo $dados['pastaImagem']; ?>"
                            class="input border-0 border-bottom">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <?php
                    $imagemAtual = $dados['pastaImagem'];
                    ?>
                    <button type="submit" class="btn btn-sm btn-info">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>