<?php 
    $titulo = "Aula 08";
    include("header.php");
?>

<?php 

/*
    (Gambiarra) @ antes do método GET retorna um valor nulo até o retorno de alguma informação
    $nome = @$_GET["nome"];
    $email = @$_GET["email"];
    echo "$nome <hr> $email";

    Método de verificação - Verifica se o botão "Enviar" foi pressionado e se os dados foram inseridos no tal
    if (isset($_GET["acao"])){
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        echo "$nome <hr> $email";
    }
    
    POST - Envia as requisições e não aparece na aba de pesquisa (Necessário mudança no "method" do "form", na marcação feita no html)
    if (isset($_POST["acao"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        echo "$nome <hr> $email";
    }
*/

    //Tratamento de array para impressão com POST usando foreach
    if (isset($_POST["acao"])){
        foreach($_POST['valor'] as $key => $value){
            echo "<hr>$key => $value";
        }
    }

?>

<?php 
    include("footer.php");
?>