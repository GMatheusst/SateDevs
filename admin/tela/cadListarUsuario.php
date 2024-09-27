<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-3">Usuárioas Cadastrados</div>
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
                            <th width="30"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include_once("../classe/MostrarUsuario.php");
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