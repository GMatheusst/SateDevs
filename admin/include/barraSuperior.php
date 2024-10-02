             <div class="bg-danger pe-3">
                 <div class="col-12 bg-danger text-white d-flex py-sm-0 py-md-2">
                     <div class="col-2 align-content-around ps-2">
                     </div>
                     <?php
                     include_once("../classe/MostrarNotificacao.php");
                        $mostrar = new MostrarNotificacao();
                        $mostrar->mostrarNotificacaoUsuario();
                        include_once("../classe/VerificarLogin.php");
                        $usuario = new VerificarLogin;
                        $usuario->getUser();
                         ?>
                 </div>
             </div>