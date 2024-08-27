<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 00 - ForEach</title>
</head>
<body>

    <h1>Aula 00 - For Each e For para arrays.</h1>
    <hr>

    <?php 
//         Chave Personalizada!
        $arr = [/*"Chave 1"=>*/"Kauan", "João", "Gabriel", "Matheus"];
/*        
        foreach ($arr as $key => $value){
            echo "$key => $value <hr>";
        }
*/

        $total = count($arr);

        for($i = 0; $i < $total; $i++){
            print "$arr[$i] <hr>";
        }

    ?>

</body>
</html>