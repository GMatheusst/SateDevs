<?php
class UploadImagem{
    protected $novoDiretorio;
    public function getNovoDiretorio(){
        return $this->novoDiretorio;
    }
    public function upload($imagem,$local){
// Verifica se o botão de envio do formulário foi clicado. Se o botão foi clicado, o código dentro deste if será executado.
        try {
            if(isset($_POST['enviar'])){ 
                // Obtém o nome, nome_temp e nome_final do arquivo
                $nomeImagem = $imagem['name'];
                $nomeImagemTmp = $imagem["tmp_name"];
                $nomeImagemFinal = $_FILES['imagem']['name'];
// Separa o nome do arquivo da imagem em um array, usando o ponto (.) como delimitador. Isso é feito para obter a extensão do arquivo (por exemplo, "jpg", "png").
                $imagemNova = explode('.',$nomeImagem); 
                //Verifica se a última parte do array $imagemNova (que contém a extensão) é diferente de "jpg". Se for diferente, significa que o formato do arquivo não é JPEG
                if($imagemNova[sizeof($imagemNova) - 1] != 'jpg'){ 
                    die ("Formato do arquivo não permitido");
                }else{
                    // obtém o diretório atual
                    $diretorioAtual = "./../img/".$local."/".$nomeImagem."";
// Se o formato do arquivo for JPEG, essa linha move o arquivo temporário da imagem (localizado em $imagem["tmp_name"]) para o diretório de destino especificado.
                    move_uploaded_file($nomeImagemTmp,$diretorioAtual);
                    $this->novoDiretorio = "/senactec/admin/img/".$local."/".$nomeImagemFinal."";
                    echo "Imagem enviada\n";
                }
            }
        } catch (Exception $e) {
            echo "Erro ao enviar imagem: ".$e->getMessage();
        }
    }
}
?>