
<!-- Formulário para contato -->
<section class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <form action="" method="post" class="shadow p-4 rounded bg-white">
                    <input type="hidden" name="idForm" value="adContato">

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" placeholder="Digite seu nome" class="form-control" id="nome"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" placeholder="Digite seu e-mail" class="form-control" id="email"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" name="cidade" placeholder="Digite sua cidade" class="form-control"
                            id="cidade" required>
                    </div>

                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" name="estado" placeholder="Digite seu estado (SIGLA)" class="form-control"
                            id="estado" required>
                    </div>

                    <div class="mb-3">
                        <label for="assunto" class="form-label">Assunto</label>
                        <input type="text" name="assunto" placeholder="Assunto do contato" class="form-control"
                            id="assunto" required>
                    </div>

                    <div class="mb-4">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <textarea name="mensagem" placeholder="Digite sua mensagem aqui" class="form-control"
                            id="mensagem" rows="4" required></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="enviar" class="btn btn-success btn-lg">Enviar</button>
                    </div>
                </form>
                <?php 
                include_once("classe/EnviaContato.php");
                $nome = @$_POST["nome"];
                $email = @$_POST["email"];
                $cidade = @$_POST["cidade"];
                $estado = @$_POST["estado"];
                $assunto = @$_POST["assunto"];
                $mensagem = @$_POST["mensagem"];

                    if (empty($nome)) {
                        echo "";
                    } 
                    elseif (isset($nome)) {
                    $email = new EnviaContato();
                    $email->EnviaContato( $nome,@$_POST["email"], $cidade, $estado, $assunto, $mensagem);  
                         }
                    ?>
            </div>
        </div>
    </div>
</section>
