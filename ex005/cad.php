<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de formularios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET  ["nome"] ?? "Sem nome" ; 
            $sobrenome = $_GET ["sobrenome"] ?? "desconhecido"; 
            echo "<p> É um prazer te conhecer, <strong>$nome $snome </strong>! Este é o meu site."    
        ?>
       
        <p><a href="javascript:history.go(0-1)"><button class="">Voltar para a pagina anterior</button></a></p>
       

    </main>
    
</body>
</html>