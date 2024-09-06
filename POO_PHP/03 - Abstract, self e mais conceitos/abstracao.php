<?php 

    //Declaração de uma classe abstrata: Receberá funções abstratas dentro de si.
    abstract class filha{

        abstract function mostrarOla();     //Funções abstratar quando declaradas, não possuem nenhum escopo, somente a instânciação

    }
    
    //Para se usar uma função abstrata, precisa herdar as informações da classe abstrata e depois inserir as informações da função abstrata.
    class pai extends filha{

        function mostrarOla(){
            echo "Olá mundo! <br>";
        }

    }

    //Declarando a mesma função usada na classe pai, mas com outro conteúdo em seu escopo.
    class avo extends filha{

        function mostrarOla(){
            echo "Hello World! <br>";
        }
        
    }

?>