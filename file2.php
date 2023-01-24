<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>
        <?php
        echo $_GET['paragrafo'];
        ?>
    </h2>

    <h3>
        <?php
        echo $_GET['parola'];
        ?>
    </h3>

    <h2>
        <?php
        echo str_replace($_GET['parola'], '***', $_GET['paragrafo']) . strlen($_GET['paragrafo']);
        ?>
    </h2>

    <h3>
        <?php
        echo $_GET['parola'];
        ?>
    </h3>
</body>

</html>