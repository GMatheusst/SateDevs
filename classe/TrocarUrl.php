<?php
    class TrocarUrl{
        public function trocarUrl($url){
            if(empty($url)){
                $url = "../SateDevs/sessao/home.php";
            }else{
                $url = "../SateDevs/sessao/$url.php";
            }
            include_once($url);
        }
    }
?>