<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-3">Usuárioas Cadastrados</div>
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
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar novo
                                    item</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="#" method="post">
                                <div class="modal-body">
                                    <div class="text-start">
                                        <label for="nome" class="lead fs-6">Nome</label>
                                        <input type="text" name="produto" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start">
                                        <label for="nome" class="lead fs-6">Descrição</label>
                                        <input type="text" name="produto" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start">
                                        <label for="nome" class="lead fs-6">Quantidade</label>
                                        <input type="text" name="produto" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start">
                                        <label for="nome" class="lead fs-6">Valor Unitário</label>
                                        <input type="text" name="produto" id="" class="input border-0 border-bottom">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-info">Adicionar</button>
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
                            <td class="align-content-around"><a href="" class="link-info"><i
                                        class="bi bi-pencil"></i></a></td>
                            <td class="align-content-around"><a href="" class="link-danger"><i
                                        class="bi bi-file-earmark-x"></i></a></td>
                        </tr>
                        <tr>
                            <td class="fw-lighter">001</td>
                            <td class="fw-lighter">Processador Core I7</td>
                            <td class="fw-lighter">O Processador Intel Core i7-12700 da 12ª Geração
                                feito com a arquitetura híbrida onde combina núcleos de desempenho e
                                eficiência.</td>
                            <td class="fw-lighter">23</td>
                            <td class="fw-lighter">R$ 768,98</td>
                            <!-- Button update -->
                            <td class="align-content-around"><a href="" class="link-info"><i
                                        class="bi bi-pencil"></i></a></td>
                            <td class="align-content-around"><a href="" class="link-danger"><i
                                        class="bi bi-file-earmark-x"></i></a></td>
                        </tr>
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