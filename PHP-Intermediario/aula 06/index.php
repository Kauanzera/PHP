<?php 
    $titulo = "Aula 06";
    include("header.php");
?>

<p>

    <?php 

/*
        $nome = "Kauan";

        switch($nome){
            case "Kauan":
                echo "Olá KAUAN!!";
                break;
            case "João":
                echo "Olá JOÃO!!";
                break;
        }
          
        for ($i = 0; $i < 10; $i++){
            if ($i == 5){
                break;
            }          
            //continue faz pular a execução da condição digitada
            if ($i == 5 || $i == 7){
                continue;
            }
            
            echo "$i <hr>";
        }
*/          

        $arr = ["Kauan", "Sergio", "Gi", "Fernando", "Yama", "João"];
        $cont = count($arr);
        for ($i = 0; $i < $cont; $i++){
            if ($arr[$i] == "Yama"){
                break;
            }
            if ($arr[$i] == "Gi"){
                continue;
            }
            echo "$arr[$i] <hr>";
        }

        $num = 0;

        for ($i = 0; $i < 10; $i++){
            $num++;

            //Impressão de ímpares, pulando os pares
            if($num % 2 == 0){
                continue;
            }
            echo "$num";

            if ($num == 9){
                break;
            }
            echo " - ";
        }

    ?>

</p>

<?php 
    include("footer.php");
?>