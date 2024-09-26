<?php
 include_once("../classe/TotalItens.php");?>
<section class="mt-2">
    <div class="container-profile">
        <div class="row">
            <div class="col">
                <h3 class="mb-3 font-monospace">Relatório do Sistema</h3>
            </div>
        </div>
        <div class="row gap-2 gap-2">
            <div class="col p-0">
                <div class="card">
                    <div class="card-card-title">
                        <h5 class="fs-4 text-center">Total de Produtos</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-2 text-success fw-bold fs-2 text-center">
                            <?php
                             
                            $totalItens = new TotalItens();
                            $totalItens->TotalItens("tbproduto");
                            echo $totalItens->getTotalItens();
                            ?>
                        </h6>
                    </div>
                    <div class="card-card-footer">
                        <p class="text-center">Itens cadastrados</p>
                    </div>
                </div>
            </div>
            <div class="col p-0">
                <div class="card">
                    <div class="card-card-title">
                        <h5 class="fs-4 text-center">Total de Eventos</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-2 text-success fw-bold fs-2 text-center">
                            <?php
                             
                            $totalItens = new TotalItens();
                            $totalItens->TotalItens("tbevento");
                            echo $totalItens->getTotalItens();
                            ?>
                        </h6>
                    </div>
                    <div class="card-card-footer">
                        <p class="text-center">Itens cadastrados</p>
                    </div>
                </div>
            </div>
            <div class="col p-0">
                <div class="card">
                    <div class="card-card-title">
                        <h5 class="fs-4 text-center">Total de Categorias</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-2 text-success fw-bold fs-2 text-center">
                            <?php
                             $totalItens = new TotalItens();
                            $totalItens->TotalItens("tbcategoria");
                            echo $totalItens->getTotalItens();
                            ?>
                        </h6>
                    </div>
                    <div class="card-card-footer">
                        <p class="text-center">Itens cadastrados</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gap-2 gap-2 mt-2">
            <div class="col p-0">
                <div class="card">
                    <div class="card-card-title">
                        <h5 class="fs-4 text-center">Total de Sub Categorias</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-2 text-success fw-bold fs-2 text-center">
                            <?php
                             $totalItens = new TotalItens();
                            $totalItens->TotalItens("tbsubcategoria");
                            echo $totalItens->getTotalItens();
                            ?>
                        </h6>
                    </div>
                    <div class="card-card-footer">
                        <p class="text-center">Itens cadastrados</p>
                    </div>
                </div>
            </div>
            <div class="col p-0">
                <div class="card">
                    <div class="card-card-title">
                        <h5 class="fs-4 text-center">Total de Fotos</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-2 text-success fw-bold fs-2 text-center">
                            <?php
                             $totalItens = new TotalItens();
                            $totalItens->TotalItens("tbimagem");
                            echo $totalItens->getTotalItens();
                            ?>
                        </h6>
                    </div>
                    <div class="card-card-footer">
                        <p class="text-center">Itens cadastrados</p>
                    </div>
                </div>
            </div>
            <div class="col p-0">
                <div class="card">
                    <div class="card-card-title">
                        <h5 class="fs-4 text-center">Total de E-mail</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-2 text-success fw-bold fs-2 text-center">
                            <?php
                             $totalItens = new TotalItens();
                            $totalItens->TotalItens("tbnewsletter");
                            echo $totalItens->getTotalItens();
                            ?>
                        </h6>
                    </div>
                    <div class="card-card-footer">
                        <p class="text-center">Itens cadastrados</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gap-2 gap-2 mt-2">
            <div class="col p-0">
                <div class="card">
                    <div class="card-card-title">
                        <h5 class="fs-4 text-center">Total de Contatos</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-2 text-success fw-bold fs-2 text-center">
                            <?php
                             $totalItens = new TotalItens();
                            $totalItens->TotalItens("tbontato");
                            echo $totalItens->getTotalItens();
                            ?>
                        </h6>
                    </div>
                    <div class="card-card-footer">
                        <p class="text-center">Itens cadastrados</p>
                    </div>
                </div>
            </div>
            <div class="col p-0">
                <div class="card">
                    <div class="card-card-title">
                        <h5 class="fs-4 text-center">Total de Usuários</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-2 text-success fw-bold fs-2 text-center">
                            <?php
                             $totalItens = new TotalItens();
                            $totalItens->TotalItens("tbusuario");
                            echo $totalItens->getTotalItens();
                            ?>
                        </h6>
                    </div>
                    <div class="card-card-footer">
                        <p class="text-center">Itens cadastrados</p>
                    </div>
                </div>
            </div>
            <div class="col p-0">
                <div class="card">
                    <div class="card-card-title">
                        <h5 class="fs-4 text-center">Total de Notificações</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-2 text-success fw-bold fs-2 text-center">
                            <?php
                             $totalItens = new TotalItens();
                            $totalItens->TotalItens("tbnotificacao");
                            echo $totalItens->getTotalItens();
                            ?>
                        </h6>
                    </div>
                    <div class="card-card-footer">
                        <p class="text-center">Itens cadastrados</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>