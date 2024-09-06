<?php 

    namespace Sessao1;
    use Sessao2\Teste2;

    class Teste{

        public function __construct() {
            echo "Testando o construtor";
            new Teste2();       //Instânciação da classe do arquivo 'class2.php' dentro do construtor de outra classe, em outro arquivo.
        }

    }


?>