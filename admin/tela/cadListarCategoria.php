<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-4">Categorias Cadastradas</div>
            </div>
            <div class="col-3 text-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdropAdC">
                    Adicionar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdropAdC" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar novo
                                    item</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="#" method="post">
                                <div class="modal-body">
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="nome" class="lead fs-6">Nome do produto</label>
                                        <input type="text" name="produto" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="foto" class="lead fs-6">Foto do Produto</label>
                                        <input type="file" name="imagem" id=""
                                            class="form-control border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="desc" class="lead fs-6">Descrição do produto</label>
                                        <input type="text" name="desc" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="quantidade" class="lead fs-6">Quantidade</label>
                                        <input type="text" name="quantidade" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="valor" class="lead fs-6">Valor Unitário</label>
                                        <input type="text" name="valor" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="input text-start border px-1 py-1 mb-1">
                                        <label for="situacao" class="lead fs-6">Situação</label>
                                        <select class="form-select" aria-label="Default select example" name="situcao">
                                            <option selected>Ativo</option>
                                            <option value="nao">Não</option>
                                            <option value="sim">Sim</option>
                                        </select>
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="situacao" class="lead fs-6">Categoria</label>
                                        <select class="form-select" aria-label="Default select example" name="situcao">
                                            <option selected>Categoria</option>
                                            <option value="Alimento">Alimento</option>
                                            <option value="Bebidas">Bebidas</option>
                                            <option value="Limpeza e Higiene">Limpeza e Higiene</option>
                                            <option value="Outros">Outros</option>
                                        </select>
                                    </div>
                                    <div class="text-start border px-1 py-1 mb-1">
                                        <label for="situacao" class="lead fs-6">Sub-Categoria</label>
                                        <select class="form-select" aria-label="Default select example" name="destaque">
                                            <option selected>Sub-Categoria</option>
                                            <option value="nao">Não</option>
                                            <option value="sim">Sim</option>
                                        </select>
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
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-light table-hover">
                        <thead>
                            <tr class="text-center table-dark">
                                <th>Id</th>
                                <th>Produto</th>
                                <th class="">Descrição</th>
                                <th class="">Quantidade</th>
                                <th>Preço</th>
                                <th width="30"></th>
                                <th width="30"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-lighter">001</td>
                                <td class="fw-lighter">Processador Core I7</td>
                                <td class="fw-lighter">O Processador Intel Core i7-12700 da 12ª Geração
                                    feito com a arquitetura híbrida onde combina núcleos de desempenho e
                                    eficiência.</td>
                                <td class="fw-lighter">23</td>
                                <td class="fw-lighter">R$ 768,98</td>
                                <!-- Button update -->
                                <td class="align-content-around">
                                    <?php include_once("../tela/formAtualizarCategoria.php"); ?>
                                </td>
                                <td class="align-content-around">
                                    <?php include_once("../tela/formApagarCategoria.php"); ?>
                                </td>
                            </tr>
                           
                        </tbody>
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
                <ul class="nav nav1 d-flex">
                    <li class="px-1"><a href="" class="link-underline link-underline-opacity-0">Anterior</a></li>
                    <li class="px-1"><a href="" class="link-underline link-underline-opacity-0">1</a>
                    </li>
                    <li class="px-1"><a href="" class="link-underline link-underline-opacity-0">2</a>
                    </li>
                    <li class="px-1"><a href="" class="link-underline link-underline-opacity-0">3</a>
                    </li>
                    <li class="px-1"><a href="" class="link-underline link-underline-opacity-0">4</a>
                    </li>
                    <li class="px-1"><a href="" class="link-underline link-underline-opacity-0">Próximo</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>