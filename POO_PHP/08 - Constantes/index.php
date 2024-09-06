<?php 

    class minhaClasse{

        const VALOR = 300;
        public function __construct(){

            echo minhaClasse::VALOR;
            //minhaClasse::VALOR = 900;     Não é possível mudar o valor de uma constante.
            
        }

    }

    //new minhaClasse;
    echo minhaClasse::VALOR;

?>