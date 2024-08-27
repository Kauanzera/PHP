<?php 
    $titulo = "Aula 09";
    include("header.php");
?>

<?php 

    session_start();        //Inicia a session na página php

/*
    $_SESSION["nome"] = "Kauan";        //Declara o nome e o valor da session
    $_SESSION["idade"] = 20;    
    echo $_SESSION["nome"] . " - " . $_SESSION["idade"];    //Imprime a session (fins de testes)
*/

    setcookie("nome", "Kauan Santos Oliveira", time() + (60*60*24), '/');

    echo $_COOKIE['nome'];

?>

<?php 
    include("footer.php");
?>