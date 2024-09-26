<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
    data-bs-target="#staticBackdropAtU<?php echo $i;?>">
    <i class="bi bi-pencil"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdropAtU<?php echo $i;?>" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Atualizar Usuário Selecionado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../funcao/AtualizarPasso2.php" method="post">
                <input type="hidden" name="idForm" value="atualizarUsuario">
                <input type="hidden" name="id" value="<?php echo $dados["idUsuario"];?>">
                <div class="modal-body">
                    <div class="text-start border px-1 py-1 mb-1">
                        <img src="<?php echo $dados["urlImagem"];?>" width="100px">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="nome" class="lead fs-6">Identificador da Imagem</label>
                        <input type="text" value="<?php echo $dados["idImagem"];?>" name="idImg"
                            class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="nome" class="lead fs-6">Nome</label>
                        <input type="text" name="nome" value="<?php echo $dados["nomeUsuario"];?>"
                            class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="senha" class="lead fs-6">Senha</label>
                        <input type="password" name="senha" value="<?php echo $dados["senhaUsuario"];?>"
                            class="input border-0 border-bottom">
                    </div>
                    <div class="text-start border px-1 py-1 mb-1">
                        <label for="email" class="lead fs-6">E-mail</label>
                        <input type="email" name="email" value="<?php echo $dados["emailUsuario"];?>"
                            class="input border-0 border-bottom">
                    </div>
                    <div class="input text-start border px-1 py-1 mb-1">
                        <label for="situacao" class="lead fs-6">Situação</label>
                        <select class="form-select" aria-label="Default select example" name="situacao">
                            <option selected><?php echo $dados["situacaoUsuario"];?></option>
                            <option value="INATIVO">NAO</option>
                            <option value="ATIVO">SIM</option>
                        </select>
                    </div>
                    <!-- select da tabela imagem -->
                    <div class="input text-start border px-1 py-1 mb-1">
                        <label for="imagem" class="lead fs-6">Imagem</label>
                        <select class="form-select" aria-label="Default select example" name="idImagem">
                            <option selected>Selecionar</option>
                            <?php include("../funcao/ListarImagens.php");?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-info" name="enviar" value="enviar">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>