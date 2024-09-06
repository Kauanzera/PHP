<?php 
    
    include("app.php");

    $teste = new class1("Kauan", 20, "Masculino");

    echo $teste->getName() . "<br>";
    echo $teste->getIdade() . "<br>";
    echo $teste->getSexo() . "<br>";

?>