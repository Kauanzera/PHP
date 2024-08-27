<?php 
    $titulo = "Aula 05";
    include("header.php");
?>

<p>

    <?php 

        /*    
        $lorem = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae aspernatur fugit itaque soluta? Temporibus cum enim, laborum minima consequatur iure dignissimos. Maxime aut eveniet autem ipsa dicta saepe dolores distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit aliquam similique debitis quas assumenda corporis eius, aliquid expedita nulla autem doloribus cumque maiores commodi perferendis nemo culpa quos ut veniam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur corrupti sint earum amet provident. Perspiciatis tempore quia, commodi totam voluptate facilis animi deserunt sapiente quas minima porro veniam soluta minus?";
        
        echo "$lorem <hr>";

        //Para recortar uma string
        echo substr($lorem, 0, 20);
        echo "<hr>" . substr($lorem, 20, 40);
        */

        //Para criar um array com os valores dentro da variavel sendo um valor a cada espaço em branco -> " "
        $nome = "Kauan Santos Oliveira";
        echo $nome;
        $lorena = explode(" ", $nome);
        for($i = 0; $i < 3; $i++){
            echo "<hr> $lorena[$i]";
        }

        echo "<hr>$lorena[1]<hr>";

        //Para criar uma variavel comum com os valores da array declarada
        $larina = implode(" ", $lorena);
        echo "$larina<hr>";



        //Impressão de comandos em html
        echo "<div></div>";
        echo htmlentities("<div></div>");

        /*
        #TESTES

        //Criado array com 5 valores e impressa no site
        $arr = ["Kauan", "Santos", "Oliveira", "Nascimento", "Correia"];
        print_r ($arr);
        //Para imprimir o array, se usa print_r

        //Array implodida em uma variável
        $arr1 = implode(" ", $arr);
        echo "<hr>";
        $cont = count($arr);
        
        //Estrutura para imprimir os valores da array
        for ($i = 0; $i < $cont; $i++){
            echo $i+1 . " - $arr[$i] <hr>";
        }

        //Impressão da array implodida, virando uma variável
        echo "Array com implode - $arr1";
        */

    ?>

</p>

<?php 
    include("footer.php");
?>