<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-info mt-2 ms-2" data-bs-toggle="modal" data-bs-target="#staticBackdropAtC">
    Cadastrar
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdropAtC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastrar Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../funcao/Inserir.php" method="post">
                <input type="hidden" value="adEvento" name="idForm">
                <div class="modal-body">
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="nome" class="lead fs-6">Usuário</label>
                        <input type="text" name="nome" id="" class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="foto" class="lead fs-6">senha</label>
                        <input type="file" name="senha" id="" class="form-control border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="desc" class="lead fs-6">E-mail</label>
                        <input type="text" name="email" id="" class="input border-0 border-bottom">
                    </div>
                    <div class="input text-start border px-1 py-1 mb-1">
                        <label for="situacao" class="lead fs-6">Situação Usuário</label>
                        <select class="form-select" aria-label="Default select example" name="situcao">
                            <option selected>Ativo</option>
                            <option value="nao">Não</option>
                            <option value="sim">Sim</option>
                        </select>
                    </div>
                    <div class="row my-1 justify-content-center">
                                            <div class="col">
                                                <input type="file" name="img" class="form-control border-0 border-bottom" placeholder="Selecione a imagem">
                                            </div>
                                        </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="submit" class="btn btn-sm btn-info" value="enviar" name="enviar">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>