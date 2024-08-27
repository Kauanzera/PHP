<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03</title>
</head>
<body>

    <h1>Aula 03 - Entendendo Funções Nativas e Criando Funções.</h1><hr>

    <?php 

    $nome = "Kauan";

//  Se a função puxar o valor da var usada nela de fora, a função precisa declarar a var na hora que for chamada também.
    function mostrarNome($nome){
        echo "Nome: $nome <hr>";
    }

//  Caso contrário, só chamar a função sem declarar nada dentro.
    function mostrarIdade($idade = 20) {
        echo "Idade: $idade <hr>";
    }

    function somar($v1 = 10, $v2 = 15){
        echo $v1 + $v2 . "<hr>";
    }

//  Return.
    function nome(){
        return "Higor";
    }

    function verdade(){
        return true;
    }

//  Exemplos de função com retorno de valor.
    function getNome(){
        return "Kauan";
    }

//  Chamando as funções.
    mostrarNome($nome);
    mostrarIdade();
    somar();

//  Funções que RETORNAM valor, não imprimem nada na tela, só retornam um valor para aquela função específica.
    echo nome() . "<hr>";
    echo verdade() . "<hr>";

//  Exemplos de função com retorno de valor.
    if (getNome() == "Kauan" || getNome() == "kauan"){
        echo "Belo nome viu " . getNome() . "!! <hr>";
    } else{
        echo "Puta nome feio o seu hein " . getNome() . "!! <hr>";
    }

    ?>

</body>
</html>