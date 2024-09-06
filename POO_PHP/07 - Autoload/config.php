<?php 

    //Forma dinâmica de instânciação de classes: Uma forma de incluir outros arquivos no arquivo principal sem ficar usando o include varias vezes, para incluir outros arquivos 

    function myAutoLoad($class){

        if(file_exists('classes/'.$class.'.php')){
            include('classes/'.$class.'.php');
        }

    }

    spl_autoload_register('myAutoLoad');

?>