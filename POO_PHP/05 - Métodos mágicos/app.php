<?php 

    //Método Construtor

    class class1{

        private $nome, $idade, $sexo;
    
        //Construtor.
        public function __construct($nome, $idade, $sexo) {
            
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;

        }

        //Getters e Setters.
        public function getName(){
            return $this->nome;
        }

        public function setName($nome){
            $this->nome= $nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getSexo(){
            return $this->sexo;
        }
        
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Construtores</title>
</head>
<body>
    
</body>
</html>