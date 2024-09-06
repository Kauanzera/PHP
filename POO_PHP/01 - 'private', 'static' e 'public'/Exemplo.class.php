<?php 

    class Exemplo{

        public $var1;
        private $var2;

/*
        public static $var3 = "Estatico<hr>";

        //Sintaxe de Criação de métodos public e privados
        
        public function metodo(){
        }
        private function metodo2(){
        }

        public static function metodo3(){
            echo "Método Estático!";
        }
*/

    public function setName($var2){
        $this->var2 = $var2;
    }

    public function getName(){
        return $this->var2;
    }

        


    }

?>