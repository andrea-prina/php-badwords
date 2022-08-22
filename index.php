<!--
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>

    <?php

        $textParagraph = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ullam ea sit illo molestias id itaque dicta accusantium voluptatem fugit quo sapiente cumque voluptatum, obcaecati eligendi non magnam inventore odio. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ullam ea sit illo molestias id itaque dicta accusantium voluptatem fugit quo sapiente cumque voluptatum, obcaecati eligendi non magnam inventore odio.";

    ?>

    <h1>UNCENSORED PARAGRAPH</h1>
    <h2><?php echo $textParagraph; ?></h2>
    <h3>Length: <?php echo strlen($textParagraph); ?></h3>

    <h1>CENSORE PARAGRAPH</h1>
    <h2><?php echo str_replace($_GET['censor'], "***", $textParagraph); ?></h2>

    
</body>
</html>