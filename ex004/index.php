<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
</head>
<body>
    <h1>Manipulação de strings</h1>
    <?php 
        // $nome = "Bio";
        // $sobrenome = "Olegari";
        // // echo "$nome $sobrenome \u{1F596}"; // "" INTERPRETA O CONTEUDO.
        // echo '$nome $sobrenome \u{1F596}'; // '' NAO INTERPRETA O CONTEUDO APENAS MOSTRA EXATAMENTE COMO ESTA ESCRITO.

        // $nome = 'Bio'   ;
        // $sobrenome = 'Olegari \u{1F596}';
        // // echo "$nome $sobrenome \u{1F596}"; // "" INTERPRETA O CONTEUDO.
        // echo "$nome $sobrenome "; // '' NAO INTERPRETA O CONTEUDO APENAS MOSTRA EXATAMENTE COMO ESTA ESCRITO.
    
        // const ESTADO ="RJ";
        // echo "Moro no ESTADO <br>";   // Quebra de linha para o console ou arquivo de texto    
        // echo "Moro no ".ESTADO;

        // const CANAL = "Curso em Video \u{1F499}";
        // echo "Eu adoro o " .CANAL; // metodo correto de concatenar uma constante.

        // echo "Estamos no ano de " .date ('Y'); //Operador de concatenação sempre use.

        // $nom = "Rodrigo";
        // $snom = "Nogueira"; // Apelido Minotauro
        // // echo "$nom "Minotauro" $snom"; //nao funciona
        // // echo '$nom "Minotauro "$snom'; // nao interpreta 
        // echo "$nom\"Minotauro\" $snom"; //Correto par inserir as aspas (contrabarra = squencia de escape.)

        //Equencias de escape:
//Escape Sequences:

        // $nome = "Bio";
        // $sobrenome = "Olegari";
        // $apelido = "OBiozeera";
        // echo "$nome \"$apelido\" $sobrenome";

        // // Sintaxe Heredoc
        // $curso = "PHP";
        // $ano = date ('Y');
        // echo <<< TESTE
        //     Estou estudando
        //             $curso em $ano
        // TESTE;

//Sintaxe nowdoc

    //  $curso = "PHP";
    //     $ano = date ('Y');
    //     echo <<< 'TESTE'
    //         Estou estudando
    //                 $curso em $ano
    //     TESTE;

    ?>
    
</body>
</html>