<?php

    include("Exemplo.class.php");
  
    $exemplo = new Exemplo();
//  $exemplo->var1 = "Kauan";
    $exemplo->setName('Kauan');
    echo $exemplo->getName();

/*
    $exemplo2 = new Exemplo;
    $exemplo2->var1 = "João";
    //echo $exemplo->var1 . "<hr>" . $exemplo2->var1;

    //Forma de declaração de valores para métodos estáticos
    $exemplo::$var3 = "Jorge<hr>";
    echo $exemplo::$var3;
    
    $exemplo::metodo3();  
*/



?>