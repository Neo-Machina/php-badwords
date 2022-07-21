<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
</head>
<body>

    <!-- Creazione variabili: stringa paragrafo e lunghezza-->
    <?php 
        $paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium nobis accusamus excepturi repellendus, perspiciatis quae dolorum dicta numquam ad quos totam repellat, repudiandae veniam. Veniam praesentium laudantium nesciunt provident amet?';
        $paragraphLength = strlen($paragraph);
    ?>
    
    <!-- Stampo paragrafo e la sua lnghezza nel DOM -->
    <p>TESTO ORIGINALE: <?php echo $paragraph ?> </p>

    <div>LUNGHEZZA PARAGRAFO: <?php echo  $paragraphLength ?> </div>

    <!-- Creazione variabili: parola passata dall'utente tramite parametro GET, stringa con parola censurata e lunghezza -->
    <?php 
        $word = $_GET['word'];

        $replacedString = str_replace($word, '***', $paragraph);

        $replacedStringLength = strlen($replacedString);
    ?>

    <!-- Stampo paragrafo e la sua lunghezza con parola censurate -->
    <div>PAROLA DA CENSURARE: <?php echo $word ?></div>

    <p>TESTO MODIFICATO: <?php echo $replacedString ?> </p>

    <div>LUNGHEZZA PARAGRAFO MODIFICATO: <?php echo $replacedStringLength ?> </div>

</body>
</html>

