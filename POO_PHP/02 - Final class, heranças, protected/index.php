<?php 

    include("heranca.php");
    include("privado.php");

    //Instânciação da classe.
    $x = new pai();
    $x->mostrarOla();
    $x->mostrarTchau();

    $p = new priv();
    #$p -> testando();      Função protegida!
    $p->getTeste();
    

?>