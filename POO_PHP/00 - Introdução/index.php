<?php 

    class pessoa{
        //Objeto pessoa.

        private $nome = "Kauan";
        private $idade = 20;
        private $altura = 1.82;

        public function crescendo(){
            echo "Estou crescendo...";
            $this->cresceu();
        }

        private function cresceu(){
            echo "<br> Cresci!!!";
        }    
        
    }

    //Instanciar

    $pessoa = new pessoa;
    $pessoa2 = new pessoa;

    $pessoa->crescendo();
    
?>