<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo?></title>
</head>
<body>

    <h1>Aula 08 - Formulários, GET e POST</h1><hr>

    <form method="post">
    
        <input type="checkbox" name="valor[]" value="10">10 <br>
        <input type="checkbox" name="valor[]" value="20">20 <br>
        <input type="checkbox" name="valor[]" value="30">30 <br>
        <input type="checkbox" name="valor[]" value="40">40 <br>
        <input type="submit" name="acao" value="Enviar" />
    
    </form>
    