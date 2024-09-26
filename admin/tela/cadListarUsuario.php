<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-3">Usuárioas Cadastrados</div>
            </div>
            <div class="col-3 text-end">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdropAdU">
                    Adicionar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdropAdU" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar novo usuário</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="../funcao/Inserir.php" method="post">
                                <input type="hiddem" value="adUsuario" name="idForm">
                                <div class="modal-body">
                                    <div class="text-start">
                                        <label for="nome" class="lead fs-6">Usuario</label>
                                        <input type="text" name="nome" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start">
                                        <label for="nome" class="lead fs-6">senha</label>
                                        <input type="text" name="senha" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="text-start">
                                        <label for="nome" class="lead fs-6">email</label>
                                        <input type="text" name="email" id="" class="input border-0 border-bottom">
                                    </div>
                                    <div class="row my-1 justify-content-center">
                                            <div class="col">
                                                <input type="file" name="img" class="form-control border-0 border-bottom" placeholder="Selecione a imagem">
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info" value="enviar" name="enviar">Adicionar</button>
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
                            <th class="">Senha</th>
                            <th class="">E-mail</th>
                            <th>Foto</th>
                            <th>Situação</th>
                            <th width="30"></th>
                            <th width="30"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $mostrar = new MostrarUsuario();
                        $mostrar->setNumPagina(@$_GET["pg"]);
                        $mostrar->setUrl("?tela=cadListarUsuario");
                        $mostrar->setSessao("");
                        $mostrar->mostrarUsuario();
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
                <ul class="nav nav1 d-flex">
                    <li class="px-1"><a href=""
                            class="link-underline link-underline-opacity-0"><?php $mostrar->geraNumeros();?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>