<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1>Censuriamo un testo</h1>

    <form action="censura.php" method="GET">
        <textarea name="paragrafo" id="" cols="30" rows="10" placeholder="inserisci il testo"></textarea>
        <input type="text" placeholder="parola da censurare" name="parola">
        <button type="submit">Censura</button>
    </form>

</body>
</html>

<style>

    form {
        display: flex;
        align-items : center;
        gap: 50px;
    }

</style>

