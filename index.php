<!-- Descrizione:
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 
    $paragraph = 'lorem ajnfsjnfiuew uindfjisdn ovsndoisn ofnsn fosndfosn oinf';
    $censure_word = isset($_GET['word']) ? ($_GET['word']) : '';
    $text_censured = str_replace($censure_word, '****', $paragraph)
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BadWords</title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <label for="censure-word">parola da censurare</label>
            <input name="word" id="censure-word" type="text" placeholder="inserisci parola">
            <button type="submit">invia</button>
        </form>
        <h2>lunghezza: <?php echo strlen($paragraph); ?></h2>
        <p><?php echo $paragraph; ?></p>
        <hr>
        <h2> lunghezza: <?php echo strlen($text_censured); ?></h2>
        <p><?php echo $text_censured; ?></p>

    </body>
</html>