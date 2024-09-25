<!-- Cadastro de dados -->
<div class="section mt-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="col align-content-around">
                <div class="lead fs-3">NewsLetters Cadastrados</div>
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
                            <th>Email</th>
                            <th class="">Situação</th>
                            
                    <th class="px-3 py-2" style="width: 30px;">
                    <i class="bi bi-trash text-danger" title="Excluir"></i>
                    </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            include_once("../classe/MostrarNewsLetters.php");
                            $newsletters = new MostrarNewsLetters();
                            $newsletters->setNumPagina(@$_GET["pg"]); //resgata o número da página atual
                            $newsletters->setUrl("?tela=relatorioNewsLetter"); //indicar o caminho/diretório
                            $newsletters->setSessao(""); //deve ficar vazia
                            $newsletters->mostrarNewsLetters();
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center">
                <ul class="pagination">
                   <?php 
                   $newsletters->geraNumeros();
                   ?>
                </ul>
            </div>
        </div>
    </div>
</div>
