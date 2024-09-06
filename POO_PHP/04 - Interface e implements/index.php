<?php 
    
    include("app.php");

    class teste implements inter{

        public function imprimirNaTela($var){       //Argumento recebido e imprimido com valor dado a ele
            echo $var;
        }

    }

    $teste = new Teste;
    $teste->imprimirNaTela("Olá mundão!");  //o $var receberá a mensagem entre parenteses

?>