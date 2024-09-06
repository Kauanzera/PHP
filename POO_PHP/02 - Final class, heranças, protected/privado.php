<?php 
    
    class priv{
        
        #'Protected' se é usado quando não se é desejado que o arquivo index(principal) consiga ver sua função, mas o arquivo no qual ela foi declarado consiga ver.
        
        protected function testando(){
            echo "<br> Executando o teste";
        }

        public function getTeste(){
            $this->testando();
        }
    }


?>