<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
</head>
<body>
    <h1>Risultato</h1>

    <h2>Testo originale</h2>
    <?php 

    $paragrafo = $_GET['paragrafo'];
    $parola = $_GET['parola'];

    ?>

    <p><?php echo $paragrafo ?></p>
    <span>Composto da: <?php echo strlen($paragrafo)?> caratteri.</span>
    <br>
    <span>Composto da: <?php echo str_word_count($paragrafo) ?> parole.</span>

    <hr>

    <?php 
    
    $paragrafoCensurato = str_replace($parola , "***" , $paragrafo)
    
    ?>

    <h2>Testo censurato</h2>

    <p><?php echo $paragrafoCensurato ?></p>
    <span>Composto da: <?php echo strlen($paragrafoCensurato)?> caratteri.</span>
    <br>
    <span>Composto da: <?php echo str_word_count($paragrafoCensurato) ?> parole.</span>
</body>
</html>