<?php 
    session_start();    //Necessário para criação da session
    echo $_SESSION["nome"] . " - " . $_SESSION['idade'];
    session_destroy(); //Destroi absolutamente tudo de dentro da session

?>