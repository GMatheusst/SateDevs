<!-- News Letter -->
<div class="card mt-2">
    <div class="card-body">
        <h5 class="card-title text-center text-success">News Letter</h5>
        <p class="card-text text-center small text-muted">Cadastre-se para receber nossas ofertas!
        </p>
        <form action="" method="post">
            <input type="email" class="form-control mb-2" placeholder="email@example.com"  name="email" required>
            <button type="submit" class="btn btn-custom btn-success w-100">Enviar</button>
        </form>
    </div>

    <?php 
    $email = @$_POST["email"];
    if (empty($email)) {
        echo "";
    } 
    elseif (isset($_POST["email"])) {
        $email = new EnviaNewsLetter();
        $email->enviaNewsLetter($_POST["email"]);
         }
    ?>
</div>
