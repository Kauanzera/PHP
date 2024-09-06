<?php 

    include("abstracao.php");
    include("self_static.php");
    
    //Abstração
    //Com classes e funções abstratas, é possível chamar a mesma função em classes divergentes, com comandos divergentes.
    $x = new pai();
    $x->mostrarOla();

    $a = new avo();
    $a->mostrarOla();

    echo "<hr>";

    //Self - static

    $s = new principal();
    $s->funcao();

?>