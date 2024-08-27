<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01</title>
</head>
<body>

    <h1>Aula 01 - Arrays Multidimensionais</h1>
    <hr>

    <?php 

//      Array Single.

        $arr = ["Kauan", "guizão"];
        $arr = array("Guilherme", "Gabriel", "Bento");
        $arr[0] = "Jonas";
        $arr[] = "Kauan";

//      Arrays Multidimensionais.

/*
        $arr2[0] = ["Chave1"=>"Guilherme];
        $arr2[0]["Chave1"] = "Guilherme";
*/
        $arr2 =  [["Kauan", "João"], [20, 35]]; 

        $total = count($arr2);

        for ($i = 0; $i < $total; $i++){
            
            for ($j = 0; $j < $total; $j++){
                echo $arr2[$i][$j] . "<hr>";
            }

        }

    ?>
    
</body>
</html>