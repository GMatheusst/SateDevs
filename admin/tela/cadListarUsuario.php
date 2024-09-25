<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-3">Produtos Cadastrados</div>
            </div>
            <div class="col-3 text-end">
              
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
                            <th class="">Nome</th>      
                            <th>Profissão</th>
                            <th>Email</th>
                            <th>Foto</th>
                            <th width="30"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../classe/MostrarUsuario.php");
                        $usuario = new MostrarUsuario();
                        $usuario->setNumPagina(@$_GET["pg"]);
                        $usuario->setUrl("?tela=cadListarUsuario");
                        $usuario->setSessao("");
                        $usuario->mostrarProdutos();
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
                <ul class="pagination">
                   <?php 
                   $usuario->geraNumeros();
                   ?>
                </ul>
            </div>
        </div>
    </div>
</div>
