<?php

    $tituloSite = "Manipulando com include";
    include("header.php");

?>

<p>
    <?php 
    
        //      Traz a data e hora padrão do local declarado.
        date_default_timezone_set("America/Sao_Paulo");
        
        //      Atribuição de data e hora para as variáveis e impressão 
        $data = date("d/m/Y T");
        $hora = date("H:i:s");
        $hora_2 = date("H:i:s", time() + (60*10));  //   time() + (60*10) aumenta 10 min
        
        
        echo $data . "<hr>";
        echo $hora . " - Horário Normal <hr>";    
        echo $hora_2 . " + 10 Min";

    ?>
<p>

<?php 

    include('footer.php');

?>