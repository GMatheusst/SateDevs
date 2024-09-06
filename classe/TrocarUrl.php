<?php
    class TrocarUrl{
        public function trocarUrl($url){
            if(empty($url)){
                $url = "../controleEstoque/sessao/home.php";
            }else{
                $url = "../controleEstoque/sessao/$url.php";
            }
            include_once($url);
        }
    }
?>