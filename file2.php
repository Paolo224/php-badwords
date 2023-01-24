<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP intro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>
        Paragrafo scritto:
    </h1>
    <h2>
        <?php
        echo $_GET['paragrafo'];
        ?>
    </h2>
    <h1>
        Parola da censurare:
    </h1>
    <h2>
        <?php
        echo $_GET['parola'];
        ?>
    </h2>
    <hr>
    <h1>
        Risultato:
    </h1>
    <h2>
        <?php
        echo str_replace($_GET['parola'], '***', $_GET['paragrafo']);
        ?>
    </h2>
    <h1>
        Lunghezza del paragrafo:
    </h1>
    <h2>
        <?php
        echo strlen($_GET['paragrafo']);
        ?>
    </h2>
</body>

</html>