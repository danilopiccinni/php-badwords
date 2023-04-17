<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
</head>
<body>
    <?php 

    $paragrafo = $_GET['paragrafo'];
    $parola = $_GET['parola'];

    ?>

    <p><?php echo $paragrafo ?></p>
    <span>composto da: <?php echo strlen($paragrafo)?> caratteri</span>
    <br>
    <span>composto da: <?php echo str_word_count($paragrafo) ?></span>

    <hr>

    <?php 
    
    $paragrafoCensurato = str_replace($parola , "***" , $paragrafo)
    
    ?>

    <p><?php echo $paragrafoCensurato ?></p>
    <span>composto da: <?php echo strlen($paragrafoCensurato)?> caratteri</span>
    <br>
    <span>composto da: <?php echo str_word_count($paragrafoCensurato) ?></span>
</body>
</html>