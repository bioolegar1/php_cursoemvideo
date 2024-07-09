<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções com operações aritiméticas</title>
</head>
<body>
    <?php
    //Delcara o valor absoluto de cada numero ignorando o sinal.
        $numeroAbsoluto = abs(500);
        echo"O resultado é ". $numeroAbsoluto ." um numero absoluto!<br>";
        
    
    //converte entre Octal, hexadecimal, binário e decimal.
        $r = base_convert(1011, 2, 16);
        echo"A respota é ". $r ." Parabens <br>";
        

    //Funções de arrendondamento   ceil() > para cima | floor() > para baixo  |  round() > arrendondamento aritimetico.
    
    //hypot() > calcula a hipotenusa dados os valores dos catetos.
    
    //intdiv() executa a divisão inteira. 
    $div = 5/2;
    echo "O valor da divisão é ". $div ." Sendo o valor Real <br>";

    $divInteira = intdiv(5,2);
    echo "O resultad da divisão usando <strong> intdiv() </strong> é: ". $divInteira ."<br>";

    //min() e max(), Identificam o valor minimo e maximo de uma sequencia.
    $minimo = min(5,2);
    echo"O valor Minimo entre 5 e 2 é: ". $minimo ."<br>";

    $maximo = max(5,2);
    echo "O valor Maximo entre 5 e 2 é: ". $maximo ."<br>";

    //pi() - valor de pi
    $pi = pi();
    echo "O valor de π é: ". $pi ."<br>";

    //pi usando as constantes
    $constPi = M_PI;
    echo "O valor de π é: ". $constPi ."<br>";

    // antigamente usava-se pow() para potenciação

    //Funções trigonométricas para calcular sin(), cos() e tan()
    
    //sqrt() calcula a raiz quadrada de um numero
    $raizQuadrada = sqrt(81);
    echo "A raiz quadrada de 81 é: ". $raizQuadrada ." Usando a função sqrt() <br>";

    //tambem é possivel fazer a raiz usando essa função:
    $raizQuadrada2 = 81 **(1/2);
    echo "A raiz quadrada de 81 é: ". $raizQuadrada2 ."Usando o calculo direto (81 ** (1/2)) <br>";

    
    ?>
</body>
</html>