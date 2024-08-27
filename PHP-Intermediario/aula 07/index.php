<?php 
    $titulo = "Aula 07";
    include ("header.php");
?>

<p>
    
    <?php 
    
/*
        -> Usado para acomplar um ou mais arrays
        
        $arr = ["aluno1" => "Kauan", "aluno2" => "Jonas"];
        $arr1 = ["aluno3" => "Gabriel", "aluno2" => "Fernanda", "aluno4" => "Jonas"];
        $resultado = array_merge($arr, $arr1);
        print_r ($resultado);

        -> Usado para puxar o valor antigo de uma key modificada ("aluno2" neste caso)

        $arr = ["aluno1" => "Kauan", "aluno2" => "Jonas"];
        $arr1 = ["aluno3" => "Gabriel", "aluno2" => "Fernanda", "aluno4" => "Jonas"];
        $resultado = array_merge($arr, $arr1);
        print_r($resultado);
        echo "<hr>";
        $result = array_intersect_key($arr, $arr1);
        print_r ($result);
*/

        //array_map pode aplicar uma função a um array, como o strip_tags que só é aplicavel a strings

        $arr = ["<p>Kauan</p>", "<h1>joão</h1>", "Gabriel"];
        print_r($arr);
        echo "<hr>";
        print_r(array_map("strip_tags", $arr));
        
    ?>

</p>

<?php 
    include("footer.php");
?>