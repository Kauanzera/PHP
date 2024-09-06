<?php 

    class teste{

        static function outroMetodoEstatico(){
            echo "Meu outro método <br>";
        }

    }

    class principal extends teste{
        
        static function metodoEstatico(){
            echo "meu método estatico! <br>";
        }

        function funcao(){
            principal::metodoEstatico();
            //ou usando o self(a propria classe)
            self::metodoEstatico();
            teste::outroMetodoEstatico();
        }

    }

?>