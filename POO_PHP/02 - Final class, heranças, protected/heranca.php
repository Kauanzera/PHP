<?php 

    /*final*/ class Filha{      #Classes finais não podem ser herdadas para outras classes

        public function mostrarOla(){
            echo "Olá Mundo!<br>";
        }

    }

    class pai extends filha{        #extends passa todas as funções e métodos de outra classe para dentro da classe que esta recebendo herança
                                    #Curiosidade minha: Para encapsular os métodos e funções, precisa usar o extends
        public function mostrarTchau(){         
            echo "Tchau Mundo!";
        }
    
    }

?>
