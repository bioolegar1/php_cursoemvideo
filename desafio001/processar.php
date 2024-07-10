<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Os numeros antecessores e sucessores são: </h1>
   
    <?php 

        $numero = $_POST ['numero'];

        $antecessor = $numero - 1;
        $sucessor = $numero + 1;

        echo "Número digitado: $numero";
        echo "<br>Antecessor: $antecessor";
        echo "<br>Sucessor: $sucessor"; 
    
    ?>
    
</body>
</html>